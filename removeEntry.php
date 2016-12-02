<?php
  require 'db_account.php';
  
  $data = json_decode(file_get_contents("php://input"));
  $toRemove = mysql_real_escape_string($data->eToRemove);
  
  $sql = "DELETE FROM `journal-entries` WHERE `id`='".$toRemove."'";
  
  if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>