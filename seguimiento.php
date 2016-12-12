<?php session_start();
require 'funciones.php';
if (isset($_SESSION['usuario'])){
    $conexion = conexion('bd_seguimiento','root','');
    if (!$conexion) {
        die();
    }
    if (isset($_POST['buscar'])){
        $buscar = $_POST['buscar'];
        $statement = $conexion->prepare("SELECT ID_DOC, NOMBRE_DOC, APELLPA_DOC, APELLMA_DOC, TIPO_DOC 
                                         FROM docente 
                                         WHERE NOMBRE_DOC LIKE '%".$buscar."%' 
                                               OR APELLPA_DOC LIKE '%".$buscar."%' 
                                               OR APELLMA_DOC LIKE '%".$buscar."%'"
        );
        $statement->execute();
        $docentes = $statement->fetchAll();
        //$n = count($docentes);
        // print_r($_POST['nom']);

    } else {
        echo 'INGRESE EL NOMBRE';
    }
} else {
    header('Location: login.php');
}
$statement = $conexion->prepare("SELECT NOMBRE_MATERIA, SIGLA_MATERIA FROM materia ");
$statement->execute();
$materias = $statement->fetchAll();

require 'views/seguimiento.view.php';