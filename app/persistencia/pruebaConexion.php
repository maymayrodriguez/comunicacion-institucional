<?php

require_once "Conexion.php";
//Es estrictamente necesario que se encuentre el archivo para ejecutar estas pruebas.

echo "Pruebas - Conexion.php\n";

//Obtenemos la instancia de la clase conexión (servicio)
$conexionBD = Conexion::getInstancia();

//Creamos un nuevo objeto conexión
$conexion2 = Conexion::getInstancia();

//Comprobamos que sean idénticas
if ($conexionBD === $conexion2) {
    echo "Éxito: Ambas variables son idénticas\n";
}else{
    echo "Error: Se crearon dos instancias diferentes de la clase Conexion\n";
}

//Obtenemos la conexión mysqli
$mysqli = $conexionBD->getConexion();

if($mysqli->connect_errno === 0){
   
    try{
        if ($mysqli->query("SELECT 1") === false){
            echo"La consulta a la base de datos falló\n";
            throw new Exception("Error al ejecutar la consulta de prueba: " . $mysqli->error);
        }
        echo "Éxito! Se obtuvo la conexión correctamente\n";
    }catch(Exception $e){
        echo "Error de conexión: " . $e->getMessage() . "\n";
    }

}else{
    echo "Error al obtener conexión. Mensaje: " . $mysqli->connect_error . "\n";
}

try {

    $clon = clone $conexionBD ;

    echo "Error al evitar clonación \n";

} catch (Exception $e ) {

    echo "Éxito! Mensaje: " . $e->getMessage() . "\n";

}

try {

    $serialización = serialize($conexionBD);
    $deserialización = unserialize($serialización);

    echo "Error al evitar serialización\n";

} catch ( LogicException $e ) {

    echo "Éxito! Mensaje: " . $e->getMessage() . "\n";

}

$conexionBD->cerrarConexion();

try{
        // usamos @, el operador de control de errores, para evitar la advertencia
        echo "Ejecutando consulta...\n";
        if (@$mysqli->query("SELECT 1") === false){
            echo "Correcto, la conexión a la base de datos falló como era esperado\n";
            throw new Exception("Error al ejecutar la consulta de prueba: " . $mysqli->error);
        }
        echo "Error! La conexión no fue cerrada\n";
    }catch(Exception $e){
        echo "Error de conexión: " . $e->getMessage() . "\n";
    }



?>