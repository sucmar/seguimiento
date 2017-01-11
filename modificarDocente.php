<?php session_start();

require 'funciones.php';

if (isset($_SESSION['usuario'])){
    $conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');
    if (!$conexion) {
        die();
    }

    $id = $_REQUEST['id'];
    try{
        $statement3= $conexion->prepare("SELECT sum(HRS_SEMANA) AS hrssemana ,sum(HRS_TEORIA_MES) AS hrsTeoriaMes,
                                                sum(HRS_PRACTICA_MES) AS hrsPracMes,sum(HRS_MES_MATERIA) AS hrsMesMat
                                         FROM doc_materia
                                         INNER JOIN grupos
                                         ON doc_materia.ID_DOCMATERIA=grupos.ID_DOCMATERIA
                                         INNER JOIN dia
                                         ON grupos.ID_GRUP=dia.ID_GRUP
                                         INNER JOIN hrs_academicas
                                         ON dia.ID_DIA=hrs_academicas.ID_DIA
                                         WHERE doc_materia.ID_DOCENTE='$id'
                                         GROUP BY doc_materia.ID_DOCENTE");
        $statement3->execute();
        $total= $statement3->fetch(PDO::FETCH_ASSOC);

        $statement = $conexion->prepare("SELECT * FROM docente WHERE ID_DOCENTE = '$id'");
        $statement->execute();
        $docentes = $statement->fetch(PDO::FETCH_ASSOC); // capturar datos cada columna de una consulta dada

        $statement2 = $conexion->prepare("SELECT * FROM seguimiento WHERE ID_DOCENTE = '$id'");
        $statement2->execute();
        $seguimiento = $statement2->fetch(PDO::FETCH_ASSOC);

        if($docentes['DEDICACION_DOC'] == "EXCLUSIVO"){
            $totalExclusivo=$seguimiento['HRSAUTORIZADAS']-$total['hrsMesMat'];
        } else{
            $totalExclusivo=0;
        }

    }catch(PDOException $e) {
        echo $e->getMessage();
    }
    $conexion = null;


    require 'views/modificarDocente.view.php';
} else {
    header('Location: login.php');
}
