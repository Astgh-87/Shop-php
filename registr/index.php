<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=">
	<title>registr</title>
</head>

<body>
	<form action="file.php" method="POST">
		<input type="text" name="firstname" placeholder="firstname" required>
		<br>
		<input type="text" name="lastname" placeholder="lastname" required>
		<br>
		<input type="text" name="email" placeholder="email" required>
		<br>
		<input type="text" name="password" placeholder="password" required>
		<input type="text" name="comfirm_password" placeholder="comfirm_password" required>
		<input type="submit" name="send">
		<br>
	</form>
<table border="1">
		<tr>
			<th>firstname</th>
			<th>lastname</th>
			<th>email</th>
			<th>password</th>
			<th>comfirm_password</th>
		</tr>
<?php 
include "connect.php";
	$sql = "SELECT * FROM `user`";
		$result = mysqli_query ($con, $sql);
	 	if (mysqli_num_rows($result) > 0) {
	   while ($row = mysqli_fetch_assoc($result)){ 
	   	?>
	<tr>
		<td><?php echo $row["firstname"] ?></td>
		<td><?php echo $row["lastname"] ?></td>
		<td><?php echo $row["email"] ?></td>
		<td><?php echo $row["password"]?></td>
		<td><?php echo $row["comfirm_password"]?></td>
    
	<td> <form method="POST" action='delete.php ?id=<?php echo $row["id"] ?> '>
	<input type="submit" name="delete" value="delete">
	</form>
    </td>
</tr>
 
<?php
				}
			}
		 ?>
	</table>

</body>
</html>

