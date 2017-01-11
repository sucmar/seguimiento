<?php

session_start();

	if (isset($_SESSION['usuario'])){
		require 'views/registroAuxiliar.view.php';
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
        $carrera          =$_POST['carrera'];


        echo "$nombres - $apellidoPaterno - $apellidoMaterno - $sexo";
        $errores = '';

        if(empty($nombres) or empty($apellidoPaterno) or empty($ci) or empty($fechaNacimiento)   or empty($celular) or empty($direcDomicilio)){
            $errores .= '<li>por favor rellene los campos obligatorios</li>';

            echo $errores;
        } else {
            try {
                $conexion = new PDO('mysql:host=localhost;dbname=bd_seguimiento','seg_user', 'seg_pass');
            }catch(PDOExeption $e){
                echo "Error: " . $e->getMessage();
            }
        }

        if ($errores == ''){
            $statement = $conexion->prepare('INSERT INTO auxiliar (ID_AUX,CI_AUX,NOMBRE_AUX,APELLPA_AUX,APELLMA_AUX,
                                                                    FECHA_NACIMIENTO_AUX,TELEFONO_AUX,CELULAR_AUX,
                                                                    EXTENSION_CI_AUX,CORREO_AUX,GENERO_AUX,DIRECCION_AUX,
                                                                    CARRERA_AUX) 
                                              VALUES (null, :ci, :nombres, :apellPa, :apellMat, :fechaNacimineto, 
                                                            :telefono, :celular, :extensionCi, :correo, :genero, 
                                                            :direccion, :carrera)');

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
                ':carrera'=>$carrera,
            ));
            echo 'datos insertados corectamente';
            //header('Location: espacioSecretaria.php');
        }
    }
	