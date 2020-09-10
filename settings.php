<?php
require_once("includes/common.php");
if(!isset($_SESSION['email'])){
   header('location: index.php');
}?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Settings page</title>
</head>
<body>
	<?php
 include 'includes/header.php';
 ?><br><br><br><br>
	<div class="container" style="width:30%">
		<h1>Change Password</h1>
		<form method="POST" action="settings_script.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="old-password" placeholder="Old Password">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="password" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="password1" placeholder="Retype Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Change</button>
                    <!--<?php
                        //echo "<br><br><span class='red'>" . $_GET['error'] . "</span>";
                        ?>-->
                </form>
	</div>
    <?php 
        for($i=1;$i<=15;$i++){ ?>
            <br>
        <?php } ?>
	<?php
  include("includes/footer.php"); 
 ?>
</body>
</html>