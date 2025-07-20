<?php

// Step: 1 Start PHP Session
session_start();

// Step: 2 Add Variable into Session
$_SESSION['user'] = "john";

// Step: 3 Access PHP Session Variable
echo "Username:".$_SESSION['user'];
// Step: 4 Display PHP Session Variable Value

// Step: 5 Remove PHP Session Variable
session_unset();

// Step: 6 Destroy OHO Session
session_destroy();

?>