<?php


//including required file
require_once "./config.php";
require_once "./helper_database.php";

$user_email= $_POST['user_email'];
$user_password= $_POST['user_password'];

# ESTABLISH DATABASE CONNECTIVITY
$connection_object = establish_connection();

// Step: 2 Check the user is valid in action file
$select_query = "SELECT * FROM users 
                WHERE user_email='$user_email' and 
                user_password= '$user_password'";

$result = get_table_data($connection_object , $select_query);
foreach($result as $row) {
    $user_name = $row[1];
}
if($result == True) {
    // Step: 4 If user is valid create session of that user
    session_start();
    $_SESSION['username']= $user_name;
    header("location: welcome.php");
}
else {  
    header("location: login.php");
}

?>