<?php session_start();
require 'funciones.php';

$idDocente=$_REQUEST['id'];
$conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');
if (isset($_SESSION['usuario']))
{

    $interino="";
    $invitado="";
    $asistente="";
    $adjunto="";
    $catedratico="";
    $parcial="";
    $exclusivo="";

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        //$idMon          = $_POST['idMon'];
        $categoria     =$_POST['categoria'];
        $tiempo        = $_POST['tiempo'];
        //$exclusivo      = $_POST['exclusivo'];
        $inicio         = $_POST['inicio'];
        $gestion        = $_POST['gestion'];
        $fin            = $_POST['fin'];
        // echo $idMon;
        if (!$conexion) {
            die();
        }
        try {
            if($categoria==1)
            {
                $interino="x";

            }else
            {
                if($categoria==2)
                {
                    $invitado="x";

                }else
                {
                    if($categoria==3)
                    {

                        $asistente="x";

                    }else
                    {
                        if($categoria==4)
                        {

                            $adjunto="x";

                        }else
                        {
                            if($categoria==5)
                            {

                                $catedratico="x";
                            }
                        }
                    }
                }
            }

            if($tiempo==1)
            {
                $parcial    = "x";
                $exclusivo  = "";
            }else
            {
                if($tiempo==2)
                {
                    $parcial    = "";
                    $exclusivo  = "x";
                }
            }


            $statement3 = $conexion->prepare("INSERT INTO nombramiento (ID_DOCENTE,INTERINO_NOM,INVITADO_NOM,ASISTENTE_NOM,
                                          ADJUNTO_NOM,CATEDRATICO_NOM,TIEMPO_PARCIAL_NOM,TIEMPO_EXCLUSIVO_NOM,TIEMPO_DURACION,
                                          FECHA_SOLICITUD,INICIO_NOM)
                                          VALUES ('$idDocente','$interino','$invitado','$asistente','$adjunto','$catedratico','$parcial','$exclusivo',
                                          '$gestion','$inicio','$fin')");
            $statement3->execute();
            $docentes = $statement3->fetchAll();
            //header('Location: espacioSecretaria.php');
            //header("Location: espacioSecretaria.php");

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    $conexion = null;
    header( 'Location: espacioSecretaria.php');
} else {
    header('Location: login.php');
}