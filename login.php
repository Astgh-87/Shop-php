<?php  
session_start();//session starts here  
?>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
 <meta charset="UTF-8"> 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="css/style-p.css">
<link rel="stylesheet" type="text/css" href="css/style-f.css">
<link rel="stylesheet" type="text/css" href="css/style-h.css">
<link rel="stylesheet" type="text/css" href="css/style-r.css">
   </head>     
   <title>Login</title>
</head>

<body>
    <?php include "header.php";?>

 <h5>Log in</h5> 

<div class="container">
<div class="login">
<form action="logProces.php" method="POST">
 <p>Email</p>
<input type="text"  name="email" placeholder="Email" required><br>
<p>Password</p>
<input type="text" id="psw" placeholder="Password" name="password" required><br>
<input type="submit" name="Login" value="Login">

</form>
</div>
</div>
<div id="message">
  <h3>The password must contain the following:</h3>
  <p id="letter" class="invalid">Lowercase letter</p>
  <p id="capital" class="invalid">Capital letter:</p>
  <p id="number" class="invalid">Number</p>
  <p id="length" class="invalid">Minimum 8 characters </p>
</div>

<div class="reg">
 <button class="reg"><a class="a" href="registr.php">Registration</a>  </button> 
</div>

<?php include "footer.php";?>

<script type="text/javascript" src="js/jquery-3.3.1.js"></script> 
 <script type="text/javascript" src="js/script-2.js"></script> 
  <script type="text/javascript" src="js/script-1.js"></script> 
 <script type="text/javascript" src="js/script.js"></script> 
</body>
</html>
<?php  
  
include 'connect.php'; 
  
if(isset($_POST['login']))  
{  
    $email    = $_POST['email'];  
    $password = $_POST['password'];  
  
    $check_user = "SELECT * FROM `user` WHERE email='$email' && password = '$password' ";
  
    $run = mysqli_query($con,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('welcome.php','_self')</script>";  
  
        $_SESSION['email'] = $email;
  
    }  
}