<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Feedback Form</title>
</head>
<body>
<div class="container row mx-0 mx-sm-auto d-flex justify-content-center ">
 <div class="col-md-6">
 <div class="card">
    <div class="card-header bg-warning">
      <h5 class="card-title text-white mt-2" id="exampleModalLabel">Review Your Experience</h5>
    </div>
    <div class="modal-body">
      <div class="text-center">
        <i class="far fa-file-alt fa-4x mb-3 text-warning"></i>
        <p>
          <strong>Your opinion matters</strong>
        </p>
        <p>
          Have some ideas how to improve our services?
          <strong>Give us your feedback.</strong>
        </p>
      </div>

      <hr />
      <?php
include("connect.php");
session_start();
if (isset($_GET['booking_id'])) {
  $booking_id = $_GET['booking_id'];
} else {
  die("booking ID not provided.");
}
if(isset($_POST["submit"])){
    $ratings = $_POST["exampleForm"];
    $comments = $_POST["comments"];
    
    $query = "INSERT INTO `feedback`(`ratings`, `comment`,`booking_id`) VALUES ('$ratings','$comments','$booking_id')";
    $result = mysqli_query($conn , $query);
    if($result){
      echo '<script>alert("Thanks For Submitting Your Reviews"); window.location = "./booking.php";</script>';
    }
}  


?>

      <form class="px-4" action="" method="POST">
        <p class="text-center"><strong>Your rating:</strong></p>

        <div class="form-check mb-2">
        <input type="hidden" name="d_id" value="<?php echo $booking_id;?>" />
          <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example1" value="Very Good" />
          <label class="form-check-label" for="radio3Example1">
            Very good
          </label>
        </div>
        <div class="form-check mb-2">
          <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example2" value="Good" />
          <label class="form-check-label" for="radio3Example2">
            Good
          </label>
        </div>
        <div class="form-check mb-2">
          <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example3" value="Mediocre" />
          <label class="form-check-label" for="radio3Example3">
            Medicore
          </label>
        </div>
        <div class="form-check mb-2">
          <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example4" value="Bad"/>
          <label class="form-check-label" for="radio3Example4">
            Bad
          </label>
        </div>
        <div class="form-check mb-2">
          <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example5" value="Very Bad" />
          <label class="form-check-label" for="radio3Example5">
            Very bad
          </label>
        </div>

        <p class="text-center"><strong>What could we improve?</strong></p>

        <!-- Message input -->
        <div class="form-outline mb-4">
          <input class="form-control" name ="comments" id="form4Example3">
          <label class="form-label" for="form4Example3">Your feedback</label>
        </div>
        <div class="card-footer text-end">
      <button type="submit" name="submit" class="btn btn-warning">Submit</button>
    </div>
      </form>
      
    </div>
   
  </div>
 </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>