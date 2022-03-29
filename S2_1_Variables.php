<?php

# Notas:
# - Los nombres de las variables son sensibles a mayusculas y minisculas
# - Los nombres de variables no pueden llevar espacios, empezar por numeros o
# - llevar caracteres especiales como puntos o incluso la letra ñ

# Tipos de datos:
# String: Cadena de texto
$nombre = "Carlos Arturo";
# Integer: Numeros enteros
$numero = 7;
# Double: Numeros con decimales
$numero_decimal = 7.7;
# Boolean: Verdadero o Falso (true / false)
$verdadero_falso = true;
# Array: Arreglo
# Object: Objeto
# Class: Clase
# Null: Cuando a una variable aun no se le ha asignado ningun valor

# Ejemplos de variables almacenando diferentes tipos de datos:




// Comillas Sencillas vs Comillas Dobles
# En las comillas dobles podemos llamar variables, mientras que en las sencillas no.
# Sin embargo usar comillas dobles en ciertas situaciones puede traernos problemas de seguridad.

echo 'Mi nombre es ' . $nombre;
echo '<br>';

echo "Mi nombre es $nombre"; ## es forma de integrar una variable dentro de un string, puede traer problemas de seguridad

// Podemos obtener el tipo de dato de una variable mediante la funcion gettype()
echo '<br>';

echo gettype($nombre);

?>