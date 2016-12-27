<?php include("views/global/header.view.php")?>
<?php include('views/global/title.view.php')?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<div class="container asignarMateria">		
		<form action="" method="post" class="form-inline">
			<fieldset>
				<legend>Asignacion Materia Docente Horario</legend>
					
					<?php // buscas al docente ?>
					<div class="col-md-6 form-group">
						<div class="col-md-4 form-group">
							<label class="control-label" > Nombre del Docente</label>
						</div>

						<div class="col-md-6 form-group">
                            <div id="resp"></div>
						</div>

                        <div class="col-md-2 form-group">

                            <!-- Boton buscar -->
                            <button type="button" class="btn btn-default btn-global" data-toggle="modal" data-target="#myModal">Buscar</button>
                            <!-- Boton buscar -->


                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group col-sm-12">
                                                    <label>(*) Criterio:</label>
                                                    <input class="form-control input-global" type="text" id="buscado" onkeyup="buscar()">
                                                </div>
                                                <div class="container col-sm-12">
                                                    <table class="table table-hover" id="data">
                                                        <thead>
                                                        <tr>
                                                            <th>ID DOCENTE</th>
                                                            <th>NOMBRE</th>
                                                            <th>APELLIDO PATERNO</th>
                                                            <th>APELLIDO MATERNO</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php foreach ($docentes as $docente):?>
                                                            <tr id="seleccionar">
                                                                <td id="ide"><?php echo $docente['ID_DOCENTE'] ?></td>
                                                                <td id="nombre"><?php echo $docente['NOMBRE_DOC'] ?></td>
                                                                <td id="apellidoP"><?php echo $docente['APELLPATERNO_DOC'] ?></td>
                                                                <td id="apellidoM"><?php echo $docente['APELLMATERNO_DOC'] ?></td>
                                                            </tr>
                                                        <?php endforeach;?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </form>
                                            <p><b>Los campos con (*) deben ser llenados obligatoriamente.</b></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-info btn-global" data-dismiss="modal">Aceptar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Fin Modal -->
                        </div>
					</div>



					<?php // buscas la materia   ?>
					<div class="col-md-6 form-group">
						<div class="col-md-12 form-group">
							<label class="control-label" > Nombre de la Materia:</label>
						</div>

						<div class="col-md-6 form-group">
						    <input type="text" disabled='disabled' class="input-global form-group form-control" name="nomMat" >
                            <div id="idMateria"></div>
						</div>

						<div class="container col-md-6 form-group">
		                        <button type="button" class="btn btn-default btn-global" data-toggle="modal" data-target="#ModalMateria" onclick="">Buscar</button>
		                </div>

                        <!-- Modal -->
                        <div class="modal fade" id="ModalMateria" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group col-sm-12">
                                                <label>(*) Criterio:</label>
                                                <input type="text" class="input-global form-group form-control" name="campoBuscador" id="buscarMateria" onkeyup="doSearch()">
                                                <br>
                                                <br>
                                                <br>
                                            </div>
                                            <br>
                                            <div class="container col-sm-12 tabla-materia">
                                                <table class="table table-hover ta-mat" id="tablaMateria">
                                                    <tr>
                                                        <td></td>
                                                        <td> <strong>CODIGO</strong> </td>
                                                        <td><strong>MATERIA </strong></td>
                                                    </tr>
                                                    <tbody>

                                                    <?php foreach ($materias as $materia):?>
                                                        <tr>
                                                            <td id="materiaId"><?php echo $materia['ID_MATERIA'] ?></td>
                                                            <td><?php echo $materia['SIGLA_MATERIA'] ?></td>
                                                            <td><?php echo $materia['NOMBRE_MATERIA'] ?></td>
                                                        </tr>
                                                    <?php endforeach;?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </form>
                                        <p><b>Los campos con (*) deben ser llenados obligatoriamente.</b></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info btn-global" data-dismiss="modal">Aceptar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fin modal -->
					</div>
					<?php// tabla de materias?>

					<br>
					<br>
					<br>
					<br>
					<div class="col-md-12">
						<div class="tabla-aula table-hover table-responsive col-md-6 col-md-offset-3">
	                		<table class="table table-hover" id="tablaAula" class="tablaAula">
			                    <thead>
			                        <tr>
			                            <th name=""><strong>Nro</strong> </th>
			                            <th name="th-nom-au"><strong>Aula</strong> </th>
			                            <th name="th-des-au"><strong>Ubicacion</strong></th>
			                        </tr>
			                    </thead>
			                    <tbody class="tbody-aula">
			                    <?php // $cont=1;
			                       //while ($row=$resultado->fetch_assoc()) { ?>
			                    <tr id="<?php //echo "".$row['ID_AULA']?>">
			                        <td><?php //echo "".$cont++; ?></td>
			                        <td><?php //echo $row['NOMBRE_AULA'] ?></td>
			                        <td><?php //echo $row['DESCRIPCION_AULA'] ?></td>
			                        <td class="idAula"><?php //$row['ID_AULA'];?>  </td>
			                    </tr>
			                	<?php //} ?>
			                    </tbody>
		                  	</table>
	                 	</div>
					</div>

					<br><br><br><br><br><br><br><br><br>
					
					<div class="col-md-offset-2">
					<?php //escoges el dia para horario?>
					
					<div class="col-md-2 ">
						<div class="col-md-12 form-group">
							<label class="control-label"> Dia:</label>
						</div>

						<div class=" form-group col-md-12">
			                <select class="form-control" name='dia' id='dia'>
			                    <option value='Lunes'>Lunes</option>
			                    <option value='Martes'>Martes</option>
			                    <option value='Miercoles'>Miercoles</option>
			                    <option value='Jueves'>Jueves</option>
			                    <option value='Viernes'>Viernes</option>
			                    <option value='Sabado'>Sabado</option>
			               	</select>
	               		</div>
					</div>

					<?php //horario de inico del horario ?>
					<div class="col-md-2 ">
						<div class="col-md-12 form-group">
							<label class="control-label"> Hora Inicio</label>
						</div>

						<div class=" form-group col-md-12">
			                <select class="form-control" name='hr-inicio' id='inicio'>
			                     <option	value=''>	06:45	</option>
								 <option	value=''>	07:30	</option>
								 <option	value=''>	08:15	</option>
								 <option	value=''>	09:00	</option>
								 <option	value=''>	09:45	</option>
								 <option	value=''>	10:30	</option>
								 <option	value=''>	11:15	</option>
								 <option	value=''>	12:00	</option>
								 <option	value=''>	12:45	</option>
								 <option	value=''>	13:30	</option>
								 <option	value=''>	14:15	</option>
								 <option	value=''>	15:00	</option>
								 <option	value=''>	15:45	</option>
								 <option	value=''>	16:30	</option>
								 <option	value=''>	17:15	</option>
								 <option	value=''>	18:00	</option>
								 <option	value=''>	18:45	</option>
								 <option	value=''>	19:30	</option>
								 <option	value=''>	20:15	</option>
								 <option	value=''>	21:00	</option>
		               	</select>
	               		</div>
					</div>
					<?php //hora del final de horarip ?>
					<div class="col-md-2 ">
						<div class="col-md-12 form-group">
							<label class="control-label"> Hora Fin:</label>
						</div>

						<div class=" form-group col-md-12">
			                <select class="form-control" name='hr-fin' id='fin'>
			                     <option	value=''>	07:30	</option>
								 <option	value=''>	08:15	</option>
								 <option	value=''>	09:00	</option>
								 <option	value=''>	09:45	</option>
								 <option	value=''>	10:30	</option>
								 <option	value=''>	11:15	</option>
								 <option	value=''>	12:00	</option>
								 <option	value=''>	12:45	</option>
								 <option	value=''>	13:30	</option>
								 <option	value=''>	14:15	</option>
								 <option	value=''>	15:00	</option>
								 <option	value=''>	15:45	</option>
								 <option	value=''>	16:30	</option>
								 <option	value=''>	17:15	</option>
								 <option	value=''>	18:00	</option>
								 <option	value=''>	18:45	</option>
								 <option	value=''>	19:30	</option>
								 <option	value=''>	20:15	</option>
								 <option	value=''>	21:00	</option>
								 <option	value=''>	21:45	</option>
		               	</select>
	               		</div>
					</div>
					<?php  //buscas el aula de para registar ?>
					<div class="col-md-6 form-group">
						<div class="col-md-12 form-group">
							<label class="control-label" > Aula:</label>
						</div>
						<div class="col-md-6 form-group">
						<input type="text" disabled='disabled' class="input-global form-group form-control" name="nomMat" >
						</div>
						<div class="container col-md-6 form-group">
		                        <button type="button" class="btn btn-default btn-global" data-toggle="modal" data-target="#myModal" onclick="">Buscar</button>
		                </div>
					</div>
			</fieldset>
			<div class="col-md-12 col-md-offset-4">
				<div class="col-md-2 ">
				<button type="submit" class="btn btn-info btn-global" >Guardar</button>
				</div>
				<div class="col-md-2">
				<button class="btn btn-info btn-global" href="espacioSecretaria.php">  Salir  </button>
                </div>
			</div>
        </form>
	</div>
					
