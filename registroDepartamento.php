<?php session_start();

if (isset($_SESSION['usuario'])){
    require 'views/registroDepartamento.view.php';
} else {
    header('Location: login.php');
}


if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nombreDpto      		= $_POST['nombreDpto'];
        $ubicacionDpto   		= $_POST['ubicacionDpto'];

        $enlace = mysqli_connect('localhost','seg_user', 'seg_pass','bd_seguimiento');

        if (!$enlace) {
            echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
            echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        } else {
            $consultaIdDuplicado = "SELECT ID_DPTO FROM departamento WHERE NOMBRE_DPTO LIKE '%$nombreDpto%'"; 
            $result = mysqli_query($enlace,$consultaIdDuplicado);
            $idDuplicado = mysqli_fetch_object($result);
            
            if($idDuplicado != null && isset($_POST['nombreDpto']) ) {
                echo " <h4 align='center' style='color:red;'>El nombre que ingreso ya esta registrado.</h4> ";
            } else {
                $query = "INSERT INTO departamento(NOMBRE_DPTO, UBICACION_DPTO)
                       VALUES('$nombreDpto','$ubicacionDpto')";
                mysqli_query($enlace,$query);
            }
        }
        mysqli_close($enlace);
    }

?>
