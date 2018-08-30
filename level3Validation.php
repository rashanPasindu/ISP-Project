<?php
session_start();
require 'connect.php';
error_reporting(E_ALL ^ E_NOTICE);


$level_key = $_POST['flag3'];



if (isset($level_key)) {
		
		$query = mysqli_query($con,"SELECT * FROM level3 WHERE key_level3='$level_key'");
		if (mysqli_num_rows($query)==0) {
			echo '<script>alert("Try again")</script>';
			reload();
				
		}
		else{
			while ($row = mysqli_fetch_array($query)){
				if ($row['key_level1'==$level_key])
				{
					header("location: Level3.php");
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
	if (!isset ($_SESSION ['TOKENcount'])){
		$_SESSION ['TOKENcount'] = 5;
	}
	header("location: sessionc.php");
}
	
?>