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

<!DOCTYPE HTML>
<html>

<head>
  <title>ATN - Home page</title>
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
          <h1><a href="index.html">ATN<span class="logo_colour">_Toy_Store</span></a></h1>
          <h2>Entertain.Enjoy.For kids and teenagers</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Admin</a></li>
          <li class="selected"><a href="home.php">Home</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <h1>Latest News</h1>
        <h4>halloween event sale of 40 % for evey products </h4>
        <h5>from October,29th 2020 to October,31th 2020</h5>
        <p>For more details.<br /><a href="#">Read more</a></p>
        <h1>Search</h1>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
      </div>
      <div class="container">
			<h3><a> Most sale of the month </a></h3>
			<table  class="table table-striped">
				<tr>
					<th>Product Code</th>
					<th>Product Name</th>
					<th>Product Price</th>
					<th>Product Image</th>
					<th>Product Details</th>
				</tr>
				<?php foreach($list as $item){ ?>
				<tr>
					
					<td><?php echo $item["code"] ?></td>
					<td><?php echo $item["name"] ?></td>
					<td><?php echo $item["price"] ?></td>
					<td><img src = "img\<?=$item["image"] ?> " width="200" height="142" /></td>
					<td><?php echo $item["details"] ?></td>
				</tr>
				<?php } ?>
				<?php } ?>
			</table>
  </div>
  </div>
</body>
</html>