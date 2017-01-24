<?php include('views/global/header.view.php')?>
<?php include('views/global/title.view.php')?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
  <LEGEND> <strong>LISTA DE MATERIAS</strong></LEGEND>
    <div class="container col-md-12 table table-hover tabla-lista-reporte">
    <table class="table table-hover" id="tablaDocente">
     
       
	  <thead>
	  <tr>
          <td><strong>CODIGO </strong></td>
          <td><strong>NOMBRE MATERIAS</strong></td>

	  </tr>
	  </thead>
      <tbody>
        <?php foreach ($materias as $materia):?>

            <tr>
              <td class="idMateria"><?php echo $materia['ID_MATERIA'] ?></td>
              <td><?php echo $materia['NOMBRE_MATERIA'] ?></td>
				
			  <td><a href="modificarMateria.php?id=<?php echo $materia['ID_MATERIA'] ?>" class="modificar">modificar</a></td>

              <td><a href="eliminarMateria.php?id=<?php echo $materia['ID_MATERIA'] ?>" class="eliminar">eliminar</a></td>

				
            </tr>
        <?php endforeach;?>
      </tbody>
      </table>
      </div>
      <br><br>
  </div>    
<div id='respuesta'></div>
