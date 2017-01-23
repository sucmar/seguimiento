<?php include("views/global/header.view.php")?>
<?php include('views/global/title.view.php')?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container nt-form-materiaDocente">

    <form name="fm-hor-mat" id="fm-hor-mat" action="horarioMateria.php?idDoc=<?php echo $idDocente?>&idMateria=<?php echo $idMateria?>&grupo=<?php echo $idGrupo?>&idDocMateria=<?php echo $idDocMateria?>" method="POST" onsubmit="return validate();">
        
        <legend><?php echo "*DOCENTE: ".$doc['NOMBRE_DOC']." ".$doc['APELLPATERNO_DOC']." ".$doc['APELLMATERNO_DOC']." <br> *MATERIA: ".$materia['NOMBRE_MATERIA']."  **GRUPO: ".$grupo['GRUPO']?></legend>
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

        <div class="form-group col-md-8 table-hover tab-hora">
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

        <div class="form-group col-md-4 form-hora d-borde  ">
            <div class="col-md-8 col-md-offset-2">
                <?php $hrSema=0; $hrTeoMes=0; $hrPraMes=0; $hrMesMat=0; $hrAutMes=0;

                ?>
                <label class=" lab-p-m" for="hr-se">Horas Academicas</label>
            </div>
            <div class="col-md-9">
                <label class="lab-s" for="hr-se">Hrs. Semana:</label>
            </div>
            <div class="col-md-3">
                <input class="form-hh input-global" id="hr-s" type="text" name="hr-sema" disabled="disabled"
                       value="<?php foreach ($horasA as $listaH): $hrSema=$hrSema+$listaH['HRS_SEMANA']; endforeach ; echo $hrSema; ?>">
            </div>

            <div class="col-md-9">
                <label class=" lab-t-m" for="hr-">Hrs. Teoria Mes:</label>
            </div>
            <div class="col-md-3">
                <input class="form-hh input-global" id="hr-t-mes" type="text" name="hr-teo-mes" disabled="disabled"
                       value="<?php foreach ($horasA as $listaH): $hrTeoMes=$hrTeoMes+$listaH['HRS_TEORIA_MES']; endforeach ; echo $hrTeoMes; ?>" >
            </div>

            <div class="col-md-9">
                <label class=" lab-p-m" for="hr-se">Hrs. Practica Mes:</label>
            </div>
            <div class="col-md-3">
                <input class="form-hh input-global" id="hr-p-mes" type="text" name="hr-pra-mes" disabled="disabled" value="<?php foreach ($horasA as $listaH): $hrPraMes=$hrPraMes+$listaH['HRS_PRACTICA_MES']; endforeach ; echo $hrPraMes; ?>" >
            </div>

            <div class="col-md-9" >
                <label class=" lab-p-m" for="hr-se">Hrs. Mes Materia:</label>
            </div>
            <div class="col-md-3">
                <input class="form-hh input-global" id="hr-p-mes" type="text" name="hr-mes-mat" disabled="disabled" value="<?php foreach ($horasA as $listaH): $hrMesMat=$hrMesMat+$listaH['HRS_MES_MATERIA']; endforeach ; echo $hrMesMat; ?>">
            </div>
            <div class="col-md-9">
                <label class=" lab-p-m" for="hr-se">Hrs. Autorizadas Mes:</label>
            </div>
            <div class="col-md-3">
                <input class="form-hh input-global" id="hr-p-mes" type="text" name="hr-pra-mes" disabled="disabled" value="<?php foreach ($horasA as $listaH): $hrAutMes=$hrAutMes+$listaH['HRS_MES_AUTORIDAD']; endforeach ; echo $hrAutMes; ?>">
            </div>
            <div class="col-md-9">
                <label class=" lab-p-m" for="hr-se">Exclusividad:</label>
            </div>
            <div class="col-md-3">
                <input class="form-hh input-global" id="hr-p-mes" type="text" name="hr-pra-mes" disabled="disabled">
            </div>
            <div class="col-md-9">
                <label class=" lab-p-m" for="hr-se"></label>
            </div>
            <div class="col-md-9">
                <label class=" lab-p-m" for="hr-se"></label>
            </div>
            <div class="col-md-9">
                <label class=" lab-p-m" for="hr-se"></label>
            </div>
        </div>

        <div class=" form-group col-md-4 col-md-offset-4">
            <button              type="submit" class="btn registrar btn-global" name="registrarMateria" value="registrarMateria">Registrar</button>
            <a href="gruposAsignados.php?id=<?php echo $idDocMateria?>&idMateria=<?php echo $idMateria?>&idDoc=<?php echo $idDocente?>" class="btn btn-info btn-global">Atras</a
        </div>

    </form>
</div>
