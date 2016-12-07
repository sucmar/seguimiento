<?php include("views/global/header.view.php")?>
<?php include('views/global/title.view.php')?>

	<div class="container seguimiento">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" class="form-inline">
			<fieldset >
                <?php $NUM = 34 ?>
				<legend>Registro de Seguimiento de Docentes</legend>
				<div class="col-md-12">
				<div class="col-md-3 form-group">
					<label class="lab control-label" > Nombre del Docente</label>
				</div>
				<div class="col-md-3 form-group">
					<input type="text" class="input-global form-group form-control" name="nom">
				</div>
				<div class="col-md-2 form-group">
					<button type="submit" class="btn btn-info btn-global btn-bs" > Buscar</button>
				</div>
				<div class="col-md-1 form-group">
					<label class="lab">Dedicación</label>
				</div>
				<div class="col-md-3 form-group">
					<input type="text" disabled='disabled' class="input-global form-control" value="<?php echo $NUM ?>" name="">
				</div>
				</div>
			</fieldset>
		</form>

		<form class="form-inline">
			<div class="col-md-12">
				<div class="col-md-1 form-group">
					<label class=" control-label" > Materia</label>
				</div>
				<div class="col-md-3 form-group">
					<input type="text" class="input-global form-group form-control" name="nom">
				</div>
				<div class="col-md-1 form-group">
					<br>
					<label class="lab"> Grupo</label>
				</div>
				<div class="col-md-3 form-group">
					<br>
					<label class=""> Materia que Dictara</label>
				</div>

				<div class="col-md-3 form-group">
					<br>
					<label class="lab"> Categoria del Docente</label>
				</div>
				
			</div>
			</fieldset>
		</form>
		<form class="form-inline">
			<div class=" col-md-12">
				<div class="form-group  tabla-cont table-hover col-md-4">
				<table class="table table-hover ta-mat">
				    <tbody>
                        <?php foreach ($materias as $materia):?>

                            <tr>
                                <th><?php echo $materia['SIGLA_MATERIA'] ?></th>
                                <td><?php echo $materia['NOMBRE_MATERIA'] ?></td>
                            </tr>
                        <?php endforeach;?>

				    </tbody>
				</table>
			 	</div>

			 	<div class="form-group col-md-1  ">
	                <select class="form-control sel-grupo" name='grupo' id='grupo'>
	                    <option value='1'>1</option>
	                    <option value='2'>2</option>
	                    <option value='3'>3</option>  
	                    <option value='4'>4</option>
	                    <option value='5'>5</option> 
	                    <option value='6'>6</option>
	                </select>
	                <div class="input-group-btn-vertical">
	                <br>
					    <button class="btn btn-info btn-global btn-peq" type="button"><i class="glyphicon glyphicon-chevron-right"></i></button>
					<br>
					<br>
					    <button class="btn btn-info btn-global btn-peq" type="button"><i class="glyphicon glyphicon-remove"></i></button>
					</div> 
					

            	</div>

            	<div class="form-group col-md-4 ">
				 	<div class=" tabla-cont table-hover">
				 	<table class="table table-hover ">
				    <thead>
				      <tr>
				        <th>Sigla</th>
				        <th>Materia</th>
				        <th>Grupo</th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td>1213</td>
				        <td>Ingles I</td>
				        <td>1</td>
				      </tr>
				      <tr>
				        <td>1213</td>
				        <td>Ingles I</td>
				        <td>1</td>
				      </tr>
				      <tr>
				        <td>1213</td>
				        <td>Ingles I</td>
				        <td>1</td>
				      </tr>
				    </tbody>
				  	</table>
				 	</div>
			 	</div>

			 	<div class="form-group col-md-3 d-borde">
					<div class="form-check">
				    <label class="form-check-label">
				      	<input type="checkbox" class="form-check-input">
				      A (Asist.)
				    </label>
				 	</div>
					<div class="form-check">
					    <label class="form-check-label">
					      	<input type="checkbox" class="form-check-input">
					      B(Adj.)
					    </label>
					</div>
					<div class="form-check">
					    <label class="form-check-label">
					      	<input type="checkbox" class="form-check-input">
					      C(Cat.)
					    </label>
					</div>
					<div class="form-check">
					    <label class="form-check-label">
					      	<input type="checkbox" class="form-check-input">
					      Aux. Doc.
					    </label>
					</div>
					<div class="form-group ">
						<label for="ot-ca">Otro Cargo Umss</label>
				   		<input type="text" class="form-control " id="otro-car" placeholder="">
					</div>
				 </div>
			</div>
		</form>
				
		<form class="form-inline">
			<div class=" form-group col-md-12" >
				<label>Aqui va el nombre de la Materia</label>
			</div>

			<div class="col-md-12">
				<div class="col-md-1 form-group ">
					<label class="control-label" > Grupo:</label>
					<input type="text" class="input-global form-tam form-group" name="grup">
				</div>

				<div class="col-md-3 form-group ">
					<label class="control-label" > Facultad:</label>
					<input type="text" class="input-global form-group" name="grup">
				</div>

				<div class="col-md-3 form-group ">
					<label class="control-label" > Departamento:</label>
					<input type="text" class="input-global form-group" name="dep">
				</div>

				<div class="col-md-3 form-group ">
					<label class="control-label" > Carrera:</label>
					<input type="text" class="input-global form-group" name="grup">
				</div>

				<div class="col-md-2 form-group ">
					<label class="control-label" > Tipo:</label>
					<input type="text" class="input-global form-tam form-group" name="grup">
				</div>
			</div>
			
		</form>

		<form class="form-group">
			<div class=" col-md-12">
				<label>  </label>
			</div>
			<div class=" col-md-12">
				<div class="form-group  d-borde col-md-3 ">
					<div class=" form-group col-md-7 form-if">	
						<label for="lab-dia" >Dia:</label>
		                <select class="form-control" name='dia' id='dia'>
			                    <option value='lun'>Lunes</option>
			                    <option value='mar'>Martes</option>
			                    <option value='mie'>Miercoles</option>  
			                    <option value='jue'>Jueves</option>
			                    <option value='vie'>Viernes</option> 
			                    <option value='sab'>Sabado</option>
		               	</select>
	               	</div>
	               	
	               	<div class="form-group col-md-5 form-if" >
						<label for="aula">Aula:</label>
				    	<input type="text" class="form-control " id="aula" placeholder="690b">
					</div>	

					<div class=" form-group col-md-6 form-if" >	
						<label for="h-i" >Hr. inicio</label>
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

	               	<div class="form-group col-md-6 form-if">	
						<label for="h-f" >Hr. Fin</label>
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

				<div class="form-group col-md-1" >
					<br>
					<br>
					<div class="input-group-btn-vertical">
			      		<button class="btn btn-info btn-global	" type="button"><i class="glyphicon glyphicon-chevron-right"></i></button>
			      		<br>
			      		<br>

			      		<button class="btn btn-info btn-global" type="button"><i class="glyphicon glyphicon-remove"></i></button>
					</div> 
				</div>

				<div class="form-group col-md-5 table-hover tab-hor">
					<table class="table table-hover tabla-hor ">
					    <thead>
					      <tr>
					        <th>Hor</th>
					        <th>Lun</th>
					        <th>Mar</th>
					        <th>Mie</th>
					        <th>Jue</th>
					        <th>Vie</th>
					        <th>Sab</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <td>06:45</td>
					        <td></td>
					        <td></td>
					        <td>X</td>
					        <td></td>
					        <td></td>
					      </tr>
					    </tbody>
					</table>
				</div>
				<div class="form-group col-md-3 form-hora d-borde  ">
					<div class="col-md-9">
						<label class="lab-s" for="hr-se">Hrs. Semana:</label>
					</div>
					<div class="col-md-3">
						<input class="form-hh input-global" id="hr-s" type="text" name="hr-sema">
					</div>

					<div class="col-md-9">
						<label class=" lab-t-m" for="hr-">Hrs. Teoria Mes:</label>
					</div>
					<div class="col-md-3">
						<input class="form-hh input-global" id="hr-t-mes" type="text" name="hr-teo-mes">
					</div>

					<div class="col-md-9">
						<label class=" lab-p-m" for="hr-se">Hrs. Practica Mes:</label>
					</div>
					<div class="col-md-3">
						<input class="form-hh input-global" id="hr-p-mes" type="text" name="hr-pra-mes">
					</div>

					<div class="col-md-9">
						<label class=" lab-p-m" for="hr-se">Hrs. Mes Materia:</label>
					</div>
					<div class="col-md-3">
						<input class="form-hh input-global" id="hr-p-mes" type="text" name="hr-mes-mat">
					</div>
					<div class="col-md-9">
						<label class=" lab-p-m" for="hr-se">Hrs. Autorizadas Mes:</label>
					</div>
					<div class="col-md-3">
						<input class="form-hh input-global" id="hr-p-mes" type="text" name="hr-pra-mes">
					</div>
					<div class="col-md-9">
						<label class=" lab-p-m" for="hr-se">Exclusividad:</label>
					</div>
					<div class="col-md-3">
						<input class="form-hh input-global" id="hr-p-mes" type="text" name="hr-pra-mes">
					</div>

					<div class="col-md-12">
						<button type="submit" class=" btn-info btn-global" >  Registrar Materia </button>
					</div>
				</div>
			</div>		
		</form>



		<form class=" form-group form-inline">

			<div class=" form-group col-md-12">
				<div class=" form-group col-md-4">
				</div>

				<div class=" form-group col-md-2 form-if" >	
						<label for="h-i" >Mañn:</label>
		                <select class="form-control" name='hr-ini-mañ' id='inicio-d'>
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

	               	<div class="form-group col-md-2 form-if">	
						<label for="h-f" > a </label>
		                <select class="form-control" name='hr-fin-mañ' id='fin-d'>
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

	               	<div class=" form-group col-md-2 form-if" >	
						<label for="h-i" >Tarde:</label>
		                <select class="form-control" name='hr-ini-tad' id='inicio-t'>
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

	               	<div class="form-group col-md-2 form-if">	
						<label for="h-f" > a </label>
		                <select class="form-control" name='hr-fin-tar' id='fin-t'>
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
		</form>
		<br>
		<br>
		<br>

		<form class="form-group form-inline">
			<div class="form-group col-md-12" >
				<label> Actividad Docente</label>
			</div>
			<div class="form-group col-md-12">
				<div class="col-md-3 d-borde ">
					<div class="col-md-8">
						<label class="" for="hr">Hrs. Teoria</label>
					</div>
					<div class="col-md-4">
						<input class="form-hh input-global" id="hr" type="text" name="hr">
					</div>

					<div class="col-md-8">
						<label class="" for="hr">Hrs. Practica:</label>
					</div>
					<div class="col-md-4">
						<input class="form-hh input-global" id="hr" type="text" name="hr">
					</div>

					<div class="col-md-8">
						<label class="" for="hr">Hrs. Investig.:</label>
					</div>
					<div class="col-md-4">
						<input class="form-hh input-global" id="hr" type="text" name="hr">
					</div>

					<div class="col-md-8">
						<label class="" for="hr">Hrs. Extencion:</label>
					</div>
					<div class="col-md-4">
						<input class="form-hh input-global" id="hr" type="text" name="hr">
					</div>

					<div class="col-md-8">
						<label class="" for="hr">Hrs. Servicio:</label>
					</div>
					<div class="col-md-4">
						<input class="form-hh input-global" id="hr" type="text" name="hr">
					</div>

				</div>

				
				<div class="col-md-4 d-borde ">
					<div class="col-md-7">
						<label class="" for="hr">Hrs. Produccion:</label>
					</div>
					<div class="col-md-3">
						<input class="form-hh input-global" id="hr" type="text" name="hr">
					</div>

					<div class="col-md-7">
						<label class="" for="hr">Hrs. Servicio Acad.:</label>
					</div>
					<div class="col-md-3">
						<input class="form-hh input-global" id="hr" type="text" name="hr">
					</div>

					<div class="col-md-7">
						<label class="" for="hr">Hrs. Producc. Acad.:</label>
					</div>
					<div class="col-md-3">
						<input class="form-hh input-global" id="hr" type="text" name="hr">
					</div>

					<div class="col-md-7">
						<label class="" for="hr">Hrs. Adminis. Acad.:</label>
					</div>
					<div class="col-md-3">
						<input class="form-hh input-global" id="hr" type="text" name="hr">
					</div>
					<div class="col-md-7">
						<label class="" for="hr">.</label>
					</div>
					<div class="col-md-3">
						<label class="" for="hr">.</label>
					</div>

				</div>

				<div class="col-md-5 d-borde ">
					<div class="col-md-9">
						<label class="" for="hr">Total Hrs Trabajadas Semana:</label>
					</div>
					<div class="col-md-3">
						<input class="form-hh input-global" id="hr" type="text" name="hr">
					</div>

					<div class="col-md-9">
						<label class="" for="hr">Total Hrs Trabajadas Mes:</label>
					</div>
					<div class="col-md-3">
						<input class="form-hh input-global" id="hr" type="text" name="hr">
					</div>

					<div class="col-md-9">
						<label class="" for="hr">Total Hrs. Autorizadas:</label>
					</div>
					<div class="col-md-3">
						<input class="form-hh input-global" id="hr" type="text" name="hr">
					</div>

					<div class="col-md-9">
						<label class="" for="hr">Tiempo Parcial:</label>
					</div>
					<div class="col-md-3">
						<input class="form-hh input-global" id="hr" type="text" name="hr">
					</div>

					<div class="col-md-9">
						<label class="" for="hr">Dedicacion Exclusiva:</label>
					</div>
					<div class="col-md-3">
						<input class="form-hh input-global" id="hr" type="text" name="hr">
					</div>
				</div>
			</div>
		</form>

		<form class="form-group form-inline">
			<div class="col-md-12">
				<div class="col-md-8">
					
				</div>
				<div class="col-md-2">
				<button type="submit" class="btn btn-info btn-global btn-bs" >Guardar</button>
				</div>
				<div class="col-md-2">
				<button type="submit" class="btn btn-info btn-global btn-bs" > Salir </button>
				<div>
			</div>
		</form>

	</div>