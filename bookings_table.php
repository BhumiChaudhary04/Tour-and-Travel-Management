<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Booking Table</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style>
       body
        {
            font-family: 'Ubuntu', sans-serif;
        }
        table
        {
            text-align: center;
            margin-top:50px;
            width:80%;
            font-size:15px;
        }
        .table td
        {
            padding-top:5px;
            padding-bottom:5px;
        }
   </style>

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

<a href="home.php" class="logo" style="color:rgb(211, 155, 42);">Trips and Tours</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="admin_login.php">Admin</a>
      <a href="login.php">Registrations</a>
      <a href="about.php">about</a>
      <a href="package.php">Packages</a>
      <a href="book.php">Bookings</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>



<div>
    <!--VIEW ALL CUSTOMERS -->
    <table class="table table-bordered table-dark table-hover table-striped table-responsive-md">
        <thead>
            <tr>
                <th scope="row" >#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Pcode</th>
            </tr>
        </thead>
        <?php
            $servername="localhost";
            $username="root";
            $password="";
            $database="tourism";
            $conn=mysqli_connect($servername,$username,$password,$database);
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql="Select * from bookings;";
            $result=mysqli_query($conn,$sql);
            $i=1;
            while($row=mysqli_fetch_array($result))
            {
        ?>  
                <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $row['Name']?></td>
                    <td><?php echo $row['Email']?></td>
                    <td><?php echo $row['Phone']?></td>
                    <td><?php echo $row['Pcode']?></td>
                </tr>

        <?php 
            $i=$i+1;
            }
        ?>
    </table>
    </div>








<!-- footer section starts  -->

<section class="footer" style="margin-top:50px;">

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

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>