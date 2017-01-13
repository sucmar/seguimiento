<?php session_start();
require 'funciones.php';
$conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');
$idDocente=$_REQUEST['id'];
if (isset($_SESSION['usuario']))
{
    

    if (!$conexion) {
        die();
    }
    try {
        $statement3 = $conexion->prepare("SELECT docente.ID_DOCENTE,docente.NOMBRE_DOC,docente.APELLMATERNO_DOC,docente.APELLPATERNO_DOC
                                          FROM docente
                                          INNER JOIN doc_materia
                                          ON docente.ID_DOCENTE=doc_materia.ID_DOCENTE
                                          AND docente.ID_DOCENTE='$idDocente'");
        $statement3->execute();
        $docente = $statement3->fetch();

    }catch(PDOException $e) {
        echo $e->getMessage();
    }
    

       //header("Location: nombramiento.php");

    
}
 require 'views/nombramiento.view.php';