<?php


?>

<html>

<head>
    <title> Working with HTML Forms & PHP</title>
</head>

<body>
    <pre>
    <!-- Step: 1 Create Login form -->
    <!-- Step: 2 Use proper method GET or POST based on the requirement -->
    <form action="./login_action.php" method="POST">

        Email       : <input type="email" name="user_email" />

        Password    : <input type="password" name="user_password" />

                      <input type="submit" name="btn_submit" value="Submit"> <input type="reset" name="btn_reset" value="Reset">
    </form>
    </pre>

</body>

</html>