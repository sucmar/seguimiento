<?php include('views/global/header.view.php')?>

<?php include('views/global/title.view.php')?>

<div class="secre">
      <div class="col-sm-6">
      <img src="images/secretaria3.jpg" class="img-responsive img-circle">

      </div>

      <div class="col-sm-6">
        <div class="container formulario">
          <form class="form-group" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" name="login">
          <div class="form-group">
            
            <h3><strong>Inicie sesion</strong></h3><br>
            <input type="text" class="form-control" placeholder="nombre de usuario" name="usuario"><br>
            <input id= "password" type="password" class="form-control" placeholder="contraseña" name="password"><br>
            <input id= "button" type="submit" class="btn btn-success" value="Ingresar" name="">
        
          </div>

            <?php if (empty($errores)) : ?>
                <div class="error">
                  <ul>
                    <?php echo $errores; ?>
                  </ul>
                </div>
            <?php endif; ?>

          </form>
        </div>
      </div>

</div>

<div class="container nt-menu-subpie site-footer">
    <div class="row">

      <div class="col-sm-4">
          <a class=" navbar-left" href="?view=index">
          <i class="fa fa-home fa-3x inicio" aria-hidden="true"></i>
          </a>
      </div>

      <div class="col-sm-4">
        <b>Copyright ©2016 - Nextsoft - Derechos Reservados</b><br>
        <b>Desarrollado por</b> <a><u>NextSoft srl.</u></a><br>
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
        <a href=""><u>dpto.inf.sis@cs.umss.edu.bo</u></a> 
      </div>
    </div>
</div>

<style type="text/css">

div.secre img {
  margin-top: 50px;
  margin-left: 200px;
  width: 700px;
  height: 500px;
}
  
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

<style type="text/css">
  
  div.formulario {
    /*background-image: url("styles/images/secretaria2.jpg");
    background-color: #3949AB;
      background-blend-mode: multiply;*/
    float: right;
    margin-top: 150px;
    margin-right: 50px;
    width: 400px;
    border-radius: 5px;
    border: 1px solid #9E9E9E;
    /*
    color: white;*/
  }

</style>

<?php include('views/global/footer.view.php')?>