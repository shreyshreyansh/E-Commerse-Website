<?php require("includes/common.php"); ?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact page</title>
</head>
<body>
</body>
<?php require("includes/header.php") ?><br><br><br><br>
	<div class="container">
		<div class="col-xs-10">
			<h2>LIVE SUPPORT</h2>
			<h3>24 hours | 7 days a week | 365 days a year Live Technical Support</h3>
			<p>Apple is an equal opportunity employer that is committed to inclusion and diversity. We take affirmative action to ensure equal opportunity for all applicants without regard to race, color, religion, sex, sexual orientation, gender identity, national origin, disability, Veteran status, or other legally protected characteristics. Learn more about your EEO rights as an applicant.

Apple will not discriminate or retaliate against applicants who inquire about, disclose, or discuss their compensation or that of other applicants. United States Department of Labor.

Apple will consider for employment all qualified applicants with criminal histories in a manner consistent with applicable law. If you’re applying for a position in San Francisco, review the San Francisco Fair Chance Ordinanceguidelines applicable in your area.

Apple participates in the E-Verify program in certain locations as required by law. Learn more about the E-Verify program.

Apple is committed to working with and providing reasonable accommodation to applicants with physical and mental disabilities. Apple is a drug-free workplace.</p>
		</div>
		<div class="col-xs-2">
			<img src="img/7.png" alt="rI">
		</div>
		<div class="col-xs-8">
			<h2>CONTACT US</h2>
			<form method="POST" action="mail.php">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="message">Message</label>
    <textarea class="form-control" id="message" rows="3"></textarea>
  </div>
  <input type="submit" class="btn btn-primary">
</form>
		</div>
		<div class="col-xs-4">
			<h2>Company Information:</h2>
			<p><b>United States</b><br>
1-800-275-2273<br><br>


<b>Education customers</b><br>
Support: 1-800-800-2775<br>
Sales: 1-800-780-5009<br><br>

<b>Enterprise</b><br>
1-866-752-7753<br><br>

<b>Accessibility and assistive technology</b><br>
1-877-204-3930<br><br>


</p>
		</div>
	</div>
	<?php require("includes/footer.php"); ?>
</body>
</html>
