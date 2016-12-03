<?php
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");
  
  require 'db_account.php';
  
  $result = $conn->query("SELECT DISTINCT `account` FROM `journal-entries`");

  $outp = "";
  while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
      if ($outp != "") {$outp .= ",";}
      $outp .= '"' . $rs["account"] . '"';
  }
  $outp ='{"records":['.$outp.']}';
  $conn->close();

  echo($outp);
?>
