<?php

$dbname = "shoppee";
$dbusername = "root";
$dbpassword = "";
$dbhost = "localhost";//localhost

$conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

if($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');
    $randID = random_int(10000000000, 99999999999);
    $userID = $randID;

    $prep = $conn->prepare("INSERT INTO users (Username, Password, Email, UserID) VALUES (?, ?, ?, ?)");

    if ($prep === false) {
        die("Error preparing the query: " . $conn->error);
    }

    $prep->bind_param("sssi", $username, $password, $email, $userID);

    // Execute the query
    // if ($prep->execute()) {
    //     echo "User successfully registered.";
    // } else {
    //     echo "Error executing the query: " . $prep->error;
    // }

    // Close the prepared statement
    $prep->close();
}

$conn->close();
?>