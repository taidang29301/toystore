<?php
	include ('productCRUD.php');
	
	if (isset($_POST['add'])){
		$obj = new ProductsCRUD();
		$success = $obj ->createtoy ($_POST['code'],$_POST['name'],$_POST['price'],$_POST['image'],$_POST['details']);
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Bootstrap Example</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>
	<body>

		<div class="container">
			<h2>Add New</h2>
			<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
			<div class = "from-group">
				<label for="Code">Product code:</label>
				<input type="text" class="form-control" id="code" placeholder="Enter code" name="code">
			</div>
			<div class = "from-group">
				<label for="Name">Product name:</label>
				<input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
			</div>
			<div class = "from-group">
				<label for="Price">Product price:</label>
				<input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
			</div>
			<div class = "from-group">
				<label for="Image">Product image:</label>
				<input type="text" class="form-control" id="image" placeholder="Enter image" name="image">
			</div>
			<div class = "from-group">
				<label for="Details">Product details:</label>
				<input type="text" class="form-control" id="details" placeholder="Enter details" name="details">
			</div>
			<div class="form-check">
				<label class="form-check-label">
					<input class="form-check-input" type="checkbox" name="confirm"> Confirm			
				</label>
			</div>
			<button type="submit" class="btn btn-primary" name= "add"> Add New</button>
			</form>
		</div>

	</body>
</html>
