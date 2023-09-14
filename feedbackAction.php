<?php
require("connect.php");
session_start();

if(isset($_POST["submit"])){

    $ratings = $_POST["exampleForm"];
    $comments = $_POST["comments"];
   $booking_id = $_SESSION["booking_id"];

    $query = "INSERT INTO `feedback`(`ratings`, `comment`, `booking_id`) VALUES ('$ratings','$comments','$booking_id')";
    $result = mysqli_query($conn , $query);
    if($result){
       echo "<script>alert('Thanks For Submitting Your Reviews');</script>";
    }
    else{
        header("location:booking.php");
    }
}  


?>