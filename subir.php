<?php 
	require('funciones.php');
	$conex = conexion('prac_subir_fotos','root','localhost');

	if (!$conex) {
		die();
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
		//echo "<pre>";
		//print_r($_FILES);
		//echo "</pre>";
		//
		//Array
		//(
    		//[foto] => Array
        		//(
            		//[name] => 2.jpg
            		//[type] => image/jpeg
            		//[tmp_name] => C:\Windows\Temp\php23CB.tmp
            		//[error] => 0
            		//[size] => 86211
        		//)

		//)
		//// Podemos utilizar el @ antes de la funcion para omitir el notice si no es una imagen.
		$check = @getimagesize($_FILES['foto']['tmp_name']);
		if ($check !== false) {
			$carpeta_destino = 'images/';
			$archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
			//sube la imagen a la ruta asignada
			move_uploaded_file($_FILES['foto']['tmp_name'],$archivo_subido);

			$statement = $conex->prepare('INSERT INTO fotos (titulo, imagen_ruta, texto) VALUES (:titulo, :imagen_ruta, :texto)');

			$statement->execute(array(
				':titulo' => $_POST['titulo'], 
				':imagen_ruta' => $_FILES['foto']['name'], 
				':texto' => $_POST['texto']
			));

			header('Location: index.php');
		}
		else{
			$error ="El archivo no es una imagen o el archivo es muy pesado";
		}
	}

	require('view/subir.view.php');
 ?>