<?php

require 'funciones.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id                 = $_REQUEST['id'];
    $nombreFacultad      = $_POST['nombreFacultad'];
    $nombreCarrera      = $_POST['nombreCarrera'];
    $siglaCarrera       = $_POST['siglaCarrera'];
    $dptoCarrera        = $_POST['dptoCarrera'];

    try{
        $conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');
        if (!$conexion) {
            die();
        }
        $sql = "UPDATE carrera, facultad SET 
		NOMBRE_FACULTAD='$nombreFacultad',NOMBRE_CARRERA='$nombreCarrera',SIGLA_CARRERA='$siglaCarrera', DPTO_CARRERA='$dptoCarrera' WHERE ID_CARRERA='$id'";

        $statement = $conexion->prepare($sql);
        $statement->execute();
        echo $statement->rowCount(). 'record update';
    } catch (PDOException $e){
        echo $e->getMessage();
    }
    $conexion = null;

header("Location: listaCarreras.php");
    //echo $id,$nombres;
}
