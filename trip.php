<?php
  include('nav.php');
?>
<link rel="stylesheet" href="trip.css">
<section class="banner"></section>

<!-- Search bar  -->
<div class="box">
  <h1> Search</h1>
  <form>
    <input type="text" name="" id="search-item" placeholder="Destination..." onkeyup="search()">
    <input type="submit" name="" value="Search" >
  </form>
</div>


<!-- Destination design -->

<div class="destination" >
  <h1 id="back-2"> DESTINATION</h1>
  <h2 id="front-2"> Destination</h2>
  <h2 id="up-2">Choose Your Destination</h2>
  </div>

<!-- Destination  -->
<a href="kathmandu.php">

<div class="all-card" id="product-list">
  
<div class="blog-card spring-fever" data-aos="fade-up">
  <div class="title-content">
    <h3>Kathmandu</h3>
    <hr />
    <div class="intro">The City Of Temple</div>
  </div><!-- /.title-content -->
  <div class="card-info">
    <div class="place-info">
    <p></p>
    <!-- Button  -->
    
  </div>
</div>
  <div class="gradient-overlay"></div>
  <div class="color-overlay"></div>
</div>
</a>

<!-- Card-2  -->
<div class="blog-card2 spring-fever" data-aos="fade-up">
  <div class="title-content">
    <h3>Lumbini</h3>
    <hr />
    <div class="intro">Birth Place of Buddha</div>
  </div><!-- /.title-content -->
  <div class="card-info">
    <div class="place-info">
    <p></p>
    <!-- Button  -->
    
  </div>
</div>
  <div class="gradient-overlay"></div>
  <div class="color-overlay"></div>
</div>

<!-- Card 3  -->

  <div class="blog-card3 spring-fever" data-aos="fade-up">
    <div class="title-content">
      <h3>Rara</h3>
      <hr />
      <div class="intro">The Queen of Lake</div>
    </div><!-- /.title-content -->
    <div class="card-info">
      <div class="place-info">
      <p></p>
      <!-- Button  -->
      
    </div>
  </div>
    <div class="gradient-overlay"></div>
    <div class="color-overlay"></div>
  </div>

  <!-- Card 4  -->
  <a href="pokhara.html">
  <div class="all-card">
  <div class="blog-card4 spring-fever" data-aos="fade-up">
   
    <div class="title-content">
      <h3>Pokhara</h3>
      <hr />
      <div class="intro">The Queen Hill</div>
    </div><!-- /.title-content -->
    <div class="card-info">
      <div class="place-info">
      <p></p>
      <!-- Button  -->
      
    </div>
  </div>
    <div class="gradient-overlay"></div>
    <div class="color-overlay"></div>
  </div>
</div>

  <!-- Card 5   -->
  <div class="blog-card5 spring-fever" data-aos="fade-up">
    <div class="title-content">
      <h3>Mustang</h3>
      <hr />
      <div class="intro">Land beyond Himalayas</div>
    </div><!-- /.title-content -->
    <div class="card-info">
      <div class="place-info">
      <p></p>
      <!-- Button  -->
      
    </div>
  </div>
    <div class="gradient-overlay"></div>
    <div class="color-overlay"></div>
  </div>

  <!-- Card 6  -->
  <div class="blog-card6 spring-fever" data-aos="fade-up">
    <div class="title-content">
      <h3>Annapurna Region</h3>
      <hr />
      <div class="intro">The Way To Heaven</div>
    </div><!-- /.title-content -->
    <div class="card-info">
      <div class="place-info">
      <p></p>
      <!-- Button  -->
      
    </div>
  </div>
    <div class="gradient-overlay"></div>
    <div class="color-overlay"></div>
  </div>

</div>

<!-- Footer  -->
<footer class="btm-footer">
  <div class="sub-footer">
    <a href="Home.html" class="Home-1">Home</a>
    <a href="#" class="Trip">Trip</a>
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







<script src="search.js"></script>
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