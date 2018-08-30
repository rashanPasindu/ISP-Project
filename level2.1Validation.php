<?php
session_start();
require 'connect.php';


$level_key = $_POST['flag2.1'];

echo "level 2.1 -> ";

if (isset($level_key)) {
		
		$query = mysqli_query($con,"SELECT * FROM level2.1 WHERE key_level2.1='$level_key'");
		if (mysqli_num_rows($query)==0) {
			echo "Try again";
		}
		else{
			while ($row = mysqli_fetch_array($query)){
				if ($row['key_level2.1'==$level_key])
				{
					header("location: Level3.php");
				}
			}
		}
	}
	else {
		echo "Level Key is invalid ";
		echo "\n";
		echo $level_key;
	}
	
?>

