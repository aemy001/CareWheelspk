<?php
ob_start();
session_start();
include "connect.php";
$d_id = $_GET['d_id'];

    $query = "SELECT * FROM drivers WHERE d_id = '$d_id'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $to_email = $row["d_email"]; 
        $subject = "You Are Accepted As a Driver at CareWheels, You can now login and start earning";
        $body = "Congratulations! Your application as a driver has been reviewed and accepted. We are pleased to inform you that you are now eligible to log in to our platform and begin your journey towards earning as a driver. Your dedication and commitment are truly appreciated, and we look forward to having you as a valued member of our team. Feel free to access your driver account and start taking advantage of the opportunities that await you. Thank you for choosing us as your platform for providing transportation services, and we wish you a successful and rewarding experience ahead.";
        $headers = "From: CareWheels"; 
        
        if (mail($to_email, $subject, $body, $headers)) {
            $_SESSION["d_email"] = $to_email;
            $_SESSION["subject"] = $subject;
            $_SESSION["msg"] = $body;
            echo "<script>alert('EMAIL SENT SUCCESSFULYY');</script>";
            header("location:drv_req_pending.php");
            exit();
        } else {
            echo "Email sending failed...";
        }
    }

?>