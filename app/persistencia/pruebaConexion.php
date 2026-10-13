<?php

require_once "Conexion.php";
//Es estrictamente necesario que se encuentre el archivo para ejecutar estas pruebas.

echo "Pruebas - Conexion.php"

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

//testear nullable variables
//probar serialize, unserialize, clone, wakeup, etc.


?>