<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php  

	$fullname = $email = $gender = $comment = $age = $number = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$fullname = test_input($_POST["name"]);
		$email = test_input($_POST["email"]);
		$gender = test_input($_POST["gender"]);
		$comment = test_input($_POST["comment"]);
		$age = test_input($_POST["age"]);
		$number = test_input($_POST["number"]);
	}

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

?>

<h2>Form Validation</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	Full-name: <input type="text" name="name">
	<br> <br>
	E-mail: <input type="text" name="email">
	<br> <br>
	Gender: 
	<input type="radio" name="gender" value="male"> Male
	<input type="radio" name="gender" value="female"> Female
	<br> <br>
	Comment: <textarea name="comment" rows="10" cols="30"></textarea>
	<br> <br>
	Age: <input type="text" name="age">
	<br> <br>
	Number: <input type="text" name="number">
	<br> <br>

	<input type="submit" name="click here" value="click here">
	
</form>

<?php
	echo "<h2> Your Input: </h2>";
	echo $fullname; 
	echo "<br>";
	echo $email; 
	echo "<br>";
	echo $gender; 
	echo "<br>";
	echo $comment; 
	echo "<br>";
	echo $age; 
	echo "<br>";
	echo $number; 
	echo "<br>";

  ?>

</body>
</html>