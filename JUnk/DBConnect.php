<?php
function DBonnect(){
	
$servername = "localhost";
$usrname = "root";
$password = "";
$databasename = "ctf";


$conn = new mysqli($servername, $usrname, $password,$databasename) or die("Connect failed: %s\n". $conn -> error);


return $conn;
}

function dicCon($conn)
 {
 $conn -> close();
 }
   
?>


