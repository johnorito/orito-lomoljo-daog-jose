<?php
session_start();
  include("includes/connection.php");
  include("includes/functions.php");

  $user_data = check_login($con);
  
?>
<!DOCTYPE html>
<html>

	<head>
		<!--(NEW)-->
		<title>Arts and Design BLOG | Home</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta http-equiv="X-UA-Compatibile" content="IE=edge"/>
		<!--(NEW)-->
		<link rel="stylesheet" href="style.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
	</head>

	<body>

	<section class="header">
	<nav>
	<a href="index.html"><img src="images/mainlogo.png"></a>
	<div class="nav-links">
			<ul>
			<li><a href ="user_index.php">Home</a></li>
			<li><a href ="designs.php">Designs</a></li>
			<li><a href ="user_about.php">About</a></li>
			<li><a href ="user.php" style="color: white; text-decoration: none; font-size: 25px;"><?php echo $user_data['username']; ?></a></li>
			</ul>
		</div>
	</nav>
	<div class="text-box">

	<h1>Arts and Design Blog</h1>
	<p>
	Welcome to Arts and Design is a type of blog that will showcase different kinds of arts.<br> Display and show the talents that we have specially to our users that shares there designs with us.
	<br>What are you waiting for? Be part of us.

	</p>
	<a href="designs.php?login=success" target="_blank" class="hero-btn">Go to Designs now!</a>
	</div>
	
	</section>	
	<br>
	<section>
	<h1 style="text-align: center;">Designs and Arts Showcase</h>
	<p style="text-align: center;">This are some of the designs and arts that we will showcase that is being created by our team and that is being shared by users.</P>

	<div class="gallery-image">
		<div class="img-box">
			<img src="images/starrynight.jpg"></a>
			<div class="transparent-box">
				<div class="caption">
					<p>Library</p>
					<p class="opacity-low">Architect Design</p>
				</div>
			</div> 
		</div>
		<div class="img-box">
			<img src="images/monalisa.jpg"></a>
			<div class="transparent-box">
				<div class="caption">
					<p>Night Sky</p>
					<p class="opacity-low">Cinematic</p>
				</div>
			</div>
		</div>
		<div class="img-box">
			<img src="images/R1.PNG"></a>
			<div class="transparent-box">
				<div class="caption">
					<p>Tea Talk</p>
					<p class="opacity-low">Composite</p>
				</div>
			</div>
		</div>
		<div class="img-box">
			<img src="images/r2.jpg"></a>
			<div class="transparent-box">
				<div class="caption">
					<p>Road</p>
					<p class="opacity-low">Landscape</p>
				</div>
			</div> 
		</div>
		<div class="img-box">
			<img src="images/r4.jpg"></a>
			<div class="transparent-box">
				<div class="caption">
					<p>Sea</p>
					<p class="opacity-low">Cityscape</p>
				</div>
			</div> 
		</div>
		<div class="img-box">
			<img src="images/r5.PNG"></a>
			<div class="transparent-box">
				<div class="caption">
					<p>Vintage</p>
					<p class="opacity-low">Cinematic</p>
				</div>
			</div> 
		</div>
	</div>
	</section> 
	<hr>
	<!---------- Testimonials ---------->

	<section class="testimonials">
	<h1> Famous Artist </h1>
	<p> This two are just some of the main reason why art is being valued by others by the use of there creations that catches others attention.</p>

	<div class="row">
	<div class="testimonials-col">
		<img src="images/ldv.jpg">
		<div>
		<p>“Art is never finished, only abandoned.”</p>
		<h3> - Leonardo Da Vinci </h3>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star-o"></i>
		</div>
	</div>
	<div class="testimonials-col">
		<img src="images/vvg.png">
		<div>
		<p>“Art is to console those who are broken by life.”<p>
		<h3> - Vincent Van Gogh </h3>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star-half-o"></i>
		</div>
	</div>
	</div>
	</section>
	<section>
		<footer class="site-footer">
			<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6">
				<h6>About</h6>
				<p class="text-justify">Designs</div>
	
				<div class="col-xs-6 col-md-3">
				<h6>Categories</h6>
				<ul class="footer-links">
					<li>Abstract</li>
					<li>Painting</li>
					<li>Sculpture</li>
					<li>Visualk Art</li>
					<li>Conceptual Art</li>
					<li>Pop Art</li>
				</ul>
				</div>
	
				<div class="col-xs-6 col-md-3">
				<h6>-</h6>
				<ul class="footer-links">
					<li>Cubism</li>
					<li>Contemporary Art</li>
					<li>Op Art</li>
					<li>Minimalism</li>
					<li>Realism</li>
				</ul>
				</div>
			</div>
			<hr>
			</div>
			<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-6 col-xs-12">
				<p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
			<a href="#">Arts and Design Blog</a>.
				</p>
				</div>
	
				<div class="col-md-4 col-sm-6 col-xs-12">
				<ul class="social-icons">
					<li><a class="facebook" href="#"><i class="fa-brands fa-facebook"></i></i></a></li>
					<li><a class="twitter" href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
					<li><a class="dribbble" href="#"><i class="fa-brands fa-instagram"></i></i></a></li>
					<li><a class="linkedin" href="#"><i class="fa-brands fa-linkedin"></i></a></li>   
				</ul>
				</div>
			</div>
			</div>
	</footer>

	</body>
</html>