<?php session_start();
require 'funciones.php';
if (isset($_SESSION['usuario'])){
    $conexion = conexion('bd_seguimiento','root','');
    if (!$conexion) {
        die();
    }

} else {
    header('Location: login.php');
}


$statement = $conexion->prepare("SELECT ID_DOC, NOMBRE_DOC, APELLPA_DOC, APELLMA_DOC, TIPO_DOC FROM docente ");
$statement->execute();
$docentes = $statement->fetchAll();

$statement = $conexion->prepare("SELECT NOMBRE_MATERIA, SIGLA_MATERIA FROM materia ");
$statement->execute();
$materias = $statement->fetchAll();

require 'views/seguimiento.view.php';