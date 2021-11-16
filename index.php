<?php 

	require('funciones.php');
	$foto_por_pagina = 8;
	$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1);
	$inicio = ($pagina_actual > 1) ? $pagina_actual * $foto_por_pagina - $foto_por_pagina : 0;
	$con = conexion('prac_subir_fotos','root','localhost');

	if (!$con) {
		die();
	}
	$statement = $con->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio,$foto_por_pagina");
	$statement->execute();
	$fotos = $statement->fetchAll();

	if (!$fotos) {
		header('Location: index.php');
	}
	print_r($fotos);

	require('view/index.view.php');
 ?>