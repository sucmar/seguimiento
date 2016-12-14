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

$grupos = array();
if(isset($_COOKIE['sigla_cookie'])) {
    $sigla = $_COOKIE['sigla_cookie'];

    $materia1 = $conexion->prepare("SELECT ID_MATERIA FROM materia WHERE SIGLA_MATERIA = $sigla ");
    $materia1->execute();
    $materiaSeleccionada = $materia1->fetch();

    $idMateria = $materiaSeleccionada["ID_MATERIA"];
    $statement = $conexion->prepare("SELECT NOM_GRUPO FROM grupo WHERE ID_MATERIA = $idMateria");
    $statement->execute();
    global $grupos;
    $grupos = $statement->fetchAll();
}

require 'views/seguimiento.view.php';