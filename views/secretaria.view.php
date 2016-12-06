<?php include("views/global/header.view.php")?>

<div class="nt-background" name="seguimiento">
    <div class= "nt-header">
        <div class= "logo">
        <img src="images/logo2.png" class= "imagen"></img>
        </div>
        <div class= "titulo">
        <h4 class="nombre"><strong>Sistema de Seguimiento y Nombramiento Docente</strong></h4>
        </div>
        <div class="col-sm-4">
                
                <form action="./cerrar.php" class="navbar-form navbar-right" >
                <p id="nombre-usuario" style="color: white"><?php echo $_SESSION['usuario']?>        
                    <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                </p>
                <input type="submit" class="btn btn-success" name="" value="salir">
                </form>
                
            </div>
    </div>


<div class="contenedor-principal">
  <div class="container nt-menu-cuerpo">
    <div class="row navbar">


      <div class="col-sm-2 dropdown">
        <a href="" class="dropdown-toggle" data-toggle="dropdown"><img class="img-circle img-responsive" src="images/nombramiento.png"  id="dropdownMenu1">Nombramiento</a>

        <span class="caret"></span>
        <ul class="dropdown-menu inline-block" role="menu" aria-labelledby="dropdownMenu1">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="">Docente</a></li>

          <li role="presentation"><a role="menuitem" tabindex="-1" href="">Auxliar</a></li>

        </ul>

      </div>



      <div class="col-sm-2 dropdown">
        <a href="" class="dropdown-toggle" data-toggle="dropdown"><img class="img-circle img-responsive" src="images/seguimiento.png"  id="dropdownMenu1">Seguimiento</a>

        <span class="caret"></span>
        <ul class="dropdown-menu inline-block" role="menu" aria-labelledby="dropdownMenu1">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="seguimiento.php">Docente</a></li>

          <li role="presentation"><a role="menuitem" tabindex="-1" href="">Auxliar</a></li>

        </ul>

      </div>



      <div class="col-sm-2 dropdown">
        <a href="" class="dropdown-toggle" data-toggle="dropdown"><img class="img-circle img-responsive" src="images/reportes.png"  id="dropdownMenu1">Reportes</a>

        <span class="caret"></span>
        <ul class="dropdown-menu inline-block" role="menu" aria-labelledby="dropdownMenu1">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="">Docente</a></li>

          <li role="presentation"><a role="menuitem" tabindex="-1" href="">Auxliar</a></li>

        </ul>

      </div>
      

      <div class="col-sm-2 dropdown">
        <a href="" class="dropdown-toggle" data-toggle="dropdown"><img class="img-circle img-responsive" src="images/historicos.png"  id="dropdownMenu1">Históricos</a>

        <span class="caret"></span>
        <ul class="dropdown-menu inline-block" role="menu" aria-labelledby="dropdownMenu1">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="">Docente</a></li>

          <li role="presentation"><a role="menuitem" tabindex="-1" href="">Auxliar</a></li>

        </ul>

      </div>
      

      <div class="col-sm-2 dropdown">
        <a href="" class="dropdown-toggle" data-toggle="dropdown"><img class="img-circle img-responsive" src="images/registros.png">Registros</a>

          <span class="caret"></span>
          <ul class="dropdown-menu inline-block" role="menu" aria-labelledby="dropdownMenu1">
            <li role="presentation"><a role="menuitem" tabindex="-1" href="registroDocente.php">Registro Docente</a></li>

            <li role="presentation"><a role="menuitem" tabindex="-1" href="registroAuxiliar.php">Registro Auxiliar</a></li>

          </ul>

      </div>
    </div>
  </div>

  <div class="container nt-menu-pie">
    <div class="row">
      <ul>

        <li>
          <a href="">
          <i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i>
          ManualPDF
          </a>
        </li>

        <li>
          <a href="">
          <i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i>
          ManualDOC
          </a>
        </li>

        <li>
          <a href="">
          <i class="fa fa-users fa-2x" aria-hidden="true"></i>
          Contacto
          </a>
        </li>

        <li>
          <a href="">
          <i class="fa fa-question-circle fa-2x" aria-hidden="true"></i>
          Varios
          </a>
        </li>

      </ul>
        
    </div>
  </div>
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
        <b>Paginas Relacionas:</b><br>
                <a target="_blank" href="http://www.cs.umss.edu.bo/"><img src="images/infsis.png" class="img-rounded icono-relacion"></a>
                <a target="_blank" href="http://websis.umss.edu.bo/"> <img src="images/Websiss_umss.jpg" class="img-rounded icono-relacion"></a>
                <a target="_blank" href="http://www.memi.umss.edu.bo/"><img src="images/memi.gif" class="img-rounded icono-relacion"></a>
                <a target="_blank" href="http://enlinea.umss.edu.bo/moodle2/"><img src="images/Moodle.jpe" class="img-rounded icono-relacion"></a>
                <a target="_blank" href="http://www.fcyt.umss.edu.bo/"><img src="images/fcyt_umss.jpg" class="img-rounded icono-relacion"></a>
                <a target="_blank" href="http://www.umss.edu.bo/"><img src="images/UMSS.png" class="img-rounded icono-relacion"></a>
      </div>
</div>
<style>

a img.icono-relacion {
    border-radius: 5px;
    width: 40px;
    margin-top: 0px;
    margin-left: 0px;
    margin-right: 0px;
    padding: 0px;
}

div.nt-background {
    margin: 1px;
    background: white;
    height: 100.1%;
    width: 99.9%;
    position: absolute;
    display: flex;
    flex-direction: column;
    top: -1px;
    left: -1px;
}
div.nt-background div.nt-header{
    margin: 0;
    border: 2px solid #3949AB;
    background: #3949AB;
    height: 11%;
    width: 100%;
    display: flex;
}
div.nt-background div.nt-header div.logo{
    width: 15%;
    height: 100%;
    display: flex;
}
div.nt-background div.nt-header div.logo img.imagen{
    margin: auto;
    width: 30%;
    height: 100%;
}
div.nt-background div.nt-header div.titulo{
    width: 70%;
    height: 100%;
    display: flex;
}
div.nt-background div.nt-header div.titulo h4.nombre{
    font-family: verdana, arial, helvetica, sans-serif;
    text-align: center;
    color: white;
    margin: auto;
}
div.nt-background div.nt-header div.salir{
    width: 17%;
    height: 100%;
}
div.contenedor-principal {
    height: 90%;
    width: 100.1%;  
}
div.nt-footer {
    background-size: cover;
    height: 9%;
    width: 100.1%;
    border-top: 1px solid #BDBDBD;
    text-align: center;
    display: flex;
}
div.nt-footer div.izq {
    height: 100%;
    width: 33%;
    text-align: center;
    margin: auto;
    display:flex;
}
div.nt-footer div.izq a{
    text-align: center;
    margin-left: 20%;
    margin-top: auto;
    margin-bottom: auto;
}
div.nt-footer div.centro{
    height: 100%;
    width: 34%;
    text-align: center;
    margin: auto;
}
div.nt-footer div.centro b {
  font-family: verdana, arial, helvetica, sans-serif;
  font-size: 13px;
  color: white;
}
div.nt-footer div.centro a {
  color: white;
  font-size: 13px;
}
div.nt-footer div.der{
    height: 100%;
    width: 33%;
    text-align: center;
    margin: auto;
}
div.nt-footer div.der b {
  font-family: verdana, arial, helvetica, sans-serif;
  font-size: 13px;
  color: white;
}
div.nt-footer div.der a {
  color: white;
  font-size: 13px;
}






</style>
<?php include('views/global/footer.view.php')?>
