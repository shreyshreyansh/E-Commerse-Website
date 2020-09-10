<?php
require_once("includes/common.php");
?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reset page</title>
</head>
<body>
	<?php
 include 'includes/header.php';
 ?><br><br><br><br>
	<div class="container" style="width:30%">
		<h1>Enter your Email id</h1>
		<form method="POST" action="forgot_script.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                    
                </form>
	</div>
    <?php 
        for($i=1;$i<=20;$i++){ ?>
            <br>
        <?php } ?>
	<?php
  include("includes/footer.php"); 
 ?>
</body>
</html>