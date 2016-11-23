<?php session_start();
	if (isset($_SESSION['usuario'])){
		require 'views/listaUsuarios.view.php';
	} else {
		header('Location: login.php');
	}
?>