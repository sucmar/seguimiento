<?php
require 'funciones.php';

$id = $_REQUEST['id'];
$conexion = conexion('bd_seguimiento','seg_user','seg_pass');
if (!$conexion) {
    die();
} else {
    $statement = $conexion->prepare("DELETE docente,doc_materia,grupos,dia,hrs_academicas,nombramiento,seguimiento
                                     FROM docente
                                     LEFT JOIN doc_materia
                                     ON docente.ID_DOCENTE=doc_materia.ID_DOCENTE
                                     LEFT JOIN grupos
                                     ON grupos.ID_DOCMATERIA=doc_materia.ID_DOCMATERIA
                                     LEFT JOIN dia
                                     ON dia.ID_GRUP=grupos.ID_GRUP
                                     LEFT JOIN hrs_academicas
                                     ON hrs_academicas.ID_DIA=dia.ID_DIA
                                     LEFT JOIN nombramiento
                                     ON nombramiento.ID_DOCENTE=docente.ID_DOCENTE
                                     LEFT JOIN seguimiento
                                     ON seguimiento.ID_DOCENTE=docente.ID_DOCENTE
                                     WHERE docente.ID_DOCENTE='$id';");
    $statement->execute();
    $docentes = $statement->fetchAll();
    header ('Location: listaDocentes.php');

}