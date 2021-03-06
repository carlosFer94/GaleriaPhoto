<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 maximun-scale=1.0, minimum-scale=1.0">
	<title>Fotografias</title>
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<header>
		<div class="contenedor">
			<h1 class="titulo"><?php if(!empty($foto['titulo'])){
									echo $foto['titulo'];
								}else{
									echo $foto['imagen_ruta'];
								}
							?>
			</h1>
		</div>
	</header>
	<div class="contenedor">
		<div class="foto">
			<img src="images/<?php echo $foto['imagen_ruta']; ?>" alt="">
			<p class="texto"><?php echo $foto['texto']; ?></p>
			<a href="index.php" class="regresar"><i class="fa fa-long-arrow-left"></i> Regresar</a>
		</div>
	</div>
	<footer>
		<p class="copyright">Galeria creada por Ana Lisa Melchoto</p>
	</footer>
</body>
</html>