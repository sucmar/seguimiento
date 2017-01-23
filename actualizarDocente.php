<?php

require 'funciones.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
//    $idSeg=$_REQUEST['idSeg'];
    $id = $_REQUEST['id'];
    $nombres         = strtoupper($_POST['nombre']);
    $apellidoPaterno = strtoupper($_POST['apePaterno']);
    $apellidoMaterno = strtoupper($_POST['apeMaterno']);
    $titulo          = strtoupper($_POST['profesion']);
    $ci              = $_POST['ci'];
    $expedido        = $_POST['departamento'];
    $fechaNacimiento = $_POST['fecNacimiento'];
    $sexo            = $_POST['sexo'];
    $telFijo         = $_POST['telf'];
    $celular         = $_POST['cel'];
    $direcDomicilio  = strtoupper($_POST['direccion']);
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
        $totalHorasAutorizadas   =$_POST['totalHorasAutorizadas'];// horas total 160 de entrada para exclusivo
        $tiempoParcial            =$_POST['tiempoParcial'];
        $dedicacionExclusiva        =$_POST['dedicacionExclusiva'];// hora que le quedan se va disminuyendo
        $observaciones           =$_POST['observaciones'];

        $horasTotal= $horaInvestigacion+$horaExtencion+$horaServicio+$horaProduccion+
            $horaServicioAcademico+$horaProduccionAcademica+$horaAdministracionAcademica;

        //$dedicacionExclusiva=160-$horasTotal;


        if($horasTotal <= 160){
            try{
                if (!$conexion) {
                    die();
                }

                $statement3= $conexion->prepare("SELECT sum(HRS_SEMANA) AS hrssemana ,sum(HRS_TEORIA_MES) AS hrsTeoriaMes,
                                                sum(HRS_PRACTICA_MES) AS hrsPracMes,sum(HRS_MES_MATERIA) AS hrsMesMat
                                         FROM doc_materia
                                         INNER JOIN grupos
                                         ON doc_materia.ID_DOCMATERIA=grupos.ID_DOCMATERIA
                                         INNER JOIN dia
                                         ON grupos.ID_GRUP=dia.ID_GRUP
                                         INNER JOIN hrs_academicas
                                         ON dia.ID_DIA=hrs_academicas.ID_DIA
                                         WHERE doc_materia.ID_DOCENTE='$id'
                                         GROUP BY doc_materia.ID_DOCENTE");
                $statement3->execute();
                $total= $statement3->fetch(PDO::FETCH_ASSOC);

                $dedicacionExclusiva = $dedicacionExclusiva-$total['hrsMesMat'];

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
                      WHERE ID_DOCENTE='$id'";


                $statement = $conexion->prepare($sql2);
                $statement->execute();

                header ("Location: listaDocentes.php");
            } catch (PDOException $e){
                echo $e->getMessage();
            }
            $conexion = null;
        } else {
            echo "<h4><strong>las horas de tiempo exclusivo sobrepasan el tiempo establecido de 160 horas
                                o ya se cumplieron las horas para este docente</strong></h4>";
        }

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