<?php 
include "connect.php";

$firstname  = $_POST["firstname"];
$lastname   = $_POST["lastname"];
$email      = $_POST["email"];
$password   = $_POST["password"];
$reg_date   = $_POST["reg_date"];
$comfirm_password = $_POST["comfirm_password"];
$description_info = $_POST["description_info"];

$sql = "INSERT INTO `user` (`firstname`, `lastname`,`email`, `password`, `comfirm_password`,`reg_date`,`description_info`)
VALUES ('$firstname', '$lastname','$email','$password','$comfirm_password','$reg_date','$description_info')";

if (mysqli_query($con, $sql)) {
  header("Location:index.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);


?>




?>

