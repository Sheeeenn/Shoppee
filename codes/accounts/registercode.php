<?php

$dbname = "shoppee";
$dbusername = "root";
$dbpassword = "";
$dbhost = "localhost";

$conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

if($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userID = 233;

    $sql = "INSERT INTO users (Username, Password, Email, UserID) VALUES ('$username', '$password', '$email', $userID)";

    $conn->query($sql);

}

$conn->close();
?>