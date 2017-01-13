<?php

require 'funciones.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_REQUEST['id'];
    $nombre = $_POST['nom-aula'];
    $descripcion = $_POST['des-aula'];
    $nombre = strtoupper($nombre);
    $descripcion = strtoupper($descripcion);
    echo "".$nombre ." ".$descripcion;

    $conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');
    if (!$conexion) {
        die();
    }
    else
    {
    	//consulta buscando si existe el $aula 
                $sql1 = "SELECT * FROM aula WHERE NOMBRE_AULA='$nombre'" ;

                $consulta =$conexion->prepare($sql1);
                $consulta->execute();

                if ($consulta->rowCount() == '1')
                {   
                    echo "este aula ya existe";

                    
                }else
                {

                    $sql = "UPDATE aula SET NOMBRE_AULA='$nombre' , DESCRIPCION_AULA='$descripcion' WHERE ID_AULA='$id'";
                     $statement = $conexion->prepare($sql);
  					 $statement->execute();
    				echo $statement->rowCount(). 'record update';
    				 header('Location: registrarAula.php');

                }   
               
    }
    
   

    //echo $id,$nombres;
}
