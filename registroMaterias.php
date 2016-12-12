<?php session_start();

if (isset($_SESSION['usuario'])){
    require 'views/registroMaterias.view.php';
} else {
    header('Location: login.php');
}


if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nombreMateria      = $_POST['nombreMateria'];
        $siglaMateria       = $_POST['siglaMateria'];
        $tipoMateria        = $_POST['tipoMateria'];
        $nivelMateria       =$_POST['nivelMateria'];

        $enlace = mysqli_connect("localhost", "root", "", "bd_seguimiento");

        if (!$enlace) {
            echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
            echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        } else {
            $query = "INSERT INTO materia(NOMBRE_MATERIA,SIGLA_MATERIA,TIPO_MATERIA,NIVEL_MATERIA)
                       VALUES('$nombreMateria','$siglaMateria','$tipoMateria','$nivelMateria')";
            mysqli_query($enlace,$query);
        }
        mysqli_close($enlace);
    }


?>