<?php

    require 'funciones.php';

    $conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');

    if (!$conexion) {
        die();
    }
    $statement = $conexion->prepare("SELECT ID_CARRERA ,NOMBRE_CARRERA FROM carrera ");
    $statement->execute();
    $carreras = $statement->fetchAll();

    if(!isset($_GET['var_js']) || empty($_GET['var_js'])){
        echo "Error!!!";
    } else{
        echo "Exito!!!";
        $idCarrera = $_GET['var_js'];
        print_r($idCarrera);
    }

    require 'views/listaCarreras.view.php';

