<?php

include("views/global/header.view.php");

$idDoc=$_REQUEST['valor'];

$mysqli=new mysqli("localhost","root","","bd_seguimiento");
//$query="SELECT * FROM doc_materia WHERE ID_DOCENTE='$idDoc'";
$query="SELECT * 
        FROM doc_materia
        INNER JOIN materia 
        ON doc_materia.ID_MATERIA=materia.ID_MATERIA
        WHERE doc_materia.ID_DOCENTE='$idDoc'";
$resultado=$mysqli->query($query);



echo '<table class="table table-bordered">

    <tr>
        <th>ID_MATERIA</th>
        <th>ID_DOCENTE</th>
    </tr>';
    while ($row=$resultado->fetch_array(MYSQLI_BOTH)) {
    echo '<tr>
        <td>'.$row['NOMBRE_MATERIA'].'</td>
        <td><a href="asignarGrupo.php?id='.$row['ID_DOCMATERIA'].'&idMateria='.$row['ID_MATERIA'].'&idDoc='.$row['ID_DOCENTE'].'" class="btn btn-link">Asignar Grupo</a></td>
        <td><a href="gruposAsignados.php?id='.$row['ID_DOCMATERIA'].'&idMateria='.$row['ID_MATERIA'].'&idDoc='.$row['ID_DOCENTE'].'" class="btn btn-link">ver grupos Asignados</a></td>
    </tr>';
    }
echo '</table>';