
<?php  session_start();
    


require 'funciones.php';
$id = $_REQUEST['id'];


$conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');
if (!$conexion) {
    die();
}

//echo $id;
try{
    $statement = $conexion->prepare("SELECT * FROM aula WHERE ID_AULA = '$id'");
    $statement->execute();
    $aulas = $statement->fetch(PDO::FETCH_ASSOC); // capturar datos cada columna de una consulta dada

}catch(PDOException $e) {
    echo $e->getMessage();
}
$conexion = null;



  if (isset($_SESSION['usuario'])){
        require 'views/modificarAula.view.php';
    } else {
        header('Location: login.php');
    }

?>
