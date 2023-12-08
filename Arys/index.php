<!DOCTYPE html>
<html>
<head>
	<style>
		.header{
	min-height: 100vh;
	width: 100%;
	background-position: center;
	background-size: cover;
	position: relative;
	animation: image 3s infinite alternate;	
}	
@keyframes image {
	0% {
	  background-image: url(images/3bd.jpg);
	}
	50% {
	  background-image: url(images/2bd.jpg);
	}
	100%{
		background-image: url(images/1bd.jpg);
	 }
  }
</style>
	<!--(NEW)-->
	<title>Arts and Design BLOG | Home</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatibile" content="IE=edge"/>
	<!--(NEW)-->
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<section class="header">
 <nav>
   <a href="index.html"><img src="images/mainlogo.png"></a>
   <div class="nav-links">
	     <ul>
		    <li><a href ="index.php">Home</a></li>
			<li><a href ="designs.php">Designs</a></li>
			<li><a href ="about.php">About</a></li>
			<li><a href ="register.php">Register</a></li>
	     </ul>
	</div>
  </nav>
<div class="text-box">

<h1>Arts and Design Blog</h1>
<p>
Welcome to Arts and Design is a type of blog that will showcase different kinds of arts.<br> Display and show the talents that we have specially to our users that shares there designs with us.
<br>What are you waiting for? Be part of us.

</p>
<a href="register.php" target="_blank" class="hero-btn">Register Here!</a>
</div>
  
</section>	
<section class="campus">

<h1>Designs and Arts Showcase</h>
<p>This are some of the designs and arts that we will showcase that is being created by our team and that is being shared by users.</P>
<div class="row">
		<div class="campus-col">
		  <img src="images/Picture1.png">
		  <div class="layer">
			  <h3>Photo-Realist</h3>
		  </div>
		 </div>
		 <div class="campus-col">
		  <img src="images/Picture4.jpg">
		  <div class="layer">
			  <h3>Neo-Pop</h3>
		  </div>
		 </div>
		 <div class="campus-col">
		  <img src="images/minimalism.png">
		  <div class="layer">
			  <h3>Minimalism</h3>
		  </div>
		 </div>
		 <div class="campus-col">
		  <img src="images/abstract.png">
		  <div class="layer">
			  <h3>Abstract</h3>
		  </div>
		 </div>
	  </div>   
	  <hr>
	  </section>
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
		   <a href="#">Arts and Design Blog.</a>
			  </p>
			</div>
  
			<div class="col-md-4 col-sm-6 col-xs-12">
			  <ul class="social-icons">
			  <a href="#" target="_blank" class="social-icons"><i class="fa fa-facebook"></i>
			  <a href="#" target="_blank" class="social-icons"><i class="fa fa-twitter"></i>
			  <a href="#" target="_blank" class="social-icons"><i class="fa fa-instagram"></i>
			  <a href="#" target="_blank" class="social-icons"><i class="fa fa-linkedin"></i>  
			  </ul>
			</div>
		  </div>
		</div>
  </footer>
</section>

</body>
</html>