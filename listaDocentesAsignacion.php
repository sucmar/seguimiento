<?php session_start();
    require 'funciones.php';

    $conexion = conexion('bd_seguimiento','root','');
    if (!$conexion) {
        die();
    }
    $statement = $conexion->prepare("SELECT * FROM docente ");
    $statement->execute();
    $docentes = $statement->fetchAll();

  if (isset($_SESSION['usuario'])){
    require 'views/listaDocentesAsignacion.view.php';
} else {
    header('Location: login.php');
}

