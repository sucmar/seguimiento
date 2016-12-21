<?php include('views/global/header.view.php')?>


<div class="container nt-menu-titulo">
        <div class="row">

            <div class="col-sm-4">
                <img src="images/logo2.png" class="img-responsive">
            </div>

            <div class="col-sm-4">
                <h4 class="titulo"><strong>Sistema de Seguimiento y Nombramiento Docente</strong></h4>
            </div>

            <div class="col-sm-4">

                <form action="./espacioSecretaria.php" class="navbar-form navbar-right" >
                <p style="color: white">
                    <i class="fax" aria-hidden="true"></i>
                </p>
                <input type="submit" style="margin-top:15px" class="btn btn-success" name="" value="atras">
                </form>

            </div>

        </div>
    </div>

<style type="text/css">
.fax {
     height: 15px;
}
* {
    border: 0px;
    padding: 0px;
}

body {
    background-color: #F5F5F5; 
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

 <div class="container nt-plantel-doc ">
    <div class="container col-md-12 table table-hover">
    <table class="table table-hover" id="tablaDocente">
      <LEGEND> <strong>LISTA DE DOCENTES</strong></LEGEND>
        <!--<tbody>
          <tr>  <th scope="row">  1 </th> <td>  Ing. Ayoroa Cardozo Jose Richard  </td> </tr>
          <tr>  <th scope="row">  2 </th> <td>  Msc. Costas Jáuregui Vladimir </td> </tr>
          <tr>  <th scope="row">  3 </th> <td>  Msc. Lic. Jaldin Rosales K. Rolando </td> </tr>
          <tr>  <th scope="row">  4 </th> <td>  Msc. Lic. Montecinos Choque Marco Antonio </td> </tr>
          <tr>  <th scope="row">  5 </th> <td>  Msc. Ing. Orellana Araoz Jorge Walter </td> </tr>
          <tr>  <th scope="row">  6 </th> <td>  Msc. Lic. Rodriguez Bilbao Erika Patricia </td> </tr>
          <tr>  <th scope="row">  7 </th> <td>  Msc. Lic. Salazar Serrudo Carla </td> </tr>
          <tr>  <th scope="row">  8 </th> <td>  Msc. Lic. Torrico Bascopé Rosemary  </td> </tr>
          <tr>  <th scope="row">  9 </th> <td>  Ing. Villarroel Novillo Jimmy </td> </tr>
        </tbody>-->
      <tbody>
      <tr>
          <td><strong>CODIGO </strong></td>
          <td><strong>NOMBRE </strong></td>
          <td> <strong>APELLIDO PATERNO</strong></td>
          <td><strong>APELLIDO MATERNO</strong></td>
      </tr>
        <?php foreach ($docentes as $docente):?>

            <tr>
              <td class="idDocente"><?php echo $docente['ID_DOCENTE'] ?></td>
              <td ><?php echo $docente['NOMBRE_DOC'] ?></td>
              <td><?php echo $docente['APELLPATERNO_DOC'] ?></td>
              <td><?php echo $docente['APELLMATERNO_DOC'] ?></td>
              <td><a href="modificarDocente.php?id=<?php echo $docente['ID_DOCENTE'] ?>" >modificar</a></td>
              <td><a href="eliminarDocente.php?id=<?php echo $docente['ID_DOCENTE'] ?>" class="eliminar">eliminar</a></td>
            </tr>
        <?php endforeach;?>
      </tbody>
      </table>
      </div>
      <br><br>
  </div>    
<div id='respuesta'></div>
