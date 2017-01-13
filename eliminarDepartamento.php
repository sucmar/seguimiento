<?php
require 'funciones.php';

$id = $_REQUEST['id'];
$conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');
if (!$conexion) {
    die();
} else {
$statement = $conexion->prepare("DELETE FROM departamento WHERE ID_DPTO = '$id'");
$statement->execute();
$departamentos = $statement->fetchAll();
header ('Location: listaDepartamentos.php');
}