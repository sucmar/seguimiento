<?php session_start();

require 'funciones.php';

if (isset($_SESSION['usuario'])){

    $conexion = conexion('bd_seguimiento','root','');
    if (!$conexion) {
        die();
    }

    $id = $_REQUEST['id'];
//echo $id;
    try{
        $statement = $conexion->prepare("SELECT * FROM docente WHERE ID_DOCENTE = '$id'");
        $statement->execute();
        $docentes = $statement->fetch(PDO::FETCH_ASSOC); // capturar datos cada columna de una consulta dada

        $statement2 = $conexion->prepare("SELECT * FROM seguimiento WHERE ID_DOCENTE = '$id'");
        $statement2->execute();
        $seguimiento = $statement2->fetch(PDO::FETCH_ASSOC);

    }catch(PDOException $e) {
        echo $e->getMessage();
    }
    $conexion = null;


    require 'views/modificarDocente.view.php';
} else {
    header('Location: login.php');
}
