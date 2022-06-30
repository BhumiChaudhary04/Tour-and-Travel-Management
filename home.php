<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo" style="color:rgb(211, 155, 42);">Trips and Tours</a>

   <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="admin_login.php">Admin</a>
      <a href="about.php">About</a>
      <a href="login.php">Login/Register</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(https://www.greeka.com/photos/cyclades/paros/hero/paros-island-1920.jpg)">
            <div class="content">
               <span>Explore Discover Travel</span>
               <h3>travel around the world</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(https://2btraveler.ru/wp-content/uploads/2019/05/Post-Image-2btraveler-47.jpg)">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>discover the new places</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(https://www.flyklia.com/wp-content/uploads/2019/12/sa_1576579149_104606yogaRetreatsinIndia-1300x600.jpg)">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>make your tour worthwhile</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <!-- <img src="images/icon-1.png" alt=""> -->
         <h3>adventure</h3>
      </div>

      <div class="box">
         <!-- <img src="images/icon-2.png" alt=""> -->
         <h3>tour guide</h3>
      </div>

      <div class="box">
         <!-- <img src="images/icon-3.png" alt=""> -->
         <h3>trekking</h3>
      </div>

      <div class="box">
         <!-- <img src="images/icon-4.png" alt=""> -->
         <h3>camp fire</h3>
      </div>

      <div class="box">
         <!-- <img src="images/icon-5.png" alt=""> -->
         <h3>off road</h3>
      </div>

      <div class="box">
         <!-- <img src="images/icon-6.png" alt=""> -->
         <h3>camping</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <!-- <img src="images/about-img.jpg" alt=""> -->
      <img src="http://www.massaudubon.org/var/ezdemo_site/storage/images/site_ma/get-outdoors/travel-tours/203722-73-eng-US/travel-tours.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et, recusandae nobis fugit modi quibusdam ea assumenda, nulla quisquam repellat rem aliquid sequi maxime sapiente autem ipsum? Nobis, provident voluptate?</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->



<!-- home packages section ends -->













<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> pbp@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Kashmere Gate,New Delhi,110006</a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>PBP</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>