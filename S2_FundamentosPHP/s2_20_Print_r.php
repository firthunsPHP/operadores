<?php
// print_r no nos distigue del tipo de varibale que estamos tratando pudiendo dar lugar a error
// ejemplo numero= 10 de tipo number y numero2= '5' de tipo string, pero por consola no nos muestra diferenciación alguna
// por ello el dump, para este caso es mejor su utilización.
$texto = 'Carlos';
$numero = 10;
$numero2 = '5';
$arreglo = array('Carlos', 'Cesar', 'Alejandro');
$arreglo_asosiativo = array('nombre' => 'Carlos', 'edad' => 20);
$boleano = false;

//print_r($texto);
//print_r($numero);

print_r($arreglo);
?>