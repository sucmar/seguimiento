<?php
require 'funciones.php';

$id = $_REQUEST['id'];
$conexion = conexion('bd_seguimiento','root','');
if (!$conexion) {
    die();
} else {
$statement = $conexion->prepare("DELETE FROM docente WHERE ID_DOCENTE = '$id'");
$statement->execute();
$docentes = $statement->fetchAll();
header ('Location: listaDocentes.php');
}