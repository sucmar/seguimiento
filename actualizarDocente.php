<?php

require 'funciones.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_REQUEST['id'];
    $nombres = $_POST['nombre'];
    $apellidoPaterno = $_POST['apePaterno'];
    $apellidoMaterno = $_POST['apeMaterno'];
    $titulo = $_POST['profesion'];
    $ci = $_POST['ci'];
    $expedido = $_POST['departamento'];
    $fechaNacimiento = $_POST['fecNacimiento'];
    $sexo = $_POST['sexo'];
    $telFijo = $_POST['telf'];
    $celular = $_POST['cel'];
    $direcDomicilio = $_POST['direccion'];
    $correoElectronico = $_POST['correo'];
    $cargo = $_POST['dedicacion'];

    try{
        $conexion = conexion('bd_seguimiento', 'root', '');
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
        //echo $statement->rowCount(). 'record update';
    } catch (PDOException $e){
        echo $e->getMessage();
    }
    $conexion = null;

    //echo $id,$nombres;
}

