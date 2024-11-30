<?php

include "static.php";

	if (isset($_POST['update'])) {
		$user_id = $_POST['id'];
		$user_name = $_POST['User-name'];
		$password = $_POST['Password'];

		$sql = "UPDATE 'validation' SET 'User-name' = '$user_name', 'Password' = '$password' WHERE 'id'='$user_id'";

		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "Record update succesful";

		}
		else {
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}

	if (isset($_GET['id'])) {
		$user_id = $_GET['id'];

		$sql = "SELECT *FROM 'validation' WHERE 'id'='$user_id'";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$user_name = $row['User-name'];
				$password = $row['Password'];
				$id = $row['id'];
			}
		?>

			<h2> User Update Form</h2>
			<form action="" method="post">
				<fieldset>
					<legend>Personal Information</legend>
					User-name:<br>
					<input type="text" name="user_name" value="<?php echo $user_name; ?>">
					<input type="hidden" name="user_id" value="<?php echo $id; ?>">
					<br>
					Password:<br>
					<input type="Password" name="password" value="<?php echo $password; ?>">
					<br>
					<input type="submit" name="update" value="Update" >
				</fieldset>
				
			</form>

		 <?php
		} else{
			header('Location: view.php');
		

		}

}


		  ?>

 