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

$statement = $conexion->prepare("SELECT doc_materia.ID_DOCENTE,NOMBRE_DOC,APELLPATERNO_DOC,APELLMATERNO_DOC
                                  FROM docente
                                  INNER JOIN nombramiento
                                  ON docente.ID_DOCENTE=nombramiento.ID_DOCENTE
                                  INNER JOIN doc_materia
                                  ON docente.ID_DOCENTE=doc_materia.ID_DOCENTE
                                  GROUP BY docente.ID_DOCENTE; 
                                 ");
$statement->execute();
$docentes = $statement->fetchAll();

$statement = $conexion->prepare("SELECT NOMBRE_MATERIA, SIGLA_MATERIA FROM materia ");
$statement->execute();
$materias = $statement->fetchAll();


	require 'views/reporteDocente.view.php';

?>
