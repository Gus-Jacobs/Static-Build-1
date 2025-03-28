<!DOCTYPE html>
<html>
<head>
<style>
	.error{ color: #FF0000; }
</style>
</head>
<body>

	<?php

	$nameErr = $emailErr = $genderErr = $websiteErr = "";
	$name = $email = $gender = $comment = $website = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["name"])) {
			$nameErr = "Please enter a valid name";
		}
		else {
			$name = test_input($_POST["name"]);
			if (!preg_match("/^[a-zA-Z']*$/", $name)) {
				$nameErr = "Only letters and white spaces allowed";
			}
		}
	}
	if (empty($_POST["email"])) {
			$emailErr = "Valid email adress";
		}
		else {
			$email = test_input($_POST["email"]);

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Incorrect email";
			}

		}

	if (empty($_POST["website"])) {
			$website = "";
		}
		else {
			$website = test_input($_POST["website"]);

			if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%?=~_|]/i", $website)) {
				$websiteErr = "please enter a valid url";
			}

		}

	if (empty($_POST["comment"])) {
			$comment = "";
		}
		else {
			$comment = test_input($_POST["comment"]);
			}

	if (empty($_POST["gender"])) {
			$genderErr = "Please select a gender";
		}
		else {
			$gender = test_input($_POST["gender"]);
			}


	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	 ?>

	 <h2>PHP Form Validation</h2>
	 <p><span class="error">* required field</span></p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	Full-name: <input type="text" name="name">
	<span class="error">* <?php echo $nameErr; ?></span>
	<br> <br>
	E-mail: <input type="text" name="email">
	<span class="error">* <?php echo $emailErr; ?></span>
	<br> <br>
	Website: <input type="text" name="website">
	<span class="error">* <?php echo $websiteErr; ?></span>
	Gender: 
	<input type="radio" name="gender" value="male"> Male
	<input type="radio" name="gender" value="female"> Female
	<span class="error">* <?php echo $genderErr; ?></span>
	<br> <br>
	Comment: <textarea name="comment" rows="10" cols="30"></textarea>
	<br> <br>

	<input type="submit" name="click here" value="click here">
	
</form>

<?php
	echo "<h2> Your Input: </h2>";
	echo $name; 
	echo "<br>";
	echo $email; 
	echo "<br>";
	echo $gender; 
	echo "<br>";
	echo $comment; 
	echo "<br>";
	echo $website; 
	echo "<br>";


  ?>

</body>
</html>

//displays errors before erros occur