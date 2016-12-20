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
        $titulo          = $_POST['profesion'];
        $ci              = $_POST['ci'];
        $expedido        = $_POST['departamento'];
        $fechaNacimiento = $_POST['fecNacimiento'];
        $sexo            = $_POST['sexo'];
        $telFijo         = $_POST['telf'];
        $celular         = $_POST['cel'];
        $direcDomicilio  = $_POST['direccion'];
        $correoElectronico=$_POST['correo'];
        $cargo            =$_POST['dedicacion'];

        $enlace = mysqli_connect("localhost", "root", "", "bd_seguimiento");

        if (!$enlace) {
            echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
            echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        } else {
            $query = "INSERT INTO docente(CI_DOCENTE,NOMBRE_DOC,APELLPATERNO_DOC,APELLMATERNO_DOC,
                                          TELEFONO_DOC,CELULAR_DOC,NACIMIENTO_DOC,CIEXPEDIDO_DOC,DIRECCION_DOC,DEDICACION_DOC,
                                            CORREO_DOC,PROFESION_DOC,GENERO_DOC)
                       VALUES('$ci','$nombres','$apellidoPaterno','$apellidoMaterno','$telFijo','$celular',
                                '$fechaNacimiento','$expedido','$direcDomicilio','$cargo','$correoElectronico','$titulo','$sexo')";
            mysqli_query($enlace,$query);
        }
        mysqli_close($enlace);
    }
?>