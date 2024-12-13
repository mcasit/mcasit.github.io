<?php

//including required file
require_once "./config.php";

// Step: 4 Retrieve forms values in PHP
$user_name = $_GET['user_name'];
$user_email = $_GET['user_email'];
$user_password = $_GET['user_password'];

// Step: 5 Print the forms values in PHP
// echo "Username:$user_name<br>Useremail:$user_email";

// Step: 6 Establish connectivity with MySQL
$connection_object = mysqli_connect(
    DATABASE_HOST,
    DATABASE_USER,
    DATABASE_PASSWORD,
    DATABASE_NAME
);

// Step: 7 Create Table in MySQL
$creation_query = "CREATE TABLE IF NOT EXISTS users(
	user_id int PRIMARY KEY AUTO_INCREMENT,
	user_name text,
	user_email text,
	user_password text
    );";

// if($connection_object->query($creation_query))
// {
//     echo "Table is created";
// }

//Step: 8 Insert data in Table
$insertion_query = "INSERT INTO users VALUES('','$user_name', '$user_email', '$user_password')";
if($connection_object->query($insertion_query)){
// Step: 9 Display Last Insert ID for the database entry
    echo "Last Inserted ID: $connection_object->insert_id";
}


//Step: 9 Close the connection
mysqli_close($connection_object);


?>