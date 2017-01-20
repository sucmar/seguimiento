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
    <div class="container col-md-12 table table-hover">
    <table class="table table-hover" id="tablaDocente">
      <LEGEND> <strong>LISTA DE FACULTADES</strong></LEGEND>
        
		<thead>
		  <tr>
			  <td><strong>CODIGO </strong></td>
			  <td><strong>NOMBRE FACULTAD</strong></td>

		  </tr>
		</thead>
      <tbody>
        <?php foreach ($facultades as $facultad):?>

            <tr >
            
              <td class="idFacultad"><?php echo $facultad['ID_FACULTAD'] ?></td>
              <td><a href="#divCarrera" data-toggle="collapse" style="text-decoration:none; color: black;"><?php echo $facultad['NOMBRE_FACULTAD'] ?></a>
                
                <div id="divCarrera" class="collapse">
                    
                      <table class="table table-hover">
                      <tbody>
                          <?php foreach ($carreras as $carrera):?>
                          <tr>
                          <td class="idCarrera"><?php echo $carrera['ID_CARRERA'] ?></td>
                          <td><?php echo $carrera['NOMBRE_CARRERA'] ?></td>
                          </tr>
                          <?php endforeach;?>
                      </tbody>
                      </table>
                
                </div>
              </td>
              <td><a href="modificarFacultad.php?id=<?php echo $facultad['ID_FACULTAD'] ?>" >modificar</a></td>
              
              <td><a href="eliminarFacultad.php?id=<?php echo $facultad['ID_FACULTAD'] ?>" class="eliminar">eliminar</a></td>
              <!--
              -->
            </tr>
        <?php endforeach;?>
      </tbody>
      </table>
      </div>
      <br><br>
  </div>    
<div id='respuesta'></div>


<script type="text/javascript">
$('#seleccionar').click(function () {
    var id = $(this).closest("tr").find('td:eq(0)').text();
    $.cookie("idFacultad", id);
});

 /*

   Funcion para los menus - Abri o cerrar, cuando sea el caso
function accionMenu( cual )
{
  obj = document.getElementById( cual );
  if( obj.style.visibility == "visible" ){
    obj.style.visibility = "hidden";
    obj.style.position = "absolute";
  }
  else{
    obj.style.visibility = "visible";
    obj.style.position = "relative";  
  }
}*/

</script>

 
