<?php
require("includes/common.php");
$email=$_POST['email'];
$query="SELECT password FROM users WHERE email='$email'";
$query_result=mysqli_query($con,$query) or die(mysqli_error($con));
$total_rows=mysqli_num_rows($query_result);
$row=mysqli_fetch_array($query_result);
$password=$row['password'];
if($total_rows==0){
	$m1="No such email registered";
	header('location: forgot.php?m1='.$m1);
}else{
	$to = "'$email'";
$subject = "Your Password";
$txt = "'$password'";
$headers = "From: shreyansh.shrey1999@gmail.com" . "\r\n";
mail($to,$subject,$txt,$headers);
}
?>
