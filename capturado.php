<?php
require 'funciones.php';

if(!isset($_GET['var_js']) || empty($_GET['var_js'])){
    echo "";
} else{
    echo "Exito!!!";
    $idDocente = $_GET['var_js'];
    print_r($idDocente);
}

if(!isset($_GET['valorDocente']) || empty($_GET['valorDocente'])){
    echo "";
} else{
    echo "Exito!!!";
    $idDoc = $_GET['valorDocente'];
    print_r($idDoc);

    $conexion = conexion('bd_seguimiento','root','');
    if (!$conexion) {
        die();
    }
    $statement = $conexion->prepare("DELETE FROM docente WHERE ID_DOCENTE = '$idDoc'");
    $statement->execute();
    $docentes = $statement->fetchAll();
}

