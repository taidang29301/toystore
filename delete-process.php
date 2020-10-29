<?php
	include ('productCRUD.php');
		$obj = new productsCRUD();
		$success = $obj->deleteproducts($_GET['code']);
		header('Location: index.php');
?>