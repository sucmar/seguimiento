<?php session_start();

if (isset($_SESSION['usuario'])){
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
	
	$statement2 = $conexion->prepare("SELECT ID_FACULTAD FROM carrera WHERE ID_CARRERA = '$id'");
    $statement2->execute();
    $idfacu = $statement2->fetch(PDO::FETCH_ASSOC); // capturar datos cada columna de una consulta 
    $idf=$idfacu['ID_FACULTAD'];
	
	$statement5 = $conexion->prepare("SELECT * FROM facultad WHERE ID_FACULTAD = '$idf'");
    $statement5->execute();
    $facultades = $statement5->fetch(PDO::FETCH_ASSOC); // capturar datos cada columna 

    $statement3 = $conexion->prepare("SELECT ID_DPTO FROM carrera WHERE ID_CARRERA = '$id'");
    $statement3->execute();
    $iddpto = $statement3->fetch(PDO::FETCH_ASSOC); // capturar datos cada columna de una consulta 
    $idd=$iddpto['ID_DPTO'];

    $statement4 = $conexion->prepare("SELECT * FROM departamento WHERE ID_DPTO = '$idd'");
    $statement4->execute();
    $departamentos = $statement4->fetch(PDO::FETCH_ASSOC); // capturar datos cada columna de una consulta 


}catch(PDOException $e) {
    echo $e->getMessage();
}
$conexion = null;

require 'views/modificarCarrera.view.php';
} else {
    header('Location: login.php');
}
