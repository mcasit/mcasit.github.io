<?php
//including required file.
require_once './config.php';

// Step: 1 Establish connectivity with MySQL
$connection_object = mysqli_connect(
    DATABASE_HOST,
    DATABASE_USER,
    DATABASE_PASSWORD,
    DATABASE_NAME
);

// Step: 2 Writing proper SQL Query
$select_query = "SELECT * FROM users";

// Step: 3 Display SQL Query (optional)
// echo $select_query;

// Step: 4 Display table data
$result = $connection_object->query($select_query);

if ($result == true) {
    $result_set = $result->fetch_all();
}
echo "user_id,user_name,user_email";
foreach ($result_set as $row) { 
    echo "<br>$row[0],$row[1],$row[2]";
}

//Step: 5 Close the connection
mysqli_close($connection_object);
?>