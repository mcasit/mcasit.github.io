<?php
//including required file
require_once "./config.php";
require_once "./06_helper_database.php";

# RETRIVE FORM DATA
$user_name = $_GET['user_name'];
$user_email = $_GET['user_email'];
$user_password = $_GET['user_password'];


# ESTABLISH DATABASE CONNECTIVITY
$connection_object = establish_connection();

$insert_query = "INSERT INTO users VALUES ('', '$user_name', '$user_email', '$user_password')";
// Step: 6 Call helper function action file
$last_id = insert_data(
    $connection_object,
    $insert_query
);
// echo "Last_id: $last_id";

header("location: 06_table_data.php")

?>