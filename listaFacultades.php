<?php

    require 'funciones.php';

    $conexion = conexion('bd_seguimiento','root','');

    if (!$conexion) {
        die();
    }
    $statement = $conexion->prepare("SELECT ID_FACULTAD ,NOMBRE_FACULTAD FROM facultad ");
    $statement->execute();
    $facultades = $statement->fetchAll();

    if(!isset($_GET['var_js']) || empty($_GET['var_js'])){
        echo "Error!!!";
    } else{
        echo "Exito!!!";
        $idFacultad = $_GET['var_js'];
        print_r($idFacultad);
    }

    require 'views/listaFacultades.view.php';


