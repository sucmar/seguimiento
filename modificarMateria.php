<?php session_start();


if (isset($_SESSION['usuario'])){
require 'funciones.php';

$conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');
if (!$conexion) {
    die();
}

$statement = $conexion->prepare("SELECT NOMBRE_CARRERA FROM carrera");
$statement->execute();
$carreras = $statement->fetchAll();

$statement = $conexion->prepare("SELECT NOMBRE_DPTO FROM departamento");
$statement->execute();
$departamentos = $statement->fetchAll();
	
	$id = $_REQUEST['id'];

	
try{
    $statement = $conexion->prepare("SELECT * FROM materia WHERE ID_MATERIA = '$id'");
    $statement->execute();
    $materias = $statement->fetch(PDO::FETCH_ASSOC); // capturar datos cada columna de una consulta dada
	
	
}catch(PDOException $e) {
    echo $e->getMessage();
}
$conexion = null;

require 'views/modificarMateria.view.php';
} else {
    header('Location: login.php');
}
