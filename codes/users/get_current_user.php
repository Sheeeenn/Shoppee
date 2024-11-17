<?php

include("codes/session/start.php");
require("codes/database/connection.php");

if(isset($_SESSION["UserID"])) {

    $get_UserID = $_SESSION["UserID"];

    $sql = "SELECT * FROM users WHERE UserID = $get_UserID";
    $result = $conn->query($sql);

    if($result->num_rows > 0){

        while($users = $result->fetch_assoc()){
            $_SESSION["Username"] = $users["Username"];
            $_SESSION["Email"] = $users["Email"];
            $_SESSION["ID"] = $users["ID"];
        }
    }

}

?>