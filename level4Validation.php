<?php
session_start();
require 'connect.php';
error_reporting(E_ALL ^ E_NOTICE);

$value = 5;

//$_SESSION["tokens"] = $value;

$tokens = $_SESSION["tokens"];
$new;

$level_key = $_POST['flag4'];



if (isset($level_key)) {
		
		$query = mysqli_query($con,"SELECT * FROM level4 WHERE key_level4='$level_key'");
		if (mysqli_num_rows($query)==0) {
			echo '<script>alert("Try again")</script>';
			reload();
				
		}
		else{
			while ($row = mysqli_fetch_array($query)){
				if ($row['key_level1'==$level_key])
				{
					header("location: Level5.php");
				}
			}
		}
	}
	else {
		echo " Level 1 -> ";
		echo "Level Key is invalid ";
		echo "\n";
		echo $level_key;
	}
	
function reload(){
	if (!isset ($_SESSION["tokens"])){
		$_SESSION["tokens"] = $GLOBALS['value'];
		
		token();
	}
	
	else {
		token();
	}
	//header("location: sessionc.php");
	
}

	function token(){
	
	if ($GLOBALS['tokens'] != 0){
		$GLOBALS['new'] = --$GLOBALS['tokens'];
		$_SESSION["tokens"] = $GLOBALS['new'];
		
		echo "Your Available Tokens: ". $_SESSION["tokens"];
		
		//sleep(5);
		if($_SESSION["tokens"] != 5 ){
			header('location: Level2.php');
 		 }
		else{
			echo "Session Variable not set";
			echo $_SESSION["tokens"];
		}
	}
	else {
		echo '<script>alert("Out Of Tries")</script>';
		header("location: Level1.php");
	}

}	
?>