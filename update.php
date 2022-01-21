<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hangarsql";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE user SET user_city='Canada' WHERE user_id = 4";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE){
    echo "Record updated successfully";
}else{
    echo "Error updating record: " . $conn->error;
}
  
$conn->close();

?>