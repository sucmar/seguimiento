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
    require 'views/nombramiento.view.php';
} else {
    header('Location: login.php');
}
?>