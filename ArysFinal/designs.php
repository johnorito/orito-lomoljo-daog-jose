<?php
session_start();
  include("includes/connection.php");
  include("includes/functions.php");

  $user_data = check_login($con);
  
?>
<!--Lock-->

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
          <li><a href ="user.php" class="dropbtn" style="color: white; text-decoration: none; font-size: 25px;"><?php echo $user_data['username']; ?></a></li>
        </ul>
     </div>
     </nav>
     
</head>
  <body>
  <p class="heading">Gallery</p>
<!--
    <For Image box">
    <?php
      include_once('includes/dbh.php');

      $sql = "SELECT * FROM designs ORDER BY orderDesigns DESC";
      $stmt = mysqli_stmt_init($con);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed!";
      } else {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while ($row = mysqli_fetch_assoc($result)) {
          echo '<img src="images/designs/'.$row["imgFullNameDesigns"].'"></a>
            <div class="transparent-box">
              <div class="caption">
                <p>'.$row["titleDesigns"].'</p>
                <p class="opacity-low"'.$row["descDesigns"].'</p>
              </div>
          </div> ';

        }
      }
      ?>
-->

  <section class="g-links">

    <div class="g-container">
      <?php
      include_once('includes/dbh.php');

      $sql = "SELECT * FROM designs ORDER BY orderDesigns DESC";
      $stmt = mysqli_stmt_init($con);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed!";
      } else {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while ($row = mysqli_fetch_assoc($result)) {
          echo '<a href="#">
            <div style="background-image: url(images/designs/'.$row["imgFullNameDesigns"].');"></div>
            <h3>'.$row["titleDesigns"].'</h3>
            <p>'.$row["descDesigns"].'</p>
          </a>';

        }

      }

      
      ?>
    </div>

    <div class="g-upload">
      <form action="includes/designs-upload.php" method="post" enctype="multipart/form-data">
        <input type="text" name="filename" placeholder="Alias">
        <input type="text" name="filetitle" placeholder="Image Title..">
        <input type="text" name="filedesc" placeholder="Image Description..">
        <input type="file" name="file">
        <button type="submit" name="submit" class="btn-submit">UPLOAD</button>
      </form>
    </div>
  </section>

</body>
</html>