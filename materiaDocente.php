<?php session_start();

if (isset($_SESSION['usuario'])){
    require 'views/materiaDocente.view.php';
} else {
    header('Location: login.php');
}