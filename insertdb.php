<?php
error_reporting(E_ERROR | E_PARSE);

if (isset($_POST["genraedSignals"])){
 
  $servername = "database-1.cbeiyy7nwxcu.us-west-2.rds.amazonaws.com";
  $username = "kumarrameg";
  $password = "39B!3vrKPzA$";
  $dbname = "parisdetail";

  $genratdsignal=$_POST["genraedSignals"];
  $currentDate=$_POST["todayDate"];
  $currentday=$_POST["day"];
  // $genratdsignal="%0aGBPUSD 12:10 CALL 960%0aEURUSD 12:30 CALL 1015%0aGBPUSD 12:30 CALL 1728%0aGBPUSD 12:35 CALL 1397%0aGBPUSD 12:40 CALL 1483%0aGBPUSD 12:45 CALL 1425%0aEURGBP 13:25 CALL 955%0aGBPUSD 14:05 CALL 992%0aGBPUSD 14:50 CALL 1088%0aGBPUSD 16:10 CALL 908%0aGBPUSD 16:15 CALL 1043%0aGBPUSD 16:30 CALL 994%0aGBPUSD 16:35 CALL 911%0aGBPUSD 16:45 CALL 973%0aGBPUSD 17:50 CALL 1024";
  $oneDArray = array_filter(explode('%0a',$genratdsignal));
  $twoDArray = [];

  foreach ($oneDArray as $singlePairResult)
  {
      array_push($twoDArray, array_filter(explode(' ', $singlePairResult)));
  }

  

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error)
  {
      die("Connection failed: " . $conn->connect_error);
  }
  
  
  $counter = 0;
  foreach ($twoDArray as $singleresult)
  {
    if ($counter++ == 0) continue;
    
    $sql = "SELECT * FROM `parisdetail` where `currentdate` ='$currentDate' and `pair`='$singleresult[0]' and `hour`='$singleresult[1]' and `direction`='$singleresult[2]'";        
    $result = mysqli_query($conn, $sql);
    
    if($result->num_rows != 1){
      $sql = "INSERT INTO parisdetail (currentdate,currentday,pair,hour,direction, result,volume)
        VALUES ('$currentDate','$currentday', '$singleresult[0]', '$singleresult[1]', '$singleresult[2]', 'Waiting','$singleresult[3]')";
      $conn->query($sql);
    }
  }

  $conn->close();
  
  echo true;
  die();
}
else{
  echo false;
}

