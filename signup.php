<?php
require("includes/common.php");
if(isset($_SESSION['email'])){
	header('location: index.php');
}
?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<title>SignUp Page</title>
</head>
<body>
	<?php
	require("includes/header.php");
	?><br><br><br><br>
	<div class="container">
		<div class="col-xs-4" style="float:left;">
			<img src="img/3.jpg" alt="Responsive image">
		</div>
		<div class="col-xs-4" style="float:right;">
			<br><br>
            <h1>SIGN UP</h1>
                <form method="POST" action="signup_script.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="password" placeholder="Password" required="true" pattern=".{6,}">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="contact" maxlength="10" placeholder="Contact">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="city" placeholder="City">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="address" placeholder="Address">
                    </div>
                    <input type="submit" name="Submit" class="btn btn-primary">
                </form>
		</div>
	</div>
	<br>
	<?php
 require 'includes/footer.php';
 ?>
</body>
</html>