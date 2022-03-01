<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/style-a.css">
	<title>Document</title>
</head>
<body>
	<div class="mutq">
	<form action="file.php" method="POST">
		<input type="text" name="name" placeholder="name" required>
		<br>
		<input type="text" name="price" placeholder="price" required>
		<br>
		<input type="text" name="image_url" placeholder="image_url" required>
		<br>
		<input type="text" name="type" placeholder="type" required>
		<br>
		<textarea name="description" placeholder="description" required></textarea>
		<br>
		<textarea name="description_info" placeholder="description_info" required></textarea>
		<br>
		<input type="submit" name="send">
	</form>
</div>
<div class="apranqner">
		<?php 
		include "connect.php";
		$sql = "SELECT * FROM `products_2` ";
        $sql = "SELECT * FROM `products_3` ";
        $sql = "SELECT * FROM `products_1` ";
        $sql = "SELECT * FROM `products_7` ";
        $sql = "SELECT * FROM `products_5` ";
        $sql = "SELECT * FROM `products_6` ";
        $result = mysqli_query ($con, $sql);
	 	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)){ ?>

<div class="card">
	<img src="../img/<?php echo $row['image_url'];?>">	<div class="text">
       <h3><?php echo $row["name"];?></h3>	
       <h4><?php echo $row["price"];?></h4>
       <p><?php echo $row["description"];?></p>
       <p><?php echo $row["description_info"];?></p>

       <p><a href='single.php?id=<?php echo $row["id"]?> & type=<?php echo $row["type"]?>"></a></p>
</div>
</div> 
<?php
	}
}
 ?>
	</div>

</body>
</html>

