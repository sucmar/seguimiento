<?php session_start();
require 'funciones.php';
$conexion = conexion('bd_seguimiento', 'seg_user', 'seg_pass');
if (isset($_SESSION['usuario'])){

    if (!$conexion) {
        die();
    }
    try {
        $statement3 = $conexion->prepare("SELECT docente.ID_DOCENTE,NOMBRE_DOC,APELLMATERNO_DOC,APELLPATERNO_DOC
                                          FROM docente
                                          INNER JOIN doc_materia
                                          ON docente.ID_DOCENTE=doc_materia.ID_DOCENTE
                                          GROUP BY docente.ID_DOCENTE,NOMBRE_DOC,APELLPATERNO_DOC,APELLMATERNO_DOC;
                                          ");
        $statement3->execute();
        $docentes = $statement3->fetchAll();

    }catch(PDOException $e) {
        echo $e->getMessage();
    }
    $conexion = null;


    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo 'hola';
        $idMon          = $_POST['idMon'];
        $interino       = $_POST['interino'];
        $invitado       = $_POST['invitado'];
        $asistente      = $_POST['asistente'];
        $adjunto        = $_POST['adjunto'];
        $catedratico    = $_POST['catedratico'];
        $parcial        = $_POST['parcial'];
        $exclusivo      = $_POST['exclusivo'];
        $inicio         = $_POST['inicio'];
        $gestion        = $_POST['gestion'];
        $fin            = $_POST['fin'];
        echo $idMon;
        if (!$conexion) {
            die();
        }
        try {
            $statement3 = $conexion->prepare("INSERT INTO nombramiento (ID_DOCENTE,INTERINO_NOM,INVITADO_NOM,ASISTENTE_NOM,
                                          ADJUNTO_NOM,CATEDRATICO_NOM,TIEMPO_PARCIAL_NOM,TIEMPO_EXCLUSIVO_NOM,TIEMPO_DURACION,
                                          FECHA_SOLICITUD,INICIO_NOM)
                                          VALUES ('$idMon','$interino','$invitado','$asistente','$adjunto','$catedratico','$parcial','$exclusivo',
                                          '$gestion','$inicio','$fin')");
            $statement3->execute();
            //$docentes = $statement3->fetchAll();

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        $conexion = null;
        header("Location: nombramiento.php");

    }
    require 'views/nombramiento.view.php';
} else {
    header('Location: login.php');
}
?>