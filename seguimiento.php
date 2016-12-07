<?php session_start();

require 'funciones.php';

if (isset($_SESSION['usuario'])){
    $conexion = conexion('bd_seguimiento','root','');
    if (!$conexion) {
        die();
    }

    $buscar = '';
    if (isset($_POST['nom'])){
        $buscar = $_POST['nom'];

        print_r($_POST['nom']);
    }
    $statement = $conexion->prepare("SELECT * FROM docente WHERE NOMBRE_DOC LIKE '%".$buscar."%' 
                                    OR APELLPA_DOC LIKE '%".$buscar."%' OR APELLMA_DOC LIKE '%".$buscar."%'");
    $statement->execute();
    $docentes = $statement->fetchAll();

//$n = count($docentes);
//printf($n);
   // print_r($docentes);

    $statement = $conexion->prepare("SELECT NOMBRE_MATERIA, SIGLA_MATERIA FROM materia ");
    $statement->execute();
    $materias = $statement->fetchAll();
    require 'views/seguimiento.view.php';
} else {
    header('Location: login.php');
}

