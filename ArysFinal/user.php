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
	<title>Arts and Design BLOG | Login</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatibile" content="IE=edge"/>
	<!--(NEW)-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="rstyle.css">
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

<form action="includes/logout.php" method="POST">
  <div class="container">
    <div class="background">
    <h1>User information</h1>
    <hr>
	<b>User Level</b>
	<p>- User</p>
	<b>User Name</b>
	<p>- <?php echo $user_data['username']; ?></p>
	<b>Date Created</b>
	<p>- <?php echo $user_data['date']; ?></p>
	<hr>
    <button type="submit" class="registerbtn">Logout</button>
  </div>
</div>
</form>

</body>
</html>