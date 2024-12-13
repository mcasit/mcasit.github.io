<?php
// Step: 18 Set proper php action file for Data Update
//including required file
require_once "./config.php";
require_once "./06_helper_database.php";

# RETRIVE FORM DATA
$user_id = $_GET['user_id'];
$user_name = $_GET['user_name'];
$user_email = $_GET['user_email'];
$user_password = $_GET['user_password'];

# ESTABLISH DATABASE CONNECTIVITY
$connection_object = establish_connection();

# UPDATE DATA
$update_query = " UPDATE users 
                  SET `user_name`='$user_name',`user_email`='$user_email',`user_password`='$user_password' 
                  WHERE user_id= $user_id
                ";

// Step: 20 Call helper function action file
$last_id = update_table_data(
    $connection_object,
    $update_query
);

# Display Last User ID/Last Insert ID
// echo "Last UserID $last_id";

# CONNECTION CLOSE
close_database_connect($connection_object);

// Step: 21 Redirect page to Step# 7 (Display Data)
header("location: 06_table_data.php");

?>