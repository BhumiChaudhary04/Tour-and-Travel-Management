<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Login</title>

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
      <a href="home.php">home</a>
      <a href="admin_login.php">Admin</a>
      <a href="login.php">Login</a>
      <a href="about.php">about</a>
      <a href="package.php">packages</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
   <h1>Login</h1>
</div>

<!-- about section starts  -->

<section class="about">
<form action="admin.php" method="post">  
        <div class="container">  
            <label>Admin : </label>   
            <input type="text" placeholder="Enter name" name="name" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <button class="btn">Login</button>
            <a href="home.php" class="btn">Cancel</a>
        </div>   
    </form>
</section>




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

   <div class="credit"> created by <span>PBP</span> | All rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<!-- <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script> -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>