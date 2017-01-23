<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta lang="es">
    <link rel="stylesheet" type="text/css" href="estilos/css/login.css">
</head>

<body class="nt-background" name="seguimiento">
<div class= "nt-header">
    <div class= "logo">
        <img src="images/logo2.png" class= "imagen">
    </div>
    <div class= "titulo">
        <h4 class="nombre"><strong>Sistema de Seguimiento y Nombramiento Docente</strong></h4>
    </div>
    <div class= "salir"></div>
</div>

<div class= "nt-center">
    <div class="imagen-secre">
        <img src="images/secretaria3.jpg" class="img-responsive">
    </div>
    <div class="contenedor-login">
        <form class="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" name="login">
            <h3><strong>Iniciar sesión</strong></h3><br>
            <input type="text" class="usuario" placeholder="nombre de usuario" name="usuario"><br>
            <input id= "password" type="password" class="password" placeholder="contraseña" name="password"><br>
            <input id= "button" type="submit" class="ingresar" value="Ingresar" name="">
        </form>
    </div>
</div>

<div class="nt-pag-relacionada">
    <a target="_blank" href="http://www.cs.umss.edu.bo/"><img src="images/infsis.png" class="img-rounded icono-relacion"></a>
    <a target="_blank" href="http://websis.umss.edu.bo/"> <img src="images/Websiss_umss.jpg" class="img-rounded icono-relacion"></a>
    <a target="_blank" href="http://www.memi.umss.edu.bo/"><img src="images/memi.gif" class="img-rounded icono-relacion"></a>
    <a target="_blank" href="http://enlinea.umss.edu.bo/moodle2/"><img src="images/Moodle.jpe" class="img-rounded icono-relacion"></a>
    <a target="_blank" href="http://www.fcyt.umss.edu.bo/"><img src="images/fcyt_umss.jpg" class="img-rounded icono-relacion"></a>
    <a target="_blank" href="http://www.umss.edu.bo/"><img src="images/UMSS.png" class="img-rounded icono-relacion"></a>
</div>

<div class= "nt-footer" style="background-image: url('images/pie.png');">
    <div class="izq">
        <a class=" navbar-left" href="?view=index">
            <i class="fa fa-home fa-3x inicio" aria-hidden="true"></i>
        </a>
    </div>
    <div class="centro">
        <b>Copyright ©2016 - Nextsoft - Derechos Reservados</b><br>
        <b>Desarrollado por</b> <a><u>NextSoft srl.</u></a><br>
        <a href=""><u>nextsoft@gmail.com</u></a>
    </div>
    <div class="der">

    </div>

</div>
</body>
</html>