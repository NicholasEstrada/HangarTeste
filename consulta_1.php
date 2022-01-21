<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hangarsql";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT user_country, order_total FROM user INNER JOIN orders ON user_id = order_user_id ;";
$result = $conn->query($sql);

$arv = [];

foreach ($result as $key => $value){
    $galho = 0;
    if(isset($arv[$value['user_country']])){
    $galho = $arv[$value['user_country']];
    }
    $arv[$value['user_country']] = $value['order_total'] + $galho;
}

foreach ($arv as $key => $value) {
    echo $key ." ". $value;
    echo "<br />";
}

?>