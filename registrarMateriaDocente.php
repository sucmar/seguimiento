<?php
	
	require 'funciones.php';

	$valor = $_REQUEST['valIdDoc'];//ID DEL DOCENTE
	$valIdMateria = $_REQUEST['valIdMateria'];//ID DE LA MATERIA

    $conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');

    $statement1 = $conexion->prepare("SELECT * FROM doc_materia WHERE ID_MATERIA='$valIdMateria' AND ID_DOCENTE='$valor'");
    $statement1->execute();
    $encontrado=$statement1->fetchAll();

    if($encontrado){
        echo "El docente esta ya registrado a la materia";
    } else {
        $statement = $conexion->prepare("INSERT INTO doc_materia(ID_DOCENTE, ID_MATERIA ) VALUES ('$valor','$valIdMateria')");
        $statement->execute();
        echo 'Registro con exito';
        //echo 'Hola'.$valor.'y tu apellido es'.$valIdMateria;
    }
 ?>