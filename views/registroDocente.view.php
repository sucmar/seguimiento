<?php include("views/global/header.view.php")?>

<?php include('views/global/title.view.php')?>

<div>
    <form name="importar" method="post" action="./importar.php" enctype="multipart/form-data" >
        <input id="file" type="file" name="file"/>
        <input type='submit' name='enviar'  value="Importar"  />
    </form>
</div>

<div class="contenedor">
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

                <div class="form-group div-form-car col-md-3">
                    <label for="formGroupExampleInput2">Cargo:</label>
                    <input type="text" class="form-control input-global" id="cargo" name="cargo" placeholder="cargo">
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
            <div class=" form-group div-btn col-md-offset-4">
                <button type="submit" id="button" value="aceptar" class="btn registrar btn-global" >Registrar</button>

                <button href="registroDocente.php" onclick="salir()" class="btn cancelar btn-global" >Cancelar</button>

            </div>

            <p id="error_para" ></p>

        </form>
    </div>
</div>
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
