<?php session_start();

if (isset($_SESSION['usuario'])){
    require 'funciones.php';
        function console_log( $data ){
            echo '<script>';
            echo 'console.log('. json_encode( $data ) .')';
            echo '</script>';
        };
    $conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');

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

require 'views/listaFacultades.view.php';
} else {
    header('Location: login.php');
}





