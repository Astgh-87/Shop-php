<?php 
include "connect.php";
$id               = $_GET["id"];
$name             = $_POST["name"];
$price            = $_POST["price"];
$description      = $_POST["description"];
$img_url          = $_POST["image_url"];
$description_info = $_POST["description_info"];
$type             = $_POST["type"];

$sql = "INSERT INTO `products_2` 
 (`name`, `price`, `description`, `image_url`,`id`,`description_info`,`type`)
VALUES ('$name', '$price', '$description','$img_url','$id','$description_info','$type')";

$sql = "INSERT INTO  `products_3`  
(`name`, `price`, `description`, `image_url`,`id`,`description_info`,`type`)
VALUES ('$name', '$price', '$description','$img_url','$id','$description_info','$type')";

$sql = "INSERT INTO  `products_4`
 (`name`, `price`, `description`, `image_url`,`id`,`description_info`,`type`)
VALUES ('$name', '$price', '$description','$img_url','$id','$description_info','$type')";
$sql = "INSERT INTO  `products_6` 
(`name`, `price`, `description`, `image_url`,`id`,`description_info`,`type`)
VALUES ('$name', '$price', '$description','$img_url','$id','$description_info','$type')";
$sql = "INSERT INTO  `products_7` 
(`name`, `price`, `description`, `image_url`,`id`,`description_info`,`type`)
VALUES ('$name', '$price', '$description','$img_url','$id','$description_info','$type')";
$sql = "INSERT INTO  `products_5` 
(`name`, `price`, `description`, `image_url`,`id`,`description_info`,`type`)
VALUES ('$name', '$price', '$description','$img_url','$id','$description_info','$type')";
$sql = "INSERT INTO  `products_1` 
(`name`, `price`, `description`, `image_url`,`id`,`description_info`,`type`)
VALUES ('$name', '$price', '$description','$img_url','$id','$description_info','$type')";

if (mysqli_query($con, $sql)) {
  header("Location:index.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);


?>
