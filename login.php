<?php session_start();
	//require 'funciones.php';	

	if (isset($_SESSION['usuario'])){
		header ('Location: espacioSecretaria.php');
	}

	$errores = '';

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
		$password = $_POST['password'];
		$password = hash('sha512', $password);

		echo "$usuario - $password";

		try {

			$conexion = new PDO('mysql:host=localhost;dbname=seg','root', '');

		} catch(PDOException $e) {
			echo "ERROR:". $e->getMessage();;

		}
		$statement = $conexion->prepare('SELECT * FROM usuario WHERE CUENTA = :usuario AND CONTRASENIA= :password');

		$statement->execute(array(
			':usuario' => $usuario,
			':password' => $password
		));

		$resultado = $statement->fetch();
		var_dump($resultado);

		if ($resultado != false){
			$_SESSION['usuario'] = $usuario;
			header ('Location: espacioSecretaria.php');
		} else {
			$errores .= '<li>datos incorrectos</li>';
		}
	}	
	require 'views/login.view.php';