<?php session_start();
require 'funciones.php';
if (isset($_SESSION['usuario'])){
	
	require 'views/varios.view.php';
}else {
	header('Location: login.php');
}


?>	