<?php
//declare(strict_types=1) //modo stricto no obliga a realizar la declaración devariables y su utilización estr...
function obteneredad() : int{
    $edad = '23'; // aunque lo hayamos puesto como string, el sistema lo entiende como numero y lo traduce
    return $edad;
}


echo obteneredad();
?>