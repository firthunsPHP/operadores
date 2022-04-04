<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="estilos.css">
	<title>Paginacion</title>

</head>
<body>
	<div class="contenedor">
		<h1>Articulos</h1>
		<section class="articulos">
			<ul>
               <?php foreach ( $articulos as $a ):   ?>
                    <li><?php echo $a['id'] . '.- ' . $a['articulo'] ?></li>
                <?php endforeach;   ?>
			</ul>
		</section>

		<div class="paginacion">
			<ul>
<!-- Condición Establecemos cuando el boton de 'anterior' estará deshabilitado -->
                <?php if ($pagina == 1):  ?>
                            <li class="disabled">&laquo;</li>
                <?php else: ?>
                    <li>
                        <a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a>
                    </li>
                <?php endif ?>
<!-- Ejectuamos un ciclo para mostrar las paginas  -->
                <?php

                for( $i=1; $i <= $numeroPaginas ; $i++){

                    if( $pagina == $i){
                        echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
                    } else {
                        echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
                    }
                }

                ?>

                <!--Condición Establecemos cuando el boton de 'siguiente' estará deshabilitado -->
                <?php if ($pagina == $numeroPaginas):  ?>
                    <li class="disabled">&raquo;</li>
                <?php else: ?>
                    <li>
                        <a href="?pagina=<?php echo $pagina + 1 ?>">&raquo;</a>
                    </li>
                <?php endif ?>


<!--                <li class="disabled"><a href="#">&laquo;</a></li>-->
<!---->
<!--                 <li class="active"><a href="#">1</a></li>-->
<!--                <li class="active"><a href="#">2</a></li>-->
<!--                <li class="active"><a href="#">3</a></li>-->
<!--                <li class="active"><a href="#">4</a></li>-->
<!---->
<!--                <li><a href="#">&raquo;</a></li>-->

			</ul>
		</div>
	</div>
</body>
</html>
