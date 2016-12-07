<?php

session_start();

if (isset($_SESSION['usuario'])){
    require 'views/seguimiento.view.php';
} else {
    header('Location: login.php');
}

?>