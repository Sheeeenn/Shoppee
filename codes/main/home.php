<?php

include("codes/session/start.php");


if(isset($_SESSION["UserID"])){
    
} else {
    header("location: /register");
    exit;
}

?>