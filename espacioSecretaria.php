<?php  session_start();


	if (isset($_SESSION['usuario'])){
		require 'views/secretaria.view.php';
		$nombre = $_SESSION['usuario'];
	} else {
		header('Location: login.php');
	}

    function secion(){
        if (isset($_SESSION['usuario'])){
            require 'views/secretaria.view.php';

            echo $_SESSION['usuario'];
            
        }
    }
?>