<!DOCTYPE html>
<html><head>
<meta charset="utf-8">
<title>Zagreb HTML Template | About Us</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
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

<body>

<div class="page-wrapper">
 	
    <?php
    require('header.php');
    ?>
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/3.jpg);">
        <div class="auto-container">
            <h1>About Us</h1>
            <div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Experiance Section-->
    <section class="experiance-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--content column-->
            	<div class="content-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-box">
                    	<h3><a href="services.php">WE PROMISE, YOU WILL HAVE THE BEST <br> EXPERIENCE</a></h3>
                        <div class="text">
                        	<p>In omni memoria patriae religionis sunt diri undead historiarum. Golums, zombies et fascinati. Maleficia! Vel a modern perhsaps morbi. A terrenti contagium. Forsitan illud Apocalypsi, vel malum poenae horrifying fecimus.</p>
                            <p>Ut fames cerebro enim carnis, viscera et organa viventium. Sicut spargit virus ad impetum, qui supersumus. Avium, canum, fugere ferae et infecti horrenda monstra. Videmus deformis horrenda daemonum. Panduntur portae inferi. Finis accedens sentio terrore perterritus et taedium. The horror, monstra significant finem. Terror sit unum superesse sentit, ut caro eaters caule nobis.</p>
                        </div>
                        <a href="services.php" class="read-more">READ MORE</a>
                    </div>
                </div>
                <!--form column-->
                <div class="form-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-box">
                    	<!--Default Form-->
                        <div class="default-form">
                            <form method="post">
                            
                                <div class="row clearfix">
        
                                    <!--Form Group-->
                                    <div class="form-group country col-md-6 col-sm-6 col-xs-12">
                                        <div class="group-inner">
                                            <div class="field-label">VEHICLE TYPE</div>
                                            <select name="category" class="select-number">
                                                <option>SUV</option>
                                                <option>SUV 1</option>
                                                <option>SUV 2</option>
                                                <option>SUV 3</option>
                                                <option>SUV 4</option>
                                            </select>
                                        </div>
                                    </div>
        
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="group-inner">
                                            <div class="field-label">DEPARTURE DATE</div>
                                            <input type="text" name="date" class="datepicker" value="" placeholder="Date" required>
                                        </div>
                                    </div>
        
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="group-inner">
                                            <div class="field-label">PICK UP LOCATION</div>
                                            <div class="group-inner">
                                                <select name="country" class="select-number">
                                                    <option>Select Location</option>
                                                    <option>Pakistan</option>
                                                    <option>Australia</option>
                                                    <option>Canada</option>
                                                    <option>New Zealand</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="group-inner">
                                            <div class="field-label">DROP OFF LOCATION</div>
                                            <div class="group-inner">
                                                <select name="country" class="select-number">
                                                    <option>Select Location</option>
                                                    <option>Pakistan</option>
                                                    <option>Australia</option>
                                                    <option>Canada</option>
                                                    <option>New Zealand</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <!--Lower Form Box-->
                                <div class="lower-form-box">
                                    <div class="row clearfix">
                                    
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12 no-margin">
                                            <div class="group-inner">
                                                <div class="input-label">HOW MANY PEOPLES (INCLUDING CHILDREN)?</div>
                                                <input class="number-of-people" type="text" name="peoples" value="" placeholder="">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                        
                                            <div class="select-box">
                                                <input type="radio" name="hire-group" id="radio-one">
                                                <label for="radio-one">
                                                    <span class="default-check"></span>
                                                    <span class="check-icon fa fa-circle"></span>
                                                    RETURN
                                                </label>
                                            </div>
                                            
                                            <div class="select-box">
                                                <input type="radio" name="hire-group" id="radio-two">
                                                <label for="radio-two">
                                                    <span class="default-check"></span>
                                                    <span class="check-icon fa fa-circle"></span>
                                                    ONE WAY
                                                </label>
                                            </div>
                                            
                                        </div>
    
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12 text-left">
                                            <button type="submit" class="theme-btn btn-style-one">BOOK NOW</button>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    	<!--End Default Form-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Experiance Section-->
    
    <!--Cars Select Section-->
    <section class="cars-select-section style-two">
    	<div class="auto-container">
        	<div class="content-container">
            	
                <!--Sec Title-->
                <div class="sec-title">
                    <div class="inner-title-box">
                        <h2>SELECT <span>YOUR CAR BY</span></h2>
                        <h4 class="rotate-title">OUR CARS</h4>
                    </div>
                </div>
                
            	<!--Tabs Box / Tabs Style One-->
                <div class="select-car-tabs">
                    <!--Tab Buttons-->
                    <ul class="tab-buttons clearfix">
                        <li class="tab-btn active-btn" data-tab="#tab-one"> BRANDS</li>
                        <li class="tab-btn" data-tab="#tab-two"> TYPES</li>
                    </ul>
                    
                    <!--Tabs Content-->
                    <div class="tabs-content">
                        
                        <!--Tab / Active Tab-->
                        <div class="tab active-tab" id="tab-one">
                             <div class="three-item-carousel">
                                <!--Car Block-->
                                <div class="car-block">
                                    <div class="inner-box">
                                        <h3>Cuv</h3>
                                        <figure class="image-box">
                                            <img src="images/resource/car-4.jpg" alt="" />
                                        </figure>
                                        
                                        <div class="lower-box">
                                            <div class="text">Aenean a dolor vulnerum aperire accedunt, mortui iam vivam. Qui tardius moveri, sed in magna copia sint terribiles legionis. </div>
                                            <a class="arrow" href="#"><span class="icon fa fa-angle-right"></span><span class="text">Browse the Category</span></a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!--Car Block-->
                                <div class="car-block">
                                    <div class="inner-box">
                                        <h3>HATCHBACK</h3>
                                        <figure class="image-box">
                                            <img src="images/resource/car-5.jpg" alt="" />
                                        </figure>
                                        
                                        <div class="lower-box">
                                            <div class="text">Aenean a dolor vulnerum aperire accedunt, mortui iam vivam. Qui tardius moveri, sed in magna copia sint terribiles legionis. </div>
                                            <a class="arrow" href="#"><span class="icon fa fa-angle-right"></span><span class="text">Browse the Category</span></a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!--Car Block-->
                                <div class="car-block">
                                    <div class="inner-box">
                                        <h3>SEDAN</h3>
                                        <figure class="image-box">
                                            <img src="images/resource/car-6.jpg" alt="" />
                                        </figure>
                                        
                                        <div class="lower-box">
                                            <div class="text">Aenean a dolor vulnerum aperire accedunt, mortui iam vivam. Qui tardius moveri, sed in magna copia sint terribiles legionis. </div>
                                            <a class="arrow" href="#"><span class="icon fa fa-angle-right"></span><span class="text">Browse the Category</span></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Tab-->
                        <div class="tab" id="tab-two">
                            <div class="three-item-carousel">
                                <!--Car Block-->
                                <div class="car-block">
                                    <div class="inner-box">
                                        <h3>Cuv</h3>
                                        <figure class="image-box">
                                            <img src="images/resource/car-4.jpg" alt="" />
                                        </figure>
                                        
                                        <div class="lower-box">
                                            <div class="text">Aenean a dolor vulnerum aperire accedunt, mortui iam vivam. Qui tardius moveri, sed in magna copia sint terribiles legionis. </div>
                                            <a class="arrow" href="#"><span class="icon fa fa-angle-right"></span><span class="text">Browse the Category</span></a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!--Car Block-->
                                <div class="car-block">
                                    <div class="inner-box">
                                        <h3>HATCHBACK</h3>
                                        <figure class="image-box">
                                            <img src="images/resource/car-5.jpg" alt="" />
                                        </figure>
                                        
                                        <div class="lower-box">
                                            <div class="text">Aenean a dolor vulnerum aperire accedunt, mortui iam vivam. Qui tardius moveri, sed in magna copia sint terribiles legionis. </div>
                                            <a class="arrow" href="#"><span class="icon fa fa-angle-right"></span><span class="text">Browse the Category</span></a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!--Car Block-->
                                <div class="car-block">
                                    <div class="inner-box">
                                        <h3>SEDAN</h3>
                                        <figure class="image-box">
                                            <img src="images/resource/car-6.jpg" alt="" />
                                        </figure>
                                        
                                        <div class="lower-box">
                                            <div class="text">Aenean a dolor vulnerum aperire accedunt, mortui iam vivam. Qui tardius moveri, sed in magna copia sint terribiles legionis. </div>
                                            <a class="arrow" href="#"><span class="icon fa fa-angle-right"></span><span class="text">Browse the Category</span></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                   
                    
                </div>
            
            </div>
        </div>
    </section>
    <!--End Cars Select Section-->
  
    
    <!--sponsors style-->
    <section class="sponsors-style-one">
    	<div class="auto-container">
        	<div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section>
    <!--sponsors style-->
    
    <?php
require('footer.php');
?>
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>

</body>
</html>