<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 maximun-scale=1.0, minimum-scale=1.0">
	<title>Fotografias</title>
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<header>
		<div class="contenedor">
			<h1 class="titulo">Subir Foto</h1>
		</div>
	</header>
	<div class="contenedor">
		<form class="formulario" enctype="multipart/form-data" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<label for="foto">Selecciona una imagen</label>
			<input type="file" id="foto" name="foto">
			<label for="titulo">Titulo de la Imagen</label>
			<input type="text" id="titulo" name="titulo">
			<label for="texto">Descripcion</label>
			<textarea name="texto" id="texto" placeholder="Ingresa una descripcion"></textarea>
			
			<?php if (isset($error)): ?>
				<p class="error"><?php echo $error; ?></p>
			<?php endif ?>
			
			<input type="submit" class="submit" value="Subir Imagen">
		</form>
	</div>
	<footer>
		<p class="copyright">Galeria creada por Ana Lisa Melchoto</p>
	</footer>
</body>
</html>