<?php
session_start();
require("connect.php");
if(isset($_POST["d_submit"])){

  $_SESSION["d_fname"] = $_POST["d_fname"];
  $_SESSION["d_lname"]  = $_POST["d_lname"];
  $_SESSION["d_phone"]  = $_POST["d_phone"];
  $_SESSION["CNIC"]  = $_POST["cnic"];
  $_SESSION["d_email"]  = $_POST["d_email"];
  $_SESSION["d_address"]  = $_POST["d_address"];
  $_SESSION["d_password"]  = $_POST["d_password"];

  $to_email = $_POST["d_email"];
    $subject = "Verify , It's You";
    $body = rand(101,200);
    $headers = "From: sender email";
    
    if (mail($to_email, $subject, $body, $headers)) {
        
        $_SESSION["email"] = $to_email;
        $_SESSION["subject"] = $subject;
        $_SESSION["ottp"] = $body;

        header("location:drv_otp_verify.php");

    } else {
        echo "Email sending failed...";
    }
   
}

?>