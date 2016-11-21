<?php  session_start();

	if (isset($_SESSION['usuario'])){
		require 'views/secretaria.view.php';

		echo $_SESSION['usuario'];

	} else {
		header('Location: login.php');
	}


	