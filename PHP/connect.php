<?php 
	/*if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) { 
		$conn= mysqli_connect('localhost', 'root', '', 'test1') or die("Connection Failed:" .mysqli_connect_error());
		if (isset ($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['user_tag'])) {
			$name= $_POST['name'];
			$email= $_POST['email'];
			$phone= $_POST['phone'];
			$user_tag= $_POST['user-tag'];

			$sql= "INSERT INTO 'users' ('name', 'email', 'phone', 'user-tag') VALUES ('$name', '$email', '$phone', '$user_tag')";

			$query = mysqli_query($conn, $sql);
			if ($query) {
				echo "Entry Successful!";
			}
			else {
				echo "Error Occurred";
			}
		}
	}
//none of that worked...

	//attempt 2 to sync to XAMPP

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test1";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if($conn->connect_error) {
		die("Connection Failed:" . $conn->connect_error);
	}
		*/

	//no my sqli statements working, problem with database?

	//create

	include "static.php";

	if(isset($_POST['submit'])) {
		$user_name = $_POST['User-name'];
		$password = $_POST['Password'];

	}


	$sql = "INSERT INTO 'validation' ('User-name', 'Password') VALUES ('$user_name', '$password')";

	$result = $conn->query($sql);

	if($result == TRUE) {
		echo "New Account Validated!";
	}
	else {
		echo "Erro!" . $sql . "<br>". $conn->error;
	}

	$conn->closed();



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Static</title>
</head>
<body>

	<h2>Signup form</h2>

	<form action="" method="POST">
		<fieldset>
			<legend>Personal Information: </legend>
			User-name: <br>
			<input type="text" name="User-name">
			<br>
			Password: <br>
			<input type="password" name="Password">
			<br>
			<input type="submit" name="submit" value="submit">
		</fieldset>

	</form>

</body>
</html>