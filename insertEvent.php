<?php
  require 'db_account.php';
  
  $data = json_decode(file_get_contents("php://input"));
  $date = mysql_real_escape_string($data->jdate);
  $name = mysql_real_escape_string($data->jname);
  $id = mysql_real_escape_string($data->jid);
  
  $sql = "INSERT INTO `journal-transactions`(`id`, `date`, `name`) VALUES ('".$id."','".$date."','".$name."')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>