<?php

class JugadorModel
{
    public $Nombre;
    public $Puntos;
    public $NivelAnotacion;

    public function __construct($Nombre, $Puntos, $NivelAnotacion)
    {
        $this->Nombre = $Nombre;
        $this->Puntos = $Puntos;
        $this->NivelAnotacion = $NivelAnotacion;
    }
}

?>