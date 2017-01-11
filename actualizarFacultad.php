<?php

require 'funciones.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id                 = $_REQUEST['id'];
    $nombreFacultad     = $_POST['nombreFacultad'];
    $ubicacionFacultad  = $_POST['ubicacionFacultad'];

    try{
        $conexion = conexion('bd_seguimiento', 'seg_user', 'seg_pass');
        if (!$conexion) {
            die();
        }
        $sql = "UPDATE facultad SET NOMBRE_FACULTAD='$nombreFacultad',UBICACION_FACULTAD=' $ubicacionFacultad' WHERE ID_FACULTAD='$id'";

        $statement = $conexion->prepare($sql);
        $statement->execute();
        echo $statement->rowCount(). 'record update';
    } catch (PDOException $e){
        echo $e->getMessage();
    }
    $conexion = null;

header("Location: listaFacultades.php");
    //echo $id,$nombres;
}