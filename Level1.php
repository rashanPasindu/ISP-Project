<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
//require 'sessionc.php';

$value = 5;

if ($_SERVER['HTTP_REFERER'] == 'http://localhost/ISP_Project/pages/bootstrap/ISP/ISP/level1Validation.php'){

if($_SESSION["tokens"] >= 0){
	$token = $_SESSION["tokens"];
  }
else {
      header('location: http://' . $_SERVER['HTTP_HOST'] .'/login.php');
  }
}
else {
	$_SESSION["tokens"] = $value;
	$token = $_SESSION["tokens"];
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Hack Me If You Can - Level 1</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="boot/css/bootstrap.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>


	<body>
	<h5 class="tokens" align="left" color="gray"> Available Tokens: <?php echo $token;?></h5><br>
	<h2 class="form-signin-heading" align="center" color="gray">Level 1</h2><br>
 	 <a href="Images/smile.jpeg" download="=Images/smile.jpg">
		<img src="Images/main/level2.jpeg" alt="Level1" width="20%">
  </a>

	<div class="container">

		<form action="level1Validation.php" method="POST" class="form-signin">
				<label for="inputPassword" class="sr-only">KEY</label>
				<input type="password" placeholder="Enter the flag" name="flag1" required id="inputflag" class="form-control"><br>
				<button class="btn btn-primary btn-block" type="submit">Submit the Flag</button>

		</form>
		</div>
	</body>
</html>