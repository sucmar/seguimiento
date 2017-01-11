<?php
include ('funciones.php');

extract($_POST);
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=seg','seg_user', 'seg_pass');
    }catch(PDOExeption $e){
        echo "Error: " . $e->getMessage();
    }

    $archivo = $_FILES['file']['tmp_name'];

    $row = 0;
    $fp = fopen ($archivo,"r");
    while ($data = fgetcsv ($fp, 1000, ","))
    {
        print_r($data);
        $num = count ($data);
        print " <br>";
        $row++;
        $statement = $conexion->prepare("INSERT INTO docente (CI_DOC,NOMBRE_DOC,APELLPA_DOC,APELLMA_DOC,
                                                              FECHA_NACIMIENTO_DOC,TELEFONO_DOC,CELULAR_DOC,
                                                              EXTENSION_CI_DOC,CORREO_DOC,GENERO_DOC,DIRECCION_DOC,
                                                              TIEMPO_DEDICACION_DOC,CARGO_DOC,PROFESION_DOC)
                                            VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]',
                                                    '$data[6]','$data[7]','$data[8]','$data[9]','$data[10]',
                                                    '$data[11]','$data[12]','$data[13]')");
        $statement->execute();
    }
    fclose ($fp);
    echo "Campos Insertados ".$row;
