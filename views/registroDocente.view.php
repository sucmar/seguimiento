<?php include("views/global/header.view.php")?>

<?php include('views/global/title.view.php')?>
<script type="text/javascript">
    function myFunction(){
        var x = document.getElementById('miDiv');

        x.style.display = 'none';

    }
</script>
<script type="text/javascript">
    function miFunction(){
        var x = document.getElementById('miDiv');
        if(x.style.display === 'none'){
            x.style.display = 'block';
        }
    }
</script>
<div>
    <form name="importar" method="post" action="./importar.php" enctype="multipart/form-data" >
        <input id="file" type="file" name="file"/>
        <input type='submit' name='enviar'  value="Importar"  />
    </form>
</div>
<div>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" onsubmit="return validate();">

        <fieldset>
            <LEGEND>Registro de Docentes</LEGEND>
            <div>
                <label>(*) Nombres:</label>
                <input type="text" id="nombres" name="nombre" style="text-transform:uppercase" placeholder="nombres">
            </div>

            <div>
                <label>(*) Apellido Paterno</label>
                <input type="text" id="ape-pat" name="apePaterno" style="text-transform:uppercase" placeholder="apellido paterno">
            </div>
            <div >
                <label>Apellido Materno</label>
                <input type="text" id="ape-mat" name="apeMaterno" style="text-transform:uppercase" placeholder="apellido materno">
            </div>

            <div>
                <div>
                    <label> (*) C.I.:</label>
                    <input id="ci" name="ci" placeholder="carnet">
                </div>

                <div>
                    <label>Expedido:</label>
                    <select name='departamento' id='departamento'>
                        <option value='LPZ'>LPZ</option>
                        <option value='CBBA'>CBBA</option>
                        <option value='SCZ'>SCZ</option>
                        <option value='PTS'>PTS</option>
                        <option value='TRJ'>TJA</option>
                        <option value='ORU'>ORU</option>
                        <option value='BEN'>BEN</option>
                        <option value='PDO'>PDO</option>
                        <option value='CHQ'>CHQ</option>
                    </select>
                </div>
            </div>

            <div>
                <label>(*) Fecha de Nacimiento:</label>
                <input type="text" id="fec-nac" name="fecNacimiento" placeholder="dd/mm/aa">
            </div>

            <div >
                <label for="lab-sexo">Sexo:</label>
                <select name='sexo'>
                    <option>F</option>
                    <option>M</option>
                </select>
            </div>

            <div>
                <label>Teléfono Fijo</label>
                <input id="tel-fij-doc" name="telf" placeholder="telefono">
            </div>

            <div>
                <label>(*) Celular:</label>
                <input type="text" id="celular-doc" name="cel" placeholder="celular">
            </div>

            <div>
                <label>(*) Dirección Domiciliaria:</label>
                <input type="text" id="direccion" name="direccion" style="text-transform:uppercase" placeholder="domicilio">
            </div>

            <div>
                <label>(*) Correo Electrónico</label>
                <input type="text" id="email" name="correo" placeholder="xyz@dominio.com">
            </div>

            <div>
                <label>(*) Profesion:</label>
                <input type="text" id="profesion" name="profesion" style="text-transform:uppercase" placeholder="profesion">
            </div>

            <div>
                <label>Dedicación:</label>
                <select name="dedicacion">
                    <option value="PARCIAL" onclick="myFunction()">Parcial</option>
                    <option value="EXCLUSIVO" onclick="miFunction()">Exclusivo</option>
                </select>
            </div>

            <div>
                <br>
                <label>NOTA: Todos los campos con (*) deben ser llenados obligatoriamente</label>

            </div>
        </fieldset>

        <div id="miDiv">
            <div>
                <label>
                    ACTIVIDAD DOCENTE
                </label>
            </div>
            <div>
                <div>
                    <label >Hrs. Teoria</label>
                </div>
                <div>
                    <input  type="text" name="horaTeoria">
                </div>

                <div>
                    <label>Hrs. Investigacion:</label>
                </div>
                <div>
                    <input type="text" name="horaInvestigacion">
                </div>

                <div>
                    <label>Hrs. Extencion:</label>
                </div>
                <div>
                    <input type="text" name="horaExtencion">
                </div>
                <div>
                    <label>Hrs. Servicio:</label>
                </div>
                <div >
                    <input type="text" name="horaServicio">
                </div>
            </div>

            <div>
                <div>
                    <label >Hrs. practica :</label>
                </div>
                <div>
                    <input  type="text" name="horaPractica">
                </div>

                <div>
                    <label>RCF No:</label>
                </div>
                <div>
                    <input type="text" name="rfcUno">
                </div>

                <div>
                    <label>RCF No:</label>
                </div>
                <div>
                    <input type="text" name="rfcDos">
                </div>
                <div>
                    <label>RCF No:</label>
                </div>
                <div>
                    <input type="text" name="rfcTres">
                </div>
            </div>

            <div>
                <div>
                    <label >Hrs. Produccion:</label>
                </div>
                <div>
                    <input  type="text" name="horaProduccion">
                </div>

                <div>
                    <label>Hrs. Servicio Acad:</label>
                </div>
                <div>
                    <input type="text" name="horaServicioAcademico">
                </div>

                <div>
                    <label>Hrs. Produccion Acad:</label>
                </div>
                <div>
                    <input type="text" name="horaProduccionAcademica">
                </div>
                <div>
                    <label>Hrs: administracion Acad:</label>
                </div>
                <div>
                    <input type="text" name="horaAdministracionAcademica">
                </div>
            </div>

            <div>
                <div>
                    <label>RCF No:</label>
                </div>
                <div>
                    <input type="text" name="rfcCuatro">
                </div>

                <div>
                    <label>RCF No:</label>
                </div>
                <div>
                    <input type="text" name="rfcCinco">
                </div>
                <div>
                    <label>RCF No:</label>
                </div>
                <div>
                    <input type="text" name="rfcSeis">
                </div>
                <div>
                    <label>RCF No:</label>
                </div>
                <div>
                    <input type="text" name="rfcSiete">
                </div>
            </div>

            <div>
                <div>
                    <label>TOTAL HORAS TRABAJADAS SEMANA:</label>
                </div>
                <div>
                    <input type="text" name="totalHorasSemana">
                </div>

                <div>
                    <label>TOTAL HORAS TRABAJADAS MENSUAL:</label>
                </div>
                <div>
                    <input type="text" name="totalHorasMes">
                </div>
                <div>
                    <label>TOTLA HORAS AUTORIZADAS:</label>
                </div>
                <div>
                    <input type="text" name="totalHorasAutorizadas" value="160">
                </div>
                <div>
                    <label>TIEMPO PARCIAL:</label>
                </div>
                <div>
                    <input type="text" name="tiempoParcial">
                </div>
                <div>
                    <label>DEDICACION EXCLUSIVA:</label>
                </div>
                <div>
                    <input type="text" name="dedicacionExclusiva">
                </div>
            </div>

            <div>
                <div>
                    <label>Observaciones:</label>
                </div>
                <div>
                    <input type="text" style="text-transform:uppercase" name="observaciones">
                </div>
            </div>
        </div>

        <div>
            <button type="submit">Registrar</button>
            <button type="reset">Cancelar</button>
        </div>
    </form>
</div>

<!--<div class="contenedor">
    <div class="container nt-form-docente ">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" onsubmit="return validate();">

            <fieldset class="form-group ">
                <LEGEND>Registro de Docentes</LEGEND>
                <div class="form-group div-form-nom col-md-3">
                    <label for="lab-nombre">(*) Nombres:</label>
                    <input type="text" class="form-control input-global" id="nombres" name="nombre" placeholder="nombres">
                </div>

                <div class="form-group div-form-ape-pat col-md-3">
                    <label for="lab-ape-pat">(*) Apellido Paterno</label>
                    <input type="text" class="form-control input-global" id="ape-pat" name="apePaterno" placeholder="apellido paterno">
                </div>

                <div class="form-group div-form-ape-mat col-md-3">
                    <label for="lab-ape-mat" >Apellido Materno</label>
                    <input type="text" class="form-control input-global" id="ape-mat" name="apeMaterno" placeholder="apellido materno">
                </div>

                <div class="col-md-3">
                    <div class="form-group col-xs-2 div-form-ci">
                        <label for="lab-ci"> (*) C.I.:</label>
                        <input type="text" class="form-control input-global" id="ci" name="ci" placeholder="carnet">
                    </div>

                    <div class="form-group col-xs-2 div-form-sel">
                        <label for="lab-expendido">Expedido:</label>
                        <select class="form-control sel-expendido select-global" name='departamento' id='departamento'>
                            <option value='lpz'>LPZ</option>
                            <option value='cbba'>CBBA</option>
                            <option value='scz'>SCZ</option>
                            <option value='pts'>PTS</option>
                            <option value='tja'>TJA</option>
                            <option value='oru'>ORU</option>
                            <option value='ben'>BEN</option>
                            <option value='pdo'>PDO</option>
                            <option value='chq'>CHQ</option>
                        </select>
                    </div>
                </div>

                <div class="form-group div-form-fec-nac col-md-3">
                    <label for="lab-fec-nac">(*) Fecha de Nacimiento:</label>
                    <input type="text" class="form-control input-global" id="fec-nac" name="fecNacimiento" placeholder="dd/mm/aa">
                </div>

                <div class="form-group div-from-sexo col-md-2">
                    <label for="lab-sexo">Sexo:</label>
                    <select class="form-control sel-sexo select-global" name='sexo'>
                        <option>F</option>
                        <option>M</option>
                    </select>
                </div>

                <div class="form-group div-form-tel-fij col-md-2">
                    <label for="lab-tel-fij-doc">Teléfono Fijo</label>
                    <input type="text" class="form-control input-global" id="tel-fij-doc" name="telf" placeholder="telefono">
                </div>

                <div class="form-group form-doc-celular col-md-2">
                    <label for="lab-celular">(*) Celular:</label>
                    <input type="text" class="form-control input-global" id="celular-doc" name="cel" placeholder="celular">
                </div>

                <div class="form-group div-form-dir-dom col-md-3">
                    <label for="formGroupExampleInput2">(*) Dirección Domiciliaria:</label>
                    <input type="text" class="form-control input-global" id="direccion" name="direccion" placeholder="domicilio">
                </div>

                <div class="form-group div-form-cor-elc col-md-3">
                    <label for="formGroupExampleInput2">(*) Correo Electrónico</label>
                    <input type="text" class="form-control input-global" id="email" name="correo" placeholder="xyz@dominio.com">
                </div>

                <div class="form-group div-form-pro col-md-3">
                    <label for="formGroupExampleInput2">(*) Profesion:</label>
                    <input type="text" class="form-control in-tit input-global" id="profesion" name="profesion" placeholder="profesion">
                </div>

                <div class="form-group div-form-ded col-md-3">
                    <label for="lab-ded">Dedicación:</label>
                    <select class="form-control select-global" name="dedicacion">
                        <option value="Parcial">Parcial</option>
                        <option value="exclusivo">Exclusivo</option>
                    </select>
                </div>

                <div class="col-md-8 div-form-nota">
                    <br>
                    <label for="lab-nota">NOTA: Todos los campos con (*) deben ser llenados obligatoriamente</label>

                </div>
            </fieldset>
            <div class=" form-group col-mod-4 col-md-offset-4">
                <button type="submit" class="btn registrar btn-global" >Registrar</button>
                <button type="submit" onclick="salir()" class="btn cancelar btn-global" >Cancelar</button>
            </div>
        </form>
    </div>
</div>-->
<script type="text/javascript">
    function salir() {
        window.location = "http://localhost/seguimiento/espacioSecretaria.php";
    }
    function validate()
    {
        var error="";
        var nombres = document.getElementById( "nombres" );
        if( nombres.value == "" )
        {
            error = " Tienes que escribir un nombre. ";
            document.getElementById( "error_para" ).innerHTML = error;
            return false;
        }
        var apePat = document.getElementById( "ape-pat" );
        if( apePat.value == "" )
        {
            error = " Tienes que escribir un apellido paterno. ";
            document.getElementById( "error_para" ).innerHTML = error;
            return false;
        }
        var apeMat = document.getElementById( "ape-mat" );
        if( apeMat.value == "" )
        {
            error = " Tienes que escribir un apellido materno. ";
            document.getElementById( "error_para" ).innerHTML = error;
            return false;
        }
        var ci = document.getElementById( "ci" ).value;
        if( isNaN(ci) )
        {
            error = " Tienes que escribir el carnet con digitos. ";
            document.getElementById( "error_para" ).innerHTML = error;
            return false;
        }
        var fechaNac = document.getElementById( "fec-nac" ).value;
        if( !moment(fechaNac, 'MM/DD/YYYY',true).isValid() )
        {
            error = " Tienes que escribir una correcta fecha. ";
            document.getElementById( "error_para" ).innerHTML = error;
            return false;
        }
        var telef = document.getElementById( "tel-fij-doc" ).value;
        if( isNaN(telef) )
        {
            error = " Tienes que escribir el telefono con digitos. ";
            document.getElementById( "error_para" ).innerHTML = error;
            return false;
        }
        var celular = document.getElementById( "celular-doc" ).value;
        if( isNaN(celular) )
        {
            error = " Tienes que escribir el celular con digitos. ";
            document.getElementById( "error_para" ).innerHTML = error;
            return false;
        }
        var direccion = document.getElementById( "direccion" );
        if( direccion.value == "" )
        {
            error = " Tienes que escribir una direccion. ";
            document.getElementById( "error_para" ).innerHTML = error;
            return false;
        }
        var profesion = document.getElementById( "profesion" );
        if( profesion.value == "" )
        {
            error = " Tienes que escribir una profesion. ";
            document.getElementById( "error_para" ).innerHTML = error;
            return false;
        }
        var cargo = document.getElementById( "cargo" );
        if( cargo.value == "" )
        {
            error = " Tienes que escribir un cargo. ";
            document.getElementById( "error_para" ).innerHTML = error;
            return false;
        }
        var email = document.getElementById( "email" );
        if( email.value == "" || email.value.indexOf( "@" ) == -1 )
        {
            error = " Tienes que ingresar un valido email. ";
            document.getElementById( "error_para" ).innerHTML = error;
            return false;
        }
        else
        {
            error = " Datos insertados correctamente ";
            document.getElementById( "error_para" ).style.color = "blue"
            document.getElementById( "error_para" ).innerHTML = error;
            return true;
        }
    }
</script>
<script>
    $(document).ready(function() {
        $("#fec-nac").datepicker();
    });
</script>
