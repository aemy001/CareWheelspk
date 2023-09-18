<?php
session_start();
include('connect.php');
if($_SESSION["c_email"]){
?>
<!DOCTYPE html>
<html><head>
<meta charset="utf-8">
<title>Carewheels | Book a Ride</title>
<!-- Stylesheets -->
<link href="css/nouislider.css" rel="stylesheet">
<link href="css/nouislider.pips.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
<?php
include('header.php');
?>
  
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/3.jpg);">
        <div class="auto-container">
            <h1>Book A Ride</h1>
            <div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Book A Ride</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

                           <div class="container">
                           <h4 class="text-right"><?php echo "<b>". "Welcome!". "</b>". "<br>"  .$_SESSION['c_firstname'];?>
            
                           <br> <br>
                           <strong?>    <a class="link-success" href="cust_profile.php?u_id=<?php echo $_SESSION["c_id"]; ?>">Show Profile</a>
</strong> <br>
                           <a href="cust_logout.php">Logout</a>
                       </h4>
                           </div>
                       
    
    <!--Billing Section-->
    <section class="billing-section">
    	<div class="auto-container">
        	<div class="sec-title"><h2>Schedule your Ride</h2></div>
        	<!--Billing Form-->
            <div class="billing-form">
            	<form method="post" action="bookingAction.php">
                	<!--Column-->
                    <div class="row clearfix">

                        <!-- Date Time Methods -->
    <?php
    $karachiTimezone = new DateTimeZone('Asia/Karachi');
    $currentDateTime = new DateTime('now', $karachiTimezone);
        $currentDate = $currentDateTime->format('Y-m-d');
        $currentTime = $currentDateTime->format('H:i:s');
   
    ?>
                        <!-- For Date -->
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        	<div class="field-label">Pickup Date <span class="req">*</span></div>
                            <div class="field-inner">
                                <input type="date" name="selected_date" pattern="\d{4}-\d{2}-\d{2}">
                                <input type="text" class="" id="field-one" name="current_date" value="<?php echo $currentDate. PHP_EOL; ?>">
                            <label class="input-icon" for="field-one"><span class="fa fa-calendar"></span></label></div>
                        </div>
    
                        <!-- For Time -->
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        	<div class="field-label">Pickup Timing <span class="req">*</span></div>
                            <div class="field-inner">
                            <select name="selected_time" id="timeList" style="display: none;"></select>   
                            <input type="text" id="picktime" name="pick_time" value="<?php echo $currentTime . PHP_EOL;?>" readonly><label class="input-icon" for="picktime"><span class="fa fa-clock-o"></span></label></div>
                        </div>
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    // Functions
    function generateTimeOptions() {
      var select = $('#timeList');
      var startTime = 0; // Start time in minutes (0 for 00:00)
      var endTime = 1439; // End time in minutes (1439 for 23:59)

      for (var i = startTime; i <= endTime; i += 10) {
        var hours = Math.floor(i / 60);
        var minutes = i % 60;

        var timeString = ("0" + hours).slice(-2) + ":" + ("0" + minutes).slice(-2);
        var option = '<option value="' + timeString + '">' + timeString + '</option>';
        select.append(option);
      }
    }

    generateTimeOptions();

//Show
    $('#picktime').on('click', function() {
      $('#timeList').show();
    });
    //change
    $('#timeList').on('change', function() {
      var selectedTime = $(this).val();
      $('#picktime').val(selectedTime);
      $('#timeList').hide();
    });

    // Hide the time options 
    $(document).on('click', function(e) {
      if (!$(e.target).closest('#picktime, #timeList').length) {
        $('#timeList').hide();
      }
    });
  });
</script>

                        <!-- For Pickup location -->
                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                        	<div class="field-label">Pickup Locations <span class="req">*</span></div>
                            <div class="field-inner"><input type="text" id="pickup_location"  name="pickup" value="" placeholder="Select the pickup Location" required><label class="input-icon" for="pickup_location"><span class="fa fa-map-marker"></span></label></div>
                        </div>

                        <!-- For Dropoff location -->
                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                        	<div class="field-label">Dropoff Locations <span class="req">*</span></div>
                            <div class="field-inner"><input type="text" id="dropoff_location" name="dropoff" value="" placeholder="Select the dropoff Location" required><label class="input-icon" for="dropoff_location"><span class="fa fa-map-marker"></span></label></div>
                        </div>
                        <?php
                    

  $query = "SELECT * FROM `services`";
  $result = mysqli_query($conn,$query);
                        ?>
                        <!-- for service -->
   <div class="form-group col-md-6 col-sm-12 col-xs-12">
                        	<div class="field-label">Select Service <span class="req">*</span></div>
                            <div class="field-inner">
                            <select name="service" id="service">
                             <?php
                                                            while($row=mysqli_fetch_assoc($result))
                                                            {
                                                        ?>
                                                        <option value="<?php echo $row['service_id'];?>"><?php echo $row['service_type'];?></option>
                                                        <?php
                                                            }
                                                        ?>
                            </select>
                        </div>
                        </div>
                          <!-- Add a map container -->
    <div class="col-md-12 col-sm-12 col-xs-12" id="map" style="height: 400px;"></div>
<p class="form-group col-md-12 col-sm-12 col-xs-12" id="distanceValue"></p>
    <script>
    var map;
    var markers = [];


//  function calculateDistance(lat1, lon1, lat2, lon2) {
//         const R = 6371; // Radius of the Earth in kilometers
//         const dLat = (lat2 - lat1) * (Math.PI / 180);
//         const dLon = (lon2 - lon1) * (Math.PI / 180);
//         const a =
//             Math.sin(dLat / 2) * Math.sin(dLat / 2) +
//             Math.cos(lat1 * (Math.PI / 180)) * Math.cos(lat2 * (Math.PI / 180)) *
//             Math.sin(dLon / 2) * Math.sin(dLon / 2);
//         const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
//         const distance = R * c;
//         return distance;
//     }
    
    // Function to place markers on the map based on Autocomplete selection
    function placeMarker(place) {
        clearMarkers();

        if (!place.geometry) {
            return;
        }

        var location = place.geometry.location;
        var name = place.name;
        var formattedAddress = place.formatted_address;

        // Create a marker at the selected location
        var marker = new google.maps.Marker({
            position: location,
            map: map
        });

        // Add the marker to the markers array
        markers.push(marker);

        // Center the map on the selected location
        map.setCenter(location);

        // Add an info window to show the location name and address when the marker is clicked
        var infoWindow = new google.maps.InfoWindow({
            content: '<strong>' + name + '</strong><br>' + formattedAddress
        });

        marker.addListener('click', function() {
            infoWindow.open(map, marker);
        });

        // If both pickup and dropoff markers are present, calculate the distance
        // if (markers.length === 2) {
        //     var pickupLatLng = markers[0].getPosition();
        //     var dropoffLatLng = markers[1].getPosition();

        //     var distance = calculateDistance(
        //         pickupLatLng.lat(), pickupLatLng.lng(),
        //         dropoffLatLng.lat(), dropoffLatLng.lng()
        //     );

        //     document.getElementById('distanceValue').textContent = distance.toFixed(2);
        // }
    }
    // Function to clear existing markers from the map
    function clearMarkers() {
        markers.forEach(function(marker) {
            marker.setMap(null);
        });
        markers = [];
    }

    function initMap() {
        // Create the map centered at a default location
        map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: 24.927432, lng: 67.033124 }, 
            zoom: 13
        });

        
        var pickupInput = document.getElementById('pickup_location');
        var dropoffInput = document.getElementById('dropoff_location');

        var pickupAutocomplete = new google.maps.places.Autocomplete(pickupInput);
        var dropoffAutocomplete = new google.maps.places.Autocomplete(dropoffInput);

        // Clear markers
        pickupInput.addEventListener('input', clearMarkers);
        dropoffInput.addEventListener('input', clearMarkers);

        // add markers based on Autocomplete selection
        pickupAutocomplete.addListener('place_changed', function() {
            placeMarker(pickupAutocomplete.getPlace());
        });

        dropoffAutocomplete.addListener('place_changed', function() {
            placeMarker(dropoffAutocomplete.getPlace());
        });
    }

    function loadMapsApi() {
        var script = document.createElement('script');
        script.src = 'https://maps.googleapis.com/maps/api/js?key=&libraries=places&callback=initMap';
        script.defer = true;
        script.async = true;
        document.body.appendChild(script);
    }

    // Load the Maps JavaScript API and initialize the map
    loadMapsApi();
</script>

                       
  <div class="btn-outer col-md-12 text-center"><button type="submit" name="submit" class="theme-btn btn-style-three center">BOOK RIDE</button></div>
                        
                    </div>
                </form>
            </div>
                    
                </div>
            </div>
            
        </div>
    </section>

    <?php
include('footer.php');
?>

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/nouislider.js"></script>
<script src="js/script.js"></script>

</body>
</html>
<?php } 
else{
    header("location:cust_login.php");
}
?>