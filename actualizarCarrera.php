<?php

require 'funciones.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id                 = $_REQUEST['id'];
    $nombreCarrera      = $_POST['nombreCarrera'];
    $siglaCarrera       = $_POST['siglaCarrera'];
    $dptoCarrera        = $_POST['dptoCarrera'];

    try{
        $conexion = conexion('bd_seguimiento', 'root', '');
        if (!$conexion) {
            die();
        }
        $sql = "UPDATE carrera SET NOMBRE_CARRERA='$nombreCarrera',SIGLA_CARRERA=' $siglaCarrera', DPTO_CARRERA=$dptoCarrera WHERE ID_CARRERA='$id'";

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