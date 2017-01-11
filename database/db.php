<?php

class db
{
    public static function conexion()
    {
        $conexion = new mysqli("localhost", 'seg_user', 'seg_pass', "bd_seguimiento");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}

?>