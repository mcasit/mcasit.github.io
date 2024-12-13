<?php
// Step: 4 Display simple message in Action File before doing anything
// echo "hello world";

// Step: 6 Retrive forms values in PHP
$user_name = $_GET['user_name'];
$user_email = $_GET['user_email'];
$user_password = $_GET['user_password'];

// Step: 7 Print the forms values in PHP

echo "Username: $user_name <br> Useremail: $user_email";

?>