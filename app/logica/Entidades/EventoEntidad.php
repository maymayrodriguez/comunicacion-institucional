<?php
class EventoEntidad extends NotificacionEntidad {
    private time $horaInicio;
    private time $horaFinal;
    private date $fechaInicio;
    private date $fechaFinal;

    public function __construct(int $identificador, time $horaInicio, time $horaFinal, date $fechaInicio,date $fechaFinal) {
        parent::__construct($identificador);
        $this->horaInicio = $horaInicio;
        $this->horaFinal = $horaFinal;
        $this->fechaInicio = $fechaInicio;
        $this->fechaFinal = $fechaFinal;

    }
    public function getHoraInicio(): time
    {
        return $this->horaInicio;
    }
     public function setHoraInicio(time $horaInicio):void
    {
        $this->horaInicio=$horaInicio;
    }

     public function getHoraFinal(): time
    {
        return $this->horaFinal;
    }

     public function setHoraFinal(time $horaFinal):void
    {
        $this->horaFinal=$horaFinal;
    }


    public function getFechaInicio(): date
    {
        return $this->fechaInicio;
    }
     public function setFechaInicio(date $fechaInicio):void
    {
        $this->fechaInicio=$fechaInicio;
    }

     public function getFechaFinal(): date
    {
        return $this->fechaFinal;
    }
     public function setFechaFinal(date $fechaFinal):void
    {
        $this->fechaFinal=$fechaFinal;
    }

    


}
php?>