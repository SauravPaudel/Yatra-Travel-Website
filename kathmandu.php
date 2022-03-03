<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="kathmandu.css">
  <link rel="shortcut icon" type="image/x-icon" href="images/ghumgham.png" />
  <script src="https://kit.fontawesome.com/df7e5de428.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <title>Kathmandu</title>
</head>
<body>
   <!-- Navigation bar -->
<header>
  <a href="#" class="logo">Yatra</a>
  <ul class="link">
      <li><a href="Home.php">Home</a></li>
      <li><a href="trip.php">Trip</a></li>
      <!-- <li><a href="#">Blogs</a></li> -->
      <li><a href="gallery.html">Gallery</a></li>
      <li><a href="about.html">About us</a>
      <?php
              if($_SESSION['login'] == "loggedin"){?>
              <!-- Hover Effect  -->
                <a id="logout" href="logout.php"><?php echo $_SESSION['username'];?></a>
              <?php }
              else{?>
              <a href="login.php">Sign In</a>
              <?php } ?></li>
  </ul>
</header>
<section class="banner"></section>


<div class="headline">
  <h1 class="travel">Kathmandu</h1>
  <h2 class="sub-title">The City of temple</h2>
</div>

<div class="ourstory" data-aos="fade-up">
  <h1 id="back"> SHYAMBHUNATH</h1>
  <h2 id="front">Discover Kathmandu</h2>
  <h2 id="up">The Monkey Temples</h2>
  <hr>
  <p id="ourstory-paragraph-1">"For many, stepping off a plane into Kathmandu is a pupil-dilating experience, a riot of sights<br> sounds and smells that can quickly lead to sensory overload. Whether you’re barrelling through<br>the traffic-jammed alleyways of the old town in a rickshaw, marvelling at the medieval temples<br>or dodging trekking touts in the backpacker district of Thamel, Kathmandu can be an intoxicating<br>amazing and exhausting place."</p>
  </div>


  <div class="journey">
    <h1 id="back-2"> DESTINATION</h1>
    <h2 id="front-2"> Travel</h2>
    <h2 id="up-2">Your Journey Start Here</h2>
    <hr>
    </div>

    <!-- Location  -->

    <div class="row-shyambhu" data-aos="fade-up">
      <div class="listing-item">
      <img src="images/shyambhu.jpg" alt="Image" class="img-fluid">
      </div>
      <div class="listing-item-content">
      <a class="traveling-fee" <?php if($_SESSION['login'] =="loggedin"){?>href="form.php"<?php }else{?> href="login.php"<?php }?>>Rs 200.00</a>
      <h2 class="place-name"><a href="#">Shyambhunath</a></h2>
      <h2 class="info-shyambhu">Information</h2>
      <p id="about-shyambhu">The Swayambhunath Stupa is one of the crowning glories of Kathmandu Valley architecture.<br> This perfectly proportioned monument rises through a whitewashed dome to a gilded spire,<br> from where four iconic faces of the Buddha stare out across the valley in the cardinal directions.<br>The site was shaken severely by the 2015 earthquake, but the main stupa sustained only superficial<br> damage. </p>
      <h2 class="things-shyambhu">Things to Know </h2>
      <P id="things">1) The stupa’s white dome indicates the womb of creation whose phallic match is in the square tower.<br>
        2) On top of the Buddha’s Eye is a spire of 13 golden disks representing the ladder to enlightenment<br>
        3) The sleepy, all-seeing Buddha eyes that stare out from the top have become the quintessential symbol of Nepal.<br>
       4) The famous Buddha eyes gazing out sleepily from each side of the tower (oriented to the four cardinal directions)<br>are those of the all-seeing Primordial Buddha
      </P>
      <div class="button" id="button-5">
        <div id="translate"></div>
        <a href="https://www.lonelyplanet.com/nepal/pokhara">Read more </a>
      </div>
      </div>
      </div>

      <div class="food">
        <div class="food-try">
          <h1 id="back-3"> Yummy !</h1>
          <h2 id="front-3">Food</h2>
          <h2 id="up-3">Your Taste is our's</h2>
          
          </div>
          <div class="man-with-bag">
            <img id="traveler" src="images/food.jpg" data-aos="fade-left">
          </div>

          <p id="ourstory-paragraph"> Our Story begins with the willigness to do something for the country.<br>
            This project "GHUMGHAM" is one of our dream project which is mostly <br>
            targeted to those who are more likely on traveling somewhere in the<br>
            lap of great Himalayans. <br><br>
          
            So, we came up with the ided of developing the website which focuses<br>
            on every little expect of the travelings related things.</p>

            <div class="food-pic">
              <img class="pizza food-img" src="images/food/pizza.png" alt="pizza">
             
              <img class="fast food-img" src="images/food/fast.png" alt="pizza">
              <img class="fast-food food-img" src="images/food/fast-food.png" alt="pizza">
              <img class="dish food-img" src="images/food/dish.png" alt="pizza">

              <h3 class="pizza high"> High Quality Food</h3>
              <h3 class="fast local"> Local Taste</h3>
              <h3 class="fast-food protine" > High Protine Food</h3>
              <h3 class="dish meet"> Meet Your Taste </h3>
            </div>

      </div>

     <!-- Food Images  -->
     <div class="card" data-aos="fade-up">
      <div class="rating">
      </div>
    
      <div class="food-details">
        <p id="p2">Spicy Sausage Soup
          <br/><span>with Steamed Broccoli</span></p>
      </div>
    </div>

    <!-- Crd 2  -->
    <div class="card-2" data-aos="fade-up">
      <div class="rating-2">
      </div>
    
      <div class="food-details-2" >
        <p id="p3"> Tasty Momo 
          <br/><span>with extra cheese</span></p>
      </div>
    </div>

    <!-- card3  -->
    <!-- Crd 2  -->
    <div class="card-3" data-aos="fade-up">
      <div class="rating-3">
      </div>
    
      <div class="food-details-3" >
        <p id="p4">Thukpa 
          <br/><span>with special soup</span></p>
      </div>
    </div>


    <!-- Extra Information  -->
    <div class="extra">
      <div class="extra-info">
        <h1 id="back-4"> Information</h1>
        <h2 id="front-4">Extra</h2>
        <h2 id="up-4">You Need to Know</h2>
        <p class="extra-pragraph"> 1) After landing at TIA , at first you have to pick a taxi or local bus.
          <br> <br>2)  The overall cost of the fiar is dependend on your choice.<br><br>
          3) After you reach on your destination , there are different temples around you.<br><br>
          4) From the top of Shyambhunath you can view the whole valley from the binoculars.<br><br>
        5) You can have a taste of local or street food around the Stupa.</p>
        <img class="shyambhu-map" src="images/food/unnamed.jpg" alt="shyambhu-map">
        </div>



        <!-- Footer  -->
<footer class="btm-footer">
  <div class="sub-footer">
    <a href="#" class="Home-1">Home</a>
    <a href="#" class="Trip">Trip</a>
    <a href="#" class="Blogs">Blogs</a>
    <a href="#" class="Gallery-1">Gallery</a>
    <a href="#" class="About-us-1">About us</a>
    <hr class="footer-line">
    <p class="copyright">Copyright © 2021-2022 Yatra Ptv Ltd. All rights reserved</p>
  </div>
  <div class="footer-col">
    <div class="social-links">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
  </div>
</footer>

<script type="text/javascript">
  window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
  })
  </script>
  
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
    offset:120,
    duration: 1200,
    easing: 'ease'
  });
</script>
</body>
</html>