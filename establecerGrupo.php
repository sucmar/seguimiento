<?php 
 require 'funciones.php';
 $idDocMateria=$_REQUEST['idDoc'];//ID DEL DOCENTE CON LA MATERIA
 $Idgrupo = $_REQUEST['grup'];
 $idMateria=$_REQUEST['idMa'];
 $idDocente=$_REQUEST['idDocente'];

 //echo 'este es el ide materia    '.$idMateria.'</br>';

 $conexion = conexion('bd_seguimiento','seg_user', 'seg_pass');
 $statement = $conexion->prepare("SELECT * FROM grupo WHERE ID_GRUPO='$Idgrupo'"); //selcciono el grupo con ese id
 $statement->execute();
 $grupos = $statement->fetch(PDO::FETCH_ASSOC); 

 $nombreGrupo = $grupos['NOM_GRUPO'];
    //echo "nombre de grupo   ".$nombreGrupo.'</br>';

	$statement2 = $conexion->prepare("SELECT * 
	                             	FROM doc_materia 
	                             	INNER JOIN grupos 
	                             	ON doc_materia.ID_DOCMATERIA=grupos.ID_DOCMATERIA 
	                             	WHERE doc_materia.ID_MATERIA='$idMateria' AND grupos.GRUPO='$nombreGrupo';");
	$statement2->execute();
$grupoBusqueda = $statement2->fetch(PDO::FETCH_ASSOC);
$grupoBuscado = $grupoBusqueda['GRUPO'];
//echo 'SALE DE IDMATERIA grupo buscado'.$grupoBuscado.'</br>';



if($nombreGrupo==$grupoBuscado){
	echo "<h1>el grupo esta ocupado existe eliga otro grupo</h1>";
} else {

    $statement = $conexion->prepare("SELECT * FROM grupo WHERE ID_GRUPO='$Idgrupo'"); //selcciono el grupo con ese id
    $statement->execute();
    $grupos = $statement->fetch(PDO::FETCH_ASSOC);

    $nombreGrupo = $grupos['NOM_GRUPO'];

	$statement1 = $conexion->prepare("INSERT INTO grupos(ID_DOCMATERIA, GRUPO) VALUES ('$idDocMateria','$nombreGrupo')");
    $statement1->execute();
    header("Location: docente.php?id=$idDocente");
}

?>