<?php

class ConexionBD
{
    public static function Conectar()
    {
        $Usuario = 'root';
        $Contrasenia = '';
        $Servidor = 'localhost';
        $NombreBD = 'practica';
        $Conexion = new mysqli($Servidor, $Usuario, $Contrasenia, $NombreBD);
        return $Conexion;
    }
}

?>