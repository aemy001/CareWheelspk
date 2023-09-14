<?php
ob_start();
session_start();
if($_SESSION["a_email"]){
    session_unset();
    session_destroy();
    header("location:signin.php");
    exit;
}
else if($_SESSION["d_email"]){
    session_unset();
    session_destroy();
    header("location:./driver_login.php");
    exit;
}

?>