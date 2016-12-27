<?php
require 'funciones.php';

if(!isset($_GET['var_js']) || empty($_GET['var_js'])){
    echo "";
} else{
    $conexion = conexion('bd_seguimiento','root','');
    //echo "Exito!!!";
    $idDocente = $_GET['var_js'];
    //print_r($idDocente);
    $statement = $conexion->prepare("SELECT NOMBRE_DOC, APELLPATERNO_DOC, APELLMATERNO_DOC  FROM docente WHERE ID_DOCENTE = '$idDocente'");
    $statement->execute();
    $docentes = $statement->fetch(PDO::FETCH_ASSOC);
     print_r($docentes['NOMBRE_DOC']);
     echo "  ";
    print_r($docentes['APELLPATERNO_DOC']);
    echo "  ";
    print_r($docentes['APELLMATERNO_DOC']);
}

