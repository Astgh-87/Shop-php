<?php

include 'connect.php';
$email    = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM `user` WHERE email='$email' && password = '$password' ";

if ($res = $con -> query($sql)){
	$x = $res -> fetch_assoc();


	if($x != NULL){
		header('Location:profile.php');
		
		die;
	}
	else{
		header('Location:login.php');
		
	}
	}
	else{
		echo 'error-' . $con -> connect_error;
	}
	

//mysqli_close($con);

?>