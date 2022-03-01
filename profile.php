<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/style-p.css">
<link rel="stylesheet" type="text/css" href="css/style-h.css">
 <link rel="stylesheet" type="text/css" href="css/style-f.css">
	<title>Profile</title>
</head>

<body>
<header>
	
<div class= "top-menu"> 
 <nav> 
  <ul class="navbar">
  <li><a class="a1 l" href="index.php">Home</a></li>

<li class="open dropdown-li"><a class="a1">Blog</a>
    <button class="dropbtn"> 
      <i class="fa fa-caret-down"></i>
    </button>
 <ul class="dropdown-menu">
     <li><a href="products_1.php" class="a1 l nav-link">Fruits</a></li>
    <li><a href="products_2.php" class="a1 l nav-link">Dried fruits</a></li>
    <li><a href="products_3.php" class="a1 l nav-link">Vegetables</a></li>
    <li><a href="products_4.php" class="a1 l nav-link">Nuts</a></li>
    <li><a href="products_5.php" class="a1 l nav-link">Candy</a></li>
    <li><a href="products_6.php" class="a1 l nav-link">Waffle</a></li>
    <li><a href="products_7.php" class="a1 l nav-link">Cakes</a></li></ul>
 </li>

 <li><a class="a1 l" href="registr.php">Registration</a></li>
 <li class="in"><a class="a1" href="logout.php">Log out</a></li>
<li><a class="a2 l" href="basket.php"><i class="fa fa-shopping-basket"></i></a></li>
   <li> <a  href=>    

<form action="file.php" method="post">

<select name="lang" id="sel"> 
 <option value="arm">Arm</option> 
 <option value="eng">Eng</option> 
 <option value="ru">Ru</option> 
</select> 
 </form>
</a></li>
 </ul>
  </nav>
</div>
</header>

	<main>
<div class="account-1">
	<h1>Profile</h1>
</div>

<div class="account">
	<?php 
		include "registr/connect.php";
		$sql = "SELECT * FROM `user`";
		$result = mysqli_query ($con, $sql);
	 	if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)){ ?>

<div class="acc-card">
<div class="text">	
<h3> <?php echo $row["firstname"]; ?></h3>
<h4> <?php echo $row["lastname"];  ?></h4>
<p>  <?php echo $row["description_info"];?></p>
</div>
<?php
	}
}
 ?>
</div>
<div class="account-img">


<?php 
include "connect.php";

$query=$con->query("SELECT * FROM `images` ORDER BY uploaded_on DESC");
if($query->num_rows>0){
	while ($row=$query->fetch_assoc()){
		$imageUrl='uploads/'.$row["file_name"];?>
<img src="uploads/uploads/<?php echo $row['file_name'];?>"	alt=""width="400"/>	
<?php }
}else{?>
	<p1>No images found..</p1>
<?php }?>
<form action="uploads/upload.php" method="post" enctype="multipart/form-data"> 
<p1>Select Image File to Upload: 
   <input type="file" name="file"> 
   <input class='up' type="submit" name="submit" value="Upload"></p1>
</form> 
</div>
</div>

</main>
<?php include "footer.php";?>
<script type="text/javascript" src="js/jquery-3.3.1.js"></script> 
<script type="text/javascript" src="js/script.js"></script>
 <script type="text/javascript" src="js/script-1.js"></script>
</body>
</html>