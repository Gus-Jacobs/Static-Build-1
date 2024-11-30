<?php 

	include "static.php";

	$sql = "SELECT *FROM users";

	$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Page</title>
</head>
<body>
	<div class="container">
		<h2>Users</h2>
		<table class="table">
			<head>
				<tr>
					<th>ID</th>
					<th>User-name</th>
					<th>Password</th>
					<th>Action</th>
				</tr>
			</thread>
			<tbody>

				<?php 

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
		 ?>

		 	<tr>
		 		<td><?php echo $row['id'];  ?></td>
		 		<td><?php echo $row['User-name'];  ?></td>
		 		<td><?php echo $row['Password'];  ?></td>
		 		<td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">
		 		Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>" >
		 		Delete</a>
		 		</td>
		 	</tr>

		 	<?php 	}

		 }


		 	?>

	
		</tbody>
		</table>
	</div>

</body>
</html>