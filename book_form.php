<?php

   $connection = mysqli_connect('localhost','root','','tourism');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['number'];
      $location = $_POST['code'];

      $request = " insert into bookings(Name, Email, Phone, Pcode, Date) values('$name','$email','$phone','$location', current_timestamp()) ";
      mysqli_query($connection, $request);

      header('location:book.php'); 

   }
   else if(isset($_POST['register'])){
      $fn = $_POST['firstname'];
      $ln = $_POST['lastname'];
      $un = $_POST['username'];
      $pass = $_POST['password'];

      $request = " insert into registrations(FirstName, LastName, UserName, Password) values('$fn','$ln','$un','$pass') ";
      mysqli_query($connection, $request);

      header('location:register.php'); 

   }
   else{
      echo 'something went wrong please try again!';
   }

?>