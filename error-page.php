
<!DOCTYPE html>
<html><head>
<meta charset="utf-8">
<title>Zagreb HTML Template | Error Page</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
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
            <h1>404</h1>
            <div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">404</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Error Section-->
    <section class="error-section">
    	<div class="auto-container">
            
           	<div class="error-text">
            	<h2>ERROR PAGE !</h2>
            </div>
            <div class="text">Sorry, we couldn't find the page you're looking for.</div>
            
            <!--Search The Website-->
            <div class="search-website">
                <form method="post" action="index.php">
                    <div class="form-group">
                        <input type="search" name="search" value="" required placeholder="Type Keywords...">
                        <button type="submit" class="theme-btn"><span class="fa fa-search"></span></button>
                    </div>
                </form>
            </div>

        </div>    
    </section>
    <!--End Error Section-->
    
    <?php
require('footer.php');
?>
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/isotope.js"></script>
<script src="js/script.js"></script>

</body>
</html>