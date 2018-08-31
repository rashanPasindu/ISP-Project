<?php

session_start();

unset($_SESSION['username']);
unset($_SESSION['tokens']);

session_destroy();

echo "LogOut Occured";
header('location: index.php');

?>
