<?php

    require 'funciones.php';

    $conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');

    if (!$conexion) {
        die();
    }
    $statement = $conexion->prepare("SELECT ID_DOCENTE ,NOMBRE_DOC, APELLPATERNO_DOC, APELLMATERNO_DOC, PROFESION_DOC FROM docente ");
    $statement->execute();
    $docentes = $statement->fetchAll();

    
    require 'views/btDocente.view.php';
