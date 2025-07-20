<?php
//including required file.
require_once 'config.php';

// Step: 2 Establish connectivity with MySQL
$connection_object = mysqli_connect(    
        DATABASE_HOST,
        DATABASE_USER,
        DATABASE_PASSWORD,
        DATABASE_NAME
    );

// Step: 3 Display Message on successfull connection
if ($connection_object == False) {
    die('Connection not done'. mysqli_connect_error());
}
else{
    echo "Connection done.";
}

//Step: 4 Close the connection
mysqli_close($connection_object);
    

?>