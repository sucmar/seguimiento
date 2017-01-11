<?php
require 'funciones.php';

$id = $_REQUEST['id'];
$conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');
if (!$conexion) {
    die();
} else {
$statement = $conexion->prepare("DELETE FROM carrera WHERE ID_CARRERA = '$id'");
$statement->execute();
$carreras = $statement->fetchAll();
header ('Location: listaCarreras.php');
}