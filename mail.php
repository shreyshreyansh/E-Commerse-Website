<?php 
require("includes/common.php");
  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  $message = $_POST['message'];
  $message = mysqli_real_escape_string($con, $message);

  $query_1="INSERT INTO contact(name,email,message) values ('$name','$email','$message')";
  mysqli_query($con,$query_1) or die(mysqli_error($con));

  header('location: contact.php');
?>
