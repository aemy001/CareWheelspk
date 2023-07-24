<?php

session_start();
if($_SESSION["a_email"]){
    session_unset();
    session_destroy();
    header("location:signin.php");
}

?>