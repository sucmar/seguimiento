<?php
	//header('Content-type: text/html; charset=utf-8');
	require 'funciones.php';
	
	function console_log( $data ){
			echo '<script>';
			echo 'console.log('. json_encode( $data ) .')';
			echo '</script>';
		};

    $conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');
    if (!$conexion) {
        die();
    }
    $statement = $conexion->prepare("SELECT SIGLA_MATERIA,NOMBRE_MATERIA FROM materia ");
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

	$statementgrupo = $conexion->prepare("SELECT ID_GRUPO, NOM_GRUPO FROM grupo WHERE ID_MATERIA = $idMateria ORDER BY NOM_GRUPO ASC");
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
		$statementgrupo = $conexion->prepare("SELECT ID_GRUPO, NOM_GRUPO FROM grupo WHERE ID_MATERIA = $idMateria1 ORDER BY NOM_GRUPO");
		$statementgrupo->execute();
	    $grupos = $statementgrupo->fetchAll();
	}

	if(isset($_COOKIE['idGrupo']) && $_COOKIE['idGrupo'] != ""  && isset($_COOKIE['connected'])) {

	$idMateria1 = $_COOKIE['idMateria'];
	global $nombreMateria;
	$nombreMateria = $_COOKIE['nomMateria'];
	$statementgrupo = $conexion->prepare("SELECT ID_GRUPO, NOM_GRUPO FROM grupo WHERE ID_MATERIA = $idMateria1");
	$statementgrupo->execute();
    $grupos = $statementgrupo->fetchAll();
		
		
	}
	/*
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
	*/
	
	if(isset($_POST['salir'])) {
		 header('Location: espacioSecretaria.php');
	}
    require 'views/registroGrupos.view.php';

?>	