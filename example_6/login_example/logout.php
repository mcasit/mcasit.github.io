<?php
session_start();

// echo  $_SESSION['username'].' you are successfully logout';
// Step: 6 Destroy session variable of that username 
session_unset();
session_destroy();
// Step: 7 Redirect to login file
header('location: login.php');
?>