<?php
    function conexion ( $base, $usuario, $pass ) {
        try {
            $conexion =  new PDO("mysql:host=localhost;dbname=$base", $usuario, $pass);
            return $conexion;
        } catch (PDOException $e) {
            return false;
        }
    }

    function hora (){
        $time = time();
        echo date("d-m-Y (H:i:s)", $time);
    }

