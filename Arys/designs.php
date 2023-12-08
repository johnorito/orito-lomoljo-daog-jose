<?php
session_start();
  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);
  
?>
<!--session lock-->

<!DOCTYPE html>
<html>
<head>
  <!--(NEW)-->
	<title>Arts and Design BLOG | Design</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatibile" content="IE=edge"/>
	<!--(NEW)-->
  <link rel="stylesheet" href="dstyle.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:600,900" rel="stylesheet">
  <section class="header">
    <nav>
      <a href="index.html"><img src="images/mainlogo.png"></a>
      <div class="nav-links">
          <ul>
          <li><a href ="user_index.php">Home</a></li>
          <li><a href ="designs.php">Designs</a></li>
          <li><a href ="user_about.php">About</a></li>
          <li><a href ="#" class="dropbtn" style="color: white; text-decoration: none; font-size: 25px;"><?php echo $user_data['username']; ?></a></li>
          <li><a href ="logout.php">Logout</a></li>
        </ul>
     </div>
     </nav>
</head>
  <body>
  <p class="heading">Gallery</p>
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
</div>
</div>
</body>
</html>