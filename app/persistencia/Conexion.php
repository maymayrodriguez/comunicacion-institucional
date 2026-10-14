<?php

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

        $servidor = "localhost";
        $usuario = "app";
        $contrasenia = "1234";
        $baseDeDatos = "comunicacion_institucional";

        $this->conexion = new mysqli($servidor, $usuario, $contrasenia, $baseDeDatos);

        // En caso de error en la conexión se detiene la ejecución de la petición actual

        if ($this->conexion->connect_error !== null) {
            throw new Exception("Conexión fallida: " . $this->conexion->connect_error);
        }

    }

    public static function getInstancia(): Conexion {
        if (self::$instancia === null) {
            self::$instancia = new Conexion(); 
        }
        return self::$instancia;

    }

    public function getConexion(): mysqli {
        return $this->conexion;
    }

    public function cerrarConexion() {
        if ($this->conexion !== null) {
            $this->conexion->close();
            $this->conexion = null;
        }
    }

    //Se reescriben lo métodos clone y wakeup para evitar la creación de nuevas instancias de Conexión

    private function __clone(){
        throw new LogicException("Se intentó clonar una instancia de Conexion");
    }

    private function __wakeup(){
        throw new LogicException("Se intentó deserializar una instancia de Conexion");
    }

}

?>
