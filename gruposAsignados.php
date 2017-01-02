<?php session_start();

if (isset($_SESSION['usuario'])){
    require 'funciones.php';
    $conexion = conexion('bd_seguimiento','root','');
    $idMateria = $_REQUEST['idMateria'];
    $idDocMateria = $_REQUEST['id'];
    $idDoc=     $_REQUEST['idDoc'];

    $sql="SELECT *
          FROM doc_materia
          INNER JOIN grupos
          ON doc_materia.ID_DOCMATERIA=grupos.ID_DOCMATERIA
          INNER JOIN materia
          ON doc_materia.ID_MATERIA=materia.ID_MATERIA
          WHERE doc_materia.ID_DOCENTE='$idDoc'";
    $statement = $conexion->prepare($sql);
    $statement->execute();
    $materiasAsignadas = $statement->fetchAll();

    require 'views/gruposAsignados.view.php';
} else {
    header('Location: login.php');
}