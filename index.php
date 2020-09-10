<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="css/style.css">
     <title>Index page</title>
</head>
<body>
	<?php require("includes/header.php");?>
	<br><br><br><br>
	<div class="container-fluid">
		<div class="col-xs-4">
			<div class="panel panel-default">
				<div class="panel-heading">iPhone 3Gs</div>
				<div class="panel-body">
					<div class="thumbnail">
					<img src="img/iphone-3gs.jpg" alt="Responsiva-img">
				</div>
				<p><b>Screen size</b>:3.5in <b>Built-in memory</b>:16 GB - 32 GB <b>Camera</b>:3 megapixels</p>
				<?php 
				if(isset($_SESSION['email'])){?>
                      <a href="cart-add.php?id=19" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

				<?php
			}else{?>
				<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                <?php } ?>
				</div>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="panel panel-default">
				<div class="panel-heading">iPhone 4</div>
				<div class="panel-body">
					<div class="thumbnail">
					<img src="img/iphone4.jpg" alt="Responsiva-img">
				</div>
				<p><b>Screen size</b>:3.5in <b>Built-in memory</b>:16 GB - 32 GB <b>Camera</b>:5 megapixels</p>
				<?php 
				if(isset($_SESSION['email'])){?>
                      <a href="cart-add.php?id=20" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

				<?php
			}else{?>
				<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                <?php } ?>
				</div>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="panel panel-default">
				<div class="panel-heading">iPhone 4s</div>
				<div class="panel-body">
					<div class="thumbnail">
					<img src="img/iphone4s.jpg" alt="Responsiva-img">
				</div>
				<p><b>Screen size</b>:3.5in <b>Built-in memory</b>:16 GB - 64 GB <b>Camera</b>:8 megapixels</p>
				<?php 
				if(isset($_SESSION['email'])){?>
                      <a href="cart-add.php?id=21" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

				<?php
			}else{?>
				<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                <?php } ?>
				</div>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="panel panel-default">
				<div class="panel-heading">iPhone 5</div>
				<div class="panel-body">
					<div class="thumbnail">
					<img src="img/iphone5.jpg" alt="Responsiva-img">
				</div>
				<p><b>Screen size</b>:4 in <b>Built-in memory</b>:16 GB, 32GB, 64GB <b>Camera</b>:8 megapixels</p>
				<?php 
				if(isset($_SESSION['email'])){?>
                      <a href="cart-add.php?id=22" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

				<?php
			}else{?>
				<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                <?php } ?>
				</div>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="panel panel-default">
				<div class="panel-heading">iPhone 5c</div>
				<div class="panel-body">
					<div class="thumbnail">
					<img src="img/iphone5c.jpg" alt="Responsiva-img">
				</div>
				<p><b>Screen size</b>:4in <b>Built-in memory</b>:16 GB, 32GB <b>Camera</b>:8 megapixels</p>
				<?php 
				if(isset($_SESSION['email'])){?>
                      <a href="cart-add.php?id=24" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

				<?php
			}else{?>
				<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                <?php } ?>
				</div>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="panel panel-default">
				<div class="panel-heading">iPhone 5s</div>
				<div class="panel-body">
					<div class="thumbnail">
					<img src="img/iphone5s_1.png" alt="Responsiva-img">
				</div>
				<p><b>Screen size</b>:4in <b>Built-in memory</b>:16 GB, 32GB, 64GB <b>Camera</b>:8 megapixels</p>
				<?php 
				if(isset($_SESSION['email'])){?>
                      <a href="cart-add.php?id=25" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

				<?php
			}else{?>
				<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                <?php } ?>
				</div>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="panel panel-default">
				<div class="panel-heading">iPhone 6</div>
				<div class="panel-body">
					<div class="thumbnail">
					<img src="img/iphone6.jpg" alt="Responsiva-img">
				</div>
				<p><b>Screen size</b>:4.7in <b>Built-in memory</b>:16 GB , 64 GB, 128 GB <b>Camera</b>:8 megapixels</p>
				<?php 
				if(isset($_SESSION['email'])){?>
                      <a href="cart-add.php?id=26" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

				<?php
			}else{?>
				<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                <?php } ?>
				</div>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="panel panel-default">
				<div class="panel-heading">iPhone 6s</div>
				<div class="panel-body">
					<div class="thumbnail">
					<img src="img/iphone6s_1.png" alt="Responsiva-img">
				</div>
				<p><b>Screen size</b>:4.7in <b>Built-in memory</b>:16 GB , 64 GB, 128 GB <b>Camera</b>:8 megapixels</p>
				<?php 
				if(isset($_SESSION['email'])){?>
                      <a href="cart-add.php?id=28" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

				<?php
			}else{?>
				<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                <?php } ?>
				</div>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="panel panel-default">
				<div class="panel-heading">iPhone SE</div>
				<div class="panel-body">
					<div class="thumbnail">
					<img src="img/iphonese_1.png" alt="Responsiva-img">
				</div>
				<p><b>Screen size</b>:4in <b>Built-in memory</b>:16 GB, 64GB <b>Camera</b>:12 megapixels</p>
				<?php 
				if(isset($_SESSION['email'])){?>
                      <a href="cart-add.php?id=29" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

				<?php
			}else{?>
				<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                <?php } ?>
				</div>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="panel panel-default">
				<div class="panel-heading">iPhone 7</div>
				<div class="panel-body">
					<div class="thumbnail">
					<img src="img/iphone7_1.png" alt="Responsiva-img">
				</div>
				<p><b>Screen size</b>:4.7in <b>Built-in memory</b>:32 GB 128 GB <b>Camera</b>:12 megapixels</p>
				<?php 
				if(isset($_SESSION['email'])){?>
                      <a href="cart-add.php?id=30" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

				<?php
			}else{?>
				<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                <?php } ?>
				</div>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="panel panel-default">
				<div class="panel-heading">iPhone 8</div>
				<div class="panel-body">
					<div class="thumbnail">
					<img src="img/iphone8.jpg" alt="Responsiva-img">
				</div>
				<p><b>Screen size</b>:4.7in <b>Built-in memory</b>:64 GB, 256 GB <b>Camera</b>:12 megapixels</p>
				<?php 
				if(isset($_SESSION['email'])){?>
                      <a href="cart-add.php?id=32" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

				<?php
			}else{?>
				<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                <?php } ?>
				</div>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="panel panel-default">
				<div class="panel-heading">iPhone x</div>
				<div class="panel-body">
					<div class="thumbnail">
					<img src="img/iphonex.jpg" alt="Responsiva-img">
				</div>
				<p><b>Screen size</b>:5.8in <b>Built-in memory</b>:64 GB, 256 GB <b>Camera</b>:12 megapixels Dual</p>
				<?php 
				if(isset($_SESSION['email'])){?>
                      <a href="cart-add.php?id=33" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

				<?php
			}else{?>
				<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                <?php } ?>
				</div>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="panel panel-default">
				<div class="panel-heading">iPhone Xs</div>
				<div class="panel-body">
					<div class="thumbnail">
					<img src="img/iphonexs.jpg" alt="Responsiva-img">
				</div>
				<p><b>Screen size</b>:5.8in <b>Built-in memory</b>:64 GB, 256 GB, 512 GB <b>Camera</b>:12 megapixels Dual</p>
				<?php 
				if(isset($_SESSION['email'])){?>
                      <a href="cart-add.php?id=34" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

				<?php
			}else{?>
				<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                <?php } ?>
				</div>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="panel panel-default">
				<div class="panel-heading">iPhone XR</div>
				<div class="panel-body">
					<div class="thumbnail">
					<img src="img/iphonexr.jpg" alt="Responsiva-img">
				</div>
				<p><b>Screen size</b>:6.1in <b>Built-in memory</b>:64 GB, 128 GB, 256 GB <b>Camera</b>:12 megapixels</p>
				<?php 
				if(isset($_SESSION['email'])){?>
                      <a href="cart-add.php?id=36" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

				<?php
			}else{?>
				<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                <?php } ?>
				</div>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="panel panel-default">
				<div class="panel-heading">iPhone 11</div>
				<div class="panel-body">
					<div class="thumbnail">
					<img src="img/iphone11.jpg" alt="Responsiva-img">
				</div>
				<p><b>Screen size</b>:6.1in <b>Built-in memory</b>:64 GB, 128 GB, 256 GB <b>Camera</b>:12 megapixels Dual</p>
				<?php 
				if(isset($_SESSION['email'])){?>
                      <a href="cart-add.php?id=37" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

				<?php
			}else{?>
				<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                <?php } ?>
				</div>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="panel panel-default">
				<div class="panel-heading">iPhone 11 pro</div>
				<div class="panel-body">
					<div class="thumbnail">
					<img src="img/iphone11pro.jpg" alt="Responsiva-img">
				</div>
				<p><b>Screen size</b>:5.8in <b>Built-in memory</b>:64 GB, 256 GB, 512 GB <b>Camera</b>:12 megapixels Triple</p>
				<?php 
				if(isset($_SESSION['email'])){?>
                      <a href="cart-add.php?id=38" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>

				<?php
			}else{?>
				<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                <?php } ?>
				</div>
			</div>
		</div>
	</div>
	<?php require("includes/footer.php"); ?>
</body>
</html>