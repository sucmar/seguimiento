<?php

    require 'funciones.php';

    $conexion = conexion('bd_seguimiento','root','');

    if (!$conexion) {
        die();
    }
    $statement = $conexion->prepare("SELECT ID_MATERIA ,NOMBRE_MATERIA FROM materia ");
    $statement->execute();
    $materias = $statement->fetchAll();

    require 'views/listaMaterias.view.php';

