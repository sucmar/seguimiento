<?php include("views/global/header.view.php")?>

<div class="nt-background" name="seguimiento">
    <div class= "nt-header">
        <div class= "logo">
        <img src="images/logo2.png" class= "imagen"></img>
        </div>
        <div class= "titulo">
        <h4 class="nombre"><strong>Sistema de Seguimiento y Nombramiento Docente</strong></h4>
        </div>
                <div class="col-sm-4 dropdown">
                        <form action="./cerrar.php" class="navbar-form navbar-right" >
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenuSalir">
                        <p id="nombre-usuario" style="color: white"><?php echo $_SESSION['usuario']?>        
                        <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                        </p>
                
                        <ul class="dropdown-menu inline-block" style="background-color:#0259A0" role="menu" aria-labelledby="dropdownMenu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="editarPerfil.php">Editar Perfil</a></li>

                        <li role="presentation"><a role="menuitem" tabindex="-1" href="cerrar.php">salir</a></li>
                        </ul>
                            </a>
                        <!-- 
                        -->
                        <input type="submit" class="btn btn-global" name="" value="salir">
                        </form>
                </div>
    </div>


<div class="contenedor-principal">
  <div id="timer"></div>
  <div class="container nt-menu-cuerpo">
    <div class="row navbar">


      <div class="col-sm-2 dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown"><img class="img-circle img-responsive" src="images/nombramiento.png" id="dropdownMenu1">Nombramiento</a>

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
          <li role="presentation"><a role="menuitem" tabindex="-1" href="seguimientoDocente.php">Docente</a></li>

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
              
            <li role="presentation"><a role="menuitem" tabindex="-1" href="cargos.php">Registro Roles</a></li>
              
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


<div class="nt-pag-relacionada">
                <a target="_blank" href="http://www.cs.umss.edu.bo/"><img src="images/infsis.png" class="img-rounded icono-relacion"></a>
                <a target="_blank" href="http://websis.umss.edu.bo/"> <img src="images/Websiss_umss.jpg" class="img-rounded icono-relacion"></a>
                <a target="_blank" href="http://www.memi.umss.edu.bo/"><img src="images/memi.gif" class="img-rounded icono-relacion"></a>
                <a target="_blank" href="http://enlinea.umss.edu.bo/moodle2/"><img src="images/Moodle.jpe" class="img-rounded icono-relacion"></a>
                <a target="_blank" href="http://www.fcyt.umss.edu.bo/"><img src="images/fcyt_umss.jpg" class="img-rounded icono-relacion"></a>
                <a target="_blank" href="http://www.umss.edu.bo/"><img src="images/UMSS.png" class="img-rounded icono-relacion"></a>
      
      </div>
</div>
<style>

<?php include('views/global/subtitle.view.php')?>
<?php include('views/global/footer.view.php')?>
