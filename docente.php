<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
<?php session_start();

if (isset($_SESSION['usuario'])){
    require 'funciones.php';
    $valor = $_REQUEST['id'];

    $conexion = conexion('bd_seguimiento','root','');
    $statement = $conexion->prepare("SELECT * FROM doc_materia WHERE ID_DOCENTE='$valor'");
    $statement->execute();
    $asignasiones = $statement->fetchAll();

    $statement2 = $conexion->prepare("SELECT * FROM materia");
    $statement2->execute();
    $materias = $statement2->fetchAll();

    require 'views/docente.view.php';
} else {
    header('Location: login.php');
}
