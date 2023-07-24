<?php
session_start();
require "connect.php";

if(isset($_POST["submit"])){
    $firstname = $_SESSION["fname"];
    $lastname =  $_SESSION["lname"];
    $number =   $_SESSION["number"];
    $address = $_SESSION["address"];
    $email = $_SESSION["email"];
    $password = $_SESSION["password"];
    
    
    $userOttp = $_POST["ottpuser"];
    $OTTP = $_SESSION["ottp"];


    if($OTTP == $userOttp){
       


    $insert = "INSERT INTO `customers_info`( `c_firstname`, `c_lastname`, `c_phone`, `c_address`, `c_email`, `c_password`) VALUES ('$firstname','$lastname','$number','$address','$email','$password')";

     $deliver = mysqli_query($conn , $insert);

     if($deliver){
header("location:index.php");
    }
    }
}



?>