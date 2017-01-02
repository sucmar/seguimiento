<?php session_start();
     require 'funciones.php';

    if (isset($_SESSION['usuario'])){

        $idMateria = $_REQUEST['idMateria'];
        $idDocMateria = $_REQUEST['id'];
        $idDoc=$_REQUEST['idDoc'];


        $conexion = conexion('bd_seguimiento','root','');
        $statement = $conexion->prepare("SELECT * FROM grupo WHERE ID_MATERIA='$idMateria'");
        $statement->execute();
        $grupos = $statement->fetchAll();

        require 'views/asignarGrupo.view.php';
    } else {
        header('Location: login.php');
    }
