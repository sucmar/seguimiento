<?php session_start();

	if (isset($_SESSION['usuario'])){
		require 'views/registroSecretaria.view.php';
	} else {
		header('Location: espacioSecretaria.php');
	}

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$nombres         = $_POST['nombre']; 
		$apellidoPaterno = $_POST['apePaterno'];
		$apellidoMaterno = $_POST['apeMaterno'];
		$sexo              = $_POST['sexo'];
		$carrera        = $_POST['carrera'];
		$cuenta = $_POST['cuenta'];
		$pass1            = $_POST['password1'];
		$pass2         = $_POST['password2'];

		echo "$nombres - $apellidoPaterno - $apellidoMaterno - $pass1 - $pass2";
		$errores = '';

		if(empty($nombres) or empty($apellidoPaterno) or empty($sexo) or empty($cuenta) or empty($pass1) or empty($pass2) or empty($carrera)){
			$errores .= '<li>por favor rellene los campos obligatorios</li>';

			echo $errores;
		} else {
			try {
				$conexion = new PDO('mysql:host=localhost;dbname=seg','root','');
			}catch(PDOExeption $e){
				echo "Error: " . $e->getMessage();
			}
		}

		if ($errores == ''){
			$statement = $conexion->prepare('INSERT INTO usuario (ID_USUARIO,ID_CARRERA,NOMBRE_USUARIO,APELLPA_USUARIO,APELLMA_USUARIO,ESTADO_USUARIO,GENERO_USUARIO,CUENTA,CONTRASENIA,ROL_USUARIO) 
			VALUES (null, :carrera, :nombres, :apellPa, :apellMat, null, :sexo, :cuenta, :contrasenia, null)');
			$statement->execute(array(
				':carrera'=>$carrera, 
				':nombres'=>$nombres, 
				':apellPa'=>$apellidoPaterno, 
				':apellMat'=>$apellidoMaterno , 
				':sexo'=>$sexo, 
				':cuenta'=>$cuenta, 
				':contrasenia'=>$pass1
			));
			echo 'datos insertados corectamente';
		}
	}
?>