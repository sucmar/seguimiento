
<?php  session_start();

require 'funciones.php';


$idDia =  $_REQUEST['id'];
 

$conexion = conexion('bd_seguimiento','root','');

if (!$conexion) {
    die();
}else
{

    $statement = $conexion->prepare("DELETE FROM dia WHERE ID_DIA = '$idDia'");
    $statement->execute();
    $dias = $statement->fetchAll();
	
	header('Location: materiaDocente.php');
    

}
$conexion =null;