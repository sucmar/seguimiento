<?php session_start();

 require 'funciones.php';

    $conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');

    if (!$conexion) {
        die();
    }
    $statement = $conexion->prepare("SELECT NOMBRE_CARRERA FROM carrera");
    $statement->execute();
    $carreras = $statement->fetchAll();

$statement = $conexion->prepare("SELECT NOMBRE_DPTO FROM departamento");
$statement->execute();
$departamentos = $statement->fetchAll();

if (isset($_SESSION['usuario'])){
    require 'views/registroMaterias.view.php';
} else {
    header('Location: login.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombreMateria          = $_POST['nombreMateria'];
        $siglaMateria           = $_POST['siglaMateria'];
		$nombreDpto				= $_POST['nombreDpto'];
		$cargaHorariaMateria	= $_POST['cargaHorariaMateria'];
        $tipoMateria            = $_POST['tipoMateria'];
        $nivelMateria           = $_POST['nivelMateria'];


        $enlace = mysqli_connect("localhost", 'seg_user', 'seg_pass', "bd_seguimiento");
        if (!$enlace) {
            echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
            echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        } else {
            $consultaIdDuplicado = "SELECT ID_MATERIA FROM materia WHERE NOMBRE_MATERIA LIKE '%$nombreMateria%' OR SIGLA_MATERIA LIKE '%$siglaMateria%'"; 
            $result         = mysqli_query($enlace,$consultaIdDuplicado);
            $idDuplicado    = mysqli_fetch_object($result);
             
            if($idDuplicado != null) {
                echo " <h4 align='center' style='color:red;'>El nombre o sigla  que ingreso ya esta registrado.</h4> ";
            } else {
                if(isset($_POST['nombreCarrera'])) {
                    $statement = $conexion->prepare("SELECT ID_DPTO FROM departamento WHERE NOMBRE_DPTO LIKE '%$nombreDpto%'");
                    $statement->execute();
                    $departamento = $statement->fetch();

                    $idCarreraPost =
                $nombreCarrera     = $_POST['nombreCarrera'];
                $consultaIdMateria = "SELECT ID_CARRERA FROM carrera WHERE NOMBRE_CARRERA LIKE '%$nombreCarrera%'"; 
                
                $result             = mysqli_query($enlace,$consultaIdMateria);
                $idMateria         = mysqli_fetch_assoc($result);
                $id                 = $departamento["ID_DPTO"];
                $query = "INSERT INTO materia(ID_MATERIA,ID_CARRERA,NOMBRE_MATERIA, SIGLA_MATERIA, CARGA_HORARIA_MATERIA, TIPO_MATERIA,NIVEL_MATERIA)
                       VALUES(null,'$id','$nombreMateria','$siglaMateria','$cargaHorariaMateria','$tipoMateria','$nivelMateria')";
                mysqli_query($enlace,$query);
            }
            mysqli_close($enlace);
            
            }

}}
?>
