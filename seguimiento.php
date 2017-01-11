<?php session_start();
require 'funciones.php';
if (isset($_SESSION['usuario'])){
    $conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');
    if (!$conexion) {
        die();
    }

} else {
    header('Location: login.php');
}

$statement = $conexion->prepare("SELECT ID_DOCENTE, NOMBRE_DOC, APELLPATERNO_DOC, APELLMATERNO_DOC, DEDICACION_DOC FROM docente ");
$statement->execute();
$docentes = $statement->fetchAll();

$statement = $conexion->prepare("SELECT NOMBRE_MATERIA, SIGLA_MATERIA FROM materia ");
$statement->execute();
$materias = $statement->fetchAll();


    $idMateria = null;
    $grupos= array();

    if(isset($_POST['sigla_post']) && $_POST['sigla_post'] != "" ){
        $siglaMateria=$_POST['sigla_post'];
        $materiaSeleccionada = $conexion->prepare("SELECT ID_MATERIA,NOMBRE_MATERIA FROM materia WHERE SIGLA_MATERIA = $siglaMateria ");
        $materiaSeleccionada->execute();
    
    $materiaEncontrada = $materiaSeleccionada->fetch();
    global $idMateria;
    global $nombreMateria;
    $idMateria = $materiaEncontrada["ID_MATERIA"];
    $nombreMateria = $materiaEncontrada["NOMBRE_MATERIA"];

    $cookie_id = 'idMateria';
    $cookie_idMateria = $idMateria;
    $cookie_nom_materia = 'nomMateria';
    $cookie_nomMateria = $nombreMateria;
    setcookie($cookie_id, $cookie_idMateria);
    setcookie($cookie_nom_materia, $cookie_nomMateria);
    setcookie('connected', false);

    $statementgrupo = $conexion->prepare("SELECT ID_GRUPO, NOM_GRUPO FROM grupo WHERE ID_MATERIA = $idMateria ");
    $statementgrupo->execute();
    $grupos = $statementgrupo->fetchAll();

    }

    if(isset($_POST['insert']) && isset($_COOKIE['idMateria']) && isset($_COOKIE['nomMateria'])) {
        $idMateria1 = $_COOKIE['idMateria'];
        $nom_grupo = $_POST['nom_grupo'];
        $insert_query = 'INSERT INTO grupo (ID_GRUPO, ID_MATERIA, NOM_GRUPO) VALUES (NULL, :ID_MATERIA, :NOM_GRUPO)';
        $statements = $conexion->prepare($insert_query);
        $statements->execute(array(
            ':ID_MATERIA'=>$idMateria1,
            ':NOM_GRUPO'=>$nom_grupo
        ));
        global $nombreMateria;
    $nombreMateria = $_COOKIE['nomMateria'];
    $statementgrupo = $conexion->prepare("SELECT ID_GRUPO, NOM_GRUPO FROM grupo WHERE ID_MATERIA = $idMateria1 ");
    $statementgrupo->execute();
    $grupos = $statementgrupo->fetchAll();
    }

    if(isset($_COOKIE['idGrupo']) && $_COOKIE['idGrupo'] != ""  && isset($_COOKIE['connected'])) {

    $idMateria1 = $_COOKIE['idMateria'];
    global $nombreMateria;
    $nombreMateria = $_COOKIE['nomMateria'];
    $statementgrupo = $conexion->prepare("SELECT ID_GRUPO, NOM_GRUPO FROM grupo WHERE ID_MATERIA = $idMateria1 ");
    $statementgrupo->execute();
    $grupos = $statementgrupo->fetchAll();
    }

    if(isset($_POST['delete']) && isset($_COOKIE['idGrupo'])) {
        $idGrupo = $_COOKIE['idGrupo'];
        $sql = "DELETE FROM grupo WHERE ID_GRUPO= $idGrupo";
        $statements = $conexion->prepare($sql);
        $statements->execute();
            $idMateria1 = $_COOKIE['idMateria'];
    global $nombreMateria;
    $nombreMateria = $_COOKIE['nomMateria'];
    $statementgrupo = $conexion->prepare("SELECT ID_GRUPO, NOM_GRUPO FROM grupo WHERE ID_MATERIA = $idMateria1 ");
    $statementgrupo->execute();
    $grupos = $statementgrupo->fetchAll();
    }

    if(isset($_POST['modify']) && isset($_COOKIE['idGrupo']) && isset($_POST['nom_grupo'])) {
        $idGrupo = $_COOKIE['idGrupo'];
        $nom_grupo = $_POST['nom_grupo'];
        $sql = "UPDATE grupo SET NOM_GRUPO = $nom_grupo WHERE ID_GRUPO = $idGrupo";
        $statements = $conexion->prepare($sql);
        $statements->execute();

            $idMateria1 = $_COOKIE['idMateria'];
    global $nombreMateria;
    $nombreMateria = $_COOKIE['nomMateria'];
    $statementgrupo = $conexion->prepare("SELECT ID_GRUPO, NOM_GRUPO FROM grupo WHERE ID_MATERIA = $idMateria1 ");
    $statementgrupo->execute();
    $grupos = $statementgrupo->fetchAll();
    }
    if(isset($_POST['salir'])) {
         header('Location: espacioSecretaria.php');
    }

require 'views/seguimiento.view.php';