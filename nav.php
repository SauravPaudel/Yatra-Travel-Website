<?php 
  session_start();
  $_SESSION['login'] = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yatra</title>
  <link rel="stylesheet" href="Homestyle.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="https://kit.fontawesome.com/df7e5de428.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" type="image/x-icon" href="images/Yatra.png" />

  
  


</head>
<body>
<header>
        <a href="#" class="logo">Yatra</a>
        <ul class="link">
            <li><a href="Home.php">Home</a></li>
            <li><a href="trip.php">Trip</a></li>
            <!-- <li><a href="#">Blogs</a></li> -->
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="about.html">About us</a></li>
            <li><?php
              if($_SESSION['login'] == "loggedin"){?>
                <a href="#"><?php echo $_SESSION['username'];?></a>
              <?php }
              else{?>
              <a href="login.php">Sign In</a>
              <?php } ?>

            </li>

        </ul>
</header>