<!--Step: 1 Create HTML Form -->
<html>
<head>
    <title> Working with HTML Forms & PHP</title>
</head>

<body>
    <pre>
    <!-- Step: 2 Set proper php action file -->
    <!-- Step: 3 Use proper method GET or POST based on the requirement -->
    <form action="./01_form_actions.php" method="GET">
        Name        : <input type="text" name="user_name" />

        Email       : <input type="email" name="user_email" />

        Password    : <input type="password" name="user_password" />
    <!-- Step: 5 Execute the HTML page and click on Submit button to see Simple message from Action file -->
                      <input type="submit" name="btn_submit" value="Submit"> <input type="reset" name="btn_reset" value="Reset">
    </form>
    </pre>

</body>

</html>