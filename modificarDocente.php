<?php

require 'funciones.php';

/*session_start();

if (isset($_SESSION['usuario'])){
    require 'views/modificarDocente.view.php';
} else {
    header('Location: login.php');
}*/
$conexion = conexion('bd_seguimiento','root','');
if (!$conexion) {
    die();
}

$id = $_REQUEST['id'];
//echo $id;
try{
    $statement = $conexion->prepare("SELECT * FROM docente WHERE ID_DOCENTE = '$id'");
    $statement->execute();
    $docentes = $statement->fetch(PDO::FETCH_ASSOC); // capturar datos cada columna de una consulta dada

}catch(PDOException $e) {
    echo $e->getMessage();
}
$conexion = null;


/*$ciDocente = $docentes['CI_DOCENTE'];
$nombre = $docentes['NOMBRE_DOC'];
$apellP = $docentes['APELLPATERNO_DOC'];
$apellM = $docentes['APELLMATERNO_DOC'];
$tel = $docentes['TELEFONO_DOC'];
$cel = $docentes['CELULAR_DOC'];
$nacimiento = $docentes['NACIMIENTO_DOC'];
$ciExpedido = $docentes['CIEXPEDIDO_DOC'];
$direccion = $docentes['DIRECCION_DOC'];
$dedicacion = $docentes['DEDICACION_DOC'];
$correo = $docentes['CORREO_DOC'];
$profecion = $docentes['PROFECION_DOC'];
$user = $docentes['USER_DOC'];
$contrasenia = $docentes['CONTRASENIA_DOC'];
$genero = $docentes['GENERO_DOC'];*/



require 'views/modificarDocente.view.php';



/*
[ID_DOCENTE] => 4
            [0] => 4
            [CI_DOCENTE] => 8714114
            [1] => 8714114
            [NOMBRE_DOC] => manuel
            [2] => manuel
            [APELLPATERNO_DOC] => rojas
            [3] => rojas
            [APELLMATERNO_DOC] => prado
            [4] => prado
            [TELEFONO_DOC] => 4871624
            [5] => 4871624
            [CELULAR_DOC] => 67223369
            [6] => 67223369
            [NACIMIENTO_DOC] => 12/20/1990
            [7] => 12/20/1990
            [CIEXPEDIDO_DOC] => pts
            [8] => pts
            [DIRECCION_DOC] => quillacollo
            [9] => quillacollo
            [DEDICACION_DOC] => Parcial
            [10] => Parcial
            [CORREO_DOC] => docente@gmail.com
            [11] => docente@gmail.com
            [PROFECION_DOC] => lic. informatica
            [12] => lic. informatica
            [USER_DOC] =>
            [13] =>
            [CONTRASENIA_DOC] =>
            [14] =>
            [GENERO_DOC] => M
            [15] => M
 */