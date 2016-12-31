<?php  session_start();
    
	require 'funciones.php';

    $conexion = conexion('bd_seguimiento','root','');
    $idGrupo=  $_REQUEST['id'];
    if (!$conexion) {
        die();
    }
        $sql = $conexion->prepare("SELECT ID_MATERIA FROM GRUPO WHERE ID_GRUPO=$idGrupo");
        $sql->execute();
        $id_mat = $sql->fetch();
        $id=$id_mat['ID_MATERIA'];

        $statement4 = $conexion->prepare("SELECT NOMBRE_MATERIA FROM materia WHERE ID_MATERIA=$id");
        $statement4->execute();
        $materia = $statement4->fetch();


        $statement = $conexion->prepare("SELECT ID_HORARIO,INICIO_HORARIO FROM horario");
        $statement->execute();
        $inicioHoras = $statement->fetchAll();

        $statement2 = $conexion->prepare("SELECT ID_HORARIO,FIN_HORARIO FROM horario");
        $statement2->execute();
        $finHoras = $statement2->fetchAll();

        $statement3 = $conexion->prepare("SELECT ID_AULA,   NOMBRE_AULA FROM aula");
        $statement3->execute();
        $aulas = $statement3->fetchAll();

        
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            
            $diaS       =$_POST['dia'];
            $hrIni  =$_POST['hrini'];
            $hrFin  =$_POST['hrfin'];
            $aula    =$_POST['aula'];
            $enlace = mysqli_connect("localhost", "root", "", "bd_seguimiento");
            if (!$enlace) 
            {
                echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
                echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
                echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
            } 
            else
            {   
                

                $sql2 = "SELECT * FROM dia WHERE ID_GRUPO=$idGrupo AND ID_HORARIO=$hrIni AND ID_AULA=$aula AND NOM_DIA=$diaS";

                $consulta2  = mysqli_query($enlace,$sql2);
                $contador   = mysqli_num_rows($consulta2);
                
                $sql3 = "SELECT COUNT(ID_GRUPO) FROM dia WHERE ID_GRUPO=$idGrupo ";

                $consulta3  = mysqli_query($enlace,$sql3);
                $contador2   = mysqli_num_rows($consulta3);

                echo "repetido ";
                echo $contador;
                echo "clases ";
                echo $contador2;
                if ($contador==1)
                {   
                    echo " <h4 align='center' style='color:red;'>Este horario ya fue registrado.</h4> ";
                    
                }else
                {

                    $query = "INSERT INTO dia(ID_AULA,ID_HORARIO,ID_GRUPO,NOM_DIA)
                               VALUES('$aula','$hrIni','$idGrupo','$diaS')";
                    mysqli_query($enlace,$query);
                     echo "registro corecto";
                }                   
            }
            
        }
            
            //LISTA DE HORARIOS 
           
             $statement6 = $conexion->prepare("SELECT DISTINCT  horario.INICIO_HORARIO, horario.FIN_HORARIO FROM dia,horario WHERE  ID_GRUPO=$idGrupo AND horario.ID_HORARIO=dia.ID_HORARIO ORDER BY horario.INICIO_HORARIO ASC");
            $statement6->execute();
            $horaInicial = $statement6->fetchAll();

            $statement7=$conexion->prepare("SELECT horario.INICIO_HORARIO,dia.NOM_DIA,dia.ID_DIA FROM dia INNER JOIN horario ON dia.ID_HORARIO=horario.ID_HORARIO WHERE dia.ID_GRUPO=$idGrupo ORDER by  horario.INICIO_HORARIO ASC,dia.NOM_DIA ASC ");
            $statement7->execute();
            $horasGrupo=$statement7->fetchAll();

	
        require 'views/horarioMateria.view.php';
?>