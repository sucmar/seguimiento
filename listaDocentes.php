<?php

    require 'funciones.php';

    $conexion = conexion('bd_seguimiento','root','');

    if (!$conexion) {
        die();
    }
    $statement = $conexion->prepare("SELECT ID_DOCENTE ,NOMBRE_DOC, APELLPATERNO_DOC, APELLMATERNO_DOC FROM docente ");
    $statement->execute();
    $docentes = $statement->fetchAll();

    /*if(!isset($_GET['var_js']) || empty($_GET['var_js'])){
        echo "Error!!!";
    } else{
        echo "Exito!!!";
        $idDocente = $_GET['var_js'];
        print_r($idDocente);
    }*/

    require 'views/listaDocentes.view.php';


