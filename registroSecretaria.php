<?php session_start();
	require 'funciones.php';
    $conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');

    if (!$conexion) {
        die();
    }
	//lista de carreras
	
	$statement = $conexion->prepare("SELECT * FROM carrera");
    $statement->execute();
    $carreras = $statement->fetchAll();



	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$nombres         = $_POST['nombre']; 
		$apellidoPaterno = $_POST['apePat'];
		$apellidoMaterno = $_POST['apeMat'];
		$estado 		="activo";
		$sexo            = $_POST['sexo'];
		$carrera         = $_POST['carrera'];
		$cuenta          = filter_var(strtolower($_POST['cuenta']), FILTER_SANITIZE_STRING);
		$pass1           = $_POST['pass1'];
		$pass2           = $_POST['pass2'];
        $pass1         = hash('sha512', $pass1);
        $pass2         = hash('sha512', $pass2);

		
		$errores = '';
		function console_log( $data ){
			echo '<script>';
			echo 'console.log('. json_encode( $data ) .')';
			echo '</script>';
		};
		//console_log($carre);
		if(empty($nombres) or empty($apellidoPaterno) or empty($sexo) or empty($cuenta) or empty($pass1) or empty($pass2) ){
			$errores .= '<li>por favor rellene los campos obligatorios</li>';

			//echo $errores;
		} else {
			try {
				///$conexion = new PDO('mysql:host=localhost;dbname=bd_seguimiento','seg_user', 'seg_pass');
			}catch(PDOExeption $e){
				echo "Error: " . $e->getMessage();
			}

			$statement = $conexion->prepare('SELECT * FROM usuario WHERE CUENTA = :usuario LIMIT 1');
            $statement->execute(array(':usuario' => $cuenta));

            $resultado= $statement->fetch();
            print_r($resultado);

            if($resultado != false){
                $errores .= '<li>el nombre de usuario ya existe</li>';
                echo " <h4 align='center' style='color:red;'>el nombre de usario ya existe</h4> ";
            }
		}

		if ($errores == ''){
			
			//echo "$nombres - $apellidoPaterno - $apellidoMaterno -$estado -$sexo - $cuenta - $pass1 - $pass2";
			$statement2 = $conexion->prepare("INSERT INTO usuario(ID_CARRERA,NOMBRE_USUARIO,APELLPA_USUARIO,
                                            APELLMA_USUARIO,ESTADO_USUARIO,GENERO_USUARIO,CUENTA,CONTRASENIA)
                               VALUES('$carrera','$nombres','$apellidoPaterno','$apellidoMaterno','$estado','$sexo','$cuenta','$pass1')");
			$statement2->execute();
            $usuarios = $statement2->fetchAll();

             
                    
			 echo " <h4 align='center' style='color:red;'>datos insertados corectamente</h4> ";
			 header('Location: espacioSecretaria.php');
			//echo 'datos insertados corectamente';
		}
	}





if ($_SESSION['usuario'] == 'administrador'){
	    //print_r($_SESSION['privilegio']);
		require 'views/registroSecretaria.view.php';
	} else {
        header('Location: espacioSecretaria.php');
	}
