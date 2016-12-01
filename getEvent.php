<?php
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");
  
  require 'db_account.php';
  
  $result = $conn->query("SELECT * FROM `journal-transactions`");

  $outp = "";
  while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
      if ($outp != "") {$outp .= ",";}
      $outp .= '{"id":"' . $rs["id"] . '",';
      $outp .= '"date":"' . $rs["date"] . '",';
      $outp .= '"name":"' . $rs["name"] . '"}';
  }
  $outp ='{"records":['.$outp.']}';
  $conn->close();

  echo($outp);
?>
