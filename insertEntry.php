<?php
  require 'db_account.php';
  
  $data = json_decode(file_get_contents("php://input"));
  $date = mysql_real_escape_string($data->edate);
  $account = mysql_real_escape_string($data->eaccount);
  $amount = mysql_real_escape_string($data->eamount);
  $type = mysql_real_escape_string($data->etype);
  
  $sql = "INSERT INTO `journal-entries`(`date`, `account`, `type`, `amount`) VALUES ('".$date."','".$account."','".$type."','".$amount."')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>