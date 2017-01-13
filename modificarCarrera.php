<?php

require 'funciones.php';

$conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');
if (!$conexion) {
    die();
}

$id = $_REQUEST['id'];
//echo $id;
try{
    $statement = $conexion->prepare("SELECT * FROM carrera WHERE ID_CARRERA = '$id'");
    $statement->execute();
    $carreras = $statement->fetch(PDO::FETCH_ASSOC); // capturar datos cada columna de una consulta dada
	
	$statement = $conexion->prepare("SELECT NOMBRE_FACULTAD FROM facultad WHERE ID_FACULTAD = '$id'");
    $statement->execute();
    $facultades = $statement->fetch(PDO::FETCH_ASSOC); // capturar datos cada columna 

}catch(PDOException $e) {
    echo $e->getMessage();
}
$conexion = null;

require 'views/modificarCarrera.view.php';
