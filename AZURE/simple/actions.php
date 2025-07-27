<?php

// Step: 1 Define Database credentials as CONSTANT
define("DATABASE_HOST", "1si11mca60.mysql.database.azure.com");
define("DATABASE_NAME", "student");
define("DATABASE_USER", "user");
define("DATABASE_PASSWORD", "Welcome@Azure");

$user_name = $_GET['user_name'];
$user_email = $_GET['user_email'];
$user_password = $_GET['user_password'];


$connection_object = mysqli_connect(
    DATABASE_HOST,
    DATABASE_USER,
    DATABASE_PASSWORD,
    DATABASE_NAME
);

$creation_query = "CREATE TABLE IF NOT EXISTS users(
	user_id int PRIMARY KEY AUTO_INCREMENT,
	user_name text,
	user_email text,
	user_password text
    );";

$connection_object->query($creation_query);

$insertion_query = "INSERT INTO users VALUES(NULL,'$user_name', '$user_email', '$user_password')";
if($connection_object->query($insertion_query)){
    echo "Last Inserted ID: $connection_object->insert_id";
    echo "<br><br><br><a href='./'>Insert New Records</>";
}


mysqli_close($connection_object);


?>