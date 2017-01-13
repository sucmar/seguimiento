<?php session_start();
require 'funciones.php';
function console_log( $data ){
			echo '<script>';
			echo 'console.log('. json_encode( $data ) .')';
			echo '</script>';
		};
    $conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');
    $idDocente=     $_REQUEST['idDoc'];
    $idMateria=     $_REQUEST['idMateria'];
    //ide del  grupo donde esta la materia ,grupo y docente 
    $idGrupo=       $_REQUEST['grupo'];
    $idDocMateria=$_REQUEST['idDocMateria'];
    

    if (!$conexion) {
        die();
    }
    /// SACA EL ID DE LA MAMATERIA DEL hw_Document_Size(hw_document)
        /*$sql = $conexion->prepare("SELECT ID_MATERIA FROM grupos,doc_materia WHERE grupos.GRUPO=$idGrupo AND grupos.ID_DOCMATERIA=doc_materia.ID_DOCMATERIA");
        $sql->execute();
        $id_mat = $sql->fetch();
        $id=$id_mat['ID_MATERIA'];*/     

        // sacar el nombre de la materia.. de la materia q vamos a agregar el horario
        $statement4 = $conexion->prepare("SELECT NOMBRE_MATERIA FROM materia WHERE ID_MATERIA='$idMateria'");
        $statement4->execute();
        $materia = $statement4->fetch();
        //.....recupera el nombre del grupo de la materia
        $statement8 = $conexion->prepare("SELECT GRUPO FROM grupos WHERE ID_GRUP='$idGrupo'");
        $statement8->execute();
        $grupo = $statement8->fetch();
        $grupoMateria=$grupo['GRUPO'];
        // mostrar en los selects
        $statement = $conexion->prepare("SELECT ID_HORARIO,INICIO_HORARIO FROM horario");
        $statement->execute();
        $inicioHoras = $statement->fetchAll();

        $statement2 = $conexion->prepare("SELECT ID_HORARIO,FIN_HORARIO FROM horario");
        $statement2->execute();
        $finHoras = $statement2->fetchAll();

        $statement3 = $conexion->prepare("SELECT ID_AULA,   NOMBRE_AULA FROM aula");
        $statement3->execute();
        $aulas = $statement3->fetchAll();
        //-------
        
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            
            $diaS       =$_POST['dia'];
            $hrIni  =$_POST['hrini'];
            $hrFin  =$_POST['hrfin'];
            $aula    =$_POST['aula'];
            $enlace = mysqli_connect('localhost','seg_user', 'seg_pass','bd_seguimiento');
            if (!$enlace) 
            {
                echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
                echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
                echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
            } 
            else
            {   
                
                //consulta para verificar si esta ocupado este aula en este horario en es te dia
                $sql2 = "SELECT * FROM dia WHERE ID_HORARIO=$hrIni AND ID_AULA=$aula AND NOM_DIA=$diaS";

                $consulta2  = mysqli_query($enlace,$sql2);
                $contador   = mysqli_num_rows($consulta2);
                echo "TIENE :".$contador;
              

                echo "repetido ";
                echo $contador;
                echo "clases ";
                //echo $contador2;


                if ($contador==0)
                {   
                     $sql3 = "  SELECT *
                        FROM doc_materia
                        INNER JOIN grupos
                        ON doc_materia.ID_DOCMATERIA=grupos.ID_DOCMATERIA
                        INNER JOIN dia
                        ON grupos.ID_GRUP=dia.ID_GRUP
                        INNER JOIN horario
                        ON horario.ID_HORARIO=dia.ID_HORARIO
                        WHERE doc_materia.ID_DOCENTE=$idDocente 
                        AND dia.NOM_DIA=$diaS AND dia.ID_HORARIO=$hrIni";

                    $consulta3 = mysqli_query($enlace,$sql3);
                    $contador3   = mysqli_num_rows($consulta3);


                    echo "TIENE :".$contador3;
                    //consulta para sacar las horas academicas de umateria en q estas 
                    $statement9 = $conexion->prepare("SELECT materia.NOMBRE_MATERIA,grupos.GRUPO,materia.CARGA_HORARIA_MATERIA,docente.NOMBRE_DOC
                        FROM materia,grupos,doc_materia,docente
                        WHERE grupos.ID_GRUP=$idGrupo
                        AND grupos.GRUPO=$grupoMateria
                        AND grupos.ID_DOCMATERIA=doc_materia.ID_DOCMATERIA
                        AND materia.ID_MATERIA=$idMateria
                        AND materia.ID_MATERIA=doc_materia.ID_MATERIA
                        AND doc_materia.ID_DOCENTE=$idDocente
                        AND doc_materia.ID_DOCENTE=docente.ID_DOCENTE");
                      console_log($statement9);
                    $statement9->execute();
                    $cargaMateria = $statement9->fetch();

                    $horaTotal=$cargaMateria['CARGA_HORARIA_MATERIA'];
                    $filasHoraTotal=$horaTotal/8;

                    $consulta4 = "SELECT * FROM dia WHERE ID_GRUP=$idGrupo";
                    $puft  = mysqli_query($enlace,$consulta4);
                    $nroFilasHorario  = mysqli_num_rows($puft);


                     
                    if ($nroFilasHorario<$filasHoraTotal) 
                    {
                        if($contador3==0)
                        {
                            $query = "INSERT INTO dia(ID_AULA,ID_HORARIO,ID_GRUP,NOM_DIA)
                                    VALUES('$aula','$hrIni','$idGrupo','$diaS')";
                                    mysqli_query($enlace,$query);
                                     echo "registro corecto";
                                    ///---
                                    //pregunta cuantas horios tiene materia tiene 
                                     $sqlHr = "SELECT * FROM hrs_academicas,dia WHERE dia.ID_DIA=hrs_academicas.ID_DIA AND dia.ID_GRUP=$idGrupo";
                                    $conHr  = mysqli_query($enlace,$sqlHr);
                                    $conHora   = mysqli_num_rows($conHr);
                                    //extrae el ultimo id de la tabla dia
                                    $idD = $conexion->prepare("SELECT MAX(ID_DIA) AS id FROM dia");
                                    $idD->execute();
                                    $idultimo = $idD->fetch();
                                    $idUltDia=$idultimo['id'];
                                    //echo "   ------------ tiene clases--------: ".$conHora."".$idultimo['id'];
                                     //--
                                    if($conHora<2)
                                    {
                                        $hr_sem=2;
                                        $hr_teo_mes=$hr_sem*2;
                                        $hr_pra_mes=$hr_sem*2;
                                        $hr_mes=$hr_sem*4;
                                        $insertarHoras=$query = "INSERT INTO hrs_academicas(ID_DIA,HRS_SEMANA,HRS_TEORIA_MES,HRS_PRACTICA_MES,HRS_MES_MATERIA,HRS_MES_AUTORIDAD)
                                        VALUES('$idUltDia','$hr_sem','$hr_teo_mes','$hr_pra_mes','$hr_mes','0')";
                                        mysqli_query($enlace,$insertarHoras);
                                    }else
                                    {

                                        $hr_sem=2;
                                        $hr_teo_mes=$hr_sem*4;
                                        $hr_pra_mes=0;
                                        $hr_mes=$hr_sem*4;
                                        $insertarHoras=$query = "INSERT INTO hrs_academicas(ID_DIA,HRS_SEMANA,HRS_TEORIA_MES,HRS_PRACTICA_MES,HRS_MES_MATERIA,HRS_MES_AUTORIDAD)
                                        VALUES('$idUltDia','$hr_sem','$hr_teo_mes','$hr_pra_mes','$hr_mes','0')";
                                        mysqli_query($enlace,$insertarHoras);
                                        
                                    }
                        }else 
                        {
                            echo " <h4 align='center' style='color:red;'> El docente tiene clases a esta hora </h4> ";
                        }
                    }
                    else
                    {
                            
                            echo " <h4 align='center' style='color:red;'> La materia solo puede tener ".$horaTotal."  horas academicas </h4> ";
                    }

                    
                     
                    
                } else
                {
                    echo " <h4 align='center' style='color:red;'>El aula ya esta ocupado para este horario</h4> ";
                    
                }                   
            }//fin enlase
            
        }//fin post
            
            $horasAcademicas = $conexion->prepare("SELECT hrs_academicas.HRS_SEMANA, hrs_academicas.HRS_TEORIA_MES, hrs_academicas.HRS_PRACTICA_MES, hrs_academicas.HRS_MES_MATERIA, hrs_academicas. HRS_MES_AUTORIDAD FROM hrs_academicas,dia WHERE dia.ID_DIA=hrs_academicas.ID_DIA AND dia.ID_GRUP=$idGrupo");
                                $horasAcademicas->execute();
                                $horasA = $horasAcademicas->fetchAll();
                            
            //LISTA DE HORARIOS 
           
            $statement6 = $conexion->prepare("SELECT DISTINCT  horario.INICIO_HORARIO, horario.FIN_HORARIO FROM dia,horario WHERE  dia.ID_GRUP=$idGrupo AND horario.ID_HORARIO=dia.ID_HORARIO ORDER BY horario.INICIO_HORARIO ASC");
            $statement6->execute();
            $horaInicial = $statement6->fetchAll();

            $statement7=$conexion->prepare("SELECT horario.INICIO_HORARIO,dia.NOM_DIA,dia.ID_DIA FROM dia INNER JOIN horario ON dia.ID_HORARIO=horario.ID_HORARIO WHERE dia.ID_GRUP=$idGrupo ORDER by  horario.INICIO_HORARIO ASC,dia.NOM_DIA ASC ");
            $statement7->execute();
            $horasGrupo=$statement7->fetchAll();

            $statement7=$conexion->prepare("SELECT * FROM dia INNER JOIN horario ON dia.ID_HORARIO=horario.ID_HORARIO WHERE dia.ID_GRUP=$idGrupo ORDER by  horario.INICIO_HORARIO ASC,dia.NOM_DIA ASC ");
            $statement7->execute();
            $horasGrupo=$statement7->fetchAll();

	
        require 'views/horarioMateria.view.php';
?>
