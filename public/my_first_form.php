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
<h2>User Login</h2>
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
<h2>Compose an Email</h2>
<form method="POST" action="/my_first_form.php">
	<p>
		<label for="to">To: </label>
		<input type="text" id="recever" name="recever" value="" placeholder="Recipient Email">
	</p>
	<p>
		<label for="from">From: </label>
		<input type="text" id="sender" name="sender" value="" placeholder="Your Email">
	</p>
	<p>
		<label for="subject">Subject: </label>
		<input type="text" id="topic" name="topic" value="" placeholder="Subject">
	</p>
	<p>
		<label for="email_body">Enter Text:</label>
		<textarea id="email_body" name="email_body"></textarea>
	</p>
	<p>
		<button type="send">Send</button>
	</p>
	<p>
		<label for="mailing_list">
    		<input type="checkbox" id="mailing_list" name="mailing_list" value="yes" checked="">
    		<label for="mailing_list">Would you like to save a copy of the email?</label>
		</label>
	</p>
</form>
<h2>Multiple Choice Test</h2>
<form method="POST" action="/my_first_form.php">
	<p>The Earth's natural satalite is the moon?</p>
<label>
    <input type="radio" id="q1a" name="q1" value="True">
    True
</label>
<label>
    <input type="radio" id="q1b" name="q1" value="False">
    False
</label>
	<p>
		<button type="submit">Submit</button>
	</p>
</form>
<form method="POST" action="/my_first_form.php">
	<h2>Select Testing</h2>
	<label for="choice">Is the sky blue?</label>
		<select id="choice" name="chioce">
		    <option value="1">Yes</option>
		    <option value="0" selected>No</option>
		</select>
	<p>
		<button type="submit">Submit</button>
	</p>
</form>
</body>
</html>