<?php include("views/global/header.view.php")?>
<?php include('views/global/title.view.php')?>


      <div class="container nt-form-materiaDocente">
        
        <form name="fm-hor-mat" id="fm-hor-mat" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" onsubmit="return validate(); ">

              <legend>Nombre Materia</legend>
              <div class="col-md-12">
                <?php //escoges el dia para horario?>
                
                <div class="col-md-3 ">
                  <div class="col-md-12 form-group">
                    <label class="control-label"> Dia:</label>
                  </div>

                  <div class=" form-group col-md-12"> 
                            <select class="form-control select-global" name='dia' id='dia'>
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
                <div class="col-md-3 ">
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
                <div class="col-md-3 ">
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
                <div class="col-md-3 form-group">
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

              <div class="form-group col-md-8 table-hover tab-hora col-md-offset-2">
                <table class="table table-hover tabla-hora ">
                    <thead>
                      <tr>
                        <th>Hor</th>
                        <th>Lun</th>
                        <th>Mar</th>
                        <th>Mie</th>
                        <th>Jue</th>
                        <th>Vie</th>
                        <th>Sab</th>
                        <th></th>
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
                        <td></td>
                        <td><a href="">Eliminar</a></td>
                      </tr>
                    </tbody>
                </table>
              </div>

              <div class=" form-group col-md-4 col-md-offset-4">
                <button href=" " htype="submit" class="btn registrar btn-global" name="registrarMateria" value="registrarMateria">Registrar</button>
                
                <button tipe="submit" onclick="salir()" class="btn cancelar btn-global"  >Salir</button>

            </div>

            </form>
          </div>