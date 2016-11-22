<?php include('views/global/header.view.php')?>

<?php include('views/global/title.view.php')?>

<div class="container">

  <div class="container text-center nt">
      <ul class="breadcrumb center-block">
          <li><a href="#">Inicio</a></li>
          <li><a href="listaDocentes.php">Docentes</a></li>
          <li><a href="#">Informacion</a></li>
      </ul>
    <button id="button" class="btn btn-success">Ingresar</button>
  </div>
  <div class="jumbotron text-center inicio">

      <div class="container">
      <p>Sistema web que permite la generación de formularios de seguimiento y solicitud de nombramiento de docentes que se realiza para su respectiva contratación y que es solicitada a cada carrera por la Dirección de Planificación Académica (DPA), requerido para los procesos administrativos de nombramiento del plantel docente, brindando ayuda a la secretaria encargada de procesar ambos formularios con el sistema</p>
      </div>
  </div>

  <div class="container cop">
    <img class="img-circle img-responsive logo3 center-block" src="images/logo3.png">
  </div>
</div>
<script>
  window.onload = function () {
    document.getElementById('button').onclick = function () {
      location.href = 'login.php';
    }
  } 
</script>
<style type="text/css">

  div.nt ul.breadcrumb {
    margin-top: 10px;
    width: 400px;
    border: 1px solid #EF9A9A;
    font-size: 20px;
  }

  div.nt button.btn {
    float:right;
    margin-right: -100px;
  }

  div.inicio {
    margin-top: -40px;
    border: 1px solid #9E9E9E;
  }


  img.logo3 {
    width: 200px;
    height: 200px;
  }

  div.cop {
    margin-top: -10px;
    border: 1px solid transparent;
  }
</style>

<div class="container nt-menu-subpie site-footer">
    <div class="row">

      <div class="col-sm-4">
      </div>

      <div class="col-sm-4">
        <b>Copyright ©2016 - Nextsoft - Derechos Reservados</b><br>
        <b>Desarrollado por</b> <a target="_blank" href=""><u>NextSoft srl.</u></a><br>
        <a href=""><u>nextsoft@gmail.com</u></a>
      </div>
      <div class="col-sm-4">
        <b>Paginas Relacionas:</b>
        <a target="_blank" href="http://www.umss.edu/"><u>UMSS</u></a>
        <a target="_blank" href="http://websis.umss.edu.bo/"><u>WebSISS</u></a>
        <a target="_blank" href="http://www.memi.umss.edu.bo"><u>MEMI</u></a>
        <a target="_blank" href="http://enlinea.umss.edu.bo/moodle2/"><u>Moodle</u></a><br>
        <a target="_blank" href="http://www.fcyt.umss.edu/"><u>Facultad de Ciencias y Tecnologia</u></a><br>
        <b>Contactos: Departamento</b>
        <a target="_blank" href="http://cs.umss.edu.bo/"><u>dpto.inf.sis@cs.umss.edu.bo</u></a> 
      </div>
    </div>
</div>

<style type="text/css">
  
div.nt-menu-subpie {
  margin-top: 16.48%;
  background-image: url("images/pie.png");
  background-size: cover;
  /*background-color: #3949AB;*/
  border-top: 1px solid #BDBDBD;
  bottom: 0;
  position: fixed;
  width: 100%;
  text-align: center;

}

div.col-sm-4 i.inicio {
  margin-top: 7px;
  margin-left: 80px;
}

div.col-sm-4 b {
  font-family: verdana, arial, helvetica, sans-serif;
  font-size: 13px;
  color: white;
}
div.col-sm-4 a {
  color: white;
  font-size: 13px;
}

</style>


<?php include('views/global/footer.view.php')?>
