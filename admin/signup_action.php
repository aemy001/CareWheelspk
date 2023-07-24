<?php

require 'connect.php';
if(isset($_POST["submit"])){
     $username = $_POST["username"];
     $email = $_POST["email"];
     $password = $_POST["password"];


     $insert = "INSERT INTO `admin`(`a_username`, `a_email`, `a_password`) VALUES ('$username','$email','$password')";

     $deliver = mysqli_query($conn , $insert);

     if($deliver){
        echo "INSERTED!!!";
     }
}



?>