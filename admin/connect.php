<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "tsdp2";

$conn = mysqli_connect($servername,$username,$password,$db);
if(!$conn){
    echo "DB Not Connected!!";
}




?>