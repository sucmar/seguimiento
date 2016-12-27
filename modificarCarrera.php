<?php

require 'funciones.php';

$conexion = conexion('bd_seguimiento','root','');
if (!$conexion) {
    die();
}

$id = $_REQUEST['id'];
//echo $id;
try{
    $statement = $conexion->prepare("SELECT * FROM carrera WHERE ID_CARRERA = '$id'");
    $statement->execute();
    $carreras = $statement->fetch(PDO::FETCH_ASSOC); // capturar datos cada columna de una consulta dada

}catch(PDOException $e) {
    echo $e->getMessage();
}
$conexion = null;

require 'views/modificarCarrera.view.php';
