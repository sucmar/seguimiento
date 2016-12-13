<?php
	require 'funciones.php';
	function console_log( $data ){
			echo '<script>';
			echo 'console.log('. json_encode( $data ) .')';
			echo '</script>';
		};

    $conexion = conexion('bd_seguimiento','root','');

    if (!$conexion) {
        die();
    }
	function getPosts() {
		$posts = array();
		$posts[0] = $_POST['ID_GRUPO'];
		$posts[1] = $_POST[''];
		return $posts;
	}
    $statement = $conexion->prepare("SELECT SIGLA_MATERIA,NOMBRE_MATERIA FROM MATERIA ");
    $statement->execute();
    $materias = $statement->fetchAll();
	$siglaMateria;
	$idMateria = null;
	$nombreMateria;
	$grupos= array();
	$isSelected;
	if(isset($_POST['sigla_post']) && $_POST['sigla_post'] != "" ){
		console_log($_POST['sigla_post']);
		$siglaMateria=$_POST['sigla_post'];
		$materiaSeleccionada = $conexion->prepare("SELECT ID_MATERIA,NOMBRE_MATERIA FROM MATERIA WHERE SIGLA_MATERIA = $siglaMateria ");
	$materiaSeleccionada->execute();
	
    $materiaEncontrada = $materiaSeleccionada->fetch();
	console_log("SIGLA");
	global $idMateria;
	global $nombreMateria;
	$idMateria = $materiaEncontrada["ID_MATERIA"];
	$nombreMateria = $materiaEncontrada["NOMBRE_MATERIA"];
	console_log($idMateria);
	console_log($nombreMateria);
	
	$cookie_id = 'idMateria';
	$cookie_idMateria = $idMateria;
	$cookie_nom_materia = 'nomMateria';
	$cookie_nomMateria = $nombreMateria;

	setcookie($cookie_id, $cookie_idMateria);
	setcookie($cookie_nom_materia, $cookie_nomMateria);

	$statementgrupo = $conexion->prepare("SELECT NOM_GRUPO FROM GRUPO WHERE ID_MATERIA = $idMateria ");
	$statementgrupo->execute();
    $grupos = $statementgrupo->fetchAll();
	console_log($grupos);
	}

	if(isset($_POST['insert']) && isset($_COOKIE['idMateria']) && isset($_COOKIE['nomMateria'])) {
		console_log("grupo");
		$idMateria1 = $_COOKIE['idMateria'];
		$nom_grupo = $_POST['nom_grupo'];
		$insert_query = 'INSERT INTO GRUPO (ID_GRUPO, ID_MATERIA, NOM_GRUPO) VALUES (NULL, :ID_MATERIA, :NOM_GRUPO)';
	    $statements = $conexion->prepare($insert_query);
        $statements->execute(array(
            ':ID_MATERIA'=>$idMateria1,
            ':NOM_GRUPO'=>$nom_grupo
        ));
		global $nombreMateria;
	$nombreMateria = $_COOKIE['nomMateria'];
	$statementgrupo = $conexion->prepare("SELECT NOM_GRUPO FROM GRUPO WHERE ID_MATERIA = $idMateria1 ");
	$statementgrupo->execute();
    $grupos = $statementgrupo->fetchAll();
	}

	
	
    require 'views/registroGrupos.view.php';

?>	