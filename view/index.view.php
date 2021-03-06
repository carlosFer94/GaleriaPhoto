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
			<h1 class="titulo">Las increibles Fotografias</h1>
		</div>
	</header>
	<section class="fotos">
		<div class="contenedor">

				<?php foreach ($fotos as $foto): ?>
					<div class="thumb">
						<a href="foto.php?id=<?php echo $foto['id']; ?>">
							<img src="images/<?php echo $foto['imagen_ruta']; ?>" alt="">
						</a>
					</div>
				<?php endforeach ?>

			<div class="paginacion">
				<?php if ($pagina_actual > 1): ?>
					<a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"><i class="fa fa-long-arrow-left""></i> ANTERIOR</a>
				<?php endif ?>

				<?php if ($total_pagina != $pagina_actual): ?>
					<a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha">SIGUIENTE <i class="fa fa-long-arrow-right"></i></a>
				<?php endif ?>

			</div>
		</div>
	</section>
	<footer>
		<p class="copyright">Galeria creada por Ana Lisa Melchoto</p>
	</footer>
</body>
</html>