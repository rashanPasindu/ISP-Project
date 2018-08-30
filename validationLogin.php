<?php
	session_start();
	$lusername = $_POST['username'];
	$lpassword = $_POST['password'];
	
	if (isset($lusername) && isset($lpassword)) {
		require 'connect.php';
		$query = mysqli_query($con, "SELECT * FROM users WHERE username='$lusername' AND password='$lpassword'");
		if (mysqli_num_rows($query)==0) {
		error();
		reload();
		}
		else{
			while ($row = mysqli_fetch_array($query)){
				if ($row['username'==$lusername] && $row['password']==$lpassword) {
					$_SESSION['username'] = $lusername;
					header("location: Level1.php");
				}
			}
		}
	}
	else {
		echo "Enter a username and password";
	}


function reload(){
	sleep(2);
	header("location: login.php");

}

function error(){
	echo '<script>alert("Try again");</script>';
	
}

?>