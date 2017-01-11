<?php session_start();





    $enlace = mysqli_connect("localhost", 'seg_user', 'seg_pass', "bd_seguimiento");
    $lista=array();


   

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {

            $aula             = $_POST['nom-aula'];
            $descripcion      = $_POST['des-aula'];

            $aula = strtoupper($aula);
            $descripcion = strtoupper($descripcion);

            if (!$enlace) 
            {
                echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
                echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
                echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
            } 
            else
            {   
                //consulta buscando si existe el $aula 
                $sql = "SELECT * FROM aula WHERE NOMBRE_AULA='$aula'" ;

                $consulta = mysqli_query($enlace,$sql);
                $cont=mysqli_num_rows($consulta);

                if ($cont== 1)
                {   
                    echo "este aula ya existe";
                    
                }else
                {

                    $query = "INSERT INTO aula(NOMBRE_AULA,DESCRIPCION_AULA)
                               VALUES('$aula','$descripcion')";
                    mysqli_query($enlace,$query);
                   echo "registro corecto";
                }                   
            }

         

        } 


            $mysqli=new mysqli("localhost",'seg_user', 'seg_pass',"bd_seguimiento");
            $query="SELECT * FROM aula  ORDER BY NOMBRE_AULA ASC ";
            $resultado=$mysqli->query($query);







    if (isset($_SESSION['usuario'])){
        require 'views/registrarAula.view.php';
    } else {
        header('Location: login.php');
    }

?>