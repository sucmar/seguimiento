<?php session_start();

if (isset($_SESSION['usuario'])){
    require 'views/registroCarrera.view.php';
} else {
    header('Location: login.php');
}


if($_SERVER['REQUEST_METHOD'] == 'POST'){

		$idFacultad   			= $_POST['idFacultad'];
        $nombreCarrera   		= $_POST['nombreCarrera'];
		$siglaCarrera   		= $_POST['siglaCarrera'];
        $dptoCarrera			= $_POST['dptoCarrera'];


        $enlace = mysqli_connect("localhost", "root", "", "bd_seguimiento");

        if (!$enlace) {
            echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
            echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        } else {
            $query = "INSERT INTO carrera(ID_FACULTAD,NOMBRE_CARRERA, SIGLA_CARRERA, DPTO_CARRERA)
                       VALUES('$idFacultad','$nombreCarrera','$siglaCarrera','$dptoCarrera')";
            mysqli_query($enlace,$query);
        }
        mysqli_close($enlace);
    }


?>