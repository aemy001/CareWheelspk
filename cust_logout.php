<?php
session_start();
if($_SESSION["c_email"]){
    session_unset();
    session_destroy();
    header("location:index.php");
}
?>