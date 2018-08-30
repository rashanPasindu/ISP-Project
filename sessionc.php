<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
$tokens = $_SESSION["tokens"];
$new;
$status;


if ($_SERVER['HTTP_REFERER'] == 'http://localhost/ISP_Project/pages/bootstrap/ISP/ISP/level1Validation.php'){
	echo $tokens;
		
}
elseif ($_SERVER['HTTP_REFERER'] == 'http://localhost/ISP_Project/pages/bootstrap/ISP/ISP/Level2.php') {
	
	token();
	$_SESSION['TOKENcount'] = $new;
}
elseif ($_SERVER['HTTP_REFERER'] == 'http://localhost/ISP_Project/pages/bootstrap/ISP/ISP/Level2.1.php'){
	
}
else {
	$tokens = 5;
	header('location: http://' . $_SERVER['HTTP_HOST'] .'/logout.php');
	
}

function token(){
	
	if ($GLOBALS['tokens'] != 0){
		$GLOBALS['new'] = --$GLOBALS['tokens'];
		echo  
		'<script>
		var stat;
	    var x = confirm("Invalid Try: Penalty Applied -> Press Okay to Continue");
		if (x == true || x == false)
		{
			alert("You will be redirected");
			
		}
		</script>';
		$_SESSION ['TOKENcount'] = $new;
		echo "Your Available Tokens: ".$GLOBALS['tokens'];
		
		if(isset ($_SESSION['TOKENcount'])){
			header('location: http://' .$_SERVER['HTTP_HOST'] . '.Level1.php');
 		 }
		else{
			echo "Session Variable not set";
		}
		//echo "<br>";
		//$GLOBALS['status'] = 1;
		//echo $GLOBALS['status'];
		//$status = $_GET['x'];
	
		//header("location: Level1.php");
					
	}
	else {
		echo '<script>alert("Out Of Tries")</script>';
		header("location: logout.php");
	}

}

?>

