<?php
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");
  
  require 'db_account.php';
  $data = json_decode(file_get_contents("php://input"));
  $aToFind = mysql_real_escape_string($data->aToFind);
  $result = $conn->query("SELECT `amount` FROM `journal-entries` WHERE `account`='".$aToFind."' AND `type`='debit'");

  $outp = '"';
  while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
      $outp .= $rs["amount"] . '<br>';
  }
  $outp ='{"records":'.$outp.'"}';
  $conn->close();

  echo($outp);
?>
