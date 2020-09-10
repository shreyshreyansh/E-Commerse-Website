<?php
require("includes/common.php");
$email=$_POST['email'];
$password=$_POST['password'];
$email=mysqli_real_escape_string($con,$email);
$password=mysqli_real_escape_string($con,$password);
$query="SELECT id FROM users WHERE email='$email' AND password='$password'";
$query_result=mysqli_query($con,$query) or die(mysqli_error($con));
$total_rows=mysqli_num_rows($query_result);
if($total_rows==0){
	$error = "<span class='red'>Please enter correct E-mail id and Password</span>";
	header('location: login.php?error=' . $error);
}
else{
	$row=mysqli_fetch_array($query_result);
	$_SESSION['email']=$row['email'];
	$_SESSION['user_id']=$_row['id'];
	header('location: index.php');
}
?>