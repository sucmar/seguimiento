<?php include('views/global/header.view.php')?>
<?php include('views/global/title.view.php')?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="nt-cargo">
     <fieldset>
        <legend>MATERIAS:</legend>
            <form action="registroGrupos.php"  method="post">

                <div class="form-group">
                    <label class=" control-label" >Buscar Materia</label>
                    <input type="text" class="input-global form-group form-control" name="campoBuscador" id="buscarMateria" onkeyup="doSearch()" placeholder="busqueda rapida" style="width:50%;">
                </div>

        	<div class="form-group tbl">
                <table class="table tabla-hover" id="tablaMateria">  
                     <tr>
                        <th class="titulo">SIGLA</th>
                        <th class="titulo">MATERIA</th>
                        <th class="titulo"></th>

                    </tr>
                   <tbody>
                     
                    <?php foreach ($materias as $materia):?>
                         <tr>
                          <td name="sigla" id="sigla"><?php echo $materia['SIGLA_MATERIA'] ?></td>
                          <td><?php echo $materia['NOMBRE_MATERIA'] ?></td>
                          <td><button class="seleccionar btn">selecionar</button></td>
                        </tr>
                    <?php endforeach;?>
                   </tbody>
                </table>
            </div>
        <legend>GRUPOS:</legend>
        		<div class="form-group">
                    <label class="form-control" style="background-color:#F5F5F5; border-color:#F5F5F5;">(*) Nombre Grupo:</label>
                    <input name="nom_grupo" class="form-control" type="text" pattern="[1-9A-Z]{1,2}" placeholder="grupo a asignar" style="width:50%;">
                    <input id="sig" type="hidden" name="sigla_post">
                </div>
        <div class="form-group  tabla-cont table-hover">
				<table class="table table-hover ta-mat">  
					<thead>
                    <tr>
                    <th name="materia"><strong>MATERIA</strong> </th>
                    <th name="materia"><strong></strong> </th>
                    <th name="grupo"><strong>GRUPO</strong></th>
					<th></th>
					<th></th>
                    </tr>
					</thead>
				    <tbody>
		<?php foreach ($grupos as $grupo):?>
             <tr>
              <td><?php echo $nombreMateria ?></td>
              <td><?php $grupo['ID_GRUPO'] ?></td>
              <td><?php echo $grupo['NOM_GRUPO'] ?></td>
              <td></td>
		   	  <td><a href="eliminarGrupos.php?id=<?php echo $grupo['ID_GRUPO'] ?>" class="eliminar">eliminar</a></td> 

            </tr>
        <?php endforeach;?>
				    </tbody>
				  </table>
				 </div>

				
				<p>NOTA: Todos los campos con (*) deben ser llenados obligatoriamente</p>
                
				<center>
                		<div class="btn-inline" method="post">
                        <button type="submit" name="insert" class="btn btn-cargo  btn-global" style="width:15%;">Insertar</button>
                        <button name="salir" class="btn btn-cargo btn-global" type="submit" style="width:15%;">Salir</button>
						</div>
				</center>
            </form>
     </fieldset>
</div>
<style>
.seleccionar {
    background-color : white;
    font-weight: bold;
}
.seleccionarGrupo {
    background-color : white;
    font-weight: bold;
}
.eliminarGrupo {
    background-color : white;
    font-weight: bold;
}
	
</style>
<script>
$('.seleccionar').click(function () {
    var id = $(this).closest("tr").find('td:eq(0)').text();
     $('#sig').val(id);
});
$('.seleccionarGrupo').click(function () {
    var id = $(this).closest("tr").find('td:eq(1)').text();
    $.cookie("idGrupo", id);
    var nom = $(this).closest("tr").find('td:eq(2)').text();
    $.cookie("nom_grupo_cookie", nom);
    $.cookie("connected", true);
});

</script>


