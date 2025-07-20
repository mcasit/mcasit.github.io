<?php
//including required file
require_once "./config.php";

//connection function
function establish_connection(): mysqli
{

    $connection_object = mysqli_connect(
        DATABASE_HOST,
        DATABASE_USER,
        DATABASE_PASSWORD,
        DATABASE_NAME
    );

    if ($connection_object == False) {
        exit();
    }

    return $connection_object;
}
function close_database_connect($connection_object)
{
    mysqli_close($connection_object);
}

// Step: 5 Create Helper function for Insert into MySQL
function insert_data($connection_object, $insert_query): int
{

    $last_id = 0;

    $query_response = $connection_object->query($insert_query);

    if ($query_response == true) {
        $last_id = $connection_object->insert_id;
    }

    return $last_id;
}

// Step: 8 Create Helper function for Selecting data from MySQL
function get_table_data($connection_object, $select_query): array
{

    $query_response = $connection_object->query($select_query);

    if ($query_response == true) {
        $result_set = $query_response->fetch_all();
    }

    return $result_set;
}

// Step: 19 Create Helper function for Update into MySQL
function update_table_data($connection_object, $update_query): bool
{

    $query_response = $connection_object->query($update_query);
    if ($query_response == true) {
        return true;
    }
    return false;
}

// Step: 24 Create Helper function for Delete into MySQL
function delete_table_data($connection_object, $delete_query): bool
{

    $query_response = $connection_object->query($delete_query);
    if ($query_response == true) {
        return true;
    }
    return false;
}

?>