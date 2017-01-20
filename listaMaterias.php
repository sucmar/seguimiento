<?php session_start();
if(isset($_SESSION['usuario'])){
	
    require 'funciones.php';

    $conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');

    if (!$conexion) {
        die();
    }
    $statement = $conexion->prepare("SELECT ID_MATERIA ,NOMBRE_MATERIA FROM materia ");
    $statement->execute();
    $materias = $statement->fetchAll();

    require 'views/listaMaterias.view.php';
} else {
	header('Location: login.php');
}

