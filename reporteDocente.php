<?php
 session_start();
require 'funciones.php';
if (isset($_SESSION['usuario'])){
    $conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');
    if (!$conexion) {
        die();
    }

} else {
    header('Location: login.php');
}

$statement = $conexion->prepare("SELECT ID_DOCENTE, NOMBRE_DOC, APELLPATERNO_DOC, APELLMATERNO_DOC, DEDICACION_DOC FROM docente ");
$statement->execute();
$docentes = $statement->fetchAll();

$statement = $conexion->prepare("SELECT NOMBRE_MATERIA, SIGLA_MATERIA FROM materia ");
$statement->execute();
$materias = $statement->fetchAll();


	require 'views/reporteDocente.view.php';

?>
