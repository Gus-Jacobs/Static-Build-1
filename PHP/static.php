<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Static:Login</title>
</head>

<h1>Login</h1>
<body>
	<body bgcolor="teal">
<div><h2>Registration Form</h2></div>
<form action= 'connect.php' method="POST">
	<label for="user">Name:</label><br>
	<input type="text" name="name" id="name" required /> <br> <br>

	<label for="email">Email:</label><br>
	<input type="email" name="email" id="email" required /> <br> <br>

	<label for="phone">Phone:</label><br>
	<input type="text" name="phone" id="phone" required /> <br> <br>
()
	<label for="user-tag">Tag:</label><br>
	<input type="text" name="user-tag" id="user-tag" required /> <br> <br>

	<input type="submit" name="submit" id="submit">
</form>
</body>
</html> -->


<?php

$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "validation";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if($conn->connect_error) {
		die("Connection Failed:" . $conn->connect_error);
	}

?>