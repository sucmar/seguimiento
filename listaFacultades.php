<?php

    require 'funciones.php';
        function console_log( $data ){
            echo '<script>';
            echo 'console.log('. json_encode( $data ) .')';
            echo '</script>';
        };
    $conexion = conexion('bd_seguimiento','root','');

    if (!$conexion) {
        die();
    }
    $statement = $conexion->prepare("SELECT ID_FACULTAD ,NOMBRE_FACULTAD FROM facultad ");
    $statement->execute();
    $facultades = $statement->fetchAll();
    console_log("facultad");
    $carrera;
    if(isset($_COOKIE['idFacultad'])) {
        
        $idFac = $_COOKIE['idFacultad'];
        console_log($idFac);
        $statement = $conexion->prepare("SELECT DISTINCT(ID_CARRERA) ,NOMBRE_CARRERA FROM carrera c,facultad f  WHERE c.ID_FACULTAD=$idFac" );
    $statement->execute();
    global $carreras;
    $carreras = $statement->fetchAll();
    setcookie("idFacultad", "");    
    }

  
    

/*
$sql =
"
SELECT c.NOMBRE_CARRERA
FROM carrera c
WHERE ID_FACULTAD = 2
"
*/
require 'views/listaFacultades.view.php';



