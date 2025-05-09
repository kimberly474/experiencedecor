<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="interior home products, home decor, furniture, modern interiors, stylish home">
    <meta name="description" content="Style Interiors - Your one-stop destination for premium interior home products to enhance your living space with style and elegance.">
    <meta name="author" content="Style Interiors">
    <link rel="shortcut icon" type="image/png" href="assets/images/living-room.png">
    <title>Glass Analog Wall Clock |Style Interiors</title>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet">

    <link href="fontawesome/css/all.min.css" rel="stylesheet">
    <link href="assets/sass/style.css" rel="stylesheet">
	

    <style>
        /*** 

====================================================================
	Search Popup
====================================================================

***/


.search-popup{
	position: fixed;
	left: 0;
	top: 0;
	height: 100vh;
	width: 100%;
	z-index: 99999;
	margin-top: -540px;
	transform: translateY(-100%);
	background-color: rgba(0,0,0,0.90);
    -webkit-transition: all 500ms cubic-bezier(0.860, 0.000, 0.070, 1.000);
    -moz-transition: all 500ms cubic-bezier(0.860, 0.000, 0.070, 1.000);
    -o-transition: all 500ms cubic-bezier(0.860, 0.000, 0.070, 1.000);
    transition: all 1500ms cubic-bezier(0.860, 0.000, 0.070, 1.000);
    -webkit-transition-timing-function: cubic-bezier(0.860, 0.000, 0.070, 1.000);
    -moz-transition-timing-function: cubic-bezier(0.860, 0.000, 0.070, 1.000);
    -o-transition-timing-function: cubic-bezier(0.860, 0.000, 0.070, 1.000);
    transition-timing-function: cubic-bezier(0.860, 0.000, 0.070, 1.000);
}

.sidenav-bar-visible .search-popup{
	width: 80%;
}


.search-active .search-popup{
	transform: translateY(0%);
	margin-top: 0;
}

.search-popup .close-search{
	position: absolute;
	left: 0;
	right: 0;
	top: 75%;
	margin: 0 auto;
	margin-top: -200px;
	border-radius: 50%;
	text-align: center;
	background-color: #D9916A;
	width: 70px;
    height: 70px;
	cursor:pointer;
	box-shadow: 0 0 10px rgba(0,0,0,0.05);
	border-bottom: 3px solid #ffffff;
	-webkit-transition: all 500ms ease;
	-moz-transition: all 500ms ease;
	-ms-transition: all 500ms ease;
	-o-transition: all 500ms ease;
	transition: all 500ms ease;
	opacity: 0;
	visibility: hidden;
}

.search-popup .close-search i{
	position: relative;
	display: block;
	height: 70px;
	width: 70px;
	font-size: 30px;
	line-height: 50px;
	color: #ffffff;
}

.search-active .search-popup .close-search{
	visibility: visible;
	opacity: 1;
	top: 40%;
	-webkit-transition-delay: 1500ms;
	-moz-transition-delay: 1500ms;
	-ms-transition-delay: 1500ms;
	-o-transition-delay: 1500ms;
	transition-delay: 1500ms;
}

.search-popup form{
	position: absolute;
	max-width: 700px;
	top: 40%;
	left: 15px;
	right: 15px;
	margin:-35px auto 0;
	transform: scaleX(0);
	transform-origin: center;
	background-color: #111111;
	-webkit-transition: all 300ms ease;
	-moz-transition: all 300ms ease;
	-ms-transition: all 300ms ease;
	-o-transition: all 300ms ease;
	transition: all 300ms ease;
}

.search-active .search-popup form{
	transform: scaleX(1);
	-webkit-transition-delay: 1200ms;
	-moz-transition-delay: 1200ms;
	-ms-transition-delay: 1200ms;
	-o-transition-delay: 1200ms;
	transition-delay: 1200ms;
}

.search-popup .form-group{
	position:relative;
	margin:0px;	
	overflow: hidden;
}

.search-popup .form-group input[type="text"],
.search-popup .form-group input[type="search"],
.search-popup .form-group input[type="number"]{
	position:relative;
	display:block;
	font-size:18px;
	line-height: 50px;
	color:#000000;
	height:70px;
	width:100%;
	padding: 10px 30px;
	background-color: #ffffff;
	-webkit-transition:all 500ms ease;
	-moz-transition:all 500ms ease;
	-ms-transition:all 500ms ease;
	-o-transition:all 500ms ease;
	transition:all 500ms ease;
	font-weight:500;
	text-transform:capitalize;
}

.search-popup .form-group input[type="submit"]{
	position:absolute;
	right:30px;
	top:0px;
	height:70px;
	line-height: 70px;
	background: transparent;
	text-align:center;
	font-size:24px;
	color:#000000;
	padding: 0;
	cursor:pointer;
	-webkit-transition:all 500ms ease;
	-moz-transition:all 500ms ease;
	-ms-transition:all 500ms ease;
	-o-transition:all 500ms ease;
	transition:all 500ms ease;
}

.search-popup .form-group input[type="submit"]:hover,
.search-popup .form-group button:hover{
	color: #000000;
}

.search-popup input::placeholder,
.search-popup textarea::placeholder{
	color:#000000;
}

.search-popup .close-search.style-two{
	position: absolute;
	right: 25px;
	left: auto;
	color:#ffffff;
	width:auto;
	height:auto;
	top:25px;
	margin:0px;
	border:none;
	background:none !important;
	box-shadow:none !important;
	-webkit-transition:all 500ms ease;
	-moz-transition:all 500ms ease;
	-ms-transition:all 500ms ease;
	-o-transition:all 500ms ease;
	transition:all 500ms ease;
}

.search-popup .close-search.style-two i{
	font-size:20px;
	color:#ffffff;
}
    </style>
	<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "qyuo6cu3ll");
</script>
</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
       
        <!-- start header -->
        <header id="header">
            <div class="wpo-site-header wpo-header-style-3">
                <nav class="navigation navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                                <div class="mobail-menu">
                                    <button type="button" class="navbar-toggler open-btn">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar first-angle"></span>
                                        <span class="icon-bar middle-angle"></span>
                                        <span class="icon-bar last-angle"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-6">
                                <div class="navbar-header">
                                    <a class="navbar-brand " href="/"><h2 class="text-white">Style Interiors</h2></a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-1 col-1">
                                <div id="navbar" class="collapse navbar-collapse navigation-holder">
                                    <button class="menu-close"><i class="ti-close"></i></button>
                                    <ul class="nav navbar-nav mb-2 mb-lg-0">
                                        <li class="menu-item-has-children">
                                            <a class="" href="/">Home</a>
                                        </li>
                                        <li><a href="about-us.php">About Us</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="products.php">Products</a>
                                            
                                        </li>
                                        
                                        <li><a href="contact-us.php">Contact Us</a></li>
                                    </ul>
                                </div><!-- end of nav-collapse -->
                            </div>
                            <div class="col-lg-2 col-md-2 col-2">
                                <div class="header-right">
                                    
                                    <div class="header-search-form-wrapper">
                                        <div class="cart-search-contact">
                                            <button class="search-toggle-btn"><i class="fi flaticon-loupe"></i></button>
                                            <div class="header-search-form">
                                                <form>
                                                    <div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Search here...">
                                                        <button type="submit"><i class="fi flaticon-loupe"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end of container -->
                </nav>
            </div>
        </header>
        <!-- end of header -->

        <!-- start wpo-page-title -->
        <section class="wpo-page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Glass Analog Wall Clock</h2>
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="/">Home</a></li>
                                <li>Glass Analog Wall Clock</li>
                            </ol>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

        <!-- start wpo-shop-single-section -->
        <section class="wpo-shop-single-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-12">
                        <div class="shop-single-slider">
                            <div class="slider-for">
                                
                                <div><img src="assets/images/sub1.jpg" alt></div>
                               
                            </div>
                            
                        </div>
                    </div>  

                    <div class="col col-lg-6 col-12">
                        <div class="product-details">
                            <h2>Solimo 12-Inch Plastic & Glass Analog Wall Clock - Classic Roulette (Silent Movement, Black Frame)</h2>
                            <div class="product-rt">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <span>(25 customer reviews)</span>
                            </div>
                            <div class="price">
                                <span class="old">$30.00</span>
                                <span class="current">$22.00</span>
                            </div>
                            <p>Dial size: 12 inches in diameter Material of the frame: Plastic Material of the transparent face: Glass Big, clear representation of the numbers on the clock Makes no sound while tracking time, sweep movement Ideal for living room, bedroom & offices Pack contents: 1 Wall Clock</p>
                                <ul>
                                    <li>Display Type - Analog</li>
                                    <li>Style - Glass Wall Clock - Classic Roulette</li>
                                    <li>Special Feature - Silent Clock</li>
                                    <li>Power Source - Battery Powered</li>
                                </ul>
                                <div class="product-option">
                                    <form class="form">
                                        <div class="product-row">
                                            <div>
                                                <input id="product-count" type="text" value="1" name="product-count">
                                            </div>

                                            <div class="button-box">
                                                <div class="btn-search btn btn-primary rounded-pill search-box-btn search-box-outer theme-btn btn-style-two clearfix py-1" style="background: #b1916c;"><span class="icon"></span>Buy Now</div>
                                            </div>
                                         
                                            <div>
                                                <button class="theme-btn heart-btn"><i class="ti-heart"></i></button>
                                                <span></span>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- end option -->
                               
                        </div> <!-- end product details -->
                    </div> <!-- end col -->
                </div> <!-- end row -->

               
            </div> <!-- end of container -->
        </section>
        <!-- end of wpo-shop-single-section -->


        <!-- Search Popup -->
	<div class="search-popup">
		<button class="close-search style-two"><span class="flaticon-multiply"></span></button>
		<button class="close-search"><i class="fa fa-close"></i></button>
    	<form>
			<div class="form-group">
                <input type="text" class="form-control p-3" placeholder="Enter First Name">
			</div>
			<div class="form-group mt-3">
				<input type="text" class="form-control p-3" placeholder="Enter Last Name">
			</div>
			<div class="form-group mt-3">
				<input type="text" class="form-control p-3" placeholder="Enter Email Address">
			</div>
			<div class="form-group mt-3">
            <button class="theme-btn btn-style-two clearfix"><span class="icon"></span>Submit</button>
			</div>
		</form>
	</div>
	<!-- End Header Search -->

    

       <!-- start of wpo-site-footer-section -->
    <footer class="wpo-site-footer-s2">
        <div class="shape-1">
            <svg width="596" height="590" viewBox="0 0 596 590" fill="none">
                <path d="M148 590L596 0H0L148 590Z" />
            </svg>
        </div>
        <div class="shape-2">
            <svg width="328" height="510" viewBox="0 0 328 510" fill="none">
                <path d="M62 0L328 226V510H62L0 472L62 0Z" />
            </svg>
        </div>
        <div class="wpo-upper-footer">
            <div class="container">
                <div class="row">
                    <div class="row mt-0">
                        <div class="col-md-12 text-center">
                            
                        <a href="privacy-policy.php" style="margin-left:10px;">Privacy Policy</a>
                        <a href="terms-and-conditions.php" style="margin-left:10px;">Terms And Conditions</a>
                        <a href="cookie-policy.php" style="margin-left:10px;">Cookie Policy</a>
                        <a href="disclaimer.php" style="margin-left:10px;">Disclaimer</a><br><br>
        <p>Copyright © 2025, All Rights Reserved.</p>
                        </div>
                        </div>
                    
                    
                </div>
            </div> <!-- end container -->
        </div>
    </footer>
    <!-- end of wpo-site-footer-section -->
     


</div>
<!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins for this template -->
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/jquery.dlmenu.js"></script>
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>

    <script>
        (function($) {
	
	"use strict";
	


	
	//Header Search
	if($('.search-box-outer').length) {
		$('.search-box-outer').on('click', function() {
			$('body').addClass('search-active');
		});
		$('.close-search').on('click', function() {
			$('body').removeClass('search-active');
		});
	}
	
	
})(window.jQuery);
    </script>
    
</body>

</html>