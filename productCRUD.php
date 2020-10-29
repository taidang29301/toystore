<?php
	include ('dbconnect.php');
	
	class productsCRUD{
		private $msg="";
		
		public function getMsg(){
			return $this->msg;
		}
		
		public function readtoy(){
			$data = array();
			try {
				global $connString;
				$conn = pg_connect($connString);
				if ( $conn === false ){
					$this->msg="Unable to connect PostqreSQL Sever.";
					return $data;
				}
			$query = 'select code,name,price,image,details from "products"';
			$result = pg_query($conn,$query);
			while ($row = pg_fetch_row($result)){
				array_push($data, array("code"=>$row[0],"name"=>$row[1],"price"=>$row[2],"image"=>$row[3],"details"=>$row[4]));
			}
			pg_close($conn);
			}
			catch (Exception $e){
				$this-> msg = $e->getMessage();
			}
			return $data;
		}

		public function createtoy ($code,$name,$price,$image,$details){
			$success = -1;
			try{
				global $connString;
				$conn = pg_connect($connString);
				if ( $conn === false ){
					$this->msg="Unable to connect PostqreSQL Sever.";
					return $success;
				}
				
				$query = 'insert into "products" (code,name,price,image,details) values ($1,$2,$3,$4,$5) returning code';
				$params = array(&$code,&$name,&$price,&$image,&$details);
				$res = pg_query_params($conn,$query,$params);
				$row = pg_fetch_row($res);
				$success = $row[0];
				pg_close($conn);
			}catch(Exception $e){
				$this->msg = $e->getMessage();
				$success = -1;
			}
		}
		
		public function deleteproducts($code){
			$success = -1;
			try {
				global $connString;
				$conn = pg_connect($connString);
				if ( $conn === false ){
					$this->msg="Unable to connect PostqreSQL Sever.";
					return $success;
				}
				$query = 'delete from "products" where code= $1';
				$params = array (&$code);
				$res = pg_query_params($conn, $query, $params);
				if($res===FALSE) {
				 $this->msg = "Error in executing query.";
				 return $success;
				}
				$num_rows=pg_affected_rows($res);
				$success=$num_rows;
				$this->msg="";
				pg_close($conn);
			} catch(Exception $e){
				$this->msg = $e->getMessage();
				$success = -1;
			} 
		}
	}	
?>