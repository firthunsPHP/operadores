<?php


//http://localhost:63343/PHP_MYSQL/S3_FORMULARIO/operador-fusion-null.php?nombre=Carlos
$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'Anónimo';

echo $nombre;



?>