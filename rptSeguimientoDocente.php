<?php session_start();


if (isset($_SESSION['usuario'])) {
    require_once("database/db.php");
//Llamada al modelo
    require_once("models/seguimientodocente.php");
    //cargado el modelo
    $seguimientoDocente = new seguimientodocente_model();

    $arregloDocentes = $seguimientoDocente->get_docente();

    $arregloFacultades = $seguimientoDocente->get_facultadDocente();
    $arregloSeguimientoD = $seguimientoDocente->get_seguimiento();
    $arregloSeguimientoHrs = $seguimientoDocente->get_hora();

    //nuevo
    $IDDocente = $_GET['ID_DOCENTE'];
    $arregloSeguimientoDocentesHorario = $seguimientoDocente->cargar_horario_docente(!empty($IDDocente)?$IDDocente:0);
    $arregloHorarios = $seguimientoDocente->get_horarios();
    $arregloDiasSemana = $seguimientoDocente->get_dias();


//Llamada a la vista
    require_once("views/rptSegumientoDocente.view.php");
} else {
    header('Location: login.php');
} ?>

<!--if (isset($_SESSION['usuario'])){-->
<!--    require 'views/seguimiento.view.php';-->
<!--} else {-->
<!--    header('Location: login.php');-->
<!--}-->

