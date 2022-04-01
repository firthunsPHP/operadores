<?php 

# Obteniendo datos mediante el metodo POST
// metodo post podemos enviar archivo
// print_r($_POST);
//
 if (!$_POST) {
 	header('Location: http://localhost/curso_php/formularios/');
 }

 if(!$_POST) {

         header('Location: http://localhost:63343/PHP_MYSQL/S3_FORMULARIO/index.php?_ijt=lto8hidevjrvb9ca236lf5bu50&_ij_reload=RELOAD_ON_SAVE');

 }
     $nombre = $_POST['nombre'];
     $sexo = $_POST['sexo'];
     $year = $_POST['year'];
     $terminos = $_POST['terminos'];

     echo 'Hola, ' . $nombre . ' eres ' . $sexo;


# Obteniendo datos mediante el metodo GET
// inyecta los datos recogido en el formulario al url
// http://localhost:63343/PHP_MYSQL/S3_FORMULARIO/recibe.php?nombre=a&edad=23&sexo=hombre&year=2001&terminos=ok&btn-enviar=Enviar+consulta
// print_r($_GET);
//
//if (!$_GET) {
//	header('Location: http://localhost:63343/PHP_MYSQL/S3_FORMULARIO/recibe.php/');
//}
//
//
//$nombre = $_GET['nombre'];
//$sexo = $_GET['sexo'];
//$year = $_GET['year'];
//$terminos = $_GET['terminos'];
//
//if ($nombre){
//	echo $nombre . '<br />';
//} else {
//	echo "El usario no establecio su nombre <br>";
//}
//
//echo $sexo . '<br />';
//echo $year . '<br />';
//echo $terminos . '<br />';


//?>