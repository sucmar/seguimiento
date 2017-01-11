
<?php  session_start();

require 'funciones.php';


$idDia =  	$_REQUEST['id'];
$idGrupo= 	$_REQUEST['grupo'];

$conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');

if (!$conexion) {
    die();
}else
{

    $statement = $conexion->prepare("DELETE FROM dia WHERE ID_DIA = '$idDia'");
    $statement->execute();
    $dias = $statement->fetchAll();
	
	header('Location: listaDocentesAsignacion.php');
    

}
$conexion =null;