 <?php 

class GrupoEntidad extends OrientacionEntidad{

    private string $nombreGrupo;
    private string $turno;

    

    public function __construct (string $nombreGrupo, string $turno, string $nombre) {
        $this->nombreGrupo = $nombreGrupo;
        $this->turno = $turno;
        parent::__construct($nombre);
    
    }

    public function getNombreGrupo (): string {
        return $this->nombreGrupo;
    }

    public function setNombreGrupo (string $nombreGrupo): void {
        $this->nombreGrupo = $nombreGrupo;
    }

    public function getTurno (): string {
        return $this->turno;
    }

    public function setTurno (string $turno): void {
        $this->turno = $turno;
    }

}

?> 