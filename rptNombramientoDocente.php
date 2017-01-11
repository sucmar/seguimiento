<?php session_start();


if (isset($_SESSION['usuario'])) {
    require_once("database/db.php");
//Llamada al modelo
    require_once("models/nombramientodocente.php");
    //cargado el modelo
    $nombramientoDocente = new nombramientodocente_model();

    $arregloDocentes = $nombramientoDocente->get_docente();

    $arregloFacultades = $nombramientoDocente->get_facultadDocente();
    $arregloNombramientoS = $nombramientoDocente->get_nombramiento();
    $arregloHorasTotalesSem = $nombramientoDocente->get_horasTotalSemana();
    $arregloHorasTotalesMes = $nombramientoDocente->get_horasTotalMes();

//Llamada a la vista
    require_once 'views/rptNombramientoDocente.view.php';
} else {
    header('Location: login.php');
} ?>


