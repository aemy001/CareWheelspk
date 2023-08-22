<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Finding Driver</title>
</head>
<body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function checkDriverConfirmation(booking_id) {
        $.ajax({
            url: 'check_confirmation.php',
            method: 'GET',
            data: { booking_id: booking_id }, // Send the booking ID to the server
            success: function(response) {
                if (response === 'confirmed') {
                    // Display a notification to the customer
                    alert('Driver has confirmed the ride!');
                } else if (response === 'not_confirmed') {
                    window.location = "index.php";
                              
                } else {
                    console.log("error");
                 
                }
            },
            error: function() {
                console.log("error");
             
            }
        });
    }

    // Call the function every X seconds
    var booking_id = <?php echo $booking_id; ?>;
        setInterval(function() {
        checkDriverConfirmation(booking_id);
    }, 10000); // Adjust the interval as needed
</script>

</body>
</html>