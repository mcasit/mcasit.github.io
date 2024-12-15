<?php
// Step: 22 Create action file for Delete data
//including required file
require_once "./config.php";
require_once "./06_helper_database.php";

// Step: 23 Retrieve  Form data using GET for user_id
$user_id = $_GET['user_id'];

# ESTABLISH DATABASE CONNECTIVITY
$connection_object = establish_connection();

# DELETE DATA
$delete_query = " DELETE FROM users WHERE user_id = $user_id; ";

// Step: 25 Call helper function action file
delete_table_data($connection_object, $delete_query);

# CONNECTION CLOSE
close_database_connect($connection_object);

// Step: 26 Redirect page to Step# 7 (Display Data)
header("location: ./06_table_data.php");


?>