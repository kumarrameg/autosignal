<?php 
        
    // $servername = "sql6.freesqldatabase.com";
    // $username = "sql6513929";
    // $password = "A9ACvaXjXS";
    // $dbname = "sql6513929";
    include('dbconnect.php');
    error_reporting(E_ERROR | E_PARSE);
        
        
        $conn =mysqli_connect($servername,$username,$password,$dbname);        
        
        
        
        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail"));
        $toalSignals=$values['total'];
        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' "));
        $winsignal=$values['total'];
         $winsignalpercentage=round($winsignal/$toalSignals *100);
        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' "));
        $losssignal=$values['total'];
          $losssignalpercentage=round( $losssignal/$toalSignals *100);
         
        $weekwin=$values['total'];
         
        $weekloss=$values['total'];
         
        $otcwin=$values['total'];
         
        $otcloss=$values['total'];


        // tabkee 1 conten
        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='EURUSD' "));
        $eurusdwin=$values['total'];
        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='EURUSD' "));
        $eurusdloss=$values['total'];

        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='GBPUSD' "));
        $gbpusdwin=$values['total'];
        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='GBPUSD' "));
        $gbpusdloss=$values['total'];
        
        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='USDJPY' "));
        $usdjpywin=$values['total'];
        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='USDJPY' "));
        $usdjpyloss=$values['total'];

        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='AUDUSD' "));
        $audusdwin=$values['total'];
        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='AUDUSD' "));
        $audusdloss=$values['total'];

        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='EURGBP' "));
        $eurgbpwin=$values['total'];
        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='EURGBP' "));
        $eurgbploss=$values['total'];


        // monday
        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='EURUSD' and currentday='Mon' "));
        $moneurusdwin=$values['total'];
        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='EURUSD' and currentday='Mon' "));
        $moneurusdloss=$values['total'];

        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='GBPUSD' and currentday='Mon' "));
        $mongbpusdwin=$values['total'];
        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='GBPUSD' and currentday='Mon' "));
        $mongbpusdloss=$values['total'];
        
        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='USDJPY' and currentday='Mon' "));
        $monusdjpywin=$values['total'];
        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='USDJPY' and currentday='Mon' "));
        $monusdjpyloss=$values['total'];

        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='AUDUSD' and currentday='Mon' "));
        $monaudusdwin=$values['total'];
        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='AUDUSD' and currentday='Mon' "));
        $monaudusdloss=$values['total'];

        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='EURGBP' and currentday='Mon' "));
        $moneurgbpwin=$values['total'];
        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='EURGBP' and currentday='Mon' "));
        $moneurgbploss=$values['total'];
        // monday end


            // Tue
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='EURUSD' and currentday='Tue' "));
            $tueeurusdwin=$values['total'];
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='EURUSD' and currentday='Tue' "));
            $tueeurusdloss=$values['total'];
    
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='GBPUSD' and currentday='Tue' "));
            $tuegbpusdwin=$values['total'];
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='GBPUSD' and currentday='Tue' "));
            $tuegbpusdloss=$values['total'];
            
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='USDJPY' and currentday='Tue' "));
            $tueusdjpywin=$values['total'];
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='USDJPY' and currentday='Tue' "));
            $tueusdjpyloss=$values['total'];
    
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='AUDUSD' and currentday='Tue' "));
            $tueaudusdwin=$values['total'];
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='AUDUSD' and currentday='Tue' "));
            $tueaudusdloss=$values['total'];
    
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='EURGBP' and currentday='Tue' "));
            $tueeurgbpwin=$values['total'];
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='EURGBP' and currentday='Tue' "));
            $tueeurgbploss=$values['total'];
            // Tue end

            // wed
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='EURUSD' and currentday='Wed' "));
            $wedeurusdwin=$values['total'];
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='EURUSD' and currentday='Wed' "));
            $wedeurusdloss=$values['total'];
    
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='GBPUSD' and currentday='Wed' "));
            $wedgbpusdwin=$values['total'];
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='GBPUSD' and currentday='Wed' "));
            $wedgbpusdloss=$values['total'];
            
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='USDJPY' and currentday='Wed' "));
            $wedusdjpywin=$values['total'];
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='USDJPY' and currentday='Wed' "));
            $wedusdjpyloss=$values['total'];
    
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='AUDUSD' and currentday='Wed' "));
            $wedaudusdwin=$values['total'];
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='AUDUSD' and currentday='Wed' "));
            $wedaudusdloss=$values['total'];
    
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='EURGBP' and currentday='Wed' "));
            $wedeurgbpwin=$values['total'];
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='EURGBP' and currentday='Wed' "));
            $wedeurgbploss=$values['total'];
            // wed end

            // thu
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='EURUSD' and currentday='Thu' "));
            $thueurusdwin=$values['total'];
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='EURUSD' and currentday='Thu' "));
            $thueurusdloss=$values['total'];
    
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='GBPUSD' and currentday='Thu' "));
            $thugbpusdwin=$values['total'];
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='GBPUSD' and currentday='Thu' "));
            $thugbpusdloss=$values['total'];
            
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='USDJPY' and currentday='Thu' "));
            $thuusdjpywin=$values['total'];
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='USDJPY' and currentday='Thu' "));
            $thuusdjpyloss=$values['total'];
    
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='AUDUSD' and currentday='Thu' "));
            $thuaudusdwin=$values['total'];
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='AUDUSD' and currentday='Thu' "));
            $thuaudusdloss=$values['total'];
    
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='EURGBP' and currentday='Thu' "));
            $thueurgbpwin=$values['total'];
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='EURGBP' and currentday='Thu' "));
            $thueurgbploss=$values['total'];
            // thu end

            // fri
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='EURUSD' and currentday='Fri' "));
            $frieurusdwin=$values['total'];
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='EURUSD' and currentday='Fri' "));
            $frieurusdloss=$values['total'];
    
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='GBPUSD' and currentday='Fri' "));
            $frigbpusdwin=$values['total'];
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='GBPUSD' and currentday='Fri' "));
            $frigbpusdloss=$values['total'];
            
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='USDJPY' and currentday='Fri' "));
            $friusdjpywin=$values['total'];
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='USDJPY' and currentday='Fri' "));
            $friusdjpyloss=$values['total'];
    
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='AUDUSD' and currentday='Fri' "));
            $friaudusdwin=$values['total'];
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='AUDUSD' and currentday='Fri' "));
            $friaudusdloss=$values['total'];
    
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='EURGBP' and currentday='Fri' "));
            $frieurgbpwin=$values['total'];
            $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='EURGBP' and currentday='Fri' "));
            $frieurgbploss=$values['total'];
            // fri end


        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='EURUSD-OTC' "));
        $eurusdotcwin=$values['total'];
        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='EURUSD-OTC' "));
        $eurusdotcloss=$values['total'];
        
        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='GBPUSD-OTC' "));
        $gbpusdotcwin=$values['total'];
        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='GBPUSD-OTC' "));
        $gbpusdotcloss=$values['total'];

        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='USDCHF-OTC' "));
        $usdchfotcwin=$values['total'];
        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='USDCHF-OTC' "));
        $usdchfotcloss=$values['total'];

        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='NZDUSD-OTC' "));
        $nzdusdotcwin=$values['total'];
        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='NZDUSD-OTC' "));
        $nzdusdotcloss=$values['total'];


        // sat
        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='EURUSD-OTC' and currentday='Sat'  "));
        $sateurusdotcwin=$values['total'];
        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='EURUSD-OTC' and currentday='Sat'  "));
        $sateurusdotcloss=$values['total'];
        
        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='GBPUSD-OTC' and currentday='Sat'  "));
        $satgbpusdotcwin=$values['total'];
        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='GBPUSD-OTC' and currentday='Sat'  "));
        $satgbpusdotcloss=$values['total'];

        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='USDCHF-OTC' and currentday='Sat'  "));
        $satusdchfotcwin=$values['total'];
        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='USDCHF-OTC' and currentday='Sat'  "));
        $satusdchfotcloss=$values['total'];

        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='win' and pair='NZDUSD-OTC' and currentday='Sat'  "));
        $satnzdusdotcwin=$values['total'];
        $values=mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total FROM parisdetail where result='loss' and pair='NZDUSD-OTC' and currentday='Sat'  "));
        $satnzdusdotcloss=$values['total'];
        // sat end


         
         
         
         
         
        
         
         
         
         

         
         
         
         

         
         
         
         
         
              
        
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      .table {
        color: white;
        background: linear-gradient(-68deg, #ac32e4, #4801ff);
      }

      .parent-font {
        font-size: 25px;
        font-weight: bold;
      }

      .child-font {
        font-size: 15px;
        font-weight: bold;
      }

      .percentageclass {
        font-size: 10px;
      }

      td:first-child {
        font-weight: bold;
      }
      .margin-right-class{
        margin-left: 25%;
      }
    </style>
  </head>
  <body>
    <br>
    <div class="container-fluid">
      <div class="row">
       
          <span class="child-font "> Total Signals:</span>
          <span class="parent-font"><?php echo $toalSignals; ?></span>
       
      </div>
      <div class="row">
       
          <span class="child-font "> Win:</span>
          <span class="parent-font"><?php echo $winsignal; ?> <span class="child-font ">/<?php echo $winsignalpercentage; ?>%</span> </span>
       
       
          <span class="child-font margin-right-class"> Loss:</span>
          <span class="parent-font"><?php echo $losssignal; ?><span class="child-font ">/<?php echo $losssignalpercentage; ?>%</span></span>
       
      </div>

      <div class="row">
       
          <span class="child-font ">week Win:</span>
          <span class="parent-font"><?php echo $weekwin; ?><?php echo '-'.round($weekwin/ ($weekwin+$weekloss)*100).'%';?></span>
       
       
          <span class="child-font margin-right-class">week Loss:</span>
          <span class="parent-font"><?php echo $weekloss; ?><?php echo '-'.round($weekloss/ ($weekwin+$weekloss)*100).'%';?></span>
       
      </div>
      <div class="row">
       
          <span class="child-font ">OTC Win:</span>
          <span class="parent-font"><?php echo $otcwin; ?><?php echo '-'.round($otcwin/ ($otcwin+$otcloss)*100).'%';?></span>
       
       
          <span class="child-font margin-right-class">OTC Loss:</span>
          <span class="parent-font"><?php echo $otcloss; ?><?php echo '-'.round($otcloss/ ($otcwin+$otcloss)*100).'%';?></span>
       
      </div>
    </div>




    <div class="container">
      <br>
      <br>
      <table class="table ">
        <thead>
          <tr>
            <th></th>
            <th>Total</th>
            <th>Mon</th>
            <th>Tues</th>
            <th>Wed</th>
            <th>Thur</th>
            <th>Fri</th>
             
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>EUR USD</td>
            <td>
              <span class='parent-font'><?php echo $eurusdwin .'-'.$eurusdloss; ?></span>
              <span class="child-font"> <?php echo round($eurusdwin/ ($eurusdwin+$eurusdloss)*100).'-'.round($eurusdloss/ ($eurusdwin+$eurusdloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            <td>
              <span class='parent-font'><?php echo $moneurusdwin .'-'.$moneurusdloss; ?></span>
              <span class="child-font"> <?php echo round($moneurusdwin/ ($moneurusdwin+$moneurusdloss)*100).'-'.round($moneurusdloss/ ($moneurusdwin+$moneurusdloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            <td>
              <span class='parent-font'><?php echo $tueeurusdwin .'-'.$tueeurusdloss; ?></span>
              <span class="child-font"> <?php echo round($tueeurusdwin/ ($tueeurusdwin+$tueeurusdloss)*100).'-'.round($tueeurusdloss/ ($tueeurusdwin+$tueeurusdloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            <td>
              <span class='parent-font'><?php echo $wedeurusdwin .'-'.$wedeurusdloss; ?></span>
              <span class="child-font"> <?php echo round($wedeurusdwin/ ($wedeurusdwin+$wedeurusdloss)*100).'-'.round($wedeurusdloss/ ($wedeurusdwin+$wedeurusdloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            
            <td>
              <span class='parent-font'><?php echo $thueurusdwin .'-'.$thueurusdloss; ?></span>
              <span class="child-font"> <?php echo round($thueurusdwin/ ($thueurusdwin+$thueurusdloss)*100).'-'.round($thueurusdloss/ ($thueurusdwin+$thueurusdloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            <td>
              <span class='parent-font'><?php echo $frieurusdwin .'-'.$frieurusdloss; ?></span>
              <span class="child-font"> <?php echo round($frieurusdwin/ ($frieurusdwin+$frieurusdloss)*100).'-'.round($frieurusdloss/ ($frieurusdwin+$frieurusdloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
          </tr>
          <tr>
            <td>GBP USD</td>
            <td>
              <span class='parent-font'><?php echo $gbpusdwin .'-'.$gbpusdloss; ?></span>
              <span class="child-font"> <?php echo round($gbpusdwin/ ($gbpusdwin+$gbpusdloss)*100).'-'.round($gbpusdloss/ ($gbpusdwin+$gbpusdloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            <td>
              <span class='parent-font'><?php echo $mongbpusdwin .'-'.$mongbpusdloss; ?></span>
              <span class="child-font"> <?php echo round($mongbpusdwin/ ($mongbpusdwin+$mongbpusdloss)*100).'-'.round($mongbpusdloss/ ($mongbpusdwin+$mongbpusdloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            <td>
              <span class='parent-font'><?php echo $tuegbpusdwin .'-'.$tuegbpusdloss; ?></span>
              <span class="child-font"> <?php echo round($tuegbpusdwin/ ($tuegbpusdwin+$tuegbpusdloss)*100).'-'.round($tuegbpusdloss/ ($tuegbpusdwin+$tuegbpusdloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            <td>
              <span class='parent-font'><?php echo $wedgbpusdwin .'-'.$wedgbpusdloss; ?></span>
              <span class="child-font"> <?php echo round($wedgbpusdwin/ ($wedgbpusdwin+$wedgbpusdloss)*100).'-'.round($wedgbpusdloss/ ($wedgbpusdwin+$wedgbpusdloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            
            <td>
              <span class='parent-font'><?php echo $thugbpusdwin .'-'.$thugbpusdloss; ?></span>
              <span class="child-font"> <?php echo round($thugbpusdwin/ ($thugbpusdwin+$thugbpusdloss)*100).'-'.round($thugbpusdloss/ ($thugbpusdwin+$thugbpusdloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            <td>
              <span class='parent-font'><?php echo $frigbpusdwin .'-'.$frigbpusdloss; ?></span>
              <span class="child-font"> <?php echo round($frigbpusdwin/ ($frigbpusdwin+$frigbpusdloss)*100).'-'.round($frigbpusdloss/ ($frigbpusdwin+$frigbpusdloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
          </tr>
          <tr>
            <td>USD JPY</td>
            <td>
              <span class='parent-font'><?php echo $usdjpywin .'-'.$usdjpyloss; ?></span>
              <span class="child-font"> <?php echo round($usdjpywin/ ($usdjpywin+$usdjpyloss)*100).'-'.round($usdjpyloss/ ($usdjpywin+$usdjpyloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            <td>
              <span class='parent-font'><?php echo $monusdjpywin .'-'.$monusdjpyloss; ?></span>
              <span class="child-font"> <?php echo round($monusdjpywin/ ($monusdjpywin+$monusdjpyloss)*100).'-'.round($monusdjpyloss/ ($monusdjpywin+$monusdjpyloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            <td>
              <span class='parent-font'><?php echo $tueusdjpywin .'-'.$tueusdjpyloss; ?></span>
              <span class="child-font"> <?php echo round($tueusdjpywin/ ($tueusdjpywin+$tueusdjpyloss)*100).'-'.round($tueusdjpyloss/ ($tueusdjpywin+$tueusdjpyloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            <td>
              <span class='parent-font'><?php echo $wedusdjpywin .'-'.$wedusdjpyloss; ?></span>
              <span class="child-font"> <?php echo round($wedusdjpywin/ ($wedusdjpywin+$wedusdjpyloss)*100).'-'.round($wedusdjpyloss/ ($wedusdjpywin+$wedusdjpyloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            
            <td>
              <span class='parent-font'><?php echo $thuusdjpywin .'-'.$thuusdjpyloss; ?></span>
              <span class="child-font"> <?php echo round($thuusdjpywin/ ($thuusdjpywin+$thuusdjpyloss)*100).'-'.round($thuusdjpyloss/ ($thuusdjpywin+$thuusdjpyloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            <td>
              <span class='parent-font'><?php echo $friusdjpywin .'-'.$friusdjpyloss; ?></span>
              <span class="child-font"> <?php echo round($friusdjpywin/ ($friusdjpywin+$friusdjpyloss)*100).'-'.round($friusdjpyloss/ ($friusdjpywin+$friusdjpyloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
          </tr>
          <tr>
            <td>AUD USD</td>
            <td>
              <span class='parent-font'><?php echo $audusdwin .'-'.$audusdloss; ?></span>
              <span class="child-font"> <?php echo round($audusdwin/ ($audusdwin+$audusdloss)*100).'-'.round($audusdloss/ ($audusdwin+$audusdloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            <td>
              <span class='parent-font'><?php echo $monaudusdwin .'-'.$monaudusdloss; ?></span>
              <span class="child-font"> <?php echo round($monaudusdwin/ ($monaudusdwin+$monaudusdloss)*100).'-'.round($monaudusdloss/ ($monaudusdwin+$monaudusdloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            <td>
              <span class='parent-font'><?php echo $tueaudusdwin .'-'.$tueaudusdloss; ?></span>
              <span class="child-font"> <?php echo round($tueaudusdwin/ ($tueaudusdwin+$tueaudusdloss)*100).'-'.round($tueaudusdloss/ ($tueaudusdwin+$tueaudusdloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            <td>
              <span class='parent-font'><?php echo $wedaudusdwin .'-'.$wedaudusdloss; ?></span>
              <span class="child-font"> <?php echo round($wedaudusdwin/ ($wedaudusdwin+$wedaudusdloss)*100).'-'.round($wedaudusdloss/ ($wedaudusdwin+$wedaudusdloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            
            <td>
              <span class='parent-font'><?php echo $thuaudusdwin .'-'.$thuaudusdloss; ?></span>
              <span class="child-font"> <?php echo round($thuaudusdwin/ ($thuaudusdwin+$thuaudusdloss)*100).'-'.round($thuaudusdloss/ ($thuaudusdwin+$thuaudusdloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            <td>
              <span class='parent-font'><?php echo $friaudusdwin .'-'.$friaudusdloss; ?></span>
              <span class="child-font"> <?php echo round($friaudusdwin/ ($friaudusdwin+$friaudusdloss)*100).'-'.round($friaudusdloss/ ($friaudusdwin+$friaudusdloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
          </tr>
          <tr>
            <td>EUR GBP</td>
            <td>
              <span class='parent-font'><?php echo $eurgbpwin .'-'.$eurgbploss; ?></span>
              <span class="child-font"> <?php echo round($eurgbpwin/ ($eurgbpwin+$eurgbploss)*100).'-'.round($eurgbploss/ ($eurgbpwin+$eurgbploss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            <td>
              <span class='parent-font'><?php echo $moneurgbpwin .'-'.$moneurgbploss; ?></span>
              <span class="child-font"> <?php echo round($moneurgbpwin/ ($moneurgbpwin+$moneurgbploss)*100).'-'.round($moneurgbploss/ ($moneurgbpwin+$moneurgbploss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            <td>
              <span class='parent-font'><?php echo $tueeurgbpwin .'-'.$tueeurgbploss; ?></span>
              <span class="child-font"> <?php echo round($tueeurgbpwin/ ($tueeurgbpwin+$tueeurgbploss)*100).'-'.round($tueeurgbploss/ ($tueeurgbpwin+$tueeurgbploss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            <td>
              <span class='parent-font'><?php echo $wedeurgbpwin .'-'.$wedeurgbploss; ?></span>
              <span class="child-font"> <?php echo round($wedeurgbpwin/ ($wedeurgbpwin+$wedeurgbploss)*100).'-'.round($wedeurgbploss/ ($wedeurgbpwin+$wedeurgbploss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            
            <td>
              <span class='parent-font'><?php echo $thueurgbpwin .'-'.$thueurgbploss; ?></span>
              <span class="child-font"> <?php echo round($thueurgbpwin/ ($thueurgbpwin+$thueurgbploss)*100).'-'.round($thueurgbploss/ ($thueurgbpwin+$thueurgbploss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            <td>
              <span class='parent-font'><?php echo $frieurgbpwin .'-'.$frieurgbploss; ?></span>
              <span class="child-font"> <?php echo round($frieurgbpwin/ ($frieurgbpwin+$frieurgbploss)*100).'-'.round($frieurgbploss/ ($frieurgbpwin+$frieurgbploss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="container">
      <br>
      <br>
      <table class="table ">
        <thead>
          <tr>
            <th></th>
            <th>Total</th>
            <th>Sat</th>
             
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>EUR USD-OTC</td>
            <td>
              <span class='parent-font'><?php echo $eurusdotcwin .'-'.$eurusdotcloss; ?></span>
              <span class="child-font"> <?php echo round($eurusdotcwin/ ($eurusdotcwin+$eurusdotcloss)*100).'-'.round($eurusdotcloss/ ($eurusdotcwin+$eurusdotcloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            <td>
              <span class='parent-font'><?php echo $sateurusdotcwin .'-'.$sateurusdotcloss; ?></span>
              <span class="child-font"> <?php echo round($sateurusdotcwin/ ($sateurusdotcwin+$sateurusdotcloss)*100).'-'.round($sateurusdotcloss/ ($sateurusdotcwin+$sateurusdotcloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            <td>
               
               
              <span class="percentageclass">%</span>
            </td>
          </tr>
          <tr>
            <td>GBP USD-OTC</td>
            <td>
              <span class='parent-font'><?php echo $gbpusdotcwin .'-'.$gbpusdotcloss; ?></span>
              <span class="child-font"> <?php echo round($gbpusdotcwin/ ($gbpusdotcwin+$gbpusdotcloss)*100).'-'.round($gbpusdotcloss/ ($gbpusdotcwin+$gbpusdotcloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            <td>
               <span class='parent-font'><?php echo $satgbpusdotcwin .'-'.$satgbpusdotcloss; ?></span>
               <span class="child-font"> <?php echo round($satgbpusdotcwin/ ($satgbpusdotcwin+$satgbpusdotcloss)*100).'-'.round($satgbpusdotcloss/ ($satgbpusdotcwin+$satgbpusdotcloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            <td>
                
                
              <span class="percentageclass">%</span>
            </td>
          </tr>
          <tr>
            <td>USD CHF-OTC</td>
            <td>
              <span class='parent-font'><?php echo $usdchfotcwin .'-'.$usdchfotcloss; ?></span>
              <span class="child-font"> <?php echo round($usdchfotcwin/ ($usdchfotcwin+$usdchfotcloss)*100).'-'.round($usdchfotcloss/ ($usdchfotcwin+$usdchfotcloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            <td>
              <span class='parent-font'><?php echo $satusdchfotcwin .'-'.$satusdchfotcloss; ?></span>
              <span class="child-font"> <?php echo round($satusdchfotcwin/ ($satusdchfotcwin+$satusdchfotcloss)*100).'-'.round($satusdchfotcloss/ ($satusdchfotcwin+$satusdchfotcloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            <td>
               
               
              <span class="percentageclass">%</span>
            </td>
          </tr>
          <tr>
            <td>NZD USD-OTC</td>
            <td>
              <span class='parent-font'><?php echo $nzdusdotcwin .'-'.$nzdusdotcloss; ?></span>
              <span class="child-font"> <?php echo round($nzdusdotcwin/ ($nzdusdotcwin+$nzdusdotcloss)*100).'-'.round($nzdusdotcloss/ ($nzdusdotcwin+$nzdusdotcloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            <td>
              <span class='parent-font'><?php echo $satnzdusdotcwin .'-'.$satnzdusdotcloss; ?></span>
              <span class="child-font"> <?php echo round($satnzdusdotcwin/ ($satnzdusdotcwin+$satnzdusdotcloss)*100).'-'.round($satnzdusdotcloss/ ($satnzdusdotcwin+$satnzdusdotcloss)*100); ?></span>
              <span class="percentageclass">%</span>
            </td>
            <td>
               
               
              <span class="percentageclass">%</span>
            </td>
          </tr>
        </tbody>
      </table>
      <br>
      <br>
      <a href="index.php" class="btn btn-danger" role="button">Details Results</a>
    </div>
  </body>
</html>
