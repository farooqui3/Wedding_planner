<?php

$conn = mysqli_connect('localhost','root','','wedding_planner');

if(isset($_POST['send'])){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $number = $_POST['number'];
   $plan = $_POST['plan'];
   $address = $_POST['address'];
   $message = $_POST['message'];


   $insert = "INSERT INTO `users`(`name`, `email`, `number`, `choose_plan`, `address`, `message`) VALUES ('$name','$email','$number','$plan','$address','$message')";


   mysqli_query($conn, $insert);
   header('location:contact.php');

}


?>