<?php

session_start();

unset($_SESSION['username']);
session_destroy();
session_unset();
echo "LogOut Occured";
header('location: index.php');

?>
