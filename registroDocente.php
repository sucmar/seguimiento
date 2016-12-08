<?php session_start();

if (isset($_SESSION['usuario'])){
    require 'views/registroDocente.view.php';
} else {
    header('Location: login.php');
}

print_r($_SESSION);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombres         = $_POST['nombre'];
    $apellidoPaterno = $_POST['apePaterno'];
    $apellidoMaterno = $_POST['apeMaterno'];
    $titulo          =$_POST['profesion'];
    $ci              = $_POST['ci'];
    $expedido        = $_POST['departamento'];
    $fechaNacimiento = $_POST['fecNacimiento'];
    $sexo            = $_POST['sexo'];
    $telFijo         = $_POST['telf'];
    $celular         = $_POST['cel'];
    $direcDomicilio  = $_POST['direccion'];
    $correoElectronico=$_POST['correo'];
    $cargo            =$_POST['dedicacion'];


    $errores = '';

    print_r($_POST);

    if(empty($nombres) or empty($apellidoPaterno) or empty($ci) or empty($fechaNacimiento)
        or empty($celular) or empty($direcDomicilio) or empty($correoElectronico) or empty($titulo)){
        $errores .= '<li>por favor rellene los campos obligatorios</li>';

        echo $errores;
    } else {        
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=bd_seguimiento','root','');
        }catch(PDOExeption $e){
            echo "Error: " . $e->getMessage();
        }
    }

    if ($errores == ''){
        $statement = $conexion->prepare('INSERT INTO docente (ID_DOC,ID_ROL,CI_DOC,NOMBRE_DOC,APELLPA_DOC,APELLMA_DOC,
                                                              TITULO_DOC,FECHA_NACIMIENTO_DOC,TELEFONO_DOC,CELULAR_DOC,
                                                              EXTENSION_CI_DOC,CORREO_DOC,GENERO_DOC,DIRECCION_DOC,NICK, 
                                                              CONTRASENIA_DOC,TIPO_DOC) 
                                          VALUES (null, null,:ci, :nombres, :apellPa, :apellMat, :profesion,:fechaNacimineto, 
                                                        :telefono, :celular, :extensionCi, :correo, :genero, 
                                                        :direccion, null, null,:cargo)');

        $statement->execute(array(
            ':ci'=>$ci,
            ':nombres'=>$nombres,
            ':apellPa'=>$apellidoPaterno,
            ':apellMat'=>$apellidoMaterno ,
            ':profesion'=>$titulo,
            ':fechaNacimineto'=>$fechaNacimiento,
            ':telefono'=>$telFijo,
            ':celular'=>$celular,
            ':extensionCi'=>$expedido,
            ':correo'=>$correoElectronico,
            ':genero'=>$sexo,
            ':direccion'=>$direcDomicilio,
            ':cargo'=>$cargo
        ));
        echo 'datos insertados correctamente';
    }
}
