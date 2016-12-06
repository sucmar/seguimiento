<?php include("views/global/header.view.php")?>

<?php include('views/global/title.view.php')?>

	<div class="container seguimiento">
		<form class="form-inline">
			<fieldset>
				<legend>Registro de Seguimiento de Docentes</legend>
				<div class="form-group">
					<label for="nom">Docente</label>
				    <input type="text" name="" class="form-control" id="nom-prof" placeholder="Jane Doe">
				</div>
				<button type="submit" class="btn btn-success">Buscar</button>
				<div class="form-group">
				    <label for="tip-doc">Dedicación</label>
				    <input type="text" class="form-control" id="tipo-doc" placeholder="Exclusivo/parcial">
				</div>
				<div class="form-group ">
					<label for="mat">Materia</label>
				    <input type="text" class="form-control " id="materia" placeholder="algebra">
				</div>
			</fieldset>
		</form>

		<form>
			<fieldset>
			<div class="form-group col-md-4" >
				<label for="mat">Materia</label>
				<div class="form-group  tabla-cont table-hover">
				<table class="table table-hover ta-mat">  
				    <tbody>
				      <tr>
				        <td>128912</td>
				        <td>Algebra I</td>
				      </tr>
				      <tr>
				        <td>21312</td>
				        <td>Algebra II</td>
				      </tr>
				      <tr>
				        <td>123123</td>
				        <td>Ingles I</td>
				      </tr>
				      <tr>
				        <td>128912</td>
				        <td>Algebra I</td>
				      </tr>
				      <tr>
				        <td>21312</td>
				        <td>Algebra II</td>
				      </tr>
				      <tr>
				        <td>123123</td>
				        <td>Ingles I</td>
				      </tr>
						<tr>
				        <td>128912</td>
				        <td>Algebra I</td>
				      </tr>
				      <tr>
				        <td>21312</td>
				        <td>Algebra II</td>
				      </tr>
				      <tr>
				        <td>123123</td>
				        <td>Ingles I</td>
				      </tr>

				    </tbody>

				  </table>

				 </div>
			 </div>

			<div class="form-group col-md-1 ">
                <label for="lab-grupo">Grupo:</label>
                <select class="form-control sel-grupo" name='grupo' id='grupo'>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>  
                    <option value='4'>4</option>
                    <option value='5'>5</option> 
                    <option value='6'>6</option>
                </select>
                <div class="input-group-btn-vertical">
				      <button class="btn btn-default" type="button"><i class="fa fa-caret-right"></i></button>
				      <button class="btn btn-default" type="button"><i class="fa fa-caret-left"></i></button>
				</div> 
            </div>

            <div class="form-group col-md-4 ">
				<label for="mat-doc">Materia que Dictara</label>
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

			 <div class="form-group col-md-3">
				<label for="cat-doc">Categoria del Docente</label>
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

			</fieldset>
		</form>
		
		<form >
			<fieldset>
				<div class="form-group">
					<div class="form-group col-md-1">
						<label for="gru">Grupo</label>
					    <input type="text" class="form-control gru-asi " id="gru" placeholder="1">
					</div>
					<div class="form-group col-md-3">
					    <label for="tip-doc">Facultad</label>
					    <input type="text" class="form-control" id="facu" placeholder="Ciencias y Tecnologia">
					</div>
					<div class="form-group col-md-3">
						<label for="mat">Departamento</label>
					    <input type="text" class="form-control " id="dep" placeholder="Inf-Sis">
					</div>
					<div class="form-group col-md-3">
						<label for="mat">Carrera</label>
					    <input type="text" class="form-control " id="car" placeholder="Informatica">
					</div>
					<div class="form-group col-md-2">
						<label for="mat">Tipo</label>
					    <input type="text" class="form-control " id="tipo-d" placeholder="invitado/parcial">
					</div>
				</div>`
			</fieldset>
		</form>

		<form >
			<fieldset class="form-group">
				<div class="form-horas-mat">
					<div class="form-group col-md-3 ">
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
				      		<button class="btn btn-primary	" type="button"><i class="glyphicon glyphicon-chevron-right"></i></button>
				      		<br>
				      		<br>

				      		<button class="btn btn-primary" type="button"><i class="glyphicon glyphicon-remove"></i></button>
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

					<div class=" col-md-3 form-group form-hora">
						 	<label class="col-md-8 control-label lab-h" for="hr-se">Hr Semana</label>
						 	<div class="col-md-4">
						    	<input class="form-control" id="hr-s" type="text" name="hr-sema"
						  	</div>
					</div>
				
						<div class="form-group form-hora">
						 	<label class="col-sm-8 control-label lab-h" for="hr-te-me">Hrs Teorico Mes</label>
						 	<div class="col-sm-4">
						    	<input class="form-control" id="hr-t-m" type="text" name="hr-te-mes"
						  	</div>
						</div>
						
						<div class="form-group form-hora">
						 	<label class="col-sm-8 control-label lab-h" for="hr-p-me">Hrs Practica Mes</label>
						 	<div class="col-sm-4">
						    	<input class="form-control" id="hr-p-m" type="text" name="hr-pra-mes"
						  	</div>
						</div>
						
						<div class="form-group form-hora">
						 	<label class="col-sm-8 control-label lab-h" for="hr-m-m">Hrs Mes Materia</label>
						 	<div class="col-sm-4">
						    	<input class="form-control" id="hr-m-me" type="text" name="hr-mat-mes"
						  	</div>
						</div>

						<div class="form-group form-hora">
						 	<label class="col-sm-8 control-label lab-h" for="hr-a-me">Hrs Autoririzadas Mes</label>
						 	<div class="col-sm-4">
						    	<input class="form-control" id="hr-a-m" type="text" name="hr-aut-mes"
						  	</div>
						</div>

						<div class="form-group form-hora">
						 	<label class="col-sm-8 control-label lab-h" for="exc">Exclusividad</label>
						 	<div class="col-sm-4">
						    	<input class="form-control" id="hr-e" type="text" name="excl"
						  	</div>
						</div>
					
					</div>
					<button href="" onclick="" class="btn btn-info reg-mat" >Registar Materia</button>	
				</div>
			</fieldset>
		</form>
		<button href="" onclick="" class="btn btn-info reg-seg col-lg-offset-3" >Registar</button>
		<button href="" onclick="" class="btn btn-info can-seg col-lg-offset-3" >Cancelar</button>
	</div>
	
