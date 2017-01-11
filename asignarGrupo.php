<?php session_start();
     require 'funciones.php';

    if (isset($_SESSION['usuario'])){

        $idMateria = $_REQUEST['idMateria'];
        $idDocMateria = $_REQUEST['id'];
        $idDoc=$_REQUEST['idDoc'];


        $conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');
        $statement = $conexion->prepare("SELECT * FROM grupo WHERE ID_MATERIA='$idMateria'");
        $statement->execute();
        $grupos = $statement->fetchAll();

        $conexion=null;
        require 'views/asignarGrupo.view.php';
    } else {
        header('Location: login.php');
    }
