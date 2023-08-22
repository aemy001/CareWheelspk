<?php
session_start();
require "connect.php";

if(isset($_POST["submit"])){  

  $firstname = $_SESSION["d_fname"];
  $lastname  = $_SESSION["d_lname"];
  $number  = $_SESSION["d_phone"];
  $cnic  = $_SESSION["cnic"];
  $email  = $_SESSION["d_email"];
  $address  = $_SESSION["d_address"];
  $password = $_SESSION["d_password"];

    $userOttp = $_POST["ottpuser"];
    $OTTP = $_SESSION["ottp"];


    if($OTTP == $userOttp){
       
      $insert = "INSERT INTO `drivers`(`d_fname`, `d_lname`, `d_phone`,`CNIC`, `d_email`, `d_address`, `d_password`,`d_status`) VALUES ('$firstname','$lastname','$number','$cnic','$email','$address','".md5($password)."','Pending')";

      $deliver = mysqli_query($conn , $insert);
  
      if($deliver){
        $d_id = mysqli_insert_id($conn);
        header("location:vehicle_info.php?d_id=$d_id");
      }
      else{
        echo "Error going to next page";
      }
    }
}



?>