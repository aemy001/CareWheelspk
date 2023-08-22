<?php
require ("connect.php");
if(isset($_POST["submit"])){
    $name = $_POST["username"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $query = "INSERT INTO `contact`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
    $result = mysqli_query($conn , $query);
    if($result){
        echo "<script>alert('Thank you for reaching out! Our team will be in touch with you shortly. ')</script>";
    }
}

?>