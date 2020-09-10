<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
	header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];

$str_arr = explode (",", $item_ids_string);

$num=0;
for($i=1;$i<=sizeof($str_arr);$i++){
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id= '$user_id' AND item_id='$str_arr[$num]' AND status='Added to cart'";
mysqli_query($con, $query) or die(mysqli_error($con));
$num++;
}
?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Success page</title>
</head>
<body>
   <?php include 'includes/header.php' ?>
	<br><br><br><br>
	<div class="container height">
		<h1>Your order is confirmed. Thank you for shopping with us.</h1>
		<h3><a href="index.php"><button type="submit" class="btn btn-primary">Click Here</button></a> to purchase any other item.</h3>
	</div>
	<?php 
        for($i=1;$i<=23;$i++){ ?>
            <br>
        <?php } ?>
	<?php
  include("includes/footer.php");
 ?>
</body>
</html>