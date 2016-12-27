<?php

class db
{
    public static function conexion()
    {
        $conexion = new mysqli("localhost", "root", "", "bd_seguimiento");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}

?>