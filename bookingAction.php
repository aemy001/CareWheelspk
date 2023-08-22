<?php
session_start();
require ("connect.php");
if(isset($_POST["submit"])){
    $selectedDate = $_POST["selected_date"];
        $formattedDate = date("Y-m-d", strtotime($selectedDate));
    if($formattedDate == "1970-01-01"){
        $formattedDate = $_POST["current_date"];  
      }
    $selectedTime = $_POST["selected_time"];
    if($selectedTime == "00:00"){
        $selectedTime = $_POST["pick_time"];
      }
    $pickuplocation = $_POST["pickup"];
    $dropofflocation = $_POST["dropoff"];
    $service = $_POST["service"];
    $cust_id = $_SESSION["c_id"];
 
   $insert = "INSERT INTO `booking`(`pickup_date`, `pickup_time`, `pickup_location`, `dropoff_location`, `c_id`,`service_id`,`status`) VALUES(' $formattedDate','$selectedTime','$pickuplocation','$dropofflocation','$cust_id','$service','Pending')";
   $result = mysqli_query($conn, $insert);

if(!$result){
    echo "Error";
}
else{
    $booking_id = mysqli_insert_id($conn);
    header("Location: feedback.php?booking_id=$booking_id");
}



}

?>

