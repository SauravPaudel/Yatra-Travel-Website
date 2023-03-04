<?php 
  include('nav.php');
?>
  <!-- Navigation bar -->

<section class="banner"></section>


<!-- Headline -->

<div class="headline">
  <h1 class="travel"> Nepal</h1>
</div>
<!-- Explore      -->
<div class="explorer">
  <a href="trip.php">Explorer</a>
</div>



<!-- Our story landing page -->
  <div class="ourstory">
  <h1 id="back"> STORY</h1>
  <h2 id="front"> Our Story</h2>
  <h2 id="up">DISCOVER STORY</h2>
  <p id="ourstory-paragraph"> Our Story begins with the willigness to do something for the country.<br>
      This project "Yatra" is one of our dream project which is mostly <br>
      targeted to those who are more likely on traveling somewhere in the<br>
      lap of great Himalayans. <br><br>
    
      So, we came up with the ided of developing the website which focuses<br>
      on every little expect of the travelings related things.</p>
  </div>

  <div class="button" id="button-5">
    <div id="translate"></div>
    <a href="about.html">Read more </a>
  </div>

  <div class="man-with-bag">
    <img id="traveler" src="images/traveler.jpg" data-aos="fade-right">
  </div>

<!-- Second landing page  -->


  <div class="journey">
    <h1 id="back-2"> JOURNEY</h1>
    <h2 id="front-2"> Journey</h2>
    <h2 id="up-2">Your Journey Start Here</h2>
    </div>

     <!-- Show-picture for shyambhu  -->

    <div class="row-shyambhu" data-aos="fade-up">
      <div class="listing-item">
      <img src="images/shyambhu.jpg" alt="Image" class="img-fluid">
      </div>
      <div class="listing-item-content">
      <a class="traveling-fee" href="kathmandu.php">Rs 200.00</a>
      <h2 class="place-name"><a href="#">Shyambhunath</a></h2>
      </div>
      </div>

       <!-- Show-picture for sagarmatha  -->

      <div class="row-sagarmatha" data-aos="fade-up">
        <div class="listing-item-2">
        <img src="images/pokhara2.jpg" alt="Image" class="img-fluid-2">
        </div>
        <div class="listing-item-content-2">
        <a class="traveling-fee-2" href="pokhara.html">Rs 500.00</a>
        <h2 class="place-name-2"><a href="#">Pokhara</a></h2>
        </div>
        </div>

        <!-- Our features  -->
        <div class="destination" >
          <h1 id="back-2-destination"> OUR FEATURES</h1>
          <h2 id="front-2-destination">Features</h2>
          <h2 id="up-2-destination">We Server You</h2>
          </div>

          <!-- Comfortable journey  -->
        <div class="our-features">
          <div class="globe-main" data-aos="fade-up"> 
        <img src="images/Svg/1.svg" alt="globe"  class="globe"> 
        <h1 id="info-act-1"> Comfortable Journey</h1>
        <p id="info-pragraph-1">A wonderful serenity has taken to the</p>
        <p id="info-pragraph-2">possession of my entire soul.</p>
      </div>

      <!-- Luxuries Hotel -->

      <div class="Luxuries-Hotel" data-aos="fade-up"> 
        <img src="images/Svg/2.svg" alt="globe"  class="hotel"> 
        <h1 id="info-act-2"> Luxuries Hotel</h1>
        <p id="info-pragraph-3">A High Qallity Hotels with peace </p>
        <p id="info-pragraph-4">enviroment and fresh air.</p>
      </div>


      <!-- Travel guide  -->
      <div class="Travel-guide" data-aos="fade-up"> 
        <img src="images/Svg/3.svg" alt="globe"  class="earth"> 
        <h1 id="info-act-3">Travel Guide</h1>
        <p id="info-pragraph-5">We'll Guide You through every step</p>
        <p id="info-pragraph-6">of your journey to the Nepal.</p>
      </div>

        </div>

        <!-- Our teams  -->
        <div class="team" >
          <h1 id="back-2-team"> OUR TEAM</h1>
          <h2 id="front-2-team">Team</h2>
          <h2 id="up-2-team">Together We Can</h2>
          </div>
        

           <!-- teams section start -->
           <div class="our-team">
            <div class="container" data-aos="fade-up">
              <div class="cards card1">
                <p>Saurav Paudel</p>
                <div class="bottom-bar"><a href="https://www.facebook.com/sau.rav.750331">PROFILE LINK</a></div>
              </div>
              <!---------------------------->
              <div class="cards card2">
                <p>Krishna Bhatt</p>
                <div class="bottom-bar"><a href="https://www.facebook.com/anamol.bhatt.5">PROFILE LINK</a></div>
              </div>
              <!---------------------------->
              <div class="cards card3">
                <p>Ravi Sharma</p>
                <div class="bottom-bar"><a href="https://www.facebook.com/profile.php?id=100003506861605">PROFILE LINK</a></div>
              </div>
            </div>
            
          </div>
           </div>

           <!-- Footer  -->
          <footer class="btm-footer">
            <div class="sub-footer">
              <a href="Home.php" class="Home-1">Home</a>
              <a href="trip.php" class="Trip">Trip</a>
              <a href="#" class="Blogs">Blogs</a>
              <a href="gallery.html" class="Gallery-1">Gallery</a>
              <a href="about.html" class="About-us-1">About us</a>
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
