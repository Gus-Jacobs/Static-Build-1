<?php
	include "static.php";

	if (isset($_GET['id'])) {
		$user_id = $_GET['id'];

	$sql = "DELETE *FROM 'validation' WHERE 'id'='$user_id'";

	$result = $conn->query($sql);

	if($result == TRUE) {
		echo "Record Deleted succesfully.";
	} else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
	
}

  ?>