<?php
require_once 'ConexionBD.php';

class QueriesBD
{
    public static function Agregar($Nombre, $Puntos, $Nivel)
    {
        $mysqli = ConexionBD::Conectar();
        return $mysqli->query("INSERT INTO jugadores VALUES (0,'$Nombre', $Puntos, '$Nivel');");
    }

    public static function Actualizar($NombreReemplazar, $Nombre, $Puntos, $Nivel)
    {
        $mysqli = ConexionBD::Conectar();
        return $mysqli->query("UPDATE jugadores SET nombre = '$Nombre', puntos = $Puntos, nivel_anotacion='$Nivel' WHERE nombre = '$NombreReemplazar';");
    }

    public static function Eliminar($Nombre)
    {
        $mysqli = ConexionBD::Conectar();
        return $mysqli->query("DELETE FROM jugadores WHERE nombre = '$Nombre';");
    }

    public static function ObtenerJugadores()
    {
        $Usuarios = [];
        $mysqli = ConexionBD::Conectar();
        $Todo = $mysqli->query("SELECT id, nombre, puntos, nivel_anotacion FROM jugadores");
        while ($Fila = $Todo->fetch_array())
        {
            $Usuario = [];
            array_push($Usuario, $Fila['nombre']);
            array_push($Usuario, $Fila['puntos']);
            array_push($Usuario, $Fila['nivel_anotacion']);
            array_push($Usuarios, $Usuario);
        }
        return $Usuarios;
    }

    public static function ObtenerMejorJugador()
    {
        $JugadorArreglo = [];
        $mysqli = ConexionBD::Conectar();
        $Jugador = $mysqli->query("SELECT nombre, puntos, nivel_anotacion FROM jugadores WHERE puntos = ( SELECT MAX(puntos) from jugadores );");
        $FiltroJugador = $Jugador->fetch_array();
        array_push($JugadorArreglo, $FiltroJugador['nombre']);
        array_push($JugadorArreglo, $FiltroJugador['puntos']);
        array_push($JugadorArreglo, $FiltroJugador['nivel_anotacion']);
        return $JugadorArreglo;
    }

    public static function ObtenerPeorJugador()
    {
        $JugadorArreglo = [];
        $mysqli = ConexionBD::Conectar();
        $Jugador = $mysqli->query("SELECT nombre, puntos, nivel_anotacion FROM jugadores WHERE puntos = ( SELECT MIN(puntos) from jugadores );");
        $FiltroJugador = $Jugador->fetch_array();
        array_push($JugadorArreglo, $FiltroJugador['nombre']);
        array_push($JugadorArreglo, $FiltroJugador['puntos']);
        array_push($JugadorArreglo, $FiltroJugador['nivel_anotacion']);
        return $JugadorArreglo;
    }
}