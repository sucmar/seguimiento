<?php
if(!isset($_GET['materia']) || empty($_GET['materia'])){
    echo "error";
} else{
    $idDocente = $_GET['materia'];
    echo $idDocente;
}