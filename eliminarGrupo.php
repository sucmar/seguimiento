<?php
    require 'funciones.php';
    $idDocMateria = $_REQUEST['idDocMateria'];
    $idMateria=$_REQUEST['idMateria'];
    $grupo=$_REQUEST['grupo'];

    $conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');
    $sql = "DELETE grupos,dia,hrs_academicas
            FROM doc_materia
            INNER JOIN grupos
            ON doc_materia.ID_DOCMATERIA=grupos.ID_DOCMATERIA
            INNER JOIN dia
            ON dia.ID_GRUP=grupos.ID_GRUP
            INNER JOIN hrs_academicas
            ON hrs_academicas.ID_DIA=dia.ID_DIA
            WHERE doc_materia.ID_DOCMATERIA='$idDocMateria'";
    $statement = $conexion->prepare($sql);
    $statement->execute();
    header("Location: gruposAsignados.php?id=$idDocMateria&idMateria=$idMateria&idDoc=$grupo");
