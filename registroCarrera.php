<?php session_start();
    function console_log( $data ){
            echo '<script>';
            echo 'console.log('. json_encode( $data ) .')';
            echo '</script>';
        };
   require 'funciones.php';

    $conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');

    if (!$conexion) {
        die();
    }
    $statement = $conexion->prepare("SELECT NOMBRE_FACULTAD FROM facultad");
    $statement->execute();
    $facultades = $statement->fetchAll();

    $statement = $conexion->prepare("SELECT NOMBRE_DPTO FROM departamento");
    $statement->execute();
    $dptos = $statement->fetchAll();


if (isset($_SESSION['usuario'])){
    require 'views/registroCarrera.view.php';
} else {
    header('Location: login.php');
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombreCarrera          = strtoupper($_POST['nombreCarrera']);
        $siglaCarrera           = $_POST['siglaCarrera'];
        $dptoCarrera            = $_POST['dptoCarrera'];

        $enlace = mysqli_connect('localhost','seg_user', 'seg_pass','bd_seguimiento');
        if (!$enlace) {
            echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
            echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        } else {
            $consultaIdDuplicado = "SELECT ID_CARRERA FROM carrera WHERE NOMBRE_CARRERA LIKE '%$nombreCarrera%' OR SIGLA_CARRERA LIKE '%$siglaCarrera%'"; 
            $result         = mysqli_query($enlace,$consultaIdDuplicado);
            $idDuplicado    = mysqli_fetch_object($result);
             
            if($idDuplicado != null) {
                echo " <h4 align='center' style='color:red;'>El nombre o sigla  que ingreso ya esta registrado.</h4> ";
            } else {
                if(isset($_POST['nombreFacultad'])) {
                    console_log('hola');
                    console_log($_POST['nombreFacultad']);
                    console_log('none');
                $nombreFacultad     = $_POST['nombreFacultad'];
                $consultaIdFacultad = "SELECT ID_FACULTAD FROM facultad WHERE NOMBRE_FACULTAD LIKE '%$nombreFacultad%'"; 
                
                $result             = mysqli_query($enlace,$consultaIdFacultad);
                $idFacultad         = mysqli_fetch_assoc($result);
                $id                 = $idFacultad['ID_FACULTAD'];
                $query              = "INSERT INTO carrera(ID_CARRERA,ID_FACULTAD,NOMBRE_CARRERA, SIGLA_CARRERA,                      DPTO_CARRERA)
                            VALUES(null,'$id','$nombreCarrera','$siglaCarrera','$dptoCarrera')";
                
                mysqli_query($enlace,$query);
                }
            }
        }
        mysqli_close($enlace);
    }
?>
