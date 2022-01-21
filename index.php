<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hangarsql";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT user_id, user_name, user_city, user_country, order_user_id, order_id FROM user LEFT JOIN orders ON user_id = order_user_id WHERE user_id=1 OR user_id=3 OR user_id=5 ORDER BY user_name;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($prim = $result->fetch_assoc()) {
        echo $prim['user_name']." ".$prim['user_city']." ".$prim['user_country']." ".$prim['order_id'];
        echo "<br>";
    }
  }

?>