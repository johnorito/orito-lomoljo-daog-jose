<?php
session_start();
  include("includes/connection.php");
  include("includes/functions.php");

  if($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $username = $_POST['username'];
    $password = $_POST['password'];
    $dup = mysqli_query($con, "SELECT * FROM user WHERE username = '$username'");

    if(mysqli_num_rows($dup) > 0) {
      header("Location: register.php?register=failed");
      die;
    } else if (!empty($username) && !empty($password) && !is_numeric($username)) {
      //save to database
      $user_id = random_num(20);
      $query = "INSERT INTO user (user_id,username,password) VALUES ('$user_id','$username','$password')";

      mysqli_query($con, $query);

      header("Location: login.php?register=success");
      die;
    } else {
      echo "Please enter valid information!";
    }
  }
  
?>

<!DOCTYPE html>
<html>
<head>
  <!--(NEW)-->
	<title>Arts and Design BLOG | Register</title>
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
                <li><a href ="index.php">Home</a></li>
                <li><a href ="designs.php">Designs</a></li>
                <li><a href ="about.php">About</a></li>
                <li><a href ="register.php">Register</a></li>
                </ul>
           </div>
         </nav>
<div class="text-box">

  <form method="POST">
    
    <div class="container">
      <div class="background">
      <h1>Register</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>

      <div>
        <label for="username"><b>Username</b></label>
        <input type="username" placeholder="Enter Username" name="username" id="username" required>
      </div>

      <div>
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password" required>
      </div>  

      <hr>
      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

      <button type="submit" class="registerbtn">Register</button>
    </div>
  </div>
    <div class="container signin">
      <p>Already have an account? <a href="login.php">Sign in</a>.</p>
    </div>
  </form>
  <h3 style="text-align: center;">
  <?php
    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if (strpos($fullUrl, "register=failed") == true) {
      echo "<p class='error'>Username is already taken!</p>";
      exit();
    } else if (strpos($fullUrl, "register=success") == true) {
      echo "<p class='success'>Please Login!</p>";
      exit();
    }
  ?>
  </div>
  </h3>
</body>
</html>