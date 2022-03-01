<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/style-p.css">
<link rel="stylesheet" type="text/css" href="css/style-f.css">
<link rel="stylesheet" type="text/css" href="css/style-h.css">
<link rel="stylesheet" type="text/css" href="css/style-r.css">
	<title>registr</title>
</head>

<body>
  <?php include "header.php";?>

	<form action="reg-process.php" method="POST">
<div class="REGITSR">
<h1>Registration</h1> 
<div class="Contact-1">
  <div class="First Name">
  <p>First Name</p>
    <label for="name"></label>
    <input type="text" name="firstname" First Name>
  </div>
    <div class="Last Name">
    <p>Last Name</p>
      <label for="name"></label>
      <input type="text" name="lastname" Last Name>
    </div>
    </div>
<div class="Contact-2">
    <div class="Email">
     <p>Email</p>
     <label for="name"></label>
     <input type="text" name="email" Email >
    </div>
   <div class="Password">
   <p>Password</p>
      <label for="name"></label>
      <input type="text" name="password" Subject >
    </div>
    </div>
  <div class="Contact-3">
     <div class="description">
     <p>Description-info</p>
     <label for="name"></label>
     <input type="text" name="description_info" description-info >
    </div>
    <div class="comfirm_password">
   <p>Comfirm_password</p>
      <label for="name"></label>
      <input type="text" name="comfirm_password"Subject >
    </div>
    </div>
   <div class="submit">
     <input type="submit" value="Submit" id="form_button">
    </div>
    </div> 
    </div>
	</form>
<?php include "footer.php";?>
<p>forich
<script type="text/javascript" src="js/jquery-3.3.1.js"></script> 
<script type="text/javascript" src="js/script.js"></script>
 <script type="text/javascript" src="js/script-1.js"></script>
</body>
</html>

