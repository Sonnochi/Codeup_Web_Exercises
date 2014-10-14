<?php

var_dump($_GET);
var_dump($_POST);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My First Form</title>
</head>
<body>
<form method="POST" action="/my_first_form.php">
    <p>
        <label for="username">Username</label>
        <input id="username" name="username" type="text" value="" placeholder= "Enter Username">
    </p>
    <p>
        <label for="password">Password</label>
        <input id="password" name="password" type="password" value="" placeholder= "Enter Password">
    </p>
    <p>
       <!-- <input type="submit" name="Login" value="Login"> -->
        <button type="submit">Login</button>
    </p>
</form>

</body>
</html>