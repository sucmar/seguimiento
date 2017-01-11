<?php
require 'funciones.php';
function console_log( $data ){
			echo '<script>';
			echo 'console.log('. json_encode( $data ) .')';
			echo '</script>';
		};

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