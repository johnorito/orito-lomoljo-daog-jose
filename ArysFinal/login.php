<?php
session_start();
  include("includes/connection.php");
  include("includes/functions.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password) && !is_numeric($username)) 
    {
      //read to database
      $query = "select * from user where username = '$username' limit 1";
      $result = mysqli_query($con, $query);


      if($result)
      {
        if($result &&  mysqli_num_rows($result) > 0)
        {
          $user_data = mysqli_fetch_assoc($result);
          if($user_data['password'] === $password)
          {
            $_SESSION['user_id'] = $user_data['user_id'];
            header("Location: designs.php?login=success");
            die;
          }
        }
      }
      echo "Please enter valid information!";
    }else
    {
      echo "Please enter valid information!";
    }
  }
  
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
    <h1>Login</h1>
    <p>Please fill in this form to Login and to access Designs.</p>
    <hr>

    <div>
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" id="text" required>
    </div>

    <div>
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" id="password" required>
    </div>  

    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Login</button>
  </div>
</div>
  <div class="container signin">
    <p>Don't have an account? <a href="register.php">Sign Up</a>.</p>
  </div>
</form>

</body>
</html>