<?php
session_start();
require 'connect.php';
if(isset($_POST["submit"])){

    $_SESSION["fname"] = $_POST["fname"];
    $_SESSION["lname"] = $_POST["lname"];
 
    $_SESSION["number"] = $_POST["number"];
    $_SESSION["address"] = $_POST["address"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["password"] = $_POST["password"];
  
    $to_email = $_POST["email"];
    $subject = "Verify , It's You";
    $body = rand(101,200);
    $headers = "From: sender email";
    
    if (mail($to_email, $subject, $body, $headers)) {
        
        $_SESSION["email"] = $to_email;
        $_SESSION["subject"] = $subject;
        $_SESSION["ottp"] = $body;

        header('location:otpverify.php');

    } else {
        echo "Email sending failed...";
    }
}





   




?>