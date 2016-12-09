<?php session_start();

if (isset($_SESSION['usuario'])){
    require 'views/registroMaterias.view.php';git
} else {
    header('Location: login.php');
}





?>