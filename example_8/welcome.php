<?php
session_start();

echo "Welcome ".$_SESSION['username'];
?>
<html>
<body><br>
<!-- Step: 5 Logout the user -->
<button><a href="./logout.php">logout</a></button>
</body>
</html>