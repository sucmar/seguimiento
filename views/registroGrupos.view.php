<?php include('views/global/header.view.php')?>

<div class="nt-cargo">
     <fieldset>
        <legend>MATERIAS:</legend>
            <form action="registroGrupos.php"  method="post">
        	<div class="form-group  tabla-cont table-hover">
				<table class="table table-hover ta-mat">  
					 <tr>
                        <td> <strong>CODIGO</strong> </td>
                        <td><strong>MATERIA </strong></td>
                    </tr>
                   <tbody>
					 
					<?php foreach ($materias as $materia):?>
						 <tr>
						  <td name="sigla" id="sigla"><?php echo $materia['SIGLA_MATERIA'] ?></td>
						  <td><?php echo $materia['NOMBRE_MATERIA'] ?></td>
						  <td><button class="seleccionar">selecionar</button></td>
						</tr>
					<?php endforeach;?>
			       </tbody>
	            </table>
		 </div>
        <legend>GRUPOS:</legend>
        <div class="form-group  tabla-cont table-hover">
				<table class="table table-hover ta-mat">  
				    <tbody>
                    <tr>
                    <th name="materia"><strong>MATERIA</strong> </th>
                    <th name="materia"><strong>ID</strong> </th>
                    <td name="grupo"><strong>GRUPO</strong></td>
                    </tr>
		<?php foreach ($grupos as $grupo):?>
             <tr>
              <td><?php echo $nombreMateria ?></td>
              <td><?php echo $grupo['ID_GRUPO'] ?></td>
              <td><?php echo $grupo['NOM_GRUPO'] ?></td>
              <td><button  class="seleccionarGrupo">selecionar</button></td> 
            </tr>
        <?php endforeach;?>
				    </tbody>
				  </table>
				 </div>

        <div class="form-group col-sm-12" >
            <label class:"form-control">Asignar grupo</label>
                </div>
                
                <div class="form-group col-sm-6" >
                    <label class:"form-control">Nombre Grupo:</label>
                    <input name="nom_grupo" class="form-control" type="text">
                    <input id="sig" type="hidden" name="sigla_post">
                </div>
                
                <div class="btn-group col-sm-12" method="post">
                        <button type="submit" name="insert" class="btn btn-cargo col-sm-3 btn-global" >Insertar</button>
                        <button name="modify" class="btn btn-cargo col-sm-3 btn-global" type="submit" >Modificar</button>
                        <button name="delete" class="btn btn-cargo col-sm-3 btn-global" type="submit" >Eliminar</button>
                        <button name="salir" class="btn btn-cargo col-sm-3 btn-global" type="submit" >Salir</button>
                </div>
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


