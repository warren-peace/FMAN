<?php 
  $data = json_decode(file_get_contents("php://input"));
  $date = mysql_real_escape_string($data->jdate);
  $name = mysql_real_escape_string($data->jname);
  $id = mysql_real_escape_string($data->jid);
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "fin-man";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 
  
  
  $sql = "INSERT INTO `journal-transactions`(`id`, `date`, `name`) VALUES ('".$id."','".$date."','".$name."')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>