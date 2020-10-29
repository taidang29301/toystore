<?php
	include ('dbconnect.php');

	try{
		global $connString;
		$conn = pg_connect($connString);
		if( $conn === false){
			echo "Unable to connect PostqreSQL Sever.";
		}
		else {
			echo"Connect to db sucessfully!";
		}
		pg_close($conn);
	}
	catch (Expection $e){
		echo ' ' . $e->getMessage();
	}
?>
