<?php include("views/global/header.view.php")?>
<?php include('views/global/title.view.php')?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
    <form role="form" name="importar" method="post" action="./importar.php" enctype="multipart/form-data" >
        <input id="file" type="file" name="file"/>
        <input type='submit' name='enviar'  value="Importar"/>
    </form>
</div>
<div id="mensaje"></div>
<div class="contenedor">
    <div class="container nt-form-docente ">
        <form role="form" id="form_ajax" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" onsubmit="return validate();">
             <p id="error_para" ></p>
            <fieldset class="form-group " >
                <LEGEND>Registro de Docentes</LEGEND>
                <div class="form-group div-form-nom col-md-3">
                    <label for="lab-nombre">(*) Nombres:</label>
                    <input type="text" class="form-control input-global" id="nombres" name="nombre" placeholder="nombres">
                </div>

                <div class="form-group div-form-ape-pat col-md-3">
                    <label for="lab-ape-pat">(*) Apellido Paterno</label>
                    <input type="text" class="form-control input-global" id="ape-pat" name="apePaterno" placeholder="apellido paterno"  >
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
                        <select class="form-control sel-expendido select-global" name='departamento' id='departamento' >
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

                <div class="form-group div-form-fec-nac col-md-3">
                    <label for="lab-fec-nac">(*) Fecha de Nacimiento:</label>
                    <input type="text" class="form-control input-global" id="fec-nac" name="fecNacimiento" placeholder="dd/mm/aa">
                </div>

                <div class="form-group div-from-sexo col-md-2">
                    <label for="lab-sexo">Sexo:</label>
                    <select class="form-control sel-sexo select-global" name='sexo'>
                        <option value="F">F</option>
                        <option value="M">M</option>
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

                <div class="form-group div-form-pro col-md-3">
                    <label for="formGroupExampleInput2">(*) Titulo academico:</label>
                    <input type="text" class="form-control in-tit input-global" id="titulo" name="titulo" placeholder="titulo">
                </div>

                <div class="form-group div-form-ded col-md-3">
                    <label for="lab-ded">Dedicación:</label>
                    <select class="form-control select-global" name="dedicacion">
                            <option value="EXCLUSIVO">Exclusivo</option>
                            <option value="PARCIAL">Parcial</option>
                    </select>
                </div>

                <div class="form-group div-form-ded col-md-3">
                    <label for="lab-ded">Estado:</label>
                    <select class="form-control select-global" name="estado">
                        <option value="ACTIVO">ACTIVO</option>
                        <option value="INACTIVO">INACTIVO</option>
                    </select>
                </div>

                <div class="col-md-8 div-form-nota">
                    <br>
                    <label for="lab-nota">NOTA: Todos los campos con (*) deben ser llenados obligatoriamente</label>

                </div>
            </fieldset>
            <div id="miDiv">
                <div class="form-group">
                    <label>
                        ACTIVIDAD DOCENTE
                    </label>
                </div>
                <div  class="form-group col-xs-2">

                    <div>
                        <label >Hrs. Teoria</label>
                        <input  type="text" class="form-control input-global"  name="horaTeoria" id="horaTeoria">
                    </div>

                    <div>
                        <label>Hrs. Investigacion:</label>
                        <input type="text" class="form-control input-global" name="horaInvestigacion" id="horaInvestigacion">
                    </div>

                    <div>
                        <label>Hrs. Extencion:</label>
                        <input type="text" class="form-control input-global" name="horaExtencion" id="horaExtencion">
                    </div>
                    <div>
                        <label>Hrs. Servicio:</label>
                    </div>
                    <div >
                        <input type="text" class="form-control input-global" name="horaServicio" id="horaServicio">
                    </div>
                </div>

                <div class="form-group col-xs-2">
                    <div>
                        <label >Hrs. practica :</label>
                    </div>
                    <div>
                        <input  type="text" class="form-control" name="horaPractica" id="horaPractica">
                    </div>

                    <div>
                        <label>RCF No:</label>
                    </div>
                    <div>
                        <input type="text" class="form-control" name="rfcUno" id="rfcUno">
                    </div>

                    <div>
                        <label>RCF No:</label>
                    </div>
                    <div>
                        <input type="text" class="form-control" name="rfcDos" id="rfcDos">
                    </div>
                    <div>
                        <label>RCF No:</label>
                    </div>
                    <div>
                        <input type="text"  class="form-control" name="rfcTres" id="rfcTres">
                    </div>
                </div>

                <div class="form-group col-xs-2">
                    <div>
                        <label >Hrs. Produccion:</label>
                    </div>
                    <div>
                        <input  type="text" class="form-control" name="horaProduccion" id="horaProduccion">
                    </div>

                    <div>
                        <label>Hrs. Servicio Acad:</label>
                    </div>
                    <div>
                        <input type="text" class="form-control" name="horaServicioAcademico" id="horaServicioAcademico">
                    </div>

                    <div>
                        <label>Hrs. Produccion Acad:</label>
                    </div>
                    <div>
                        <input type="text" class="form-control" name="horaProduccionAcademica" id="horaProduccionAcademica">
                    </div>
                    <div>
                        <label>Hrs: administracion Acad:</label>
                    </div>
                    <div>
                        <input type="text"  class="form-control"name="horaAdministracionAcademica" id="horaAdministracionAcademica">
                    </div>
                </div>

                <div  class="form-group col-xs-2">
                    <div>
                        <label>RCF No:</label>
                    </div>
                    <div>
                        <input type="text" class="form-control" name="rfcCuatro" id="rfcCuatro">
                    </div>

                    <div>
                        <label>RCF No:</label>
                    </div>
                    <div>
                        <input type="text" class="form-control" name="rfcCinco" id="rfcCinco">
                    </div>
                    <div>
                        <label>RCF No:</label>
                    </div>
                    <div>
                        <input type="text" class="form-control" name="rfcSeis" id="rfcSeis">
                    </div>
                    <div>
                        <label>RCF No:</label>
                    </div>
                    <div>
                        <input type="text" class="form-control" name="rfcSiete" id="rfcSiete">
                    </div>
                </div>

                <div class="form-group col-xs-2">
                    <div>
                        <label>TOTAL HORAS TRABAJADAS SEMANA:</label>
                    </div>
                    <div>
                        <input type="text" class="form-control" name="totalHorasSemana" id="totalHorasSemana">
                    </div>

                    <div>
                        <label>TOTAL HORAS TRABAJADAS MENSUAL:</label>
                    </div>
                    <div>
                        <input type="text" class="form-control" name="totalHorasMes" id="totalHorasMes">
                    </div>
                    <div>
                        <label>TOTAL HORAS AUTORIZADAS:</label>
                    </div>
                    <div>
                        <input type="text"  class="form-control" name="totalHorasAutorizadas" id="totalHorasAutorizadas" value="160">
                    </div>
                    <div>
                        <label>TIEMPO PARCIAL:</label>
                    </div>
                    <div>
                        <input type="text" class="form-control" name="tiempoParcial" id="tiempoParcial">
                    </div>
                    <div>
                        <label>DEDICACION EXCLUSIVA:</label>
                    </div>
                    <div>
                        <input type="text" class="form-control" name="dedicacionExclusiva" id="dedicacionExclusiva">
                    </div>
                </div>

                <div class="form-group col-xs-4">
                    <div>
                        <label>Observaciones:</label>
                    </div>
                    <div>
                        <input type="text" class="form-control" style="text-transform:uppercase" name="observaciones" id="observaciones">
                    </div>
                </div>
            </div>

            <div class=" form-group col-mod-4 col-md-offset-4">
                <input type="hidden" name="ajax">
                <button type="submit" class="btn registrar btn-global" id="btn">Registrar</button>
                <button type="button" onClick="location.href='espacioSecretaria.php'" class="btn cancelar btn-global" >Cancelar</button>
            </div>
        </form>
    </div>
</div>
    <style>
        #error_para {
            color: red;
            text-align: center;
            margin-top: 10px;
            font-size: 18px;
        }
    </style>
<script type="text/javascript">
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
        if( !moment(fechaNac, 'DD/MM/YYYY',true).isValid() )
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
        var email = document.getElementById( "email" );
        if( email.value == "" || email.value.indexOf( "@" ) == -1 )
        {
            error = " Tienes que ingresar un valido email. ";
            document.getElementById( "error_para" ).innerHTML = error;
            return false;
        }
              var horaTeoria = document.getElementById( "horaTeoria" ).value;
                if( isNaN(horaTeoria))
                {
                    error = " Tienes que escribir la hrs. teoria con digitos. ";
                    document.getElementById( "error_para" ).innerHTML = error;
                    return false;
                }
              var horaInvestigacion = document.getElementById( "horaInvestigacion" ).value;
                if( isNaN(horaInvestigacion))
                {
                    error = " Tienes que escribir la hrs. investigacion con digitos. ";
                    document.getElementById( "error_para" ).innerHTML = error;
                    return false;
                }
              var horaExtencion = document.getElementById( "horaExtencion" ).value;
                if( isNaN(horaExtencion))
                {
                    error = " Tienes que escribir la hrs. extencion con digitos. ";
                    document.getElementById( "error_para" ).innerHTML = error;
                    return false;
                }
              var horaServicio = document.getElementById( "horaServicio" ).value;
                if( isNaN(horaServicio))
                {
                    error = " Tienes que escribir la hrs. servicio con digitos. ";
                    document.getElementById( "error_para" ).innerHTML = error;
                    return false;
                }
              var horaPractica = document.getElementById( "horaPractica" ).value;
                if( isNaN(horaPractica))
                {
                    error = " Tienes que escribir la hrs. practica con digitos. ";
                    document.getElementById( "error_para" ).innerHTML = error;
                    return false;
                }

              var horaProduccion = document.getElementById( "horaProduccion" ).value;
                if( isNaN(horaProduccion))
                {
                    error = " Tienes que escribir la hrs. produccion con digitos. ";
                    document.getElementById( "error_para" ).innerHTML = error;
                    return false;
                }
              var horaServicioAcademico = document.getElementById( "horaServicioAcademico" ).value;
                if( isNaN(horaServicioAcademico))
                {
                    error = " Tienes que escribir la hrs. servicio academico con digitos. ";
                    document.getElementById( "error_para" ).innerHTML = error;
                    return false;
                }
              var horaProduccionAcademica = document.getElementById( "horaProduccionAcademica" ).value;
                if( isNaN(horaProduccionAcademica))
                {
                    error = " Tienes que escribir la hrs. produccion academica con digitos. ";
                    document.getElementById( "error_para" ).innerHTML = error;
                    return false;
                }
              var horaAdministracionAcademica = document.getElementById( "horaAdministracionAcademica" ).value;
                if( isNaN(horaAdministracionAcademica))
                {
                    error = " Tienes que escribir la hrs. administracion academica con digitos. ";
                    document.getElementById( "error_para" ).innerHTML = error;
                    return false;
                }

              var totalHorasSemana = document.getElementById( "totalHorasSemana" ).value;
                if( isNaN(totalHorasSemana))
                {
                    error = " Tienes que escribir total horas semana con digitos. ";
                    document.getElementById( "error_para" ).innerHTML = error;
                    return false;
                }
              var totalHorasMes = document.getElementById( "totalHorasMes" ).value;
                if( isNaN(totalHorasMes))
                {
                    error = " Tienes que escribir total horas mes con digitos. ";
                    document.getElementById( "error_para" ).innerHTML = error;
                    return false;
                }
              var totalHorasAutorizadas = document.getElementById( "totalHorasAutorizadas" ).value;
                if( isNaN(totalHorasAutorizadas))
                {
                    error = " Tienes que escribir total horas autorizadas con digitos. ";
                    document.getElementById( "error_para" ).innerHTML = error;
                    return false;
                }
              var tiempoParcial= document.getElementById( "tiempoParcial" ).value;
                if( isNaN(tiempoParcial))
                {
                    error = " Tienes que escribir tiempo parcial con digitos. ";
                    document.getElementById( "error_para" ).innerHTML = error;
                    return false;
                }
              var dedicacionExclusiva = document.getElementById( "dedicacionExclusiva" ).value;
                if( isNaN(dedicacionExclusiva))
                {
                    error = " Tienes que escribir dedicacion exclusiva con digitos. ";
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
