<meta http-equiv="Cache-Control" content="no-cache" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<h2 class="details" style="color: red"></h2>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<h1 id="displaysignal"></h1>
  <script> 
       ram();
//   (function () {
//     currdate = new Date();
//     if (currdate.getHours() > 4 && currdate.getHours() < 6 && currdate.getMinutes() > 0 && currdate.getMinutes() < 30 ) {
// //       ram("CALL",0);
//       ram();
//       $(".details").prepend(
//         "<br>Triggered :" +
//           new Date().toLocaleString(undefined, { timeZone: "Asia/Kolkata" })
//       );
//     }
//     console.log(currdate.getHours());

//     setTimeout(arguments.callee, 1000 *60 * 30);
//   })();


      
    function  ram(){
      hoje = new Date();

      dia = hoje.getDate() + 1;

      dias = hoje.getDay() + 1;

      mes = hoje.getMonth() + 1;

      ano = hoje.getYear();

      var listBestPairTimes = [];
       
      

      var todayOwn = new Date();
      if(todayOwn.getDay() == 6 || todayOwn.getDay() == 0) {
        /* OTC */
        return false;
        var listPairs = ["EUR_USD", "EUR_GBP","GBP_USD"];
        var headtingOwn="-OTC";
        // console.log(listPairs+"  "+headtingOwn);
      }else{
        /* normal market */
        var listPairs = ["EUR_USD", "EUR_GBP","GBP_USD"];

        // var listPairs = ["EUR_USD"];
        var headtingOwn="";

        // console.log(listPairs+"  "+headtingOwn);
      }
      const days = ["Sun","Mon","Tues","Wed","Thur","Fri","Sat"];

      let day = days[todayOwn.getDay()];
      var percentageMin = 100;
      var percentageMax = 100;
      var candleTime = "M5";
      var daysAnalyse = 14;
      var volumeSignal=550;
      var martingales = 0;
      var orderType = "CALL";
      var timeInit = 9;
      var timeEnd = 17;
      var cbAtivo=0;

      

      var requestNumber = 0;
    
      getHistoric();
      //Primeira ação ao cliclar no botão PROCESSAR DADOS
      function getHistoric() {
        
        // $("body").css("cursor", "progress");
        listBestPairTimes = [];
        // getParameter();
        
        if (cbAtivo == 0) {
          requestNumber = listPairs.length;
        } else {
          listPairs = [cbAtivo];
          requestNumber = listPairs.length;
        }        
        var count = CalculateCountCandles();      
        
        
        
        if (count > 50000) {
          return;
        }

        for (var i = 0; i < listPairs.length; i++) {
          var currentPair = listPairs[i];
          callHistoricData(currentPair, count, cbAtivo);
        }
      }

      

      function CalculateCountCandles() {
        
        var minutes = 15; // DEFAULT FOR M15
        switch (candleTime) {
          case "M2":
            minutes = 2;
            break;
          case "M2":
            minutes = 2;
            break;
          case "M10":
            minutes = 10;
            break;
          case "M10":
            minutes = 10;
            break;
          case "M10":
            minutes = 10;
            break;
          case "M15":
            minutes = 15;
            break;
          case "M30":
            minutes = 30;
            break;
          case "H1":
            minutes = 60;
            break;
          case "H2":
            minutes = 120;
            break;
          case "H4":
            minutes = 240;
            break;
        }

        var count = 60 / minutes;
        count = 24 * count;
        count = count * daysAnalyse;
        return count;
      }

      function callHistoricData(pair, count, cbAtivo) {
        
        if (cbAtivo == 0) {
          var urlHist =
            "https://api-fxpractice.oanda.com/v3/instruments/" +
            pair +
            "/candles?granularity=" +
            candleTime +
            "&count=" +
            count;
          $.ajax({
            url: urlHist,
            /* headers: {
              Authorization:
                "Bearer eb2326208921b413a87728832f191f03-d9be68b74884f7d3107b9f05ca305319",
            }, */
            headers: {
              Authorization:
                "Bearer 9786b2c10d1d20bfb034e37b87dae62e-9a1ff57d6a09466907da1e65a6c7353d",
            },
            type: "GET",
            success: function (result) {     

              CalculateHistoric(result);
            },
            error: function (error) {
              ErrorHistoric(error);
            },
          });
        } 
      }
      function CalculateHistoric(result) {
        var candles = result.candles;
        var candlesResult = [];
        for (var i = 0; i < candles.length; i++) {
          var candle = candles[i];

          
          var item = new Object();
          item.resultValue = candle.mid.o - candle.mid.c;
          item.date = ConvertDate(candle.time);
          item.result = GetStringResult(item.resultValue);
          item.percentDif = (item.resultValue * 100) / candle.mid.o;
          item.volume=candle.volume;
          
          if (item.result === orderType ) {
            item.win = true;
          } else {
            item.win = false;
          }

          //if(CheckTime(item.date)){

          var arrayTime = item.date.time.split(":");

          if (
            parseInt(arrayTime[0]) < parseInt(timeInit) ||
            parseInt(arrayTime[0]) > parseInt(timeEnd)
          ) {
            continue;
          }
          candlesResult.push(item);
          
        }
        
        // console.log(candlesResult);
        var timeGroupedCandles = Array.from(
          new Set(candlesResult.map((s) => s.date.time))
          ).map((time) => {
            return {
              time: time,
              candles: candlesResult.filter((s) => s.date.time === time),
              pair: result.instrument,
              // volume: candlesResult.volume,
            };
          });

          
        for (var i = 0; i < timeGroupedCandles.length; i++) {
          var currentGroup = timeGroupedCandles[i];
          currentGroup.winrate = 0;          
          currentGroup.volume = 0;          
          currentGroup.averageTickDif = 0;
          for (var z = 0; z < currentGroup.candles.length; z++) {
            var candle = currentGroup.candles[z];
            if (candle.win == true) {
              currentGroup.volume+= candle.volume;
              currentGroup.winrate++;
              currentGroup.averageTickDif += item.percentDif;
            }
          }
          currentGroup.volume=currentGroup.volume/currentGroup.candles.length;

          currentGroup.averageTickDif =
            currentGroup.averageTickDif / currentGroup.winrate;            
          currentGroup.winrate =
            (currentGroup.winrate * 100) / currentGroup.candles.length;

          if (
            currentGroup.winrate >= percentageMin &&
            currentGroup.winrate <= percentageMax &&
            currentGroup.volume >= volumeSignal
          ) {
            if(currentGroup.pair != "GBP_USD"){
              listBestPairTimes.push(currentGroup);
              continue;
            }else{
              if(currentGroup.volume >= volumeSignal+300){
                listBestPairTimes.push(currentGroup);
                continue;
              }
              continue;
            }
          }
        }
        
        requestNumber--;        
        if (requestNumber == 0) {
         return DownloadTxt();
        }
      }

      function CheckTime(date) {
        var minDate = new Date();
        return true;
      }

  

      function DownloadTxt(title, message) {
        
        if (listBestPairTimes.length <= 0) {
        }
        
        listBestPairTimes.sort((a, b) => (a.time > b.time ? 1 : -1));       
        
//         if(flagval == 0){
//           listBestPairTimesbackup=listBestPairTimes;
//           ram("PUT",1);return false;
//         }else{
//           listBestPairTimesbackup =listBestPairTimesbackup.concat(listBestPairTimes);
//         }
//         listBestPairTimesbackup.sort((a, b) => (a.time > b.time ? 1 : -1));
//         listBestPairTimes=listBestPairTimesbackup;
        
        
        var listNumber = listBestPairTimes.length / 80;
        var i = 0;
        var stringList2 = " ";
//         stringList2 +=candleTime + "%0a" + day + headtingOwn + ":%0a%0a" + "PROFIT:%0a%0a";
        
        if (candleTime == "M2") {
          candleTime = "M1";
        }

        
        for (var x = 00; x < listNumber; x++) {
          var index = 1;
          var stringList = "HORA  MOEDAS DIREÇÃO \r\n Teste  " + candleTime;
          
          for (; i < listBestPairTimes.length; i++) {
            var candle = listBestPairTimes[i];
            var arrayTime = candle.time.split(":");

            for (var z = 0; z < arrayTime.length; z++) {
              if (arrayTime[z] === "00") {
                arrayTime[z] = "000";
              }
            }
            
            extrafiveMin=new Date(new Date(todayDate+' '+candle.time).getTime()-60000*5).toString().split(" ")[4].substring(0,5); //add extra 5min in currect candle time 
            if((candle.time <= "11:30:00" && candle.pair == "GBP_USD") ||(stringList2.includes(extrafiveMin)) || (stringList2.includes(candle.time.substring(0,5))) ){
              continue;
            }           
            
            // stringList2 += "%0a";
            stringList2 += "%0a";
            //EXPIRACAO
            stringList2 += candle.pair.replace("_", "") + headtingOwn + " ";
            
            // stringList2 += candleTime + ";";
            //HORARIO
            stringList2 += candle.time.substring(0,5) +" ";
            //ENTRADA
            //  stringList2 += candle.pair+",";listBestPairTimes[0].candles[0].result
            
            stringList2 += candle.candles[0].result+" ";
            stringList2 += parseInt(candle.volume);
            
            
            
            index++;

            if (i > 0 && (i + 1) % 80 == 0) {
              i++;
              break;
            }
          }

          
        }
        
        
        var todayDate = new Date().toISOString().slice(0, 10);
        $.ajax({
            url: 'insertdb.php',            
            type: "POST",
            data: {genraedSignals:stringList2,day:day,todayDate:todayDate},
            success: function (result) {     
              if(result == true){
                
                var xhttp = new XMLHttpRequest();                    
                  xhttp.open(
                    "GET",
                    "https://api.telegram.org/bot5455276964:AAFLB-A_Jc88A7ZlPQoN7CF6utmKu8QoO-E/sendMessage?chat_id=@purpleplusram&text=" +
                      stringList2,
                    true
                  );

                  xhttp.send();
                  localStorage.clear();
              }else{
                
                console.log('error::'+result);
              }
              
            },
            error: function (error) {
              ErrorHistoric(error);
            },
          });
               var obj = $("#displaysignal").text(stringList2);
        obj.html(obj.html().replace(/%0a/g,'<br/>'));
      }
      
        
      

      function GetStringResult(value) {
        if (value > 0) {
          return "PUT";
        } else if (value < 0) {
          return "CALL";
        } else {
          return "DRAW";
        }
      }

      function ErrorHistoric(error) {}

      function ConvertDate(time) {
      
        var dateObj = new Date(time);
        var temp = new Object();
        var hora = dateObj.getHours();
        var min = dateObj.getMinutes();
        var sinalmes = mes;

        if (hora < 10) {
          hora = "0" + hora;
        }
        if (min < 10) {
          min = "0" + min;
        }
        if (sinalmes < 10) {
          sinalmes = "0" + sinalmes;
        }

      
        temp.time = "" + hora + ":" + min + ":00";

        return temp;
      }

    }
      
    

   
    </script>
</html>
