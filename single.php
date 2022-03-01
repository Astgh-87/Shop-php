<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style-p.css">
    <link rel="stylesheet" type="text/css" href="../css/style-f.css">
    <link rel="stylesheet" type="text/css" href="../css/style-h.css">
    <link rel="stylesheet" type="text/css" href="css/style-p.css">
    <link rel="stylesheet" type="text/css" href="css/style-f.css">
    <link rel="stylesheet" type="text/css" href="css/style-h.css">
	<title>Single</title>
</head>
<body>
<header>
	
<div class= "top-menu"> 
 <nav> 
      <ul class="navbar">
      <li><a class="a1" href="../index.php">Home</a></li>

<li class="open dropdown-li"><a class="a1">Blog</a>
    <button class="dropbtn"> 
      <i class="fa fa-caret-down"></i>
    </button>
  <ul class="dropdown-menu">
     <li><a href="../products_1.php" class="a1 nav-link">Fruits</a></li>
    <li><a href="../products_2.php" class="a1 nav-link">Dried fruits</a></li>
    <li><a href="../products_3.php" class="a1 nav-link">Vegetables</a></li>
    <li><a href="../products_4.php" class="a1 nav-link">Nuts</a></li>
    <li><a href="../products_5.php" class="a1 nav-link">Candy</a></li>
    <li><a href="../products_6.php" class="a1 nav-link">Waffle</a></li>
    <li><a href="../products_7.php" class="a1 nav-link">Cakes</a></li></ul>
 </li>

 <li><a class="a1" href="../registr.php">Registration</a></li>
 <li class="in"><a class="a1" href="../login.php">Log in</a></li>
<li><a class="a2" href="../basket.php"><i class="fa fa-shopping-basket"></i></a></li>
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
<div class="apranqner-1">

<?php 
 include "admin/connect.php";
  $id=$_GET["id"]; $type=$_GET["type"];
  if($type =='fruits'){
  $sql = "SELECT * FROM `products_1` WHERE id=$id";
  $result = mysqli_query($con, $sql);
  $row =mysqli_fetch_assoc($result);}

else if ($type=='Vegatables'){
$sql = "SELECT * FROM `products_2` WHERE id=$id";
$result = mysqli_query($con, $sql);
$row =mysqli_fetch_assoc($result);
}
    else if ($type=='Dried_fruits'){
$sql = "SELECT * FROM `products_3`  WHERE id=$id"; 
    $result = mysqli_query($con, $sql);
    $row =mysqli_fetch_assoc($result);
}
 else if  ($type=='Nuts'){
$sql = "SELECT * FROM `products_4` WHERE id=$id";
    $result = mysqli_query($con, $sql);
    $row =mysqli_fetch_assoc($result);
}  
else if  ($type=='Waffle'){
$sql = "SELECT * FROM `products_5`
        WHERE id=$id";
    $result = mysqli_query($con, $sql);
    $row =mysqli_fetch_assoc($result);
}  
else if  ($type=='Candy'){
$sql = "SELECT * FROM `products_6`
        WHERE id=$id";
    $result = mysqli_query($con, $sql);
    $row =mysqli_fetch_assoc($result);
}  
else if  ($type=='Cakes'){
$sql = "SELECT * FROM `products_7`
        WHERE id=$id";
    $result = mysqli_query($con, $sql);
    $row =mysqli_fetch_assoc($result);
}  
?>
<form method="post" action="../basket/file.php">
<div class="card">
<h1 class="item_img"><img src="../img/<?php echo $row['image_url'];?>"></h1>
<h2 class="item_img"><img src="../img/<?php echo $row['image_url'];?>"></h2>   
 <h3 class="item_title"><?php echo $row["name"];?></h3>
 <h4> <span class="item_price"><?php echo $row["price"];?></span></h4>
 <p><?php echo $row["description"];?></p>
    
<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
<input type="hidden" name="type" value="<?php echo $row['type']; ?>" />
<input type="hidden" name="image_url" value="<?php echo $row['image_url']; ?>" />
<input type="hidden" name="name" value="<?php echo $row["name"]; ?>">

<input type="hidden" name="price" value="<?php echo $row["price"]; ?>" />
  
<div class="count">
<button class="minus" type="button" style="width:17%;">
<i class="fa fa-minus"></i></button>
<input type="number" name="quantity" value="1" style="width:17%;"/>
<button class="plus" type="button" style="width:17%;"><i class="fa fa-plus"></i></button>
</div>  
<input type="submit" name="add_to_online-shopping"class="btn btn-success" value="Add to Cart" style="margin: 6% 0% 0% 13%;"/>
  <i class="fa  fa-shopping-basket"></i>    
</div>
</form>

<div class="info">
<H3><?php echo $row["description_info"];?></H3></div>
</div>
 </div>

 </main>
</body>

<footer class="site-footer">
        
  <div class="col-1">
  <ul class="footer-links">
  <li><a class="a1" href="../login.php">Log in</a></li>
  <li><a class="a1" href="../profile.php">My account</a></li>
  <li><a class="a1" href="../contact.php">Contact us</a></li>
   </ul>
   </div>


<div class="col-2">
  <ul class="social-icons">
  <li><a class="a1" href=""><h6>SOCIALS</h6></a></li>
  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
 <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
  <li><a class="a1" href=""><p>© 2022 All Rights Reserved.</p></a></li> </ul>
   </div>
 </div>
  </footer>

  <script type="text/javascript" src="../js/jquery-3.3.1.js"></script> 
<script type="text/javascript" src="../js/script.js"></script>
 <script type="text/javascript" src="../js/script-1.js"></script>
  <script type="text/javascript" src="../js/script-3.js"></script>
</html>