<?php
	if (!isset($_COOKIE['OptoelectronicsCount']))
	{
		$OptoelectronicsCookie = 1;
		setcookie("OptoelectronicsCount", $OptoelectronicsCookie,time() + 86400);
	}
	else
	{
		$OptoelectronicsCookie = ++$_COOKIE['OptoelectronicsCount'];
		setcookie("OptoelectronicsCount", $OptoelectronicsCookie);
	}
	if (!isset($_COOKIE['TabCookie']))
	{
		$tabArray = array();
		array_push($tabArray,'#DEF');
		array_push($tabArray,'#DEF');
		array_push($tabArray,'#DEF');
		array_push($tabArray,'#DEF');
		array_push($tabArray,'Optoelectronics');
		setcookie("TabCookie", json_encode($tabArray),time() + 86400);
	}
	else
	{
		$tabArray = json_decode($_COOKIE['TabCookie']);
		$pos = array_search('Optoelectronics', $tabArray);
		if(!$pos)
		{
			array_shift($tabArray);
			array_push($tabArray,'Optoelectronics');
		}
		else
		{
			if($pos !== 4)
			{
				array_splice($tabArray, $pos,1);
				array_push($tabArray,'Optoelectronics');
			}
		}
		setcookie("TabCookie", json_encode($tabArray));
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Delta Electronics &mdash; Biggest Manufacturer of Electronic Components</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

	<!--
		Oxygen by gettemplates.co
		Twitter: http://twitter.com/gettemplateco
		URL: http://gettemplates.co
	-->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			<div class="row">
				<div class="col-xs-2">
					<div id="gtco-logo"><a href="index.html">Delta Electronics</a></div>
				</div>
				<div class="col-xs-8 text-center menu-1">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li class="has-dropdown">
							<a href="services.php" class="active">Services</a>
						</li>
						<!--  
						<li class="has-dropdown">
							<a href="#">Tools</a>
							<ul class="dropdown">
								<li><a href="#">HTML5</a></li>
								<li><a href="#">CSS3</a></li>
								<li><a href="#">Sass</a></li>
								<li><a href="#">jQuery</a></li>
							</ul>
						</li>
						-->
						<li><a href="secure.php">Secure Page</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				<div class="col-xs-2 text-right hidden-xs menu-2">
					<ul>
						<li class="btn-cta"><a href="#"><span>Login</span></a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image:url(images/img_bg_1.jpg);">

		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Optoelectronics</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading gtco-heading-sm">
					<h2>Detailed Description</h2>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-6">
					<p>We are widely recognised for our ability to provide highly engineered and application-specific optoelectronic sensors found in a multitude of applications. Our portfolio has three styles of products: standard components, special components, and custom sensor systems.</p> 
				</div>
				<div class="col-md-6">
					<p>Dedicated to delivering detect-free, competitive products, we meet and exceed our customers’ needs by incorporating the use of infrared, magnetic, fiber optic, and visible technologies.</p>
				</div>
			</div>
		</div>
	</div>
	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<!--  
			<div class="row">
				<div class="col-md-4 gtco-widget">
					<h3>The Company</h3>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
					<p><a href="#">Learn More</a></p>
				</div>
				<div class="col-md-2 col-md-push-1">
					<ul class="gtco-footer-links">
						<li><a href="#">About</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Meetups</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-md-push-1">
					<ul class="gtco-footer-links">
						<li><a href="#">Shop</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-md-push-1">
					<ul class="gtco-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Deelopers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>
			-->
			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; Delta Electronics. All Rights Reserved.</small> 
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

