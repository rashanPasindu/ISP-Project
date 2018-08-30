<?php
header("Cache-control: no-store, no-cache, must-revalidate,max-age=0");

$date = date("h:i:sa");
header("Expires: $datef");

if (!isset($_SESSION['username']))
{
	header ('location: login.php');
	exit();
}

echo "";
?>