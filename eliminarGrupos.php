<?php
require 'funciones.php';
function console_log( $data ){
			echo '<script>';
			echo 'console.log('. json_encode( $data ) .')';
			echo '</script>'; 
		};

$id = $_REQUEST['id'];
$conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');
if (!$conexion) {
    die();
} else {
$statement = $conexion->prepare("DELETE FROM grupo WHERE ID_GRUPO = '$id'");
$statement->execute();
$grupos = $statement->fetchAll();
header ("Location: registroGrupos.php?id=$id");
}
