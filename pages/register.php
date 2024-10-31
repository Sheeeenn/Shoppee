<?php 

require("codes/accounts/registercode.php");

?>
<html>

    <head>
        <title>Register Page</title>
    </head>

    <body> 

        <form action="/" method="POST">
            <label>Email:</label><br>
            <input type="text" name="email"><br>
            <label>Username:</label><br>
            <input type="text" name="username"><br>
            <label>Password:</label><br>
            <input type="password" name="password"><br>
            <label>Confirm Password:</label><br>
            <input type="password" name="c_password"><br>
            <input type="submit">
        </form>

    </body>

</html>