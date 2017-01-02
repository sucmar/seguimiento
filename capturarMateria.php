<?php 
	if(!isset($_GET['varMateria']) || empty($_GET['varMateria'])){
	   //echo "error";
	} else{
	    $valor = $_GET['varMateria'];
	    echo $valor;
	}

	if(!isset($_GET['idMat']) || empty($_GET['idMat'])){
	   //echo "error";
	} else{
	    $val = $_GET['idMat'];
	    echo $val;
	}
 ?>