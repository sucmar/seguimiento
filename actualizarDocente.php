<?php

require 'funciones.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $idSeg=$_REQUEST['idSeg'];
    $id = $_REQUEST['id'];
    $nombres         = $_POST['nombre'];
    $apellidoPaterno = $_POST['apePaterno'];
    $apellidoMaterno = $_POST['apeMaterno'];
    $titulo          = $_POST['profesion'];
    $ci              = $_POST['ci'];
    $expedido        = $_POST['departamento'];
    $fechaNacimiento = $_POST['fecNacimiento'];
    $sexo            = $_POST['sexo'];
    $telFijo         = $_POST['telf'];
    $celular         = $_POST['cel'];
    $direcDomicilio  = $_POST['direccion'];
    $correoElectronico=$_POST['correo'];
    $cargo            =$_POST['dedicacion'];
    $estado           =$_POST['estado'];

    $conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');

    if($cargo == 'EXCLUSIVO'){
        $horaTeoria         = $_POST['horaTeoria'];
        $horaInvestigacion = $_POST['horaInvestigacion'];
        $horaExtencion = $_POST['horaExtencion'];
        $horaServicio     = $_POST['horaServicio'];
        $horaPractica    = $_POST['horaPractica'];
        $rfcUno        = $_POST['rfcUno'];
        $rfcDos = $_POST['rfcDos'];
        $rfcTres            = $_POST['rfcTres'];
        $horaProduccion         = $_POST['horaProduccion'];
        $horaServicioAcademico  = $_POST['horaServicioAcademico'];
        $horaProduccionAcademica  = $_POST['horaProduccionAcademica'];
        $horaAdministracionAcademica =$_POST['horaAdministracionAcademica'];
        $rfcCuatro            =$_POST['rfcCuatro'];
        $rfcCinco            =$_POST['rfcCinco'];
        $rftSeis            =$_POST['rfcSeis'];
        $rfcSiete            =$_POST['rfcSiete'];
        $totalHorasSemana     =$_POST['totalHorasSemana'];
        $totalHorasMes            =$_POST['totalHorasMes'];
        $totalHorasAutorizadas   =$_POST['totalHorasAutorizadas'];
        $tiempoParcial            =$_POST['tiempoParcial'];
        $dedicacionExclusiva        =$_POST['dedicacionExclusiva'];
        $observaciones           =$_POST['observaciones'];

        try{
            if (!$conexion) {
                die();
            }
            $sql = "UPDATE docente SET CI_DOCENTE='$ci',NOMBRE_DOC='$nombres',APELLPATERNO_DOC=' $apellidoPaterno',
                                                        APELLMATERNO_DOC='$apellidoMaterno',TELEFONO_DOC='$telFijo',
                                                        CELULAR_DOC='$celular',NACIMIENTO_DOC='$fechaNacimiento',
                                                        CIEXPEDIDO_DOC='$expedido',DIRECCION_DOC='$direcDomicilio',
                                                        DEDICACION_DOC='$cargo',CORREO_DOC='$correoElectronico',
                                                        PROFESION_DOC='$titulo',GENERO_DOC='$sexo' WHERE ID_DOCENTE='$id'";
            $statement = $conexion->prepare($sql);
            $statement->execute();

            $sql2 = "UPDATE seguimiento SET HRSTEORIA='$horaTeoria',HRSINVESTIGACION='$horaInvestigacion',HRSEXTENCION='$horaExtencion',
                                            HRSSERVICIO='$horaServicio',HRSPRACTICA='$horaPractica',
                                            RCF1='$rfcUno',RCF2='$rfcDos',RCF3='$rfcTres',HRSPRODUCCION='$horaProduccion',
                                            HRSSERVICIOACADEMICO='$horaServicioAcademico',HRSPRODUCACAD='$horaProduccionAcademica',
                                            HRSADMINACAD='$horaAdministracionAcademica',RCF4='$rfcCuatro',RCF5='$rfcCinco',
                                            RCF6='$rftSeis',RCF7='$rfcSiete',HRSTRABSEMANA='$totalHorasSemana',
                                            HRSTRABMES='$totalHorasMes',HRSAUTORIZADAS='$totalHorasAutorizadas',
                                            TIEMPOPARCIAL='$tiempoParcial',DEDICACIONEXCLUSIVA='$dedicacionExclusiva',
                                            OBSERVACIONES='$observaciones'
                      WHERE ID_DOCENTE='$id' AND IDSEGUIMIENTO='$idSeg'";


            $statement = $conexion->prepare($sql2);
            $statement->execute();

            header ("Location: listaDocentes.php");
        } catch (PDOException $e){
            echo $e->getMessage();
        }
        $conexion = null;

    } else{
        try{
            if (!$conexion) {
                die();
            }
            $sql = "UPDATE docente SET CI_DOCENTE='$ci',NOMBRE_DOC='$nombres',APELLPATERNO_DOC=' $apellidoPaterno',
                                                        APELLMATERNO_DOC='$apellidoMaterno',TELEFONO_DOC='$telFijo',
                                                        CELULAR_DOC='$celular',NACIMIENTO_DOC='$fechaNacimiento',
                                                        CIEXPEDIDO_DOC='$expedido',DIRECCION_DOC='$direcDomicilio',
                                                        DEDICACION_DOC='$cargo',CORREO_DOC='$correoElectronico',
                                                        PROFESION_DOC='$titulo',GENERO_DOC='$sexo' WHERE ID_DOCENTE='$id'";

            $statement = $conexion->prepare($sql);
            $statement->execute();
            header ("Location: listaDocentes.php");
        } catch (PDOException $e){
            echo $e->getMessage();
        }
        $conexion = null;
    }
}