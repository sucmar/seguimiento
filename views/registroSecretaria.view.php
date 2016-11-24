<?php include("views/global/header.view.php")?>

<?php include('views/global/title.view.php')?>
<div class="contenedor">
  <div class="container nt-form-docente ">
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" onsubmit="return validate();">

        <fieldset class="form-group ">
            <LEGEND>Registro de Secreteria</LEGEND>                
                <div class="form-group div-form-nom col-md-3">
                    <label for="lab-nombre">(*) Nombres:</label>
                    <input type="text" class="form-control" id="nombres" name="nombre" placeholder="nombres">
                </div>

                <div class="form-group div-form-ape-pat col-md-3">
                    <label for="lab-ape-pat">(*) Apellido Paterno</label>
                    <input type="text" class="form-control" id="ape-pat" name="apePaterno" placeholder="apellido paterno">
                </div>

                <div class="form-group div-form-ape-mat col-md-3">
                    <label for="lab-ape-mat" >Apellido Materno</label>
                    <input type="text" class="form-control" id="ape-mat" name="apeMaterno" placeholder="apellido materno">
                </div>
                <div class="form-group div-from-sexo col-md-3">
                    <label for="lab-sexo">Sexo:</label>
                    <select class="form-control sel-sexo" name='sexo'>
                        <option>FEMENINO</option>
                        <option>MASCULINO</option>
                    </select>
                </div>
                
                <div class="form-group div-form-ape-pat col-md-3">
                    <label for="lab-ape-pat">(*) Carrera</label>
                    <input type="text" class="form-control" id="carrera" name="carrera" placeholder="carrera">
                </div>
                <div class="form-group div-form-tel-fij col-md-3">
                    <label for="lab-tel-fij-doc">(*) Cuenta</label>
                    <input type="text" class="form-control" id="cuenta" name="cuenta" placeholder="cuenta">
                </div>

                <div class="form-group form-doc-celular col-md-3">
                    <label for="lab-celular">(*) Contrasenia :</label>
                    <input type="password" class="form-control" id="pass1" name="password1" placeholder="password">
                </div>

                <div class="form-group form-doc-celular col-md-3">
                    <label for="lab-celular">(*) Repetir Contrasenia :</label>
                    <input type="password" class="form-control" id="pass2" name="password2" placeholder="password">
                </div>



                <div class="col-md-8 div-form-nota">
                    <br>
                    <label for="lab-nota">NOTA: Todos los campos con (*) deben ser llenados obligatoriamente</label> 

                </div>
                 
        </fieldset>
            <div class=" form-group div-btn col-md-offset-4">    
                <button type="submit" id="button" value="aceptar" class="btn btn-success registrar" >Registrar</button>
            
                <button href="registroDocente.php" class="btn btn-success cancelar" >Cancelar</button>
            </div>  
            <p id="error_para" ></p>
        </form>
    </div>
</div>
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
    var carrera = document.getElementById( "carrera" ).value;
    if( carrera == "" )
    {
        error = " Tienes que escribir una carrera. ";
        document.getElementById( "error_para" ).innerHTML = error;
        return false;
    }     
    var cuenta = document.getElementById( "cuenta" ).value;
    if( cuenta == "" )
    {
        error = " Tienes que escribir una cuenta. ";
        document.getElementById( "error_para" ).innerHTML = error;
        return false;
    }      
    var pass1 = document.getElementById( "pass1" );
    var pass2 = document.getElementById( "pass2" );
    if( pass1.value == "" || pass2.value == "" )
    {
        error = " Tienes que escribir una contrasenia. ";
        document.getElementById( "error_para" ).innerHTML = error;
        return false;
    } 
    if (pass1.value != pass2.value){
        error = " Tienes las contrasenias no son identicas, vuelva intentarlo. ";
        document.getElementById( "error_para" ).innerHTML = error;
        return false;
    }    
    else
    {
    return true;
    }
}
</script>
