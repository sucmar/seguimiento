<?php include("views/global/header.view.php")?>
<?php include('views/global/title.view.php')?>


      <div class="container nt-form-materiaDocente">
        
        <form name="fm-hor-mat" id="fm-hor-mat" action="horarioMateria.php?idDoc=<?php echo $idDocente?>&idMateria=<?php echo $idMateria?>&grupo=<?php echo $idGrupo?>" method="POST" onsubmit="return validate(); ">

              <legend><?php echo "Materia:".$materia['NOMBRE_MATERIA']." Grupo: ".$grupo['GRUPO']?></legend>
              <div class="col-md-12">
                <?php //escoges el dia para horario?>
                
                <div class="col-md-3 ">
                  <div class="col-md-12 form-group">
                    <label class="control-label"> Dia:</label>
                  </div>

                  <div class=" form-group col-md-12"> 
                            <select class="form-control select-global" name='dia' id='dia'>
                                <option value='1'>Lunes</option>
                                <option value='2'>Martes</option>
                                <option value='3'>Miercoles</option>  
                                <option value='4'>Jueves</option>
                                <option value='5'>Viernes</option> 
                                <option value='6'>Sabado</option>
                            </select>
                          </div>
                </div>
                
                <?php //horario de inico del horario ?>
                <div class="col-md-3 ">
                  <div class="col-md-12 form-group">
                    <label class="control-label"> Hora Inicio</label>
                  </div>
                  
                  <div class=" form-group col-md-12"> 
                            <select class="form-control select-global " name="hrini" id="hrini" >
                                <?php foreach ($inicioHoras as $inicioHora): $hor=substr("".$inicioHora['INICIO_HORARIO'], 0, -3);?>
                                    <option  value="<?php echo  $inicioHora['ID_HORARIO'] ?>"><?php echo  $hor ?></option>
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
                            <select class="form-control select-global" name="hrfin" id="hrfin" >
                                <?php foreach ($finHoras as $finHora): $horf=substr("".$finHora['FIN_HORARIO'], 0, -3);?>
                                    <option value="<?php echo  $finHora['ID_HORARIO'] ?>"><?php echo  $horf ?></option>
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
                            <select class="form-control select-global " data-live-search="true" name="aula" >
                                <?php foreach ($aulas as $aula):?>
                                    <option value="<?php echo  $aula['ID_AULA'] ?>"><?php echo $aula['NOMBRE_AULA'] ?></option>
                                <?php endforeach;?>
                            </select>
                          </div>
                </div>

              </div>

              <div class="form-group col-md-8 table-hover tab-hora col-md-offset-2">
                <table class="table table-hover tabla-hora ">
                    
                    <thead>
                      <tr>
                        <th align='center' >Hora</th>
                        <th align='center' >Lunes</th>
                        <th align='center' >Martes</th>
                        <th align='center' >Miercoles</th>
                        <th align='center' >Jueves</th>
                        <th align='center' >Viernes</th>
                        <th align='center' >Sabado</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php
                            foreach ($horaInicial as $inicial):  $cont2=1;?>
                        <tr>
                        <td><?php  echo substr("".$inicial['INICIO_HORARIO'], 0, -3)."-".substr("".$inicial['FIN_HORARIO'], 0, -3)?></td>
                        <?php 
                             $cont3;
                            foreach ($horasGrupo as $horasG):
                            
                              if ($inicial['INICIO_HORARIO']==$horasG['INICIO_HORARIO']) {
                                   $encontro=false;
                                  
                                  $cont=$cont2;
                                  //condicion para mostar X en los dias
                                  while($cont<=6 && !$encontro)
                                  {
                                    if($horasG['NOM_DIA']==$cont){//if**?> <td align='center'><a href="eliminarHorarioMateria.php?id=<?php echo $horasG['ID_DIA'] ?>&grupo=<?php echo $idGrupo?> "> <?php echo "X".$cont ;?></a> </td> <?php $encontro=true; /*fin if** */  } else { ?> <td align='center' ></td> <?php }//fin else 
                                      $cont++;
                                      $cont2++;
                                  }
                                  $cont3=$cont;   
                              }

                            endforeach;
                            //llena
                            if($cont3<=6)
                              {
                                while ($cont3<=6) 
                                {
                                    ?> <td align='center' > </td> <?php 
                                    $cont3++; 
                                }
                              }
                        ?>

                         </tr>                      
                        <?php 
                        
                          endforeach; 

                        ?>
            </tbody>
                </table>
              </div>

              <div class=" form-group col-md-4 col-md-offset-4">
                <button href=" " htype="submit" class="btn registrar btn-global" name="registrarMateria" value="registrarMateria">Registrar</button>
                
                <button tipe="submit" onclick="salir()" class="btn cancelar btn-global"  >Salir</button>

            </div>

            </form>
          </div>