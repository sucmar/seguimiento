<?php session_start();
    require 'views/cargos.view.php';
    require 'funciones.php';
    if ($_SESSION['usuario']){
        //print_r($_SESSION['privilegio']);
        $conexion = conexion('bd_seguimiento', 'seg_user', 'seg_pass');
        if (!$conexion) {
            die();
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nomRol         = $_POST['nomRol'];
            $descripcion    = $_POST['descrip'];
            $nombreTarea    = $_POST['nomTar'];
            $tipoRol        =$_POST['tipoRol'];

            $statement = $conexion->prepare('INSERT INTO rol ( ID_ROL, NOMBRE_ROL, DESCRIPCION_ROL, TIPO_ROL, NOMBRE_TAREA) 
                                          VALUES (
                                              null, :nombreRol,:descripcion, :tipoRol,:nombreTarea
                                          )');
            $statement->execute(array(
                ':nombreRol'=>$nomRol,
                ':descripcion'=>$descripcion,
                ':tipoRol'=>$tipoRol,
                ':nombreTarea'=>$nombreTarea
            ));
            $conexion->closeCursor();

        }
        $statement = $conexion->prepare("SELECT NOMBRE_ROL, DESCRIPCION_ROL FROM rol ");
        $statement->execute();
        $roles = $statement->fetchAll();

    } else {
        header('Location: index.php');
    }

?>	