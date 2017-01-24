<?php

require 'funciones.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id                 = $_REQUEST['id'];
    $nombreMateria     	= $_POST['nombreMateria'];
    $siglaMateria	  	= $_POST['siglaMateria'];
	$nombreDpto	  		= $_POST['nombreDpto'];
	$cargaHorariaMateria= $_POST['cargaHorariaMateria'];
	$tipoMateria		= $_POST['tipoMateria'];
	$nivelMateria		= $_POST['nivelMateria'];



    try{
        $conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');
        if (!$conexion) {
            die();
        }
        $sql = "UPDATE materia SET NOMBRE_MATERIA='$nombreMateria',SIGLA_MATERIA=' $siglaMateria' ,NOMBRE_DPTO='$nombreDpto' ,CARGA_HORARIA_MATERIA='$cargaHorariaMateria',TIPO_MATERIA='$tipoMateria' ,NIVEL_MATERIA='$nivelMateria' WHERE ID_MATERIA='$id'";

        $statement = $conexion->prepare($sql);
        $statement->execute();
        echo $statement->rowCount(). 'record update';
    } catch (PDOException $e){
        echo $e->getMessage();
    }
    $conexion = null;

header("Location: listaMaterias.php");
    //echo $id,$nombres;
}