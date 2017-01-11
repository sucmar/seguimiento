<?php session_start();
require 'funciones.php';
if (isset($_SESSION['usuario'])){
    require 'views/registroDocente.view.php';
} else {
    header('Location: login.php');
}
global $nombres,$apellidoPaterno,$apellidoMaterno,$profesion,$ci,$expedido,$fechaNacimiento,$sexo;

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nombres         = $_POST['nombre'];
    $apellidoPaterno = $_POST['apePaterno'];
    $apellidoMaterno = $_POST['apeMaterno'];
    $profesion          = $_POST['profesion'];
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
    $titulo           =$_POST['titulo'];

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
            $statement = $conexion->prepare("INSERT INTO docente(CI_DOCENTE,NOMBRE_DOC,APELLPATERNO_DOC,APELLMATERNO_DOC,
                                                        TELEFONO_DOC,CELULAR_DOC,NACIMIENTO_DOC,CIEXPEDIDO_DOC,DIRECCION_DOC,DEDICACION_DOC,
                                            CORREO_DOC,PROFESION_DOC,GENERO_DOC,DIPLOMA_ACAD)
                                            VALUES('$ci','$nombres','$apellidoPaterno','$apellidoMaterno','$telFijo','$celular',
                                                        '$fechaNacimiento','$expedido','$direcDomicilio','$cargo','$correoElectronico','$profesion','$sexo','$titulo')");
            $statement->execute();

            $statement = $conexion->prepare("SELECT ID_DOCENTE FROM docente WHERE CI_DOCENTE = '$ci'");
            $statement->execute();
            $docente = $statement->fetch(PDO::FETCH_ASSOC);
            $id = $docente['ID_DOCENTE'];
            $statement = $conexion->prepare("INSERT INTO seguimiento(ID_DOCENTE,ASIS,ADJ,CAT,
                      OTROCARGO,HRSTEORIA,HRSINVESTIGACION,HRSEXTENCION,HRSSERVICIO,HRSPRACTICA,
                      RCF1,RCF2,RCF3,HRSPRODUCCION,HRSSERVICIOACADEMICO,HRSPRODUCACAD,HRSADMINACAD,RCF4,RCF5,
                      RCF6,RCF7,HRSTRABSEMANA,HRSTRABMES,HRSAUTORIZADAS,TIEMPOPARCIAL,DEDICACIONEXCLUSIVA,OBSERVACIONES)
                                       VALUES('$id','null','null','null','null','$horaTeoria','$horaInvestigacion','$horaExtencion',
                                                    '$horaServicio','$horaPractica','$rfcUno','$rfcDos','$rfcTres','$horaProduccion',
                                                    '$horaServicioAcademico','$horaProduccionAcademica','$horaAdministracionAcademica',
                                                    '$rfcCuatro','$rfcCinco','$rftSeis','$rfcSiete','$totalHorasSemana','$totalHorasMes',
                                                    '$totalHorasAutorizadas','$tiempoParcial','$dedicacionExclusiva','$observaciones')");
            $statement->execute();

        } catch (PDOException $e){
            echo $e->getMessage();
        }
        $conexion = null;

    } else{

        try{
            if (!$conexion) {
                die();
            }
            $statement = $conexion->prepare("INSERT INTO docente(CI_DOCENTE,NOMBRE_DOC,APELLPATERNO_DOC,APELLMATERNO_DOC,
                                                        TELEFONO_DOC,CELULAR_DOC,NACIMIENTO_DOC,CIEXPEDIDO_DOC,DIRECCION_DOC,DEDICACION_DOC,
                                            CORREO_DOC,PROFESION_DOC,GENERO_DOC,ESTADO_DOC,DIPLOMA_ACAD)
                                            VALUES('$ci','$nombres','$apellidoPaterno','$apellidoMaterno','$telFijo','$celular',
                                                        '$fechaNacimiento','$expedido','$direcDomicilio','$cargo','$correoElectronico','$profesion','$sexo','$estado',$titulo)");
            $statement->execute();
            $docentes = $statement->fetchAll();
        } catch (PDOException $e){
            echo $e->getMessage();
        }
        $conexion = null;
    }
}
?>