<?php

$id = $_GET['id'];

try {
// Código
//    localhost pues ser sustituido por: 127.0.0.1, direccion denuestro servidor
    $conexion = new PDO('mysql:host=localhost;dbname=prueba_datos', 'root', '');
//    echo "Conexión OK!!". '<br />';
// METODO QUERY
// Con las siguiente forma de interactuar con nuestra base de datos, el problema que se nos podria
// originar es que un usuairo externo nos pudiera inyectar código a traves de nuestra url
    // y en caso de utilizar los query que nosotros como programadores, pongamos un valor numerico en la orden y no una variable
    // id= 1 _>'SELECT * FROM usuarios where id=id' <- NO, ya que puede ser susceptible de codigo malicioso
//    $resultados0 = $conexion->query('INSERT INTO usuarios VALUES(null, "María")');
//
//    ////    resto de codigo para traer info
//   $resultados =  $conexion->query('SELECT * FROM usuarios');
//
//   foreach ($resultados as $fila){
////       echo $fila['nombre'] . '<br />';
//       echo $fila['id'] .' - ' . $fila['nombre']  . '<br />';
//   }
//    $resultados =  $conexion->query('SELECT * FROM usuarios where id=3');
//
//    foreach ($resultados as $fila){
//       echo 'Búsqueda usuario id:' . '<br />';
//        echo $fila['id'] .' - ' . $fila['nombre']  . '<br />';
//    }

// una forma de evitar el inyectado de código es utilizar los prepared statements (VERSION RECOMENDAD)
//    $statement=  $conexion->prepare('SELECT * FROM usuarios');
    $statement=  $conexion->prepare('SELECT * FROM usuarios WHERE id = :id or nombre = :nombre');
    $statement->execute(     array(':id'=> $id, ':nombre' => 'Carolina' )     );

    $resultados =  $statement->fetch();
    echo "<pre>";
    print_r($resultados);
    echo "<pre>";

}catch (PDOException $e){

    echo "Error: " . $e->getMessage();
}
?>
