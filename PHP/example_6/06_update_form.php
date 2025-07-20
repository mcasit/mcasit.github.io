<?php
//including required file
require_once "./config.php";
require_once "./06_helper_database.php";

// Step: 14 Retrieve  Form data using GET for user_id
$user_id = $_GET['user_id'];

# ESTABLISH DATABASE CONNECTIVITY
$connection_object = establish_connection();

// Step: 15 Get the data from MySQL table for the selected user_id
$select_query = "SELECT * FROM users where user_id= $user_id";
//calling select function
$result_set = get_table_data($connection_object, $select_query);

// Step: 15 Get the data from MySQL table for the selected user_id
foreach ($result_set as $row) {
    $user_id = $row[0];
    $user_name = $row[1];
    $user_email = $row[2];
    $user_password = $row[3];
}

?>
<!-- Step: 13 Create Update HTML Forms -->
<html>

<head>
    <title> Working with HTML Forms & PHP</title>
</head>

<body>
    <pre>
    <form action="./06_update_action.php" method="GET">
        ID          : <input type="text" name="user_id" value="<?= $user_id; ?>" readonly/>

        Name        : <input type="text" name="user_name" value="<?= $user_name; ?>" />

        Email       : <input type="email" name="user_email" value="<?= $user_email; ?>" />

        Password    : <input type="password" name="user_password" value="<?= $user_password; ?>"  />

                      <input type="submit" name="btn_update" value="Update"> <input type="reset" name="btn_reset" value="Reset">
    </form>
    </pre>

</body>

</html>
