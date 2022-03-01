<?php 
include "connect.php";
  $id       = $_GET["id"];
  $image    = $_POST['image_url'];
  $name     = $_POST["name"];
  $price    = $_POST["price"];
  $quantity = $_POST["quantity"];
  $type     = $_POST["type"];         

$sql = "INSERT INTO `basket` (`name`, `price`,`image_url`, `quantity`, `id`,`type`)
VALUES ('$name', '$price','$image','$quantity','$id','$type')";


if (mysqli_query($con, $sql)) {
  header("Location:../basket.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);


?>


