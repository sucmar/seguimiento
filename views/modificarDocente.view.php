<?php include("views/global/header.view.php")?>
<script>
    $(document).ready(function() {
        $("#fec-nac").datepicker();
    });
</script>
<!--<script type="text/javascript">-->
<!--    function myFunction(){-->
<!--        var x = document.getElementById('miDiv');-->
<!---->
<!--        x.style.display = 'none';-->
<!---->
<!--    }-->
<!--</script>-->
<!--<script type="text/javascript">-->
<!--    function miFunction(){-->
<!--        var x = document.getElementById('miDiv');-->
<!--        if(x.style.display === 'none'){-->
<!--            x.style.display = 'block';-->
<!--        }-->
<!--    }-->
<!--</script>-->
<div class="contenedor">
    <div class="container nt-form-docente ">

        <form action="actualizarDocente.php?id=<?php echo $docentes['ID_DOCENTE'] ?>&idSeg=<?php echo $seguimiento['IDSEGUIMIENTO'] ?>" method="POST" onsubmit="return validate();">
            <fieldset class="form-group ">
                <LEGEND>Registro de Docentes</LEGEND>
                <div class="form-group div-form-nom col-md-3">
                    <label for="lab-nombre">(*) Nombres:</label>
                    <input type="text" REQUIRED class="form-control input-global" id="nombres" name="nombre" placeholder="nombres" value="<?php echo $docentes['NOMBRE_DOC']; ?>">
                </div>

                <div class="form-group div-form-ape-pat col-md-3">
                    <label for="lab-ape-pat">(*) Apellido Paterno</label>
                    <input type="text" class="form-control input-global" id="ape-pat" name="apePaterno" placeholder="apellido paterno" value="<?php echo $docentes['APELLPATERNO_DOC']; ?>" >
                </div>

                <div class="form-group div-form-ape-mat col-md-3">
                    <label for="lab-ape-mat" >Apellido Materno</label>
                    <input type="text" class="form-control input-global" id="ape-mat" name="apeMaterno" placeholder="apellido materno" value="<?php echo $docentes['APELLMATERNO_DOC']; ?>" >
                </div>

                <div class="col-md-3">
                    <div class="form-group col-xs-2 div-form-ci">
                        <label for="lab-ci"> (*) C.I.:</label>
                        <input type="text" class="form-control input-global" id="ci" name="ci" placeholder="carnet" value="<?php echo $docentes['CI_DOCENTE']; ?>" >
                    </div>

                    <div class="form-group col-xs-2 div-form-sel">
                        <label for="lab-expendido">Expedido:</label>
                        <select class="form-control sel-expendido select-global" name='departamento' id='departamento' >
                            <?php if($docentes['CIEXPEDIDO_DOC'] == "LPZ"): ?>
                                <option value='LPZ'>LPZ</option>
                                <option value='CBBA'>CBBA</option>
                                <option value='SCZ'>SCZ</option>
                                <option value='PTS'>PTS</option>
                                <option value='TJA'>TJA</option>
                                <option value='ORU'>ORU</option>
                                <option value='BEN'>BEN</option>
                                <option value='PDO'>PDO</option>
                                <option value='CHQ'>CHQ</option>
                            <?php endif;?>
                            <?php if($docentes['CIEXPEDIDO_DOC'] == "CBBA"): ?>
                                <option value='CBBA'>CBBA</option>
                                <option value='SCZ'>SCZ</option>
                                <option value='PTS'>PTS</option>
                                <option value='TJA'>TJA</option>
                                <option value='ORU'>ORU</option>
                                <option value='BEN'>BEN</option>
                                <option value='PDO'>PDO</option>
                                <option value='CHQ'>CHQ</option>
                                <option value='LPZ'>LPZ</option>
                            <?php endif;?>
                            <?php if($docentes['CIEXPEDIDO_DOC'] == "SCZ"): ?>
                                <option value='SCZ'>SCZ</option>
                                <option value='PTS'>PTS</option>
                                <option value='TJA'>TJA</option>
                                <option value='ORU'>ORU</option>
                                <option value='BEN'>BEN</option>
                                <option value='PDO'>PDO</option>
                                <option value='CHQ'>CHQ</option>
                                <option value='LPZ'>LPZ</option>
                                <option value='CBBA'>CBBA</option>
                            <?php endif;?>
                            <?php if($docentes['CIEXPEDIDO_DOC'] == "PTS"): ?>
                                <option value='PTS'>PTS</option>
                                <option value='TJA'>TJA</option>
                                <option value='ORU'>ORU</option>
                                <option value='BEN'>BEN</option>
                                <option value='PDO'>PDO</option>
                                <option value='CHQ'>CHQ</option>
                                <option value='LPZ'>LPZ</option>
                                <option value='CBBA'>CBBA</option>
                                <option value='SCZ'>SCZ</option>
                            <?php endif;?>
                            <?php if($docentes['CIEXPEDIDO_DOC'] == "TJA"): ?>
                                <option value='TJA'>TJA</option>
                                <option value='ORU'>ORU</option>
                                <option value='BEN'>BEN</option>
                                <option value='PDO'>PDO</option>
                                <option value='CHQ'>CHQ</option>
                                <option value='LPZ'>LPZ</option>
                                <option value='CBBA'>CBBA</option>
                                <option value='SCZ'>SCZ</option>
                                <option value='PTS'>PTS</option>
                            <?php endif;?>
                            <?php if($docentes['CIEXPEDIDO_DOC'] == "ORU"): ?>
                                <option value='ORU'>ORU</option>
                                <option value='BEN'>BEN</option>
                                <option value='PDO'>PDO</option>
                                <option value='CHQ'>CHQ</option>
                                <option value='LPZ'>LPZ</option>
                                <option value='CBBA'>CBBA</option>
                                <option value='SCZ'>SCZ</option>
                                <option value='PTS'>PTS</option>
                                <option value='TJA'>TJA</option>
                            <?php endif;?>
                            <?php if($docentes['CIEXPEDIDO_DOC'] == "BEN"): ?>
                                <option value='BEN'>BEN</option>
                                <option value='PDO'>PDO</option>
                                <option value='CHQ'>CHQ</option>
                                <option value='LPZ'>LPZ</option>
                                <option value='CBBA'>CBBA</option>
                                <option value='SCZ'>SCZ</option>
                                <option value='PTS'>PTS</option>
                                <option value='TJA'>TJA</option>
                                <option value='ORU'>ORU</option>
                            <?php endif;?>
                            <?php if($docentes['CIEXPEDIDO_DOC'] == "PDO"): ?>
                                <option value='PDO'>PDO</option>
                                <option value='CHQ'>CHQ</option>
                                <option value='LPZ'>LPZ</option>
                                <option value='CBBA'>CBBA</option>
                                <option value='SCZ'>SCZ</option>
                                <option value='PTS'>PTS</option>
                                <option value='TJA'>TJA</option>
                                <option value='ORU'>ORU</option>
                                <option value='BEN'>BEN</option>
                            <?php endif;?>
                            <?php if($docentes['CIEXPEDIDO_DOC'] == "CHQ"): ?>
                                <option value='CHQ'>CHQ</option>
                                <option value='LPZ'>LPZ</option>
                                <option value='CBBA'>CBBA</option>
                                <option value='SCZ'>SCZ</option>
                                <option value='PTS'>PTS</option>
                                <option value='TJA'>TJA</option>
                                <option value='ORU'>ORU</option>
                                <option value='BEN'>BEN</option>
                                <option value='PDO'>PDO</option>
                            <?php endif;?>
                        </select>
                    </div>
                </div>

                <div class="form-group div-form-fec-nac col-md-3">
                    <label for="lab-fec-nac">(*) Fecha de Nacimiento:</label>
                    <input type="text" class="form-control input-global" id="fec-nac" name="fecNacimiento" placeholder="dd/mm/aa" value="<?php echo $docentes['NACIMIENTO_DOC']; ?>" >
                </div>

                <div class="form-group div-from-sexo col-md-2">
                    <label for="lab-sexo">Sexo:</label>
                    <select class="form-control sel-sexo select-global" name='sexo'>
                        <?php if($docentes['GENERO_DOC'] == "F"): ?>
                            <option value="F">F</option>
                            <option value="M">M</option>
                        <?php endif;?>
                        <?php if($docentes['GENERO_DOC'] == "M"): ?>
                            <option value="M">M</option>
                            <option value="F">F</option>
                        <?php endif;?>
                    </select>
                </div>

                <div class="form-group div-form-tel-fij col-md-2">
                    <label for="lab-tel-fij-doc">Teléfono Fijo</label>
                    <input type="text" class="form-control input-global" id="tel-fij-doc" name="telf" placeholder="telefono" value="<?php echo $docentes['TELEFONO_DOC']; ?>" >
                </div>

                <div class="form-group form-doc-celular col-md-2">
                    <label for="lab-celular">(*) Celular:</label>
                    <input type="text" class="form-control input-global" id="celular-doc" name="cel" placeholder="celular" value="<?php echo $docentes['CELULAR_DOC']; ?>" >
                </div>

                <div class="form-group div-form-dir-dom col-md-3">
                    <label for="formGroupExampleInput2">(*) Dirección Domiciliaria:</label>
                    <input type="text" class="form-control input-global" id="direccion" name="direccion" placeholder="domicilio" value="<?php echo $docentes['DIRECCION_DOC']; ?>" >
                </div>

                <div class="form-group div-form-cor-elc col-md-3">
                    <label for="formGroupExampleInput2">(*) Correo Electrónico</label>
                    <input type="text" class="form-control input-global" id="email" name="correo" placeholder="xyz@dominio.com"  value="<?php echo $docentes['CORREO_DOC']; ?>" >
                </div>

                <div class="form-group div-form-pro col-md-3">
                    <label for="formGroupExampleInput2">(*) Profesion:</label>
                    <input type="text" class="form-control in-tit input-global" id="profesion" name="profesion" placeholder="profesion"  value="<?php echo $docentes['PROFESION_DOC']; ?>" >
                </div>

                <div class="form-group div-form-pro col-md-3">
                    <label for="formGroupExampleInput2">(*) Profesion:</label>
                    <input type="text" class="form-control in-tit input-global" id="profesion" name="profesion" placeholder="profesion"  value="<?php echo $docentes['DIPLOMA_ACAD']; ?>" >
                </div>

                <div class="form-group div-form-ded col-md-3">
                    <label for="lab-ded">Dedicación:</label>
                    <select class="form-control select-global" name="dedicacion">
                        <?php if($docentes['DEDICACION_DOC'] == "PARCIAL"): ?>
                            <option value="PARCIAL" onclick="myFunction()">Parcial</option>
                            <option value="EXCLUSIVO" onclick="miFunction()">Exclusivo</option>
                        <?php endif;?>
                        <?php if($docentes['DEDICACION_DOC'] == "EXCLUSIVO"):  ?>
                            <option value="EXCLUSIVO">Exclusivo</option>
                            <option value="PARCIAL">Parcial</option>
                        <?php endif;?>
                    </select>
                </div>


                <div class="form-group div-form-ded col-md-3">
                    <label for="lab-ded">Estado:</label>
                    <select class="form-control select-global" name="estado">
                        <?php if($docentes['ACTIVIDAD'] == "ACTIVO"): ?>
                            <option value="ACTIVO">ACTIVO</option>
                            <option value="INACTIVO">INACTIVO</option>
                        <?php endif;?>
                        <?php if($docentes['ACTIVIDAD'] == "INACTIVO"):  ?>
                            <option value="INACTIVO">INACTIVO</option>
                            <option value="ACTIVO">ACTIVO</option>
                        <?php endif;?>
                    </select>
                </div>
                <div class="clearfix"></div><br>


                <div id="miDiv">
                    <div class="form-group">
                        <label>
                            ACTIVIDAD DOCENTE
                        </label>
                    </div>
                    <div  class="form-group col-xs-2">

                        <div>
                            <label >Hrs. Teoria</label>
                            <input  type="text" class="form-control"  name="horaTeoria" value="<?php echo $total['hrsTeoriaMes']; ?>">
                        </div>

                        <div>
                            <label>Hrs. Investigacion:</label>
                            <input type="text"  class="form-control" name="horaInvestigacion" value="<?php echo $seguimiento['HRSINVESTIGACION']; ?>">
                        </div>

                        <div>
                            <label>Hrs. Extencion:</label>
                            <input type="text" class="form-control" name="horaExtencion" value="<?php echo $seguimiento['HRSEXTENCION']; ?>">
                        </div>
                        <div>
                            <label>Hrs. Servicio:</label>
                        </div>
                        <div >
                            <input type="text" class="form-control" name="horaServicio" value="<?php echo $seguimiento['HRSSERVICIO']; ?>">
                        </div>
                    </div>

                    <div class="form-group col-xs-2">
                        <div>
                            <label >Hrs. practica :</label>
                        </div>
                        <div>
                            <input  type="text" class="form-control" name="horaPractica" value="<?php echo $total['hrsPracMes']; ?>">
                        </div>

                        <div>
                            <label>RCF No:</label>
                        </div>
                        <div>
                            <input type="text" class="form-control" name="rfcUno" value="<?php echo $seguimiento['RCF1']; ?>">
                        </div>

                        <div>
                            <label>RCF No:</label>
                        </div>
                        <div>
                            <input type="text" class="form-control" name="rfcDos" value="<?php echo $seguimiento['RCF2']; ?>">
                        </div>
                        <div>
                            <label>RCF No:</label>
                        </div>
                        <div>
                            <input type="text"  class="form-control" name="rfcTres" value="<?php echo $seguimiento['RCF3']; ?>">
                        </div>
                    </div>

                    <div class="form-group col-xs-2">
                        <div>
                            <label >Hrs. Produccion:</label>
                        </div>
                        <div>
                            <input  type="text" class="form-control" name="horaProduccion" value="<?php echo $seguimiento['HRSPRODUCCION']; ?>">
                        </div>

                        <div>
                            <label>Hrs. Servicio Acad:</label>
                        </div>
                        <div>
                            <input type="text" class="form-control" name="horaServicioAcademico" value="<?php echo $seguimiento['HRSSERVICIOACADEMICO']; ?>">
                        </div>

                        <div>
                            <label>Hrs. Produccion Acad:</label>
                        </div>
                        <div>
                            <input type="text" class="form-control" name="horaProduccionAcademica" value="<?php echo $seguimiento['HRSPRODUCACAD']; ?>">
                        </div>
                        <div>
                            <label>Hrs: administracion Acad:</label>
                        </div>
                        <div>
                            <input type="text"  class="form-control"name="horaAdministracionAcademica" value="<?php echo $seguimiento['HRSADMINACAD']; ?>">
                        </div>
                    </div>

                    <div  class="form-group col-xs-2">
                        <div>
                            <label>RCF No:</label>
                        </div>
                        <div>
                            <input type="text" class="form-control" name="rfcCuatro" value="<?php echo $seguimiento['RCF4']; ?>">
                        </div>

                        <div>
                            <label>RCF No:</label>
                        </div>
                        <div>
                            <input type="text" class="form-control" name="rfcCinco" value="<?php echo $seguimiento['RCF5']; ?>">
                        </div>
                        <div>
                            <label>RCF No:</label>
                        </div>
                        <div>
                            <input type="text" class="form-control" name="rfcSeis" value="<?php echo $seguimiento['RCF6']; ?>">
                        </div>
                        <div>
                            <label>RCF No:</label>
                        </div>
                        <div>
                            <input type="text" class="form-control" name="rfcSiete" value="<?php echo $seguimiento['RCF7']; ?>">
                        </div>
                    </div>
                    <!--mostrar los datos que se registran del docente total-->
                    <div class="form-group col-xs-2">
                        <div>
                            <label>TOTAL HORAS TRABAJADAS SEMANA:</label>
                        </div>
                        <div>
                            <input type="text" class="form-control" name="totalHorasSemana" value="<?php echo $total['hrssemana']; ?>">
                        </div>

                        <div>
                            <label>TOTAL HORAS TRABAJADAS MENSUAL:</label>
                        </div>
                        <div>
                            <input type="text" class="form-control" name="totalHorasMes" value="<?php echo $total['hrsMesMat']; ?>">
                        </div>
                        <div>
                            <label>TOTAL HORAS AUTORIZADAS:</label>
                        </div>
                        <div>
                            <input type="text" disabled="disabled" class="form-control" name="totalHorasAutorizadas" value="160">
                        </div>
                        <div>
                            <label>TIEMPO PARCIAL:</label>
                        </div>
                        <div>
                            <input type="text" class="form-control" name="tiempoParcial" value="<?php echo $seguimiento['TIEMPOPARCIAL']; ?>">
                        </div>
                        <div>
                            <label>DEDICACION EXCLUSIVA:</label>
                        </div>
                        <div>
                            <input type="text" class="form-control" name="dedicacionExclusiva" value="<?php echo $totalExclusivo ?>">
                        </div>
                    </div>

                    <div class="form-group col-xs-4">
                        <div>
                            <label>Observaciones:</label>
                        </div>
                        <div>
                            <input type="text" class="form-control" style="text-transform:uppercase" name="observaciones" value="<?php echo $seguimiento['OBSERVACIONES']; ?>">
                        </div>
                    </div>
                </div>



                <div class="col-md-8 div-form-nota">
                    <br>
                    <label for="lab-nota">NOTA: Todos los campos con (*) deben ser llenados obligatoriamente</label>

                </div>
            </fieldset>
            <div class=" form-group col-mod-4 col-md-offset-4">
                <button type="submit" class="btn registrar btn-global" >Registrar</button>
                <button type="button" onClick="location.href='listaDocentes.php'" class="btn cancelar btn-global" >Cancelar</button>
            </div>
        </form>
        <div id="res"></div>
    </div>
</div>