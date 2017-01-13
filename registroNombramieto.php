<?php session_start();
require 'funciones.php';
$conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');
if (isset($_SESSION['usuario'])){
    $idNom=$_POST['idNom'];
    $interino=$_POST['interino'];
    $invitado=$_POST['invitado'];
    $asistente=$_POST['asistente'];
    $adjunto=$_POST['adjunto'];
    $catedratico=$_POST['catedratico'];
    $parcial=$_POST['parcial'];
    $exclusivo=$_POST['exclusivo'];
    $inicio=$_POST['inicio'];
    $gestion=$_POST['gestion'];
    $fin=$_POST['fin'];

    if (!$conexion) {
        die();
    }
    try {
        $statement3 = $conexion->prepare("INSERT INTO nombramiento (ID_DOCENTE,INTERINO_NOM,INVITADO_NOM,ASISTENTE_NOM,
                                          ADJUNTO_NOM,CATEDRATICO_NOM,TIEMPO_PARCIAL_NOM,TIEMPO_EXCLUSIVO_NOM,TIEMPO_DURACION,
                                          FECHA_SOLICITUD,INICIO_NOM)
                                          VALUE ('$idNom','$interino','$invitado','$asistente','$adjunto','$catedratico','$parcial','$exclusivo',
                                          '$gestion','$inicio','$fin')");
        $statement3->execute();
        //$docentes = $statement3->fetchAll();

    }catch(PDOException $e) {
        echo $e->getMessage();
    }
    $conexion = null;
    header("Location: .php");
} else {
    header('Location: login.php');
}
