<?php
// var_dump nos sirve para ver el tipo de dato
$texto = 'Carlos';
$numero = 10;
$numero2 = '5';
$arreglo = array('Carlos', 'Cesar', 'Alejandro');
$arreglo_asosiativo = array('nombre' => 'Carlos', 'edad' => 20);
$boleano = true;


echo "<pre>";
var_dump($arreglo);
echo "</pre> <br/>";

 echo "<pre>";
var_dump($arreglo_asosiativo);
 echo "</pre> <br/>";

echo "<pre>";
var_dump($boleano);
echo "</pre>";
?>