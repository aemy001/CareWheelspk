<?php
require("connect.php");
if(isset($_POST["d_submit"])){
    $firstname = $_POST["d_fname"];
    $lastname = $_POST["d_lname"];
    $number = $_POST["d_phone"];
    $cnic = $_POST["cnic"];
    $email = $_POST["d_email"];
    $address = $_POST["d_address"];
    $password = $_POST["d_password"];
 
    $insert = "INSERT INTO `drivers`(`d_fname`, `d_lname`, `d_phone`,`CNIC`, `d_email`, `d_address`, `d_password`,`d_status`) VALUES ('$firstname','$lastname','$number','$cnic','$email','$address','$password','Pending')";

    $deliver = mysqli_query($conn , $insert);

    if($deliver){
      $d_id = mysqli_insert_id($conn);
      header("location:vehicle_info.php?d_id=$d_id");
    }
}

?>