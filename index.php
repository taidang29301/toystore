<?php
	include ('productCRUD.php');
	$obj = new productsCRUD();
	// read data
	$list = $obj->readtoy();
	if($list){
	/*	foreach($list as $item){
			$content = "";
			foreach($item as $key => $value){
				$content = $content . $key.": ".$value."<br>";
			}
		echo $content."<br>";
		}
	}*/


	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>
	<body>
	<!DOCTYPE HTML>
<html>

<head>
  <title>ATN - admin</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">ATN<span class="logo_colour">_Toy_Store</span></a></h1>
          <h2>Entertain.Enjoy.For kids and teenagers</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="home.php">Home</a></li>
          <li class="selected"><a href="index.php">Admin</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
		<div class="container">
			<table  class="table table-striped">
				<tr>
					<th>Product Code</th>
					<th>Product Name</th>
					<th>Product Price</th>
					<th>Product Image</th>
					<th>Product Details</th>
					<th>Actions</th>
				</tr>
				<?php foreach($list as $item){ ?>
				<tr>
					
					<td><?php echo $item["code"] ?></td>
					<td><?php echo $item["name"] ?></td>
					<td><?php echo $item["price"] ?></td>
					<td><img src = "img\<?=$item["image"] ?> " width="200" height="142" /></td>
					<td><?php echo $item["details"] ?></td>
					<td><a href="delete-process.php?code=<?= $item["code"]?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
				</tr>
				<?php } ?>
				<?php } ?>
			</table>
			<a href="insert.php"><button type="button" class="btn-success" style="float:right;wight:600px; height:60px;">Update</button></a>
		</div>
	</body>
</html>