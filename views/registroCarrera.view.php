<?php include("views/global/header.view.php")?>


<div class="nt-registroCarrera" >
    <fieldset>
    <legend>REGISTRO DE CARRERA:</legend>
        
        <form action="" method="POST" onsubmit="return validate()">
            <div class="form-group col-sm-6">
                <label>(*) Carrera:</label>
                <select class="form-control input-global" name="nombreFacultad">
                    <?php foreach ($facultades as $facultad):?>
                        <option><?php echo $facultad['NOMBRE_FACULTAD'] ?></option>
                    <?php endforeach;?>
                </select>    
            </div>
            
            <div class="form-group col-sm-6">
                <label>(*) Nombre Carrera:</label>
                <input class="form-control input-global" type="text" id="nombreCarrera" name="nombreCarrera" required>
            </div>
			
			<div class="form-group col-sm-6">
                <label>(*) Sigla Carrera:</label>
                <input class="form-control input-global" type="text" id="siglaCarrera" name="siglaCarrera" required>
            
            </div>
			
			<div class="form-group col-sm-6">
                <label>(*) Departamento Carrera:</label>
                <input class="form-control input-global" type="text" id="dptoCarrera" name="dptoCarrera" required>
            
            </div>
            
            
            <p>NOTA: Todos los campos con (*) deben ser llenados obligatoriamente</p>
            <center>
                    <div class="btn-inline">
                    <button class="btn btn-default btn-global" type="submit">Guardar</button>
                    <button class="btn btn-default btn-global" type="submit" >Cancelar</button>
                    </div>
            </center>
			
			
			
			<p id="error_de"> Enter a number and click OK:</p>

        </form>
        
    </fieldset>
</div>

<script>
function validate()
    {
        var error="";
        var nombres = document.getElementById( "nombreCarrera" );
        var letters = /^[A-Za-z]+$/;
                
        if( nombres.value == "" || !nombres.value.match(letters))
        {
            error = " Nombre de carrera no deberia contener numeros o caracteres especiales ";
            document.getElementById( "error_de" ).style.color = "red";
            document.getElementById( "error_de" ).innerHTML = error;
            return false;
        }
        var sigla = document.getElementById( "siglaCarrera" );
        if( sigla.value == "" || !sigla.value.match(letters) )
        {
            error = " Tienes que escribir una sigla para la Carrera ";
            document.getElementById( "error_de" ).style.color = "red";
            document.getElementById( "error_de" ).innerHTML = error;
            return false;
        }
        var dpto = document.getElementById( "dptoCarrera" );
        if( dpto.value == "" || !dpto.value.match(letters) )
        {
            error = " Tienes que escribir una sigla para la Carrera ";
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