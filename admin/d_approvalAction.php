<?php
ob_start();
session_start();
include "connect.php";
if (isset($_POST["submit"])) {
    $d_id = $_GET["d_id"]; 

    $query = "SELECT * FROM drivers WHERE d_id = $d_id";
    $result = mysqli_query($conn, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $to_email = $row["d_email"]; 
        
        $subject = "You Are Accepted As a Driver, Please Login with this One-Time Pin";
        $body = rand(101, 200);
        $headers = "From: sender email"; 
        
        if (mail($to_email, $subject, $body, $headers)) {
            $_SESSION["d_email"] = $to_email;
            $_SESSION["subject"] = $subject;
            $_SESSION["ottp"] = $body;

            header('location: drv_req_pending.php');
            exit(); 
        } else {
            echo "Email sending failed...";
        }
    } else {
        echo "Driver not found or no email address.";
    }
}
?>