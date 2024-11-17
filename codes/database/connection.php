<?php

$dbname = "shoppee";
$dbusername = "root";
$dbpassword = "";
$dbhost = "localhost";//localhost

$conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

if($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

?>