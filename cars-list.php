<!DOCTYPE html>
<html><head>
<meta charset="utf-8">
<title>Zagreb HTML Template | Cars List</title>
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

<body>

<div class="page-wrapper">
    <?php
    require('header.php');
    ?>
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/3.jpg);">
        <div class="auto-container">
            <h1>Our Cars</h1>
            <div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Our Cars</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Sidebar Page Container -->
    <div class="sidebar-page-container">
    	<!--Tabs Box-->
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Content Side-->	
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    
                    <!--Cars Info Section / List View-->
                    <section class="cars-info-section list-view">
						
                        <!--Sort By-->
                        <div class="items-sorting">
                            <div class="row clearfix">
                                <div class="results-column col-md-4 col-sm-5 col-xs-12">
                                    <h4>6 Results Founded</h4>
                                </div>
                                <div class="right-column pull-right col-md-8 col-sm-7 col-xs-12">
                                	<div class="viewed-box">
                                    	<a href="cars-grid.php" class="icon flaticon-layout"></a>
                                        <a href="cars-list.php" class="active icon flaticon-list"></a>
                                    </div>
                                    <div class="form-group">
                                        <select name="sort-by">
                                            <option>Sort by:</option>
                                            <option>Sort by: Ascending Order</option>
                                            <option>Sort by: Descending Order</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--car info block-->
                        <div class="car-info-block">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <div class="car-column col-md-6 col-sm-6">
                                        <!--Image-->
                                        <div class="image">
                                            <a href="car-single.php"><img src="images/resource/car-7.jpg" alt="" /></a>
                                        </div>
                                     </div>
                                     
                                    <div class="car-column col-md-6 col-sm-6">
                                       <!--lower box-->
                                       <div class="lower-box">
                                           <h3><a href="car-single.php">FORD MUSTANG CONVERTIBLE</a></h3>
                                           <div class="more-info">
                                               <ul>
                                                   <li>Class: <span>Luxury</span></li>
                                                   <li>Air Condition: <span>Yes</span></li>
                                                   <li>Style: <span>Sedan</span></li>
                                                   <li>Transmission: <span>Automatic</span></li>
                                               </ul>
                                               <div class="price-day">$115<span>/day</span></div>
                                           </div>
                                       </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!--car info block-->
                        <div class="car-info-block">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <div class="car-column col-md-6 col-sm-6">
                                        <!--Image-->
                                        <div class="image">
                                            <a href="car-single.php"><img src="images/resource/car-8.jpg" alt="" /></a>
                                        </div>
                                     </div>
                                     
                                     <div class="car-column col-md-6 col-sm-6">
                                        <!--lower box-->
                                        <div class="lower-box">
                                            <h3><a href="car-single.php">MERCEDEZ BENZ S CLASS</a></h3>
                                            <div class="more-info">
                                                <ul>
                                                    <li>Class: <span>Luxury</span></li>
                                                    <li>Air Condition: <span>Yes</span></li>
                                                    <li>Style: <span>Sedan</span></li>
                                                    <li>Transmission: <span>Automatic</span></li>
                                                </ul>
                                                <div class="price-day">$142<span>/day</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!--car info block-->
                        <div class="car-info-block">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <div class="car-column col-md-6 col-sm-6">
                                        <!--Image-->
                                        <div class="image">
                                            <a href="car-single.php"><img src="images/resource/car-9.jpg" alt="" /></a>
                                        </div>
                                     </div>
                                     
                                     <div class="car-column col-md-6 col-sm-6">
                                        <!--lower box-->
                                        <div class="lower-box">
                                            <h3><a href="car-single.php">MINI COOPER CONVERTIBLE</a></h3>
                                            <div class="more-info">
                                                <ul>
                                                    <li>Class: <span>Luxury</span></li>
                                                    <li>Air Condition: <span>Yes</span></li>
                                                    <li>Style: <span>Sedan</span></li>
                                                    <li>Transmission: <span>Automatic</span></li>
                                                </ul>
                                                <div class="price-day">$245<span>/day</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!--car info block-->
                        <div class="car-info-block">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <div class="car-column col-md-6 col-sm-6">
                                        <!--Image-->
                                        <div class="image">
                                            <a href="car-single.php"><img src="images/resource/car-10.jpg" alt="" /></a>
                                        </div>
                                     </div>
                                     
                                     <div class="car-column col-md-6 col-sm-6">
                                        <!--lower box-->
                                        <div class="lower-box">
                                            <h3><a href="car-single.php">BMW 520D</a></h3>
                                            <div class="more-info">
                                                <ul>
                                                    <li>Class: <span>Luxury</span></li>
                                                    <li>Air Condition: <span>Yes</span></li>
                                                    <li>Style: <span>Sedan</span></li>
                                                    <li>Transmission: <span>Automatic</span></li>
                                                </ul>
                                                <div class="price-day">$196<span>/day</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!--car info block-->
                        <div class="car-info-block">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <div class="car-column col-md-6 col-sm-6">
                                        <!--Image-->
                                        <div class="image">
                                            <a href="car-single.php"><img src="images/resource/car-11.jpg" alt="" /></a>
                                        </div>
                                     </div>
                                     
                                     <div class="car-column col-md-6 col-sm-6">
                                        <!--lower box-->
                                        <div class="lower-box">
                                            <h3><a href="car-single.php">ROLLS ROYCE WRAITH</a></h3>
                                            <div class="more-info">
                                                <ul>
                                                    <li>Class: <span>Luxury</span></li>
                                                    <li>Air Condition: <span>Yes</span></li>
                                                    <li>Style: <span>Sedan</span></li>
                                                    <li>Transmission: <span>Automatic</span></li>
                                                </ul>
                                                <div class="price-day">$380<span>/day</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!--car info block-->
                        <div class="car-info-block">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <div class="car-column col-md-6 col-sm-6">
                                        <!--Image-->
                                        <div class="image">
                                            <a href="car-single.php"><img src="images/resource/car-12.jpg" alt="" /></a>
                                        </div>
                                     </div>
                                     
                                     <div class="car-column col-md-6 col-sm-6">
                                        <!--lower box-->
                                        <div class="lower-box">
                                            <h3><a href="car-single.php">AUDI A5 TFSI S-LINE</a></h3>
                                            <div class="more-info">
                                                <ul>
                                                    <li>Class: <span>Luxury</span></li>
                                                    <li>Air Condition: <span>Yes</span></li>
                                                    <li>Style: <span>Sedan</span></li>
                                                    <li>Transmission: <span>Automatic</span></li>
                                                </ul>
                                                <div class="price-day">$270<span>/day</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                            
                    </section>
                    
                </div>
                
                <!--Sidebar-->	
                <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                    <aside class="sidebar">
                    	
                        <!--Sidebar form-->
                        <div class="widget sidebar-widget sidebar-form">
                            <h3>REFINE SEARCH</h3>
                            <div class="widget-box">
                            	<div class="widget-content">
                                	<!--Default Form-->
                                    <div class="default-form">
                                        <form method="post">
                                        
                                            <!--Form Group-->
                                            <div class="form-group country">
                                                <div class="group-inner">
                                                    <select name="category" class="select-number">
                                                        <option>Select Brand</option>
                                                        <option>Brand 1</option>
                                                        <option>Brand 2</option>
                                                        <option>Brand 3</option>
                                                        <option>Brand 4</option>
                                                    </select>
                                                </div>
                                            </div>
                    
                                            <div class="form-group">
                                                <div class="group-inner">
                                                    <div class="group-inner">
                                                        <select name="country" class="select-number">
                                                            <option>Select Car Model</option>
                                                            <option>Honda</option>
                                                            <option>Civic</option>
                                                            <option>Toyota</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                                
                                            <div class="form-group">
                                                <div class="group-inner">
                                                    <div class="group-inner">
                                                        <select name="country" class="select-number">
                                                            <option>Select a Style</option>
                                                            <option>Style 1</option>
                                                            <option>Style 2</option>
                                                            <option>Style 3</option>
                                                            <option>Style 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                                
                                            <!-- Price Filter -->
                                            <div class="widget rangeslider-widget sidebar-widget">
                                                <div class="field-label">Filter By Price</div>
                                                <div class="range-slider-price" id="range-slider-price"></div>
                                            </div>
                                                
                                            <div class="form-group">
                                                <div class="group-inner">
                                                    <div class="group-inner">
                                                        <select name="country" class="select-number">
                                                            <option>Select Car Types</option>
                                                            <option>Type 1</option>
                                                            <option>Type 2</option>
                                                            <option>Type 3</option>
                                                            <option>Type 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                                
                                            <div class="form-group">
                                                <div class="group-inner">
                                                    <div class="group-inner">
                                                        <select name="country" class="select-number">
                                                            <option>Select Car Color</option>
                                                            <option>Black</option>
                                                            <option>Grey</option>
                                                            <option>White</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <button type="submit" class="theme-btn btn-style-one">SEARCH NOW</button>
                                            </div>
                                                
                                        </form>
                                	</div>
                                	<!--End Default Form-->
                                </div>
                            </div>
                        </div>
                        <!--Sidebar form-->
                        
                        <!--Video Widget-->
                        <div class="widget sidebar-widget video-widget" style="background-image:url(images/resource/video-image.jpg);">
                        	<div class="widget-inner">
                            	<a href="https://www.youtube.com/watch?v=1sVEYNH8gbk" class="lightbox-image play-box">
                                	<span class="icon flaticon-play-button-1"></span>
                                	<h4>MINI COOPER ADVENTURE TRIP</h4>
                                </a>
                            </div>
                        </div>
                        <!--End Video Widget-->
                        
                    </aside>
                </div>
                
            </div>
        </div>
    </div>
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
<script src="js/nouislider.js"></script>
<script src="js/script.js"></script>

</body>
</html>