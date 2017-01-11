<?php session_start();
    require 'funciones.php';

    $conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');
    if (!$conexion) {
        die();
    }
    $statement = $conexion->prepare("SELECT * FROM docente ");
    $statement->execute();
    $docentes = $statement->fetchAll();

    $statement2 = $conexion->prepare("SELECT * FROM grupo ");
    $statement2->execute();
    $listaGrupos = $statement2->fetchAll();

    //print_r($listaGrupos);

  if (isset($_SESSION['usuario'])){
    require 'views/listaDocentesAsignacion.view.php';
} else {
    header('Location: login.php');
}

