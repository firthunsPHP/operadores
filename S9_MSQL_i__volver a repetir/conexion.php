<?php

//$conexion = mysqli_connect('localhost', 'root', '', 'prueba_datos');
//
//echo  $conexion->connect_errno;
//
//if ($conexion->connect_errno){
//	die('Lo siento hubo un problema con el servidor');
//} else {
//	// Codigo
//}

$enlace = mysqli_connect("127.0.0.1", "mi_usuario", "mi_contraseña", "mi_bd");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;

mysqli_close($enlace);



?>
//$mysqli = new mysqli("localhost", "usuario", "contraseña", "basedatos");
//if ($mysqli->connect_errno) {
//    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
//}
//echo $mysqli->host_info . "\n";
//
//$mysqli = new mysqli("127.0.0.1", "usuario", "contraseña", "basedatos", 3306);
//if ($mysqli->connect_errno) {
//    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
//}
//
//echo $mysqli->host_info . "\n";
//
