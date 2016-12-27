<?php session_start();

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
};
$idDocente =  $_REQUEST['id'];

require 'funciones.php';

$conexion = conexion('bd_seguimiento','root','');

if (!$conexion) {
    die();
}
$statement1 = $conexion->prepare("SELECT  NOMBRE_DOC , APELLPATERNO_DOC ,APELLMATERNO_DOC FROM docente WHERE ID_DOCENTE=$idDocente");
$statement1->execute();
$doc = $statement1->fetch();

$statement2 = $conexion->prepare("SELECT  ID_MATERIA , NOMBRE_MATERIA FROM materia");
$statement2->execute();
$listaMaterias = $statement2->fetchAll();

if(isset($_POST['post_materia'])) {
    $statement3 = $conexion->prepare("SELECT NOM_GRUPO FROM grupo");
    $statement3->execute();
    $listaGrupos = $statement3->fetchAll();

}
/*  $statement2 = $conexion->prepare("SELECT FIN_HORARIO FROM horario");
    $statement2->execute();
    $finHoras = $statement2->fetchAll();

    $statement3 = $conexion->prepare("SELECT NOMBRE_AULA FROM aula");
    $statement3->execute();
    $aulas = $statement3->fetchAll();*/







if (isset($_SESSION['usuario'])){
    require 'views/materiaDocente.view.php';
} else {
    header('Location: login.php');
}