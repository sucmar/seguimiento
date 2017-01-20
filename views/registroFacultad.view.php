<?php include("views/global/header.view.php")?>
<?php include('views/global/title.view.php')?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="nt-registroFacultad" >
    <fieldset>
    <legend>REGISTRO DE FACULTADES:</legend>
        
        <form action="" method="POST" onsubmit="return validate();">
            
            <div class="form-group col-sm-6">
                <label>(*) Nombre Facultad:</label>
                <input class="form-control input-global" type="text" id="nombreFacultad" name="nombreFacultad" required>
            
            </div>
            
            <div class="form-group col-sm-6">
                <label>(*) Ubicacion Facultad:</label>
                <input class="form-control input-global" type="text" id="ubicacionFacultad" name="ubicacionFacultad" required>
            </div>
            
            
            
            <p>NOTA: Todos los campos con (*) deben ser llenados obligatoriamente</p>
			<p id="error_para" name="error_para"> Enter a number and click OK:</p>
            <center>
                    <div class="btn-inline">
                    <button class="btn btn-default btn-global" type="submit">Guardar</button>
                    <a class="btn btn-default btn-global" href="espacioSecretaria.php">Cancelar</a>
                    </div>
            </center>
			
			
			

        </form>
        
    </fieldset>
</div>
<script>
   function validate()
    {
        var error="";
        var nombres = document.getElementById( "nombreFacultad" );
        var letters = /^[A-Za-z- -.]+$/;
                
        if( nombres.value == "" || !nombres.value.match(letters))
        {
            error = " Nombre de facultad no deberia contener numeros o caracteres especiales ";
            document.getElementById( "error_para" ).style.color = "red";
            document.getElementById( "error_para" ).innerHTML = error;
            return false;
        }
        var ubicacion = document.getElementById( "ubicacionFacultad" );
        if( ubicacion.value == "" )
        {
            error = " Tienes que escribir una ubicacion para la facultad ";
            document.getElementById( "error_para" ).style.color = "red";
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
  
  
  var validarNombres = function (nombres) {
     if( nombres == "" )
    {
        error = " Tienes que escribir un nombre. ";
        return false;
    } else {
        return true;
    }
  };
  var validarUbicacion = function (nombres) {
     if( nombres == "" )
    {
        error = " Tienes que escribir la ubicacion. ";
        return false;
    } else {
        return true;
    }
  };
</script>

