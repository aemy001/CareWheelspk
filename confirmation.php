<!DOCTYPE html>
<html><head>
<meta charset="utf-8">
<title>Zagreb HTML Template | Confirmation</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/nouislider.css" rel="stylesheet">
<link href="css/nouislider.pips.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css">
<link href="css/style.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<!--class Added to avoid vertical scroll for popup-->
<body class="popup-visible">

<div class="page-wrapper">
    <?php
    require('header.php');
    ?>
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/3.jpg);">
        <div class="auto-container">
            <h1>Confirmation</h1>
            <div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Confirmation</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    
    
    <!--Billing Section-->
    <section class="billing-section">
    	<div class="auto-container">
        	<div class="sec-title"><h2>Billing Details</h2></div>
        	<!--Billing Form-->
            <div class="billing-form">
            	<form method="post" action="confirmation.php">
                	<!--Column-->
                    <div class="row clearfix">
                    	
                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                        	<div class="field-label">First Name <span class="req">*</span></div>
                            <div class="field-inner"><input type="text" name="field-name" value="" placeholder="Your First Name"></div>
                        </div>
                        
                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                        	<div class="field-label">Last Name <span class="req">*</span></div>
                            <div class="field-inner"><input type="text" name="field-name" value="" placeholder="Your Last Name"></div>
                        </div>
                        
                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                        	<div class="field-label">Email Address <span class="req">*</span></div>
                            <div class="field-inner"><input type="text" name="field-name" value="" placeholder="Your Email Address"></div>
                        </div>
                        
                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                        	<div class="field-label">Phone <span class="req">*</span></div>
                            <div class="field-inner"><input type="text" name="field-name" value="" placeholder="Your Phone"></div>
                        </div>
                        
                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                        	<div class="field-label">Pickup Date <span class="req">*</span></div>
                            <div class="field-inner"><input type="text" class="datepicker" id="field-one" name="field-name" value="" placeholder="Select the Start Date"><label class="input-icon" for="field-one"><span class="fa fa-calendar"></span></label></div>
                        </div>
                        
                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                        	<div class="field-label">Drop off Date <span class="req">*</span></div>
                            <div class="field-inner"><input type="text" class="datepicker" id="field-two" name="field-name" value="" placeholder="Select the End Date"><label class="input-icon" for="field-one"><span class="fa fa-calendar"></span></label></div>
                        </div>
                        
                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                        	<div class="field-label">Select the Timings <span class="req">*</span></div>
                            <div class="field-inner"><input type="text" id="field-three" name="field-name" value="" placeholder="Select the Timings"><label class="input-icon" for="field-three"><span class="fa fa-clock-o"></span></label></div>
                        </div>
                        
                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                            <div class="field-label">No of Passengers <span class="req">*</span></div>
                            <select name="passengers">
                                <option>Passengers</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        
                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                        	<div class="field-label">Pickup Locations <span class="req">*</span></div>
                            <div class="field-inner"><input type="text" id="field-four" name="field-name" value="" placeholder="Select the Location"><label class="input-icon" for="field-four"><span class="fa fa-map-marker"></span></label></div>
                        </div>
                        
                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                            <div class="field-label">Destinations <span class="req">*</span></div>
                            <select name="destination">
                                <option>Destination</option>
                                <option>Location One</option>
                                <option>Location Two</option>
                                <option>Location Three</option>
                                <option>Location Four</option>
                            </select>
                        </div>
                        
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <div class="check-box">
                                <input type="checkbox" id="cbox-one"><label for="cbox-one"><span class="icon"><span class="square"></span><span class="fa fa-check"></span></span> Create an Account?</label>
                            </div>
                        </div>
                        
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        	<div class="field-label">Order Note <span class="req">*</span></div>
                            <div class="field-inner"><textarea name="message" placeholder="Write your Message"></textarea></div>
                        </div>
                        
                    </div>
                </form>
            </div>
            
            <!--Billing Details-->
            <div class="billing-details">
            	<div class="row clearfix">
                
                	<!--Product Column-->
                    <div class="product-column col-md-6 col-sm-12 col-xs-12">
                    	<div class="inner-box">
                            <h3><a href="car-single.php">Jaguar H-Series</a></h3>
                        	<div class="image-box">
                                <figure class="image"><a href="car-single.php"><img src="images/gallery/23.png" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <ul class="info clearfix">
                                    <li>Price: <span class="price"><strong>$58</strong> / Hour</span></li>
                                    <li>Price: <span class="price"><strong>$595</strong> / Day</span></li>
                                </ul>
                                <div class="btn-outer"><a href="#" class="theme-btn btn-style-three">Rent a Car</a></div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Billing Column-->
                    <div class="billing-column col-md-6 col-sm-12 col-xs-12">
                    	<div class="inner-box">
                        	<div class="check-box">
                                <input type="radio" id="cbox-two" name="billing"><label for="cbox-two"><span class="icon"><span class="square"></span><span class="fa fa-check"></span></span> Check Payment</label>
                            </div>
                            <div class="check-box">
                                <input type="radio" checked id="cbox-three" name="billing"><label for="cbox-three"><span class="icon"><span class="square"></span><span class="fa fa-check"></span></span> Direct Bank Transfer</label>
                            </div>
                            <div class="text">The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest the powerless in a world of criminals who operate above the law then one day he was shootin at some food and up through the ground came a bubbling is crude oil was shootin at some food and up through the ground came a bubbling is crude.</div>
                            <div class="check-box">
                                <input type="radio" id="cbox-four" name="billing"><label for="cbox-four"><span class="icon"><span class="square"></span><span class="fa fa-check"></span></span> Direct Bank Transfer<br><img src="images/icons/credit-card-icon.png" alt=""></label>
                            </div>
                            <div class="btn-outer"><button type="button" class="theme-btn btn-style-three">PAY NOW</button></div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </section>
    <?php
require('footer.php');
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