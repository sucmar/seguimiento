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

$statement = $conexion->prepare("SELECT DISTINCT (docente.ID_DOCENTE) , NOMBRE_DOC,APELLPATERNO_DOC,
                                        APELLMATERNO_DOC, DEDICACION_DOC
                                 FROM doc_materia
                                 INNER JOIN docente
                                 ON doc_materia.ID_DOCENTE=docente.ID_DOCENTE");
$statement->execute();
$docentes = $statement->fetchAll();

$statement = $conexion->prepare("SELECT NOMBRE_MATERIA, SIGLA_MATERIA FROM materia ");
$statement->execute();
$materias = $statement->fetchAll();

require 'views/seguimiento.view.php';

?>