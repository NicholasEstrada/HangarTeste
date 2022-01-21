<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hangarsql";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT order_date, order_total FROM user INNER JOIN orders ON user_id = order_user_id ;";
$result = $conn->query($sql);

$arv = [];

foreach ($result as $key => $value){
    $var = explode("-", $value['order_date']);

    $galho = 0;

    if(isset($arv[$var[1]])){
    $galho = $arv[$var[1]];
    }
    $arv[$var[1]] = $value['order_total'] + $galho;
  
}

foreach ($arv as $key => $value) {
  echo $key ." ". $value;
  echo "<br />";
}

?>