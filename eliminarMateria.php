<?php
require 'funciones.php';

$id = $_REQUEST['id'];
$conexion = conexion('bd_seguimiento','root','');
if (!$conexion) {
    die();
} else {
$statement = $conexion->prepare("DELETE FROM materia WHERE ID_MATERIA = '$id'");
$statement->execute();
$materias = $statement->fetchAll();
header ('Location: listaMaterias.php');
}