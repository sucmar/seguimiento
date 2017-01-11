
<?php  session_start();

require 'funciones.php';


$idAula =  $_REQUEST['id'];
 

$conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');

if (!$conexion) {
    die();
}else
{

    $statement = $conexion->prepare("DELETE FROM aula WHERE ID_AULA = '$idAula'");
    $statement->execute();
    $aulas = $statement->fetchAll();
	
	header('Location: registrarAula.php');
    

}
$conexion =null;


