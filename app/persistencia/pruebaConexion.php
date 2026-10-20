<?php

require_once "Conexion.php";
//Es estrictamente necesario que se encuentre el archivo para ejecutar estas pruebas.

echo "Pruebas - Conexion.php";

//Obtenemos la instancia de la clase conexión (servicio)
$conexionBD = Conexion::getInstancia();

//Creamos un nuevo objeto conexión
$conexion2 = Conexion::getInstancia();

//Comprobamos que sean idénticas
if ($conexionBD === $conexion2) {
    echo "Éxito: Ambas variables son idénticas";
}else{
    echo "Error: Se crearon dos instancias diferentes de la clase Conexion";
}

//Obtenemos la conexión mysqli
$mysqli = $conexionBD->getConexion();

if($mysqli->connect_errno === 0){
    try{
        if ($mysqli->query("SELECT 1") === false){
            echo"La consulta a la base de datos falló";
            throw new Exception("Error al ejecutar la consulta de prueba: " . $mysqli->error);
        }
        echo "Éxito! Se obtuvo la conexión correctamente";
    }catch(Exception $e){
        echo "Error de conexión: " . $e->getMessage();
    }
}else{
    echo "Error al obtener conexión. Mensaje: " . $mysqli->connect_error;
}

try {

    $clon = clone $conexionBD ;

    echo "Error al evitar clonación";

} catch (Exception $e ) {

    echo "Éxito! Mensaje: " . $e->getMessage();

}

try {

    $serialización = serialize($conexionBD);
    $deserialización = unserialize($serialización);

    echo "Error al evitar serialización";

} catch ( LogicException $e ) {

    echo "Éxito! Mensaje: " . $e->getMessage();

}

$conexionBD->cerrarConexion();

try {
    if ($mysqli->query("SELECT 1") === false){
        echo "Correcto, no se pudo ejecutar la consulta después de cerrar la conexión";
    }else{
        echo "Error, la conexión no se cerró correctamente";
    }
}catch(Exception $e){
    echo "Surgió una excepción al ejecutar la consulta tras cerrar la conexión: " . $e->getMessage();
}

?>