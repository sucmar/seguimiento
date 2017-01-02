<?php session_start();

if (isset($_SESSION['usuario'])){
    require 'views/registrarHorario.view.php';
} else {
    header('Location: login.php');
}

$enlace = mysqli_connect("localhost", "root", "", "bd_seguimiento");


        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {

            $periodo         = $_POST['periodo'];
            $hr_inicial      = $_POST['hr-ini'];
            $hr_final        = $_POST['hr-fin'];


            $strtotime=strtotime($hr_final);
            $nueva=date("H:i:s",$strtotime);
            

    		$hora_inicial=strtotime($hr_inicial);
    		$hora_final=strtotime($hr_final);
    		$per_seg=($periodo*60)+($periodo*60);
        		
            if ($hora_inicial!=$hora_final && $hora_inicial<$hora_final) 
            {                    
                if (!$enlace) 
                {
                    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
                    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
                    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
                } 
                else
                {	
                	$sql = "SELECT * FROM horario";
        			$consulta = mysqli_query($enlace,$sql);
                	if (mysqli_num_rows($consulta)!=0) 
                    {
                		$sql2 = "DELETE FROM horario";
        				$consulta = mysqli_query($enlace,$sql2);
                	}
                	
                		while ( $hora_inicial<$hora_final) 
        	        	{
        	        		$hora_ini_temp=date("H:i:s",$hora_inicial);
        	        		$hora_fin_temp=date("H:i:s",$hora_inicial+$per_seg);
        	        		
        	        		 $query = "INSERT INTO horario(INICIO_HORARIO,FIN_HORARIO)
        	                       VALUES('$hora_ini_temp','$hora_fin_temp')";
        	            	mysqli_query($enlace,$query);
        	            	$hora_inicial=strtotime($hora_fin_temp);
        	            	
        	        	}
                	
                	   echo "El registro fue corecto";
                }
                   
                   
            }
            else
            {
                echo "La hora inicio debe ser distinto a la hora final <br> El registro fallo!";
            }

        }
                mysqli_close($enlace);
            


?>

