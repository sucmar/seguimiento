<?php session_start();

if (isset($_SESSION['usuario'])){
    require 'views/registroFacultad.view.php';
} else {
    header('Location: login.php');
}


if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nombreFacultad      = $_POST['nombreFacultad'];
        $ubicacionFacultad   = $_POST['ubicacionFacultad'];

        $enlace = mysqli_connect('localhost','seg_user', 'seg_pass','bd_seguimiento');

        if (!$enlace) {
            echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
            echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        } else {
            $consultaIdDuplicado = "SELECT ID_FACULTAD FROM facultad WHERE NOMBRE_FACULTAD LIKE '%$nombreFacultad%'"; 
            $result = mysqli_query($enlace,$consultaIdDuplicado);
            $idDuplicado = mysqli_fetch_object($result);
            
            if($idDuplicado != null && isset($_POST['nombreFacultad']) ) {
                echo " <h4 align='center' style='color:red;'>El nombre que ingreso ya esta registrado.</h4> ";
            } else {
                $query = "INSERT INTO facultad(NOMBRE_FACULTAD, UBICACION_FACULTAD)
                       VALUES('$nombreFacultad','$ubicacionFacultad')";
                mysqli_query($enlace,$query);
				echo " <h4 align='center' style='color:blue;'>registro completo.</h4> ";
            }
        }
        mysqli_close($enlace);
    }


?>
