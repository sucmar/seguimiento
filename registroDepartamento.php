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
				
				if(isset($_POST['nombreFacultad'])) {
                    console_log('hola');
                    console_log($_POST['nombreFacultad']);
                    console_log('none');
                $nombreFacultad     = $_POST['nombreFacultad'];
                $consultaIdFacultad = "SELECT ID_FACULTAD FROM facultad WHERE NOMBRE_FACULTAD LIKE '%$nombreFacultad%'"; 
                
                $result             = mysqli_query($enlace,$consultaIdFacultad);
                $idFacultad         = mysqli_fetch_assoc($result);
                $id                 = $idFacultad['ID_FACULTAD'];
                $query              = "INSERT INTO departamento(ID_DPTO,ID_FACULTAD,NOMBRE_DPTO, UBICACION_DPTO)
                            VALUES(null,'$id','$nombreDpto','$ubicacionDpto')";
                
                mysqli_query($enlace,$query);
				
                }
				
				
				
			}
				
				
				
                
        }
        mysqli_close($enlace);
    }

?>
