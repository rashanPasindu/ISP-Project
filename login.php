<?php

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Let's Play</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
				
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<style>
		img {
    			display: block;
    			margin-left: auto;
    			margin-right: auto;
		}
		</style>

	</head>


	<body>
	
	<!--cover photo-->
  <img src="Images/images.jpeg" alt="Cover" style="width:40%" style="height=60%"">
  
	
	<div class="container">
	
		<form action="validationLogin.php" method="POST" class="form-signin">
				<h2 class="form-signin-heading">Login</h2> 
				<label for="inputEmail" class="sr-only">Username</label>
				<input type="text" id="inputEmail" class="form-control" placeholder="Enter Username" name="username" required><br>
				<label for="inputPassword" class="sr-only">Password</label>
				<input type="password" placeholder="Enter Password" name="password" required id="inputPassword" class="form-control"><br>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
				
				<h3> <a href="login.php"> Register </a></h3>
				
		</form>
		</div>
	</body>
</html>
