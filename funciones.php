<?php 
	function conexion($db,$usuario,$password){
		try {
			$con = new PDO("mysql:host=localhost;dbname=$db",$usuario,$password);
			return $con;
		} catch (PDOException $e) {
			return false;
		}
	}
 ?>