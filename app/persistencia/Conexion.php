<?php
//namespace app\persistencia;
/*
    Se define la clase Conexion.
    Se utiliza el patrón Singleton, solo debe existir una única instancia de la misma en la ejecución del programa.
    Esta clase se encarga de manejar la conexión con la base de datos mediante MySQLi.

*/

class Conexion {

    private static ?Conexion $instancia = null;
    private ?mysqli $conexion;


    //constructor privado con datos hardcodeados
    private function __construct() {

        $this->conexion = $this->crearConexion();

    }

    public static function getInstancia(): Conexion {
        if (self::$instancia === null) {
            self::$instancia = new Conexion(); 
        }
        return self::$instancia;

    }

    public function crearConexion(): mysqli {

        $servidor = "localhost";
        $usuario = "app";
        $contrasenia = "1234";
        $baseDeDatos = "comunicacion_institucional";

        $conexionCreada = new mysqli($servidor, $usuario, $contrasenia, $baseDeDatos);

        // En caso de error en la conexión se detiene la ejecución de la petición actual

        if ($conexionCreada->connect_error !== null) {
            throw new Exception("Conexión fallida: " . $conexionCreada->connect_error);
        }

        return $conexionCreada;
    }

    public function cerrarConexion() {
        if ($this->conexion !== null) {
            $this->conexion->close();
            $this->conexion = null;
        }
    }

    public function getConexion(): mysqli {
        if ($this->conexion === null) {
            $this->conexion = new mysqli("localhost", "app", "1234", "comunicacion_institucional");
        }
        return $this->conexion;
    }

    //Se declaran lo métodos mágicos clone, unserialize y wakeup para que lanzen una excepción

    private function __clone(){
        throw new LogicException("Se intentó clonar una instancia de Conexion");
    }

    private function __unserialize($data){
        throw new LogicException("Se intentó deserializar una instancia de Conexion");
    }

    public function __wakeup(){
        throw new LogicException("Se intentó deserializar una instancia de Conexion");
    }

}

?>
