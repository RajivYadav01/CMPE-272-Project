<?php
	$cookiesCount = array();
	if (isset($_COOKIE['ConnnectorsCount']))
	{
		array_push($cookiesCount,['name' => 'ConnnectorsCount','countVal' => $_COOKIE['ConnnectorsCount']]);
	}
	if (isset($_COOKIE['MagneticsCount']))
	{
		array_push($cookiesCount, ['name' =>'MagneticsCount', 'countVal' => $_COOKIE['MagneticsCount']]);
	}
	if (isset($_COOKIE['OptoelectronicsCount']))
	{
		array_push($cookiesCount, ['name' => 'OptoelectronicsCount','countVal' => $_COOKIE['OptoelectronicsCount']]);
	}
	if (isset($_COOKIE['ResistorsCount']))
	{
		array_push($cookiesCount, ['name' => 'ResistorsCount','countVal' => $_COOKIE['ResistorsCount']]);
	}
	if (isset($_COOKIE['SemiconductorsCount']))
	{
		array_push($cookiesCount, ['name' => 'SemiconductorsCount','countVal' => $_COOKIE['SemiconductorsCount']]);
	}
	if (isset($_COOKIE['SensorsCount']))
	{
		array_push($cookiesCount, ['name' => 'SensorsCount','countVal' => $_COOKIE['SensorsCount']]);
	}
	if (isset($_COOKIE['CapacitorCount']))
	{
		array_push($cookiesCount, ['name' => 'CapacitorCount','countVal' => $_COOKIE['CapacitorCount']]);
	}
	if (isset($_COOKIE['EncoderCount']))
	{
		array_push($cookiesCount, ['name' => 'EncoderCount','countVal' => $_COOKIE['EncoderCount']]);
	}
	if (isset($_COOKIE['AudioCount']))
	{
		array_push($cookiesCount, ['name' => 'AudioCount','countVal' => $_COOKIE['AudioCount']]);
	}
	$res_array = array();
	foreach ($cookiesCount as $key => $val)
	{
		$res_array[$key] = $val['countVal'];
	}
	array_multisort($res_array,SORT_DESC,$cookiesCount);
	//print_r($cookiesCount);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>ABC Electronics &mdash; Biggest Manufacturer of Electronic
	Components</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description"
	content="Free HTML5 Website Template by gettemplates.co" />
<meta name="keywords"
	content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
<meta name="author" content="gettemplates.co" />

<!--
	Oxygen by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
	-->

<!-- Facebook and Twitter integration -->
<meta property="og:title" content="" />
<meta property="og:image" content="" />
<meta property="og:url" content="" />
<meta property="og:site_name" content="" />
<meta property="og:description" content="" />
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

<style type="text/css">
	table 
	{
    	font-family: arial, sans-serif;
    	border-collapse: collapse;
    	width: 100%;
	}

	td, th 
	{
    	border: 1px solid #dddddd;
    	text-align: left;
    	padding: 8px;
	}

	tr:nth-child(even) 
	{
    	background-color: #dddddd;
	}
	
	</style>

</head>
<body>

	<div class="gtco-loader"></div>

	<div id="page">
		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">
				<div class="row">
					<div class="col-xs-2">
						<div id="gtco-logo">
							<a href="index.html">Delta Electronics</a>
						</div>
					</div>
					<div class="col-xs-8 text-center menu-1">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li class="has-dropdown active"><a href="services.php">Services</a>
							
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

		<header id="gtco-header" class="gtco-cover gtco-cover-sm"
			role="banner" style="background-image: url(images/img_bg_1.jpg);">

			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<h1>Most Viewed</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div id="gtco-features">
		<!--  
		<table>
  		<tr>
    		<th>Most Viewed</th>
					<?php 
						/*$new_arr = array_slice($cookiesCount, 0,5,true);
  						foreach ($new_arr as $key => $value)
  						{
  							print("<tr>");
  							//if($value !== '#DEF')
  							{
  								print("<td>".substr($value['name'], 0,-5)."</td>");
  							}
  							print("</tr>");
  						}*/				
  					?>
  		</table>
		-->
		<!-- 
		<span>
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-4 col-sm-4 animate-box"
						data-animate-effect="fadeIn" id="Connectors" 
						<?php 
							/*$searchKey = 'ConnnectorsCount';
							$pos = array_search($searchKey,$cookiesCount);
							if($pos < 3)
							{
								echo 'style="display:none; visibility:hidden"';
								
							}*/
						?>>
						<div class="feature-center">
							<span class="icon"> <i class="icon-eye"></i>
							</span>
							<h3>
								<a href="Connectors.php">Connectors</a>
							</h3>
							<p>Delta Electronics' brand AB Connectors specialises in delivering highly complex electronic connectors and interconnection systems for aerospace & defence, industrial and rail applications</p>

						</div>
					</div>
					<div class="col-md-4 col-sm-4 animate-box"
						data-animate-effect="fadeIn">
						<div class="feature-center">
							<span class="icon"> <i class="icon-command"></i>
							</span>
							<h3><a href="Magnetics.php">Magnetics</a></h3>
							<p>Delta Electronics offers a wide portfolio of magnetic products and technologies for applications across aerospace, automotive, industrial and medical markets.</p>

						</div>
					</div>
					<div class="col-md-4 col-sm-4 animate-box"
						data-animate-effect="fadeIn">
						<div class="feature-center">
							<span class="icon"> <i class="icon-power"></i>
							</span>
							<h3><a href="Optoelectronics.php">Optoelectronics</a></h3>
							<p>Delta Electronics is a leading supplier of optoelectronic products for sensing, illumination, and indication applications, provided through our OPTEK Technology brand.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 animate-box"
						data-animate-effect="fadeIn">
						<div class="feature-center">
							<span class="icon"> <i class="icon-eye"></i>
							</span>
							<h3>
								<a href="Resistors.html">Resistors</a>
							</h3>
							<p>Within Delta Electronics resistors business unit are multiple manufacturing facilities and dedicated engineering teams providing custom solutions.</p>

						</div>
					</div>
					<div class="col-md-4 col-sm-4 animate-box"
						data-animate-effect="fadeIn">
						<div class="feature-center">
							<span class="icon"> <i class="icon-eye"></i>
							</span>
							<h3>
								<a href="Semiconductors.html">Semiconductors</a>
							</h3>
							<p>Delta Electronics designs and manufactures high performance semiconductor solutions, through its Semelab brand, for use in mission critical applications in harsh environments featured on globally recognised aerospace, space, defence and industrial platforms</p>

						</div>
					</div>
					<div class="col-md-4 col-sm-4 animate-box"
						data-animate-effect="fadeIn">
						<div class="feature-center">
							<span class="icon"> <i class="icon-eye"></i>
							</span>
							<h3>
								<a href="Sensors.html">Sensors</a>
							</h3>
							<p>Delta Electronics has one of the widest sensing portfolios in the industry</p>

						</div>
					</div>
				</div>
			</div>
		</span>
		</div>
		<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
			<h3>Recently Viewed</h3>
		</div>

		<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
			<h3>Most Viewed</h3>
		</div>
		<div></div>

		<div id="gtco-features-2">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
						<h2>Why Choose Us</h2>
						<p>Delta Electronics has much more bandwidth than any other
							manufacturers.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="feature-left animate-box"
							data-animate-effect="fadeInLeft">
							<span class="icon"> <i class="icon-check"></i>
							</span>
							<div class="feature-copy">
								<h3>Custom Solutions</h3>
								<p>Our model is built on providing customized solutions to meet
									your power requirements. Whether you require a DC drive, an AC
									drive, a custom drive, a custom PCB, custom cabling or a unique
									firmware solution, our engineering and production teams are
									ready and able to assist.</p>
							</div>
						</div>

						<div class="feature-left animate-box"
							data-animate-effect="fadeInLeft">
							<span class="icon"> <i class="icon-check"></i>
							</span>
							<div class="feature-copy">
								<h3>Electronic Solutions</h3>
								<p>Not everything has to be a motor. Delta Electronics has had
									many successes designing non-motor control solutions for
									customers.</p>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="gtco-video gtco-bg"
							style="background-image: url(images/img_1.jpg);">
							<a href="https://vimeo.com/channels/staffpicks/93951774"
								class="popup-vimeo"><i class="icon-video2"></i></a>
							<div class="overlay"></div>
						</div>
					</div>
				</div>
			</div>
			 -->
		</div>
		<footer id="gtco-footer" role="contentinfo">
			<div class="gtco-container">
				<div class="row">
					<!--
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
								<small class="block">&copy; Delta Electronics. All Rights
									Reserved.</small>
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
	
	
<script>
if ( $( "#gtco-features" ).length ) 
{
	new_div();
}

function new_div()
{
	<?php 
		$reversed = array_slice($cookiesCount, 0,5,true);
		$cnt = 0;
		$myarr = "console.log(\"arr =>";
		for ($x = 0; $x <= 4; $x++)
		{
			//$myarr = $myarr.", '".$reversed[$x]['name']."'";
			if(!empty($reversed[$x]['name']))
			{
			if($cnt !== 3)
			{
				echo "var newdiv = document.createElement('div');
				newdiv.innerHTML = \"<div class='col-md-4 col-sm-4 animate-box' data-animate-effect='fadeIn'>\"+
				\"<div class='feature-center'><span class='icon'>\"+
				\"<i class='icon-eye'></i>\"+
				\"</span><h3><a href='".substr($reversed[$x]['name'],0,-5).".php'>".substr($reversed[$x]['name'],0,-5)."</a></h3>\"+
				\"</div>\"+
				\"</div>\";
				document.getElementById('gtco-features').appendChild(newdiv);";
				$cnt = $cnt + 1;
			}
			else
			{
				echo "var newdiv = document.createElement('div');
				newdiv.innerHTML = \"<br><div class='col-md-4 col-sm-4 animate-box' data-animate-effect='fadeIn'>\"+
				\"<div class='feature-center'><span class='icon'>\"+
				\"<i class='icon-eye'></i>\"+
				\"</span><h3><a href='".substr($reversed[$x]['name'],0,-5).".php'>".substr($reversed[$x]['name'],0,-5)."</a></h3>\"+
				\"</div>\"+
				\"</div>\";
				document.getElementById('gtco-features').appendChild(newdiv);";
				$cnt = $cnt + 1;
			}
			}
		}
		$myarr = $myarr."\");";
		echo $myarr;
	?>
}
</script>

</body>
</html>

