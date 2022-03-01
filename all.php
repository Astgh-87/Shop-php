
    <link rel="stylesheet" type="text/css" href="css/style-p.css">
<main>

<div class="slideshow-container" data-flickity='{ "groupCells": true }'>
	<?php 
	 include "connect.php";
    $sql = "SELECT * FROM `products_1`";
	 $result = mysqli_query ($con, $sql);
	 if (mysqli_num_rows($result) > 0) {
	 while ($row = mysqli_fetch_assoc($result)){ ?>
	 	
<form method="post" action="basket/file.php">
  
  <div class="mySlides" >
<h1 class="item_img"><img src="../img/<?php echo $row['image_url'];?>"></h1>
<h2 class="item_img"><img src="img/<?php echo $row['image_url'];?>"></h2>   
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

<?php
	}
}
 ?>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>



  <?php 
   include "connect.php";
    $sql = "SELECT * FROM `products_2`";
   $result = mysqli_query ($con, $sql);
   if (mysqli_num_rows($result) > 0) {
   while ($row = mysqli_fetch_assoc($result)){ ?>
    
<form method="post" action="basket/file.php">
  
  <div class="mySlides 2">
<h1 class="item_img"><img src="../img/<?php echo $row['image_url'];?>"></h1>
<h2 class="item_img"><img src="img/<?php echo $row['image_url'];?>"></h2>   
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

<?php
  }
}
 ?>

  <?php 
   include "connect.php";
    $sql = "SELECT * FROM `products_3`";
   $result = mysqli_query ($con, $sql);
   if (mysqli_num_rows($result) > 0) {
   while ($row = mysqli_fetch_assoc($result)){ ?>
    
<form method="post" action="basket/file.php">
  
  <div class="mySlides 3">
<h1 class="item_img"><img src="../img/<?php echo $row['image_url'];?>"></h1>
<h2 class="item_img"><img src="img/<?php echo $row['image_url'];?>"></h2>   
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

<?php
  }
}
 ?>

  <?php 
   include "connect.php";
    $sql = "SELECT * FROM `products_4`";
   $result = mysqli_query ($con, $sql);
   if (mysqli_num_rows($result) > 0) {
   while ($row = mysqli_fetch_assoc($result)){ ?>
    
<form method="post" action="basket/file.php">
  
  <div class="mySlides 4">
<h1 class="item_img"><img src="../img/<?php echo $row['image_url'];?>"></h1>
<h2 class="item_img"><img src="img/<?php echo $row['image_url'];?>"></h2>   
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

<?php
  }
}
 ?>
 <?php 
   include "connect.php";
    $sql = "SELECT * FROM `products_5`";
   $result = mysqli_query ($con, $sql);
   if (mysqli_num_rows($result) > 0) {
   while ($row = mysqli_fetch_assoc($result)){ ?>

<form method="post" action="basket/file.php">
  
  <div class="mySlides 5">
<h1 class="item_img"><img src="../img/<?php echo $row['image_url'];?>"></h1>
<h2 class="item_img"><img src="img/<?php echo $row['image_url'];?>"></h2>   
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

<?php
  }
}
 ?>
<?php 
   include "connect.php";
    $sql = "SELECT * FROM `products_6`";
   $result = mysqli_query ($con, $sql);
   if (mysqli_num_rows($result) > 0) {
   while ($row = mysqli_fetch_assoc($result)){ ?>

 <form method="post" action="basket/file.php">
  
  <div class="mySlides 6">
<h1 class="item_img"><img src="../img/<?php echo $row['image_url'];?>"></h1>
<h2 class="item_img"><img src="img/<?php echo $row['image_url'];?>"></h2>   
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

<?php
  }
}
 ?>
<?php 
   include "connect.php";
    $sql = "SELECT * FROM `products_7`";
   $result = mysqli_query ($con, $sql);
   if (mysqli_num_rows($result) > 0) {
   while ($row = mysqli_fetch_assoc($result)){ ?>
    
<form method="post" action="basket/file.php">
  
  <div class="mySlides 7">
<h1 class="item_img"><img src="../img/<?php echo $row['image_url'];?>"></h1>
<h2 class="item_img"><img src="img/<?php echo $row['image_url'];?>"></h2>   
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

<?php
  }
}
 ?>



</div>

</main>


<script type="text/javascript" src="js/jquery-3.3.1.js"></script> 
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/script-1.js"></script>
<script type="text/javascript" src="js/script-3.js"></script>
</div>
</main>