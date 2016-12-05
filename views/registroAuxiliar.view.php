<?php include("views/global/header.view.php")?>

<?php include('views/global/title.view.php')?>

<div class="contenedor">
    <div class="container nt-form-auxiliar">
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" onsubmit="return validate();">

        <fieldset class="form-group">
            <LEGEND>Registro de Auxiliares</LEGEND>
                <div class="">   
                    <div class="form-group  div-form-nom-aux col-md-4">
                        <label for="lab-nom-aux">(*) Nombres:</label>
                        <input type="text" class="form-control input-global" id="nombres" name="nombre" placeholder="nombres">
                    </div>
                </div>

                    <div class="form-group div-form-ape-pat col-md-4">
                        <label for="lab-ape-pat-aux">(*) Apellido Paterno</label>
                        <input type="text" class="form-control input-global" id="ape-pat" name="apePaterno" placeholder="apellido paterno">
                    </div>

                    <div class="form-group div-form-ape-mat col-md-4">
                        <label for="lab-ape-mat-aux">Apellido Materno</label>
                        <input type="text" class="form-control input-global" id="ape-mat" name="apeMaterno" placeholder="apellido materno">
                    </div>
                
                <div class="col-md-3">   
                    <div>   
                        <div class="form-group col-xs-2 div-form-ci">
                            <label for="lab-ci-aux">(*) C.I.:</label>
                            <input type="text" class="form-control input-global" id="ci" name="ci" placeholder="carnet">
                        </div>

                        <div class="form-group col-xs-2 div-form-sel">
                            <label for="lab-exp">Expendido:</label>
                            <select class="form-control select-global" name='departamento'>
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
                </div>

                    <div class="form-group div-form-fec-nac-aux col-md-3">
                        <label for="lab-fec-nav-aux">Fecha de Nacimiento:</label>
                        <input type="date" class="form-control input-global" id="fec-nac" name="fecNacimiento" placeholder="dd/mm/aa">
                    </div>

                    <div class="form-group div-from-sex-aux col-md-2">
                        <label for="lab-sex-aux">Sexo:</label>
                        <select class="form-control select-global" name='sexo'>
                            <option>F</option>
                            <option>M</option>
                        </select>
                    </div>

                    <div class="form-group div-form-tel-aux col-md-2">
                        <label for="lab-tel-aux">Teléfono Fijo</label>
                        <input type="text" class="form-control input-global" id="telf" name="telf" placeholder="telefono">
                    </div>

                    <div class="form-group div-form-cel-aux col-md-2">
                        <label for="lab-cel">Celular:</label>
                        <input type="text" class="form-control input-global" id="cel" name="cel" placeholder="celular">
                    </div>

                    <div class="form-group div-form-dir-dom col-md-3">
                        <label for="lab-dir-dom">Dirección Domiciliaria:</label>
                        <input type="text" class="form-control input-global" id="direccion" name="direccion" placeholder="direccion">
                    </div>

                    <div class="form-group div-form-cor-elc col-md-3">
                        <label for="lab-cor-elc">Correo Electronico</label>
                        <input type="mail" class="form-control input-global" id="email" name="correo" placeholder="xyz@dominio.com">
                    </div>

                    <div class="form-group div-form-car col-md-3">
                        <label for="lab-carrera">Carrera</label>
                        <input type="text" class="form-control input-global" id="carrera" name="carrera" placeholder="carrera">
                    </div>

                <div class="col-md-8">
                    <br>
                    <label for="formGroupExampleInput">NOTA: Todos los campos con (*) deben ser llenados obligatoriamente</label> 
                </div>

                
        </fieldset>
        <div class=" form-group col-mod-4 col-md-offset-4">    
                    <button type="submit" class="btn registrar btn-global" >Registrar
                    </button>
                
                    <button type="submit" onclick="salir()" class="btn cancelar btn-global" >Cancelar
                    </button>
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
    var telef = document.getElementById( "telf" ).value;
    if( isNaN(telef) )
    {
        error = " Tienes que escribir el telefono con digitos. ";
        document.getElementById( "error_para" ).innerHTML = error;
        return false;
    }   
    var celular = document.getElementById( "cel" ).value;
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
    var profesion = document.getElementById( "carrera" );
    if( profesion.value == "" )
    {
        error = " Tienes que escribir una carrera. ";
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
        document.getElementById( "error_para" ).style.color = "blue";
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