<?php
//including required file
require_once "./config.php";

// Step: 2 Establish connectivity with MySQL
$connection_object = mysqli_connect(
    DATABASE_HOST,
    DATABASE_USER,
    DATABASE_PASSWORD,
    DATABASE_NAME
);

// Step: 3 Writing proper SQL Query
$select_query = "SELECT * FROM users";

// Step: 4 Display SQL Query (optional)
// echo $select_query;

// Step: 5 Display table data
$result = $connection_object->query($select_query);
if ($result == true) {
    $result_set = $result->fetch_all();
}

# GENERATE DYNAMIC TABLE ROWS
$html_table_data = "";

foreach ($result_set as $row) {
    $html_table_data .= " 
    <tr>
        <td>" . $row[0] . "</td>
        <td>" . $row[1] . "</td>
        <td>" . $row[2] . "</td>
    </tr>";
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
<!-- Step: 1 Create HTML Table with Proper Values (ie. Static/Hardcoded values) -->
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

<!-- Step: 6 Convert Static HTML Table using PHP to display dynamic value -->
    <table border="1">
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>User Email</th>
        </tr>
        <?php
        echo $html_table_data;
        ?>
    </table>
</body>
</html>