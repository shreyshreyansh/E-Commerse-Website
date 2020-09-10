<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a href="index.php" class="navbar-brand">iPhone</a>
	</div>
	<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav navbar-right">
			<?php
			if(isset($_SESSION['email'])){?>
              <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>  
			<?php
		}else{?>
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
               <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
               <li><a href="about.php"><span class="glyphicon glyphicon-list-alt"></span> About Us</a></li>
               <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
		<?php } ?>
		</ul>
	</div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container" style="padding-left: 33px;">
        <h2 class="modal-title" id="exampleModalLongTitle">LOGIN</h2>
        </div>
      </div>
      <div class="modal-body">
        <div class="row">
				                 <div class="col-xs-offset-1" style="width:85%">Don't have an account?
				                  <a href="signup.php" style="text-decoration: none;" class="hover active"> Register</a>
                                  <br><br>
					             <form method="POST" action="login_submit.php">
						         <div class="form-group">
							     <input type="text" class="form-control input-lg" name="email" placeholder="Email" required = "true">
						         </div>
						         <div class="form-group">
							     <input type="text" class="form-control input-lg" name="password" placeholder="Password" required = "true">
						         </div>
						         <input type="submit" name="Submit" class="btn btn-primary"><br><br>
						         <a href="forgot.php" style="text-decoration:none;">Forgot Password?</a>
					             </form>
                                 </div>
                              </div>
                         </div>
      </div>
    </div>
  </div>
</div>
