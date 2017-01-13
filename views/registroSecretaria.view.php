<?php include("views/global/header.view.php")?>

<?php include('views/global/title.view.php')?>
<div class="contenedor">
  <div class="container nt-form-docente ">
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" onsubmit="return validate();">
            <?php if(!empty($errores)): ?>
                <?php echo $errores ?>
            <?php endif;?>
        <fieldset class="form-group ">
            <LEGEND>Registro de Secreteria</LEGEND>                
                <div class="form-group div-form-nom col-md-3">
                    <label for="lab-nombre">(*) Nombres:</label>
                    <input type="text" class="form-control input-global" id="nombre" name="nombre" placeholder="nombres">
                </div>

                <div class="form-group div-form-ape-pat col-md-3">
                    <label for="lab-ape-pat">(*) Apellido Paterno</label>
                    <input type="text" class="form-control input-global" id="apePat" name="apePat" placeholder="apellido paterno">
                </div>

                <div class="form-group div-form-ape-mat col-md-3">
                    <label for="lab-ape-mat" >Apellido Materno</label>
                    <input type="text" class="form-control input-global" id="apeMat" name="apeMat" placeholder="apellido materno">
                </div>
                <div class="form-group div-from-sexo col-md-3">
                    <label for="lab-sexo">Sexo:</label>
                    <select class="form-control sel-sexo select-global" name='sexo' id="sexo">
                        <option value="F">FEMENINO</option>
                        <option value="M">MASCULINO</option>
                    </select>
                </div>
                

                 <div class="form-group div-from-sexo col-md-3">
                    <label for="lab-sexo">Carrera :</label>
                    <select class="form-control select-global" name="carrera">
                    <?php foreach ($carreras as $carrera):?>
                        <option value="<?php echo $carrera['ID_CARRERA'] ?>"><?php echo $carrera['NOMBRE_CARRERA'] ?></option>
                    <?php endforeach;?>
                    </select>
                    
                </div>
                <div class="form-group div-form-tel-fij col-md-3">
                    <label for="lab-tel-fij-doc">(*) Cuenta</label>
                    <input type="text" class="form-control input-global" id="cuenta" name="cuenta" placeholder="cuenta">
                </div>

                <div class="form-group form-doc-celular col-md-3">
                    <label for="lab-celular">(*) Contraseña :</label>
                    <input type="password" class="form-control input-global" id="pass1" name="pass1" placeholder="password">
                </div>

                <div class="form-group form-doc-celular col-md-3">
                    <label for="lab-celular">(*) Repetir Contraseña :</label>
                    <input type="password" class="form-control input-global" id="pass2" name="pass2" placeholder="password">
                </div>



                <div class="col-md-8 div-form-nota">
                    <br>
                    <label for="lab-nota">NOTA: Todos los campos con (*) deben ser llenados obligatoriamente</label> 

                </div>
                 
        </fieldset>
            <div class=" form-group div-btn col-md-offset-4">    
                <button type="submit" id="button" value="aceptar" class="btn registrar btn-global">Registrar</button>
            
                 <button href="registroDocente.php" onclick="salir()" class="btn cancelar btn-global" >Cancelar</button>
            </div>  
            <p id="error_para" ></p>
        </form>
    </div>
</div>
 <script type="text/javascript">    
  function salir() {
         window.location = "http://localhost/seguimiento/registroSecretaria.php";
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
    var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}$/;
    if( pass1.value == "" || pass2.value == "" )
    {
        error = " Tienes que escribir una contraseña. ";
        document.getElementById( "error_para" ).innerHTML = error;
        return false;
    } 
    if (pass1.value != pass2.value){
        error = " Tienes las contraseñas no son identicas, vuelva intentarlo. ";
        document.getElementById( "error_para" ).innerHTML = error;
        return false;
    }  
    if(pass1.value == pass2.value) {
        if(!pass1.value.match(passw))   
        {   
            error = " La constraseña debe tener al menos un digito, una letra mayuscula y minuscula. Debe contener al menos 8 caracteres. ";
            document.getElementById( "error_para" ).innerHTML = error;
            return false;
        }
    }
    else
    {
    return true;
    }
}
</script>
