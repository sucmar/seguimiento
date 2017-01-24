<?php include("views/global/header.view.php")?>
<?php include('views/global/title.view.php')?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="nt-registroCarrera" >
    <fieldset>
    <legend>REGISTRO DE CARRERA:</legend>
        
        <form action="actualizarCarrera.php?id=<?php echo $carreras['ID_CARRERA'] ?>" method="POST" onsubmit="return validate()">
           
            
			<div class="form-group col-sm-6">
                <label>(*) Facultad:</label>
                <input class="form-control input-global" type="text" id="nombreFacultad" name="nombreFacultad" value="<?php echo $facultades['NOMBRE_FACULTAD']; ?>" required>
            </div>
			
            <div class="form-group col-sm-6">
                <label>(*) Nombre Carrera:</label>
                <input class="form-control input-global" type="text" id="nombreCarrera" name="nombreCarrera" value="<?php echo $carreras['NOMBRE_CARRERA']; ?>" required>
            </div>
			
			<div class="form-group col-sm-6">
                <label>(*) Sigla Carrera:</label>
                <input class="form-control input-global" type="text" id="siglaCarrera" name="siglaCarrera" value="<?php echo $carreras['SIGLA_CARRERA']; ?>" required>
            
            </div>
			
			<div class="form-group col-sm-6">
                <label>(*) Departamento Carrera:</label>
                <input class="form-control input-global" type="text" id="dptoCarrera" name="dptoCarrera" value="<?php echo $departamentos['NOMBRE_DPTO']; ?>" required>
            
            </div>
            
            
            <p>NOTA: Todos los campos con (*) deben ser llenados obligatoriamente</p>
			<p id="error_de"> Enter a number and click OK:</p>
            <center>
                    <div class="btn-inline">
                    <button class="btn btn-default btn-global" type="submit">Guardar</button>
                    <button type="button" onClick="location.href='listaCarreras.php'" class="btn cancelar btn-global" >Cancelar</button>

                    </div>
            </center>
			
			
			

        </form>
        
    </fieldset>
</div>

<script>
	
function validate()
    {
        var error="";
        var nombres = document.getElementById( "nombreCarrera" );
        var letters = /^[A-Za-z- -.]+$/;
        var numbers = /^[1-9-0]+$/;
                
        if( nombres.value == "" || !nombres.value.match(letters))
        {
            error = " Nombre de carrera no deberia contener numeros o caracteres especiales ";
            document.getElementById( "error_de" ).style.color = "red";
            document.getElementById( "error_de" ).innerHTML = error;
            return false;
        }
        var sigla = document.getElementById( "siglaCarrera" );
        if( sigla.value == "" || !sigla.value.match(numbers) )
        {
            error = " Tienes que escribir una sigla numeral para la Carrera ";
            document.getElementById( "error_de" ).style.color = "red";
            document.getElementById( "error_de" ).innerHTML = error;
            return false;
        }
        var dpto = document.getElementById( "dptoCarrera" );
        if( dpto.value == "" || !dpto.value.match(letters) )
        {
            error = " Tienes que escribir un dpto para la Carrera ";
            document.getElementById( "error_de" ).style.color = "red";
            document.getElementById( "error_de" ).innerHTML = error;
            return false;
        }
        else
        {
            error = " Datos insertados correctamente ";
            document.getElementById( "error_de" ).style.color = "blue";
            document.getElementById( "error_de" ).innerHTML = error;
            return true;
        }
    }
</script>
