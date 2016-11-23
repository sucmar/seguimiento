<?php

    require 'funciones.php';

    $conexion = conexion('seg','root','');

    if (!$conexion) {
        die();
    }
    $statement = $conexion->prepare("SELECT ID_DOC,PROFESION_DOC, NOMBRE_DOC, APELLPA_DOC, APELLMA_DOC FROM docente ");
    $statement->execute();
    $docentes = $statement->fetchAll();

    require 'views/listaDocentes.view.php';


