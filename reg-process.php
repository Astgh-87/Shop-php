<?php
session_start();
	include "connect.php";

	$firstname   = trim($_POST["firstname"]);
  $lastname    = trim($_POST["lastname"]);
  $email       = trim($_POST["email"]);
  $password    = trim($_POST["password"]);
  $comfirm_password = trim($_POST["comfirm_password"]);
  $description_info = $_POST["description_info"];
  

  $response = array();
  $ishm     = true;

  if(!preg_match("/[a-zA-Z]{2,30}$/", $firstname)) {
  	$new_response = array(
  	"success" => false,
  	"input_name" => "firstname",
  	"msg" => "First name - dashtn petq e parunaki latinatar");

  	array_push($response, $new_response);
  	$ishm = false;
  }

    if(!preg_match('/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])/', $password)) {

  	$new_response = array(
  	"success" => false,
  	"input_name" => "password",
  	"msg" => "Password - dashtn sxal e lracvac petq e parunaki latinatar mecatar poqratar ev tver"
  );
  	array_push($response, $new_response);
  	$ishm = false;
  }

if($comfirm_password != $password){
	$new_response = array(
  	"success" => false,
  	"input_name" => "comfirm_password",
  	"msg" => "comfirm_password - dashti simvolner@ ev Password dashti simvolner@ nuyn@ chen"
  );
    array_push($response, $new_response);
  	$ishm = false;
}

$sql2 = "SELECT email FROM `user` WHERE email = '$email'";

  if($res2 = $con -> query($sql2)){
  	$x = $res2 -> fetch_assoc();
  }
  else{
  	echo 'error:' .sql2. '<br>' .$con ->query;
  	error;
  }

if($x) {
	$new_response =array(
		"success" => false,
  	"input_name" => "email",
  	"msg" => "Ays email-ic ka"
	);
	array_push($response, $new_response);
  	$ishm = false;
}
if(!$ishm){
	echo json_encode($response);
	die;
}

  if ($ishm) {
  	$sql = "INSERT INTO  `user`(`firstname`, `lastname`,`email`, `password`, `comfirm_password`,`description_info`)
  	VALUES('$firstname','$lastname','$email','$password','$comfirm_password','$description_info')"; 
    
  	if($con -> query($sql)){
  		$sql2 = "SELECT * FROM `user` WHERE email ='$email'";
  		if($result = $con -> query($sql2)){
  			$res = $result ->fetch_assoc();
  			$_SESSION['id'] = $res['id'];
  			header('Location:login.php');
  			die;
  		}
  	}
  	$s = array(
  		"success" => true,
  		"msg" => "ok"
  	);
  	echo json_encode($s);
  }
