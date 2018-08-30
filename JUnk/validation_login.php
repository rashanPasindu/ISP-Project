<?php
require 'DBConnect.php';

session_start();

$conn = DBonnect();
$user_name = "";
$pwd_word = "";

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
		{
		header('Location: http://' . $_SERVER['HTTP_HOST'] . 'Level1.php');
		//echo "success";
		}
$page = $_SERVER['PHP_SELF'];
 	$sec = "0";
 	header("Refresh: $sec; url=$page");

if ($conn == TRUE) 
{
	$message = "Connection Successfull";
	//echo "<script type='text/javascript'>alert('$message');</script>";	
	
	if (isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST")
 {
 	$user= mysqli_real_escape_string($conn,$_POST['username']);
	$pwd = mysqli_real_escape_string($conn,$_POST['password']);
	
	
	$query = "select * from user where username='$user' AND pwd='$pwd'";
	$result = mysqli_query($conn, $query);
	$numrows=mysqli_num_rows($result);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$active = $row ['active'];
	
	if ($numrows==1)
	{
	//$user_name ="";
	//$pwd_word = "";
	
	header('Location: Level1.php');
	$_SESSION['loggedin'] = true;
	$_SESSION['ses_usr']=$user;
	
	while ($row=mysqli_fetch_array($query)) {
	$user_name =$row['username'];
	$pwd_word = $row['pwd'];	
	
	echo $user_name;
	echo $pwd_word;
	}			
	
	
	if ($user_name == $user AND $pwd_word == $pwd)
	{
		$_SESSION['loggedin'] = true;
		$message = "Login Successfull";
		echo "<script type='text/javascript'>alert('$message');</script>";
		$_SESSION['ses_usr']=$user;		
		
	
		dicCon($conn);
		
	}
	}
	else {
		echo "ERROR Invalid Login Details";
	}
 }
}
else {
	$message = "Server Connection Un-successfull";
	echo "<script type='text/javascript'>alert('$message');</script>";
	
	dicCon($conn);
}





?>