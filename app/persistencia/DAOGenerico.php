<?php

abstract class DAOGenerico{

    protected mysqli $conexion;

    public function __construct(){
        $this->conexion = Conexion::getInstancia()->getConexion();
    }

    abstract public function getTabla(): string;
    abstract public function getColumnas(): array;
    abstract public function getClavePrimaria(): string;

    protected function obtenerFila($identificador) : ?array {

        $sql = "SELECT * FROM {$this->getTabla()} WHERE {$this->getClavePrimaria()} = ?";

        $tipo = match (true) { 
            is_int($identificador) || is_bool($identificador) => "i",
            is_float($identificador) => "d",
            default => "s",
        };

        $sentencia = $this->conexion->prepare($sql);
        $sentencia->bind_param($tipo, $identificador);
        $sentencia->execute();
        $resultado = $sentencia->get_result();

        $fila  = $resultado->fetch_assoc();
        
        $sentencia->close();
        return $fila ?: null;

    }

    protected function obtenerFilas() : array{

        //Este metodo opcionalmente podrá recibir un filtro
        //Acá estará la lógica para obtener varios registros de la tabla correspondiente

    }

    protected function insertarFila (array $datos) : bool {

        if (count($datos) === 0){
            return false;
        }

        $columnas = implode(", ", $this->getColumnas());
        $marcadoresPosicion = implode (", ", array_fill(0, count($this->getColumnas()), "?"));

        $sql = "INSERT INTO {$this->getTabla()} ({$columnas}) VALUES ({$marcadoresPosicion})";

        $resultado = $this->conexion->execute_query($sql, $datos);

        return $resultado !== false;
        
    }


}

?>