<!-- <div id="genratedsignals"></div> -->
<meta http-equiv="Cache-Control" content="no-cache" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<h2 class="details" style="color: red"></h2>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  (function () {
    currdate = new Date();
    if (currdate.getHours() > 0 && currdate.getHours() < 2) {
      ram("PUT", 0);
      $(".details").prepend(
        "<br>Triggered :" +
          new Date().toLocaleString(undefined, { timeZone: "Asia/Kolkata" })
      );
    }
    console.log(currdate.getHours());

    setTimeout(arguments.callee, 1000 * 30);
  })();
  let genputsignal = "";
  var listBestPairTimesbackup = [];

  function ram(flagVar, flagval) {
    todayOwn = new Date();

    dia = todayOwn.getDate() + 1;

    dias = todayOwn.getDay() + 1;

    mes = todayOwn.getMonth() + 1;

    ano = todayOwn.getYear();

    var listBestPairTimes = [];

    if (todayOwn.getDay() == 6 || todayOwn.getDay() == 0) {
      /* OTC */
      return false;
      // var listPairs = ["EUR_USD"];
      // var headtingOwn = "-OTC";
      // console.log(listPairs+"  "+headtingOwn);
    } else {
      /* normal market */
      // var listPairs = ["EUR_USD", "EUR_GBP", "GBP_USD"];
      var listPairs = ["EUR_USD"];
      var headtingOwn = "";

      // console.log(listPairs+"  "+headtingOwn);
    }
    const days = ["Sun", "Mon", "Tues", "Wed", "Thur", "Fri", "Sat"];

    let day = days[todayOwn.getDay()];
    var percentageMin = 100;
    var percentageMax = 100;
    var candleTime = "M1";
    var daysAnalyse = 45;
    var martingales = 0;
    // var orderType = "PUT";flagVal
    var orderType = flagVar;

    var timeInit = 6;
    var timeEnd = 8;

    var cbAtivo = 0;

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
      var count = Math.round(CalculateCountCandles());

      if (count > 50000) {
        return;
      }

      for (var i = 0; i < listPairs.length; i++) {
        var currentPair = listPairs[i];
        callHistoricData(currentPair, count, cbAtivo);
      }
    }

    function getParameter() {
      percentageMin = $("#selPercentageMin").val();
      percentageMax = $("#selPercentageMax").val();
      candleTime = $("#selCandleTime").val();
      daysAnalyse = $("#selDays").val();
      martingales = $("#selMartingales").val();
      orderType = $("#selOrderType").val();
      timeInit = $("#selTimeInit").val();
      timeEnd = $("#selTimeEnd").val();
      cbAtivo = $("#cbAtivo").val();
    }

    function CalculateCountCandles() {
      var minutes = 13; // DEFAULT FOR M15
      switch (candleTime) {
        case "M1":
          minutes = 10;
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
      var count_i = 0;
      if (cbAtivo == 0) {
        //var urlHist = "https://api-fxtrade.oanda.com/v1/candles?instrument="+pair+"&start=1565395200&end=1569283200&granularity=M1";
        //var urlHist = "https://api-fxtrade.oanda.com/v1/candles?instrument="+pair+"&start="+startDate+"&end="+endDate+"&granularity="+candleTime+"&candleFormat=midpoint";
        //var urlHist = "https://api-fxpractice.oanda.com/v3/instruments/"+pair+"/candles?from="+startDate+"&to="+endDate+"&granularity="+candleTime+"";
        var urlHist =
          "https://api-fxpractice.oanda.com/v3/instruments/" +
          pair +
          "/candles?granularity=" +
          candleTime +
          "&count=" +
          5000;
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

        if (item.result === orderType) {
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

      var martinGaleResult = candlesResult;
      if (martingales > 0) {
        martinGaleResult = [];
        for (var i = 0; i < candlesResult.length; i++) {
          var candle = candlesResult[i];
          candle.nextCandles = GetNextMartingales(candlesResult, i);
          candle.win =
            candle.win === false ? GetMartingaleResult(candle) : true;
          martinGaleResult.push(candle);
        }
      }

      var timeGroupedCandles = Array.from(
        new Set(martinGaleResult.map((s) => s.date.time))
      ).map((time) => {
        return {
          time: time,
          candles: martinGaleResult.filter((s) => s.date.time === time),
          pair: result.instrument,
        };
      });

      for (var i = 0; i < timeGroupedCandles.length; i++) {
        var currentGroup = timeGroupedCandles[i];

        currentGroup.winrate = 0;
        currentGroup.averageTickDif = 0;
        for (var z = 0; z < currentGroup.candles.length; z++) {
          var candle = currentGroup.candles[z];

          if (candle.win == true) {
            currentGroup.winrate++;
            currentGroup.averageTickDif += item.percentDif;
          }
        }
        currentGroup.averageTickDif =
          currentGroup.averageTickDif / currentGroup.winrate;

        currentGroup.winrate =
          (currentGroup.winrate * 100) / currentGroup.candles.length;

        if (
          currentGroup.winrate >= percentageMin &&
          currentGroup.winrate <= percentageMax
        ) {
          listBestPairTimes.push(currentGroup);
          continue;
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

    function GetMartingaleResult(candle) {
      var anyWin = candle.nextCandles.find((s) => s.win === true);

      return anyWin != undefined && anyWin != null > 0 ? true : false;
    }

    function GetNextMartingales(listCandles, index) {
      var nextCandles = [];
      var candle = listCandles[index];
      if (
        martingales > 0 &&
        parseInt(index) + parseInt(martingales) < listCandles.length
      ) {
        for (var i = 1; i <= martingales; i++) {
          var nextCandle = listCandles[index + i];
          nextCandles.push(nextCandle);
        }
        return nextCandles;
      } else {
        return nextCandles;
      }
    }

    function DownloadTxt(title, message) {
      if (listBestPairTimes.length <= 0) {
      }

      listBestPairTimes.sort((a, b) => (a.time > b.time ? 1 : -1));

      if (flagval == 0) {
        listBestPairTimesbackup = listBestPairTimes;

        ram("CALL", 1);
        return false;
      } else {
        listBestPairTimesbackup =
          listBestPairTimesbackup.concat(listBestPairTimes);
      }
      listBestPairTimesbackup.sort((a, b) => (a.time > b.time ? 1 : -1));

      listBestPairTimes = listBestPairTimesbackup;
      // console.log(listBestPairTimes);

      var listNumber = listBestPairTimes.length / 80;
      var i = 0;

      var stringList2 = " ";
      stringList2 += candleTime + "%0a" + day + headtingOwn + "%0a%0a";
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

          stringList2 += "%0a";
          //EXPIRACAO
          stringList2 += candle.pair.replace("_", "") + headtingOwn + " ";

          // stringList2 += candleTime + ";";
          //HORARIO
          stringList2 += candle.time.substring(0, 5) + " ";
          //ENTRADA
          //  stringList2 += candle.pair+",";listBestPairTimes[0].candles[0].result

          stringList2 += candle.candles[0].result;

          index++;

          if (i > 0 && (i + 1) % 80 == 0) {
            i++;
            break;
          }
        }

        stringList +=
          "\r\ns_title_settings====== TRADING SETTINGS ============";
        stringList += "\r\nMartingaleType=0";
        stringList += "\r\nMartingaleSteps=" + martingales;
        stringList += "\r\nMartingaleCoef=2.2";
      }

      var xhttp = new XMLHttpRequest();

      xhttp.open(
        "GET",
        "https://api.telegram.org/bot5455276964:AAFLB-A_Jc88A7ZlPQoN7CF6utmKu8QoO-E/sendMessage?chat_id=@purpleplusram&text=" +
          stringList2,
        true
      );

      xhttp.send();
      localStorage.clear();

      // download(candleTime + " - " + orderType + ".txt", stringList2);
    }

    function download(filename, text) {
      $("body").css("cursor", "default");
      var element = document.createElement("a");
      element.setAttribute(
        "href",
        "data:text/plain;charset=utf-8," + encodeURIComponent(text)
      );
      element.setAttribute("download", filename);
      element.style.display = "none";
      document.body.appendChild(element);
      element.click();
      document.body.removeChild(element);
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
