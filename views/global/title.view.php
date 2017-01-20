
<div class="container nt-menu-titulo">
        <div class="row">
            <div class="col-sm-4">
                <img src="images/logo2.png" class="img-responsive">
              
            </div>

            <div class="col-sm-4">
                <h4 class="titulo"><strong>Sistema de Seguimiento y Nombramiento Docente</strong></h4>
            </div>
            <div class="col-sm-4">
                <form action="./cerrar.php" class="navbar-form navbar-right" >
                <p id="nombre-usuario" style="color: white"><?php echo $_SESSION['usuario']?>
                    <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                </p>
                <input type="submit" class="btn btn-global" name="" value="salir">
                </form>

            </div>


        </div>
 </div>


<div class="container menu-rapido">
	<ul class="nav nav-tabs nav-justified">
	  <li><a href="espacioSecretaria.php">Inicio</a></li>
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Nombramiento<span class="caret"></span></a>
		<ul class="dropdown-menu">
		  <li><a href="nombramientoDocente.php">Docente</a></li>
		</ul>
	  </li>
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Seguimiento<span class="caret"></span></a>
		<ul class="dropdown-menu">
		  <li><a href="seguimiento.php">Docente</a></li>
		</ul>
	  </li>
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Reportes<span class="caret"></span></a>
		<ul class="dropdown-menu">
		  <li><a href="reporteDocente.php">Docente</a></li>
		</ul>
	  </li>
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Historicos<span class="caret"></span></a>
		<ul class="dropdown-menu">
		  <li><a href="listaDocentes.php">Docentes</a></li>
		  <li><a href="listaFacultades.php">Facultades</a></li>
		  <li><a href="listaCarreras.php">Carreras</a></li>
		  <li><a href="listaMaterias.php">Materias</a></li>
		  <li><a href="listaDepartamentos.php">Departamentos</a></li>
		</ul>
	  </li>
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Registros<span class="caret"></span></a>
		<ul class="dropdown-menu">
		  <li><a href="registroDocente.php">Registro Docente</a></li>
		  <li><a href="registroSecretaria.php">Registro Secretaria</a></li>
		  <li><a href="registroFacultad.php">Registro Facultad</a></li>
		  <li><a href="registroCarrera.php">Registro Carrera</a></li>
		  <li><a href="registroMaterias.php">Registro Materias</a></li>
		  <li><a href="registroDepartamento.php">Registro Departamentos</a></li>
		  <li><a href="registroGrupos.php">Registro Grupos</a></li>
		  <li><a href="registrarAula.php">Registro Aulas</a></li>
		  <li><a href="registrarHorario.php">Registro Horario</a></li>
		  <li><a href="listaDocentesAsignacion.php">Asignacion Docente Grupo</a></li>

		</ul>
	  </li>
	</ul>
</div>


<style type="text/css">

    * {
        border: 0px;
        padding: 0px;
    }

    body {
        background-color: #F5F5F5;
    }
	
	.menu-rapido {
		margin: auto;
		width: 50%;
	}
    div.horaT {
        color: white;
        float: left;
        margin-left: -20px;
    }

    div.nt-menu-titulo {
        background-color: #3949AB;
        border-bottom: 1px solid #BDBDBD;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.26);
        width: 100%;
    }

    img {
        margin-left: 50px;
        width: 60px;
    }

    div.nt-menu-titulo div.row div.col-sm-4 h4.titulo {
        font-family: verdana, arial, helvetica, sans-serif;
        margin-top: 25px;
        text-align: center;
        color: white;
    }
</style>
