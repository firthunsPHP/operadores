<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<title>Foto:1jpg</title>
	<link rel="stylesheet" href="/s13_GaleriaDinamica/css/estilos.css">
</head>
<body>
	<header>
		<div class="contenedor">
			<h1 class="titulo">Foto: <?php if(!empty($foto['titulo'])){ echo $foto['titulo']; } else { echo $foto['imagen']; } ?></h1>
		</div>
	</header>

	<div class="contenedor">
		<div class="foto">

            <div class="foto">
                <img src="/s13_GaleriaDinamica/imagenes/1.jpg" alt="">
                <p class="texto">looooooo</p>
                <a href="/s13_GaleriaDinamica/index.php" class="regresar"><i class="fa fa-long-arrow-left"></i>Regresar</a>
            </div>
<!--			<img src="fotos/--><?php //echo $foto['imagen'] ?><!--" alt="">-->
<!--			<p class="texto">--><?php //echo $foto['texto']; ?><!--</p>-->
<!--			<a class="regresar" href="/s13_GaleriaDinamica/index.php"><i class="fa fa-long-arrow-left"></i>Regresar</a>-->
		</div>
	</div>

	<footer>
		<p class="copyright">Galeria creada por .....</p>
	</footer>
</body>
</html>