<?php
    if(!isset($_SESSION['c_email'])){
        header('location: cust_login.php');
        exit();
    }
?>