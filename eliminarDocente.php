<?php
require 'funciones.php';

$id = $_REQUEST['id'];
$conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');
if (!$conexion) {
    die();
} else {
$statement = $conexion->prepare("SELECT * FROM docente WHERE ID_DOCENTE = '$id' AND ESTADO_DOC='ACTIVO'");
$statement->execute();
$docentes = $statement->fetchAll();
if($docentes){
    echo 'hoaldfsaas';
    header ('Location: listaDocentes.php');
}

}