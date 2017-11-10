<?php 
if(!session_id()) session_start();
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
							<a href="services.php">Services</a>
						</li>

						<li class="active"><a href="secure.php">Secure Page</a></li>
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
							<h1>Secure Section</h1>
							<h2>Login with Admin Credentials to see a list of users</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<script type="text/javascript">
  		function submitForm(action) 
  		{
    		var form = document.getElementById('form1');
    		form.action = action;
    		form.submit();
  		}
	</script>
	<div id="gtco-started">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Get Started</h2>
				</div>
			</div>
			
			<div class="row animate-box" >
				<div class="col-md-16">
					<form class="form-inline" method="post" id="form1">
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="email" class="sr-only">User ID</label>
								<input type="text" class="form-control" id="userid" placeholder="User ID" name="userid" required="required">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="password" class="sr-only">Password</label>
								<input type="password" class="form-control" id="password" placeholder="Password" name="password" style="">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
								<button type="submit" class="btn btn-default btn-block" name="submitBtn" onclick="submitForm('admin.php')">Sign In</button>					
						</div>
						<div class="col-md-4 col-sm-4">
								<button type="submit" onclick="submitForm('newUser.php')" class="btn btn-default btn-block" name="newUsrBtn">New User</button>					
						</div>
						<?php 
							if(isset($_SESSION['error'])) 
							{
								$msg = "Invalid Username/Password";
								echo "<script type='text/javascript'>alert('$msg');</script>";
								echo $_SESSION['error'];
								unset($_SESSION['error']);
							}
						?>
					</form>
				</div>
			</div>
		</div>
	</div>	 
	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
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

