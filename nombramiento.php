<?php

session_start();

if (isset($_SESSION['usuario'])){
    require 'views/nombramiento.view.php';
} else {
    header('Location: login.php');
}
?>