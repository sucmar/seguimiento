<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
<?php session_start();

if (isset($_SESSION['usuario'])){
    require 'funciones.php';
    $conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');
    $valor = $_REQUEST['id'];

    if (!$conexion) {
        die();
    }
    try {
        $statement = $conexion->prepare("SELECT * FROM doc_materia WHERE ID_DOCENTE='$valor'");
        $statement->execute();
        $asignasiones = $statement->fetchAll();

        $statement2 = $conexion->prepare("SELECT * FROM materia");
        $statement2->execute();
        $materias = $statement2->fetchAll();

        $statement3 = $conexion->prepare("SELECT * FROM docente WHERE ID_DOCENTE='$valor'");
        $statement3->execute();
        $docente = $statement3->fetch(PDO::FETCH_ASSOC);

    }catch(PDOException $e) {
        echo $e->getMessage();
    }
    $conexion = null;
    require 'views/docente.view.php';
} else {
    header('Location: login.php');
}
