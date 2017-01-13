<?php
require 'funciones.php';

$id = $_REQUEST['id'];
$conexion = conexion('bd_seguimiento','seg_user','seg_pass');
if (!$conexion) {
    die();
} else {
$statement = $conexion->prepare("DELETE FROM docente WHERE ID_DOCENTE = '$id' AND ACTIVIDAD='ACTIVO'");
$statement->execute();
$docentes = $statement->fetchAll();
header ('Location: listaDocentes.php');

}