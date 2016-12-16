<?php session_start();

if (isset($_SESSION['usuario'])){
    require 'views/registroFacultad.view.php';
} else {
    header('Location: login.php');
}


if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nombreFacultad      = $_POST['nombreFacultad'];
        $ubicacionFacultad   = $_POST['ubicacionFacultad'];

        $enlace = mysqli_connect("localhost", "root", "", "bd_seguimiento");

        if (!$enlace) {
            echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
            echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        } else {
            $query = "INSERT INTO facultad(NOMBRE_FACULTAD, UBICACION_FACULTAD)
                       VALUES('$nombreFacultad','$ubicacionFacultad')";
            mysqli_query($enlace,$query);
        }
        mysqli_close($enlace);
    }


?>