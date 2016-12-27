<?php session_start();

	require 'funciones.php';

    $conexion = conexion('bd_seguimiento','root','');

    if (!$conexion) {
        die();
    }
    $statement = $conexion->prepare("SELECT INICIO_HORARIO FROM horario");
    $statement->execute();
    $inicioHoras = $statement->fetchAll();

    $statement2 = $conexion->prepare("SELECT FIN_HORARIO FROM horario");
    $statement2->execute();
    $finHoras = $statement2->fetchAll();

    $statement3 = $conexion->prepare("SELECT NOMBRE_AULA FROM aula");
    $statement3->execute();
    $aulas = $statement3->fetchAll();


    

		require 'views/horarioMateria.view.php';
	
?>