<?php session_start();
if(isset($_SESSION['usuario'])){
	

    require 'funciones.php';

    $conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');

    if (!$conexion) {
        die();
    }
    $statement = $conexion->prepare("SELECT ID_CARRERA ,NOMBRE_CARRERA FROM carrera ");
    $statement->execute();
    $carreras = $statement->fetchAll();

    
    require 'views/listaCarreras.view.php';
} else {
	header('Location: login.php');
}