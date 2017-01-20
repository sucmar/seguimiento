<?php session_start();

if (isset($_SESSION['usuario'])){
    require 'funciones.php';
    $conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');
    $idMateria = $_REQUEST['idMateria'];//ID DE LA MATERIA
    $idDocMateria = $_REQUEST['id'];//ID_DOCMATERIA
    $idDoc=$_REQUEST['idDoc'];//ID DEL DOCENTE

    $sql="SELECT *
          FROM doc_materia
          INNER JOIN grupos
          ON doc_materia.ID_DOCMATERIA=grupos.ID_DOCMATERIA
          INNER JOIN materia
          ON doc_materia.ID_MATERIA=materia.ID_MATERIA
          WHERE doc_materia.ID_DOCENTE='$idDoc' AND materia.ID_MATERIA='$idMateria'";
    $statement = $conexion->prepare($sql);
    $statement->execute();
    $materiasAsignadas = $statement->fetchAll();

    $statement1 = $conexion->prepare("SELECT  NOMBRE_DOC , APELLPATERNO_DOC ,APELLMATERNO_DOC FROM docente WHERE ID_DOCENTE='$idDoc'");
  $statement1->execute();
  $doc = $statement1->fetch();


    require 'views/gruposAsignados.view.php';
} else {
    header('Location: login.php');
}