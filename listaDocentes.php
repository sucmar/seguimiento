<?php

    require 'funciones.php';

    $conexion = conexion('bd_seguimiento','root','');

    if (!$conexion) {
        die();
    }
    $statement = $conexion->prepare("SELECT NOMBRE_DOC, APELLPA_DOC, APELLMA_DOC FROM docente ");
    $statement->execute();
    $docentes = $statement->fetchAll();

    require 'views/listaDocentes.view.php';


