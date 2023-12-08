<?php
session_start();
  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);
  
?>

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
	<title>Arts and Design BLOG | About</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatibile" content="IE=edge"/>
	<!--(NEW)-->
<meta name="viewport" content="with=device-width, inital-scale=1.0">
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
        <li><a href ="#" style="color: white; text-decoration: none; font-size: 25px;"><?php echo $user_data['username']; ?></a></li>
	      </ul>
	</div>
  </nav>
  </section>
<div class="text-box">

<h1>About Us</h1>
<p>
Hi, We Welcome you all to our website where all users can create, put and showcase there skills!<br>In every design and style of arts shows how the artist feels and wanted to make the viewers feel

</p>
<a href="#" target="_blank" class="hero-btn">Be Part Of Us!</a>
</div>
  <section class="about">
    <h1>Our Team</h1>

    <div class="row">
        <div class="course-col">
          <h3> John Dellor Orito </h3>
          <p>[Needed Content] </p>
        </div>
        <div class="course-col">
          <h3> Bernadeth Lomoljo </h3>
          <p>[Needed Content]</p>
        </div>
        <div class="course-col">
          <h3> Odely Marie Jose </h3>
          <p>[Needed Content] </p>
        </div>
        <div class="course-col">
            <h3> Joseph Daug </h3>
            <p>[Needed Content] </p>
          </div>
    </div>	   
</section>
</html>
