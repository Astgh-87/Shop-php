<?php 	
include "connect.php";
if(isset($_POST["delete"])){
	$id=$_GET["id"];

	$sql = "DELETE FROM `basket` WHERE id=$id";

if (mysqli_query($con, $sql)) {
  header("Location:../basket.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($con);
}


 ?>