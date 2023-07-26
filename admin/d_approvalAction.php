<?php
session_start();
require "connect.php";
if(isset($_POST["submit"])){
    $d_id = $_GET['d_id'];
    // Execute the SQL query and fetch data
    $query = "SELECT * FROM drivers JOIN vehicles ON drivers.d_id = vehicles.d_id  WHERE drivers.d_id = $d_id";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $to_email = $row["d_email"];
        $subject = "You Are accepted As a Driver, Please login with this One-Time Pin";
        $body = rand(101, 200);
        $headers = "From: sender email";

        if (mail($to_email, $subject, $body, $headers)) {
            $_SESSION["email"] = $to_email;
            $_SESSION["subject"] = $subject;
            $_SESSION["ottp"] = $body;

            header('location:d_otpverify.php');
        } else {
            echo "Email sending failed...";
        }
    } else {
        echo "Driver data not found!";
    }
}
?>
