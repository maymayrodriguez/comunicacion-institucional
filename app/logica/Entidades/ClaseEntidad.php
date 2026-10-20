<?php 

require_once __DIR__ . '/DiaEntidad.php';

class ClaseEntidad {

    private int  $identificador;
    private time $horaInicial;
    private time $horaFinal;
    private  $nombreDia;
    private String $nombreGrupo;
    private String $nombreMateria;

    

    public function __construct (int $identificador, time $horaInicial, time $horaFinal) {
        $this->identificador = $identificador;
        $this->horaInicial= $horaInicial;
        $this->horaFinal = $horaFinal;
        $this->nombreDia = $nombreDia;
        $this->nombreGrupo = $nombreGrupo;
        $this->nombreMateria = $nombreMateria;
        
    
    }

    public function getIdentificador (): int {
        return $this->identificador;
    }

    public function setIdentificador (int $identificador): void {
        $this->identificador = $identificador;
    }

    public function getHoraInicial (): time{
        return $this->horaInicial;
    }

    public function setHoraInicial (time $horaInicial): void {
        $this->horaInicial = $horaInicial;
    }

    public function getHoraFinal (): time{
        return $this->horaFinal;
    }

    public function setHoraFinal (time $horaFinal): void {
        $this->horaFinal = $horaFinal;
    }

    public function getNombreDia (): string{
        return $this->nombreDia;
    }

    public function setNombreDia (string $nombreDia): void {
        $this->nombreDia = $nombreDia;
    }

    public function getNombreGrupo (): string{
        return $this->nombreGrupo;
    }

    public function setNombreGrupo (string $nombreGrupo): void {
        $this->nombreGrupo = $nombreGrupo;
    }
    
    public function getNombreMateria (): string{
        return $this->nombreMateria;
    }

    public function setNombreMateria (string $nombreMateria): void {
        $this->nombreMateria = $nombreMateria;
    }


}

?> 