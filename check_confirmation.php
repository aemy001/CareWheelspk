<?php
session_start();

require("connect.php"); 
$booking_id = $_GET['booking_id'];

$query = "SELECT * FROM booking WHERE booking_id = '$booking_id'";
$result = mysqli_query($conn, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $driverConfirmed = $row['status'];
    echo $driverConfirmed;
    if ($driverConfirmed == "Started") {
        echo 'confirmed';
    } else {
        echo 'not_confirmed';
    }
} else {
    echo 'error';
}

mysqli_close($conn);
?>

