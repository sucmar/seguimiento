<?php session_start();

if (isset($_SESSION['usuario'])) {

    require_once("database/db.php");

    //Llamada al modelo
    require_once("models/nombramientodocente.php");

    //cargado el modelo
    $nombramientoDocente = new nombramientodocente_model();

//    require_once("views/global/header.view.php");
//    require_once("views/global/title.view.php");
//Llamada a la vista
    require_once("views/rptNombramientoDocente.view.php");
    require_once("views/global/footer.view.php");
} else {
    header('Location: login.php');
} ?>

<!--if (isset($_SESSION['usuario'])){-->
<!--    require 'views/seguimiento.view.php';-->
<!--} else {-->
<!--    header('Location: login.php');-->
<!--}-->