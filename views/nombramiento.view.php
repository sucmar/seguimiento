<?php include("views/global/header.view.php")?>

<?php include('views/global/title.view.php')?>




	<div class="container nombramiento">
		<form>
			<fieldset>
			<legend>Nombramiento de Docente</legend>
				<div class="col-md-12">
					<div class="col-md-3">
						<label for="nombre" class="control-label">Nombre del Docente</label>
					</div>
					<div class=" form-group col-md-3">
				  		<input class="form-control" id="nombre" type="text" name="nombre"/>
				  	</div>
				  	<div class=" form-group col-md-6">
				  		<button type="submit" class="btn btn-info btn-global">Buscar</button>
				  	</div>
				</div>
				
				<div class=" form-group col-md-3">
					<label class="control-label">Facultad:</label>
				</div>
				<div class=" form-group col-md-3">
					<input class="form-control input-global" type="text" name="" placeholder="fcyt">	
				</div>
				<div class="form-group col-md-3">
					<label class="control-label">Departamento:</label>
				</div>
				<div class=" form-group col-md-3">
					<input class="form-control input-global" type="text" name="inf-sis">	
				</div>
				<div class="form-group col-md-3">
					<label class="control-label">Carrera:</label>
				</div>
				<div class="form-group col-md-3">
					<input class="form-control input-global" type="text" name="Sistema">	
				</div>
				<div class=" form-group col-md-3">
					<label class="control-label"> Diploma Academico:</label>
				</div>
				<div class="form-group col-md-3">
					<input  class="form-control input-global" type="text" name="">	
				</div>

				<div class="d-borde col-md-12">
				<div class=" col-md-10">
					<label class="">Categoria del Nombramiento Solicitado</label>
				</div>
				

				<div class="col-md-3">
					
				</div>

				<div class=" form-group checkbox col-md-3 ">
					<label >
          				<input type="checkbox">Interino:
        			</label>
        			<br>
        			<label>
          				<input type="checkbox"> Titular:
        			</label>
				</div>
				<div class=" checkbox col-md-6 ">
					<label>
          				<input type="checkbox"> Asistente (A):
        			</label>
        			<br>
        			<label>
          				<input type="checkbox"> Adjunto(B):
          			</label>
          			<br>
        			<label>
          				<input type="checkbox"> Catedratico(C):
        			</label>
				</div>
				</div>
				<div class="form-group col-md-2">
					<label>Asignatura(s):</label>
				</div>

				<div class="  col-md-4">

					<div  class="form-group col-md-6">
						<label>Hrs Semana:</label>
					</div>
				
					<div class="form-group col-md-5">
						<input class="form-hh input-global"type="text" name="">
					</div >
				</div>
				<div class="  col-md-4">
					<div class="form-group col-md-6">
						<label>Hrs Mes:</label>
					</div>
					<div class="form-group col-md-5">
						<input  class="form-hh input-global" type="text" name="">
					</div>
				</div>
				
				<div class="form-group col-md-12 ">
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
			 	
				<div class="col-md-4">
					<label>Tiempo de Dedicacion:</label>
				</div>
				<div class="col-md-3">
					<label>
          				<input type="checkbox"> Parcial
          			</label>
				</div>
				<div class="col-md-3">
          			<label>
          				<input type="checkbox"> Exclusivo
          			</label>
				</div>

				<div class="col-md-4">
          			<label>Nombramiento a Partir del:</label>
				</div>
				<div class="col-md-2">
          				<input  class="form-hh input-global" type="text">
				</div>
				<div class="col-md-3">
          			<label>Tiempo de Duracion:</label>
				</div>
				<div class="col-md-2">
          				<input class="form-hh input-global" type="text">
				</div>
				<div class="col-md-4">
          			<label>Fecha de Solicitud:</label>
				</div>
				<div class="col-md-2">
          				<input class="form-hh input-global" type="text">
				</div>
			</fieldset>
			<div class="col-md-8">
					
				</div>
			<div class="col-md-2">
				<button type="submit" class="btn btn-info btn-global btn-bs" >Guardar</button>
				</div>
				<div class="col-md-2">
				<button type="submit" class="btn btn-info btn-global btn-bs" > Salir </button>
			<div>
		</form>
	</div>