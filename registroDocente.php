<?php session_start();

	if (isset($_SESSION['usuario'])){
		require 'views/registroDocente.view.php';
	} else {
		header('Location: login.php');
	}

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$nombres         = $_POST['nombre']; 
		$apellidoPaterno = $_POST['apePaterno'];
		$apellidoMaterno = $_POST['apeMaterno'];
		$ci              = $_POST['ci'];
		$expedido        = $_POST['departamento'];
		$fechaNacimiento = $_POST['fecNacimiento'];
		$sexo            = $_POST['sexo'];
		$telFijo         = $_POST['telf'];
		$celular         = $_POST['cel'];
		$direcDomicilio  = $_POST['direccion'];
		$correoElectronico=$_POST['correo'];
		$profesion       =$_POST['profesion'];
		$cargo           =$_POST['cargo'];
		$dedicacion       =$_POST['dedicacion'];

		echo "$nombres - $apellidoPaterno - $apellidoMaterno - $sexo - $dedicacion";
		$errores = '';

		if(empty($nombres) or empty($apellidoPaterno) or empty($ci) or empty($fechaNacimiento) or empty($celular) or empty($direcDomicilio) or empty($correoElectronico) or empty($profesion)){
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
			$statement = $conexion->prepare('INSERT INTO DOCENTE (ID_DOC,CI_DOC,NOMBRE_DOC,APELLPA_DOC,APELLMA_DOC,FECHA_NACIMIENTO_DOC,TELEFONO_DOC,CELULAR_DOC,EXTENSION_CI_DOC,CORREO_DOC,GENERO_DOC,DIRECCION_DOC,TIEMPO_DEDICACION_DOC,CARGO_DOC,PROFESION_DOC) VALUES (null, :ci, :nombres, :apellPa, :apellMat, :fechaNacimineto, :telefono, :celular, :extensionCi, :correo, :genero, :direccion, :tiempoDedicacion, :cargo, :profesion)');

			$statement->execute(array(
				':ci'=>$ci, 
				':nombres'=>$nombres, 
				':apellPa'=>$apellidoPaterno, 
				':apellMat'=>$apellidoMaterno , 
				':fechaNacimineto'=>$fechaNacimiento, 
				':telefono'=>$telFijo, 
				':celular'=>$celular, 
				':extensionCi'=>$expedido, 
				':correo'=>$correoElectronico, 
				':genero'=>$sexo , 
				':direccion'=>$direcDomicilio, 
				':tiempoDedicacion'=>$dedicacion, 
				':cargo'=>$cargo, 
				':profesion'=>$profesion 
			));
			echo 'datos insertados corectamente';
			//header('Location: espacioSecretaria.php');
		}
	}
?>