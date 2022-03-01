
<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" type="text/css" href="css/style-p.css">
	 <link rel="stylesheet" type="text/css" href="css/style-h.css">
    <link rel="stylesheet" type="text/css" href="css/style-f.css">
 <title>products_5</title>
</head>
<body>
<?php include "header.php";?>
<main>
	<div class="title">
	<h2> Waffle</h2> </div>
	
	<div class="apranqner">
	<?php 
	 include "connect.php";
    $sql = "SELECT * FROM `products_5`";
	 $result = mysqli_query ($con, $sql);
	 if (mysqli_num_rows($result) > 0) {
	 while ($row = mysqli_fetch_assoc($result)){ ?>

<form method="post" action="basket/file.php">
<div class="card">
<h1 class="item_img"><img src="./img/<?php echo $row['image_url'];?>"></h1>
<h2 class="item_img"><img src="img/<?php echo $row['image_url'];?>"></h2>	
 <h3 class="item_title"><?php echo $row["name"];?></h3>

 <p><?php echo $row["description"];?></p>
	
<div class="more">
<a href="single.php/?id=<?php echo $row["id"]?>&type=<?php echo $row['type']?>">
   <p>More</p></a>
</div>
<input type="hidden" name="type" value="<?php echo $row['type']; ?>" />
<input type="hidden" name="image_url" value="<?php echo $row['image_url']; ?>" />
<input type="hidden" name="name" value="<?php echo $row["name"]; ?>">

<input type="hidden" name="price" value="<?php echo $row["price"]; ?>" />

  <table style=" width: 79%;
    margin: 0px auto;
    padding: 3%;">
  <tr>
 <td><span class="count_price" data-price="<?php echo $row["price"]; ?>"> <?php echo $row["price"]; ?></span>֏</td>

	<td>
<button class="minus" type="button" style="width:24%;">
<i class="fa fa-minus"></i></button>
<input type="text" class="quantity" name="quantity" value='1' style="width:24%; font-size:16px;"/>
<button class="plus" type="button" style="width:24%;"><i class="fa fa-plus"></i></button>
</td></tr>
  

</table>
<input type="submit" name="add_to_online-shopping"class="btn btn-success" value="Add to Cart" style="margin: 6% 0% 0% 13%;">
  <i class="fa  fa-shopping-basket"></i>
</div>
</form>

<?php
	}
}
 ?>
</div>
 
<script type="text/javascript" src="js/jquery-3.3.1.js"></script> 
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/script-1.js"></script>
<script type="text/javascript" src="js/script-3.js"></script>

</main>


<?php include "footer.php";?>

</body>
</html>

