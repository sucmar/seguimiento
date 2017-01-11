<?php
require 'funciones.php';

$id = $_REQUEST['id'];
$conexion = conexion('bd_seguimiento', 'seg_user', 'seg_pass');
if (!$conexion) {
    die();
} else {
$statement = $conexion->prepare("DELETE FROM facultad WHERE ID_FACULTAD = '$id'");
$statement->execute();
$facultades = $statement->fetchAll();
header ('Location: listaFacultades.php');
}