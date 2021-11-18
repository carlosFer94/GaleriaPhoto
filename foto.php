<?php

	require('funciones.php');
	$conex = conexion('prac_subir_fotos','root','localhost');

	if (!$conex) {
		die();
	}

	$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

	if (!$id) {
		header('Location: index.php');
	}

	$statement = $conex->prepare('SELECT * FROM fotos WHERE id = :id');
	$statement->execute(array(':id'	=>	$id));

	$foto = $statement->fetch();

	if(!$foto){
		header('Location: index.php');
	}

	require('view/foto.view.php');
 ?>