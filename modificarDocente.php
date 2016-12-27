<?php

require 'funciones.php';

/*session_start();

if (isset($_SESSION['usuario'])){
    require 'views/modificarDocente.view.php';
} else {
    header('Location: login.php');
}*/
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

}catch(PDOException $e) {
    echo $e->getMessage();
}
$conexion = null;

require 'views/modificarDocente.view.php';

