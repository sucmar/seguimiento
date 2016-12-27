<?php session_start();

	require 'funciones.php';

    $conexion = conexion('bd_seguimiento','root','');

    if (!$conexion) {
        die();
    }

    $statement = $conexion->prepare("SELECT ID_DOCENTE, NOMBRE_DOC, APELLPATERNO_DOC, APELLMATERNO_DOC, DEDICACION_DOC FROM docente ");
    $statement->execute();
    $docentes = $statement->fetchAll();

    $statement = $conexion->prepare("SELECT ID_MATERIA,NOMBRE_MATERIA, SIGLA_MATERIA FROM materia ");
    $statement->execute();
    $materias = $statement->fetchAll();


$statement = $conexion->prepare("SELECT INICIO_HORARIO FROM horario WHERE ");
    $statement->execute();
    $hrsInicio = $statement->fetchAll();

    $statement2 = $conexion->prepare("SELECT INICIO_HORARIO FROM horario");
    $statement2->execute();
    $hrsFin = $statement2->fetchAll();





		require 'views/asignarMateriaDocente.view.php';
	
?>
