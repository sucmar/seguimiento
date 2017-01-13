<?php
include ('funciones.php');

extract($_POST);
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=bd_seguimiento','seg_user', 'seg_pass');
    }catch(PDOExeption $e){
        echo "Error: " . $e->getMessage();
    }

    $archivo = $_FILES['file']['tmp_name'];

    $row = 0;
    $fp = fopen ($archivo,"r");
    while ($data = fgetcsv ($fp, 1000, ","))
    {
        $num = count ($data);
        print " <br>";
        $row++;
        $statement = $conexion->prepare("INSERT INTO docente (CI_DOCENTE,NOMBRE_DOC,APELLPATERNO_DOC,APELLMATERNO_DOC,
                                                              TELEFONO_DOC,CELULAR_DOC,NACIMIENTO_DOC,CIEXPEDIDO_DOC,
                                                              DIRECCION_DOC,DEDICACION_DOC,CORREO_DOC,PROFESION_DOC,
                                                              GENERO_DOC,ACTIVIDAD,DIPLOMA_ACAD)
                                            VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]',
                                                    '$data[6]','$data[7]','$data[8]','$data[9]','$data[10]',
                                                    '$data[11]','$data[12]','$data[13]','$data[14]')");
        $statement->execute();
    }
    fclose ($fp);
    header("Location: registroDocente.php");
