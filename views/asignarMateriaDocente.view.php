<?php include("views/global/header.view.php")?>
<?php include('views/global/title.view.php')?>





	<div class="container asignarMateria">		
		<form action="" method="post" class="form-inline">
			<fieldset >
				<legend>Asignacion Materia Docente Horario</legend>
					
					<?php // buscas al docente ?>
					<div class="col-md-6 form-group">
						<div class="col-md-12 form-group">
							<label class="control-label" > Nombre del Docente</label>
						</div>

						<div class="col-md-6 form-group">
						<input type="text" disabled='disabled' class="input-global form-group form-control" name="nomDoc" >
						</div>

						<div class="container col-md-6 form-group">
		                        <button type="button" class="btn btn-default btn-global" data-toggle="modal" data-target="#myModal" onclick="">Buscar</button>
		                </div>
					</div>
					<?php // buscas la materia   ?>
					<div class="col-md-6 form-group">
						<div class="col-md-12 form-group">
							<label class="control-label" > Nombre de la Materia:</label>
						</div>

						<div class="col-md-6 form-group">
						<input type="text" disabled='disabled' class="input-global form-group form-control" name="nomMat" >
						</div>

						<div class="container col-md-6 form-group">
		                        <button type="button" class="btn btn-default btn-global" data-toggle="modal" data-target="#myModal" onclick="">Buscar</button>
		                </div>
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
			                            <th name="th-nom-au"><strong>Materia</strong> </th>
			                            <th name="th-des-au"><strong>Grupo</strong></th>
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
			                <select class="form-control select-global " >
			                    <?php foreach ($inicioHoras as $inicioHora): $hor=substr("".$inicioHora['INICIO_HORARIO'], 0, -3);?>
			                        <option  value="<?php echo  $inicioHora['INICIO_HORARIO'] ?>"><?php echo  $hor ?></option>
			                    <?php endforeach;?>
			                </select>   
	               		</div>
					</div>
					<?php //hora del final de horarip ?>
					<div class="col-md-2 ">
						<div class="col-md-12 form-group">
							<label class="control-label"> Hora Fin:</label>
						</div>
						
						<div class=" form-group col-md-12 div-select ">	
			                <select class="form-control select-global" name="" >
			                    <?php foreach ($finHoras as $finHora): $horf=substr("".$finHora['FIN_HORARIO'], 0, -3);?>
			                        <option value="<?php echo  $finHora['FIN_HORARIO'] ?>"><?php echo  $horf ?></option>
			                    <?php endforeach;?>
			                </select>
	               		</div>
					</div>
					<?php  //buscas el aula de para registar ?>
					<div class="col-md-2 form-group">
						<div class="col-md-12 form-group">
							<label class="control-label" > Aula:</label>
						</div>
						<div class=" form-group col-md-12 div-select ">	
			                <select class="form-control select-global " data-live-search="true" name="" >
			                    <?php foreach ($aulas as $aula):?>
			                        <option value="<?php echo  $aula['NOMBRE_AULA'] ?>"><?php echo $aula['NOMBRE_AULA'] ?></option>
			                    <?php endforeach;?>
			                </select>
	               		</div>
					</div>

					</div>
			</fielsdet>



			<div class="col-md-12 col-md-offset-4">
				<div class="col-md-2 ">
				<button type="submit" class="btn btn-info btn-global" >Guardar</button>
				</div>
				<div class="col-md-2">
				<button class="btn btn-info btn-global" href="espacioSecretaria.php">  Salir  </button>
                </div>
			</div>
		</from>
	</div>
					