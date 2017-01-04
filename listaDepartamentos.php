<?php

    require 'funciones.php';

    $conexion = conexion('bd_seguimiento','root','');

    if (!$conexion) {
        die();
    }
    $statement = $conexion->prepare("SELECT ID_DPTO ,NOMBRE_DPTO FROM departamento ");
    $statement->execute();
    $departamentos = $statement->fetchAll();

    require 'views/listaDepartamentos.view.php';

