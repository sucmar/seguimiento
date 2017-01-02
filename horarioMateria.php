<?php  session_start();
    
	require 'funciones.php';

    $conexion = conexion('bd_seguimiento','root','');
    $idDocente=     $_REQUEST['idDoc'];
    $idMateria=     $_REQUEST['idMateria'];
    //ide del  grupo donde esta la materia ,grupo y docente 
    $idGrupo=       $_REQUEST['grupo'];
    

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
        //.....
        $statement8 = $conexion->prepare("SELECT GRUPO FROM grupos WHERE ID_GRUP='$idGrupo'");
        $statement8->execute();
        $grupo = $statement8->fetch();

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
            $enlace = mysqli_connect("localhost", "root", "", "bd_seguimiento");
            if (!$enlace) 
            {
                echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
                echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
                echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
            } 
            else
            {   
                

                $sql2 = "SELECT * FROM dia WHERE ID_HORARIO=$hrIni AND ID_AULA=$aula AND NOM_DIA=$diaS";

                $consulta2  = mysqli_query($enlace,$sql2);
                $contador   = mysqli_num_rows($consulta2);
                echo "TIENE :".$contador;
              //  $sql3 = "SELECT COUNT(ID_GRUP) FROM dia WHERE ID_GRUP=$idGrupo ";

                //$consulta3  = mysqli_query($enlace,$sql3);
                //$contador2   = mysqli_num_rows($consulta3);

                echo "repetido ";
                echo $contador;
                echo "clases ";
                //echo $contador2;
                if ($contador==0)
                {   
                     $sql3 = "  SELECT grupos.GRUPO, aula.NOMBRE_AULA,dia.NOM_DIA,materia.NOMBRE_MATERIA
                                FROM dia,grupos,doc_materia,aula,materia
                                WHERE dia.ID_HORARIO=$hrIni AND dia.NOM_DIA=$diaS 
                                AND aula.ID_AULA=dia.ID_AULA
                                AND grupos.ID_DOCMATERIA=doc_materia.ID_DOCMATERIA 
                                AND doc_materia.ID_MATERIA=materia.ID_MATERIA
                                AND doc_materia.ID_DOCENTE=$idDocente ";

                    $consulta3 = mysqli_query($enlace,$sql3);
                    $contador3   = mysqli_num_rows($consulta3);
                    echo "TIENE :".$contador3;
                    if($contador3==0)
                    {
                        $query = "INSERT INTO dia(ID_AULA,ID_HORARIO,ID_GRUP,NOM_DIA)
                               VALUES('$aula','$hrIni','$idGrupo','$diaS')";
                                mysqli_query($enlace,$query);
                                 echo "registro corecto";
                                 ///---

                                    $sqlHr = "SELECT * FROM hrs_academicas WHERE ID_GRUP=$idGrupo";

                                    $conHr  = mysqli_query($enlace,$sqlHr);
                                    $conHora   = mysqli_num_rows($conHr);
                                    echo "tiene clases: ".$conHora;
                                 //--
                                if($conHora<2)
                                {
                                    $hr_sem=2;
                                    $hr_teo_mes=$hr_sem*2;
                                    $hr_pra_mes=$hr_sem*2;
                                    $hr_mes=$hr_sem*4;
                                    $insertarHoras=$query = "INSERT INTO hrs_academicas(ID_GRUP,HRS_SEMANA,HRS_TEORIA_MES,HRS_PRACTICA_MES,HRS_MES_MATERIA,HRS_MES_AUTORIDAD)
                                    VALUES('$idGrupo','$hr_sem','$hr_teo_mes','$hr_pra_mes','$hr_mes','0')";
                                    mysqli_query($enlace,$insertarHoras);
                                }else
                                {
                                   /* $statement7 = $conexion->prepare("SELECT * FROM hrs_academicas WHERE  ID_GRUP=$idGrupo ")
                                    $statement7->execute();
                                    $hrs_aca = $statement7->fetchAll();*/

                                    $hr_sem=2;
                                    $hr_teo_mes=$hr_sem*4;
                                    $hr_pra_mes=0;
                                    $hr_mes=$hr_sem*4;
                                    $insertarHoras=$query = "INSERT INTO hrs_academicas(ID_GRUP,HRS_SEMANA,HRS_TEORIA_MES,HRS_PRACTICA_MES,HRS_MES_MATERIA,HRS_MES_AUTORIDAD)
                                    VALUES('$idGrupo','$hr_sem','$hr_teo_mes','$hr_pra_mes','$hr_mes','0')";
                                    mysqli_query($enlace,$insertarHoras);
                                    /*if($hrs_aca['HRS_PRACTICA_MES']<8)
                                    {
                                        $hr_sem=2;
                                        $hr_teo_mes=$hrs_aca['HRS_TEORIA_MES']+($hr_sem*2);
                                        $hr_pra_mes=$hrs_aca['HRS_PRACTICA_MES']+($hr_sem*2);
                                        $hr_mes=$hrs_aca['HRS_MES_MATERIA']+($hr_sem*4);
                                        $insertarHoras=$query = "INSERT INTO hrs_academicas(ID_GRUP,HRS_SEMANA,HRS_TEORIA_MES,HRS_PRACTICA_MES,HRS_MES_MATERIA,HRS_MES_AUTORIDAD)
                                        VALUES('$idGrupo','$hr_sem','$hr_teo_mes','$hr_pra_mes','$hr_mes','0')";
                                        mysqli_query($enlace,$insertarHoras);
                                    }else
                                    {
                                        if($hrs_aca['HRS_PRACTICA_MES']==8)
                                        {
                                            $hr_sem=2;
                                            $hr_teo_mes=$hrs_aca['HRS_TEORIA_MES']+($hr_sem*4);
                                            $hr_pra_mes=$hrs_aca['HRS_PRACTICA_MES'];
                                            $hr_mes=$hrs_aca['HRS_MES_MATERIA']+($hr_sem*4);
                                            $insertarHoras=$query = "INSERT INTO hrs_academicas(ID_GRUP,HRS_SEMANA,HRS_TEORIA_MES,HRS_PRACTICA_MES,HRS_MES_MATERIA,HRS_MES_AUTORIDAD)
                                            VALUES('$idGrupo','$hr_sem','$hr_teo_mes','$hr_pra_mes','$hr_mes','0')";
                                            mysqli_query($enlace,$insertarHoras);
                                        }
                                    }*/
                                }
                                

                    }else 
                    {
                        echo " <h4 align='center' style='color:red;'> El docente tiene clases a esta hora </h4> ";
                    }
                    
                     
                    
                }else
                {
                    echo " <h4 align='center' style='color:red;'>El aula ya esta ocupado para esta hora.</h4> ";
                    
                }                   
            }
            
        }
            
            //LISTA DE HORARIOS 
           
            $statement6 = $conexion->prepare("SELECT DISTINCT  horario.INICIO_HORARIO, horario.FIN_HORARIO FROM dia,horario WHERE  dia.ID_GRUP=$idGrupo AND horario.ID_HORARIO=dia.ID_HORARIO ORDER BY horario.INICIO_HORARIO ASC");
            $statement6->execute();
            $horaInicial = $statement6->fetchAll();

            $statement7=$conexion->prepare("SELECT horario.INICIO_HORARIO,dia.NOM_DIA,dia.ID_DIA FROM dia INNER JOIN horario ON dia.ID_HORARIO=horario.ID_HORARIO WHERE dia.ID_GRUP=$idGrupo ORDER by  horario.INICIO_HORARIO ASC,dia.NOM_DIA ASC ");
            $statement7->execute();
            $horasGrupo=$statement7->fetchAll();

	
        require 'views/horarioMateria.view.php';
?>