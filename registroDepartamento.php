<?php session_start();
    function console_log( $data ){
            echo '<script>';
            echo 'console.log('. json_encode( $data ) .')';
            echo '</script>';
        };
   require 'funciones.php';

$conexion = conexion('bd_seguimiento','root','');

    if (!$conexion) {
        die();
    }
    $statement = $conexion->prepare("SELECT NOMBRE_CARRERA FROM carrera");
    $statement->execute();
    $carreras = $statement->fetchAll();

if (isset($_SESSION['usuario'])){
    require 'views/registroDepartamento.view.php';
} else {
    header('Location: login.php');
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombreCarrera          = $_POST['nombreCarrera'];
        $enlace = mysqli_connect("localhost", "root", "", "bd_seguimiento");
        if (!$enlace) {
            echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
            echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        } else {
            $consultaIdDuplicado = "SELECT ID_CARRERA FROM carrera WHERE NOMBRE_CARRERA LIKE '%$nombreCarrera%'"; 
            $result         = mysqli_query($enlace,$consultaIdDuplicado);
            $idDuplicado    = mysqli_fetch_assoc($result);
             
             if(isset($_POST['guardar'])) {
                 if($idDuplicado != null) {
                    console_log('CARRERA');
                $id                 = $idDuplicado['ID_CARRERA'];

                $nombreDpto = $_POST['nombreDpto'];
                console_log($id);
                console_log($nombreDpto);
                $query              = "INSERT INTO departamento(ID_DPTO,ID_CARRERA,NOMBRE_DPTO)
                            VALUES(null,'$id','$nombreDpto')";
                console_log($query);
                mysqli_query($enlace,$query);
        mysqli_close($enlace);
                    
            } else {
                  echo "No lo se....";          
            }
             }
            
        }
    }
?>
