<?php
//including required file
require_once "./config.php";
require_once "./06_helper_database.php";

# ESTABLISH DATABASE CONNECTIVITY
$connection_object = establish_connection();

$select_query = "SELECT * FROM users";
//calling select function
$result_set = get_table_data($connection_object, $select_query);

// Step: 9 display data using print_r function
// print_r($result_set);

# GENERATE DYNAMIC TABLE ROWS
$html_table_data = "";

foreach ($result_set as $row) {
    $html_table_data .= " 
    <tr>
        <td>" . $row[0] . "</td>
        <td>" . $row[1] . "</td>
        <td>" . $row[2] . "</td>
        <td> <a href='./06_update_form.php?user_id=" . $row[0] . "'> Click to Update</a>
             <a href='./06_delete_action.php?user_id=" . $row[0] . "'> Click to Delete</a>
        </td>
    </tr>";
// Step: 13 Create Update HTML Forms
// Step: 14 Retrieve  Form data using GET for user_id
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Step: 7 Create HTML Table with Proper Values (ie. Static/Hardcoded values) -->
<!-- <table border="1">
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>User Email</th>
            <th>Actions</th>
        </tr>
        <tr>
            <td>1</td>
            <td>sanjay</td>
            <td>sanjay@gmail.com</td>
        </tr>
        <tr>
            <td>2</td>
            <td>mukesh</td>
            <td>mukesh@gmail.com</td>
        </tr>
    </table> -->

<!-- Step: 10 Convert static table to Dynamic Table -->
<!-- Step: 11 Add Hyperlink for Create New Entry -->
<!-- Step: 12 Redirect page to Step# 2 (Create HTML Form) -->
<a href="./06_html_form.php"> Click to Add</a>
    <br><br>

<table border="1">
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>User Email</th>
            <th>Actions</th>
        </tr>
        <?php
        echo $html_table_data;
        ?>
    </table>

</body>
</html>