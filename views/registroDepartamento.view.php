<?php include("views/global/header.view.php")?>


<div class="nt-registroCarrera" >
    <fieldset>
    <legend>REGISTRO DE DEPARTAMENTO:</legend>
        
        <form action="" method="POST" onsubmit="return validate()">
            <div class="form-group col-sm-6">
                <label>(*) Carrera :</label>
                <select class="form-control select-global" id="nombreCarrera" name="nombreCarrera">
                    <?php foreach ($carreras as $carrera):?>
                        <option><?php echo $carrera['NOMBRE_CARRERA'] ?></option>
                    <?php endforeach;?>
                </select>    
            </div>
			<div class="form-group col-sm-6">
                <label>(*) Nombre de Departamento:</label>
                <input class="form-control input-global" type="text" id="nombreDpto" name="nombreDpto" required>
            
            </div>
            <p>NOTA: Todos los campos con (*) deben ser llenados obligatoriamente</p>
			<p id="error_de"> Enter a number and click OK:</p>
            <center>
                    <div class="btn-inline">
                    <button name="guardar" class="btn btn-default btn-global" type="submit">Guardar</button>
                    <button class="btn btn-default btn-global" type="submit" >Cancelar</button>
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
        else
        {
            error = " Datos insertados correctamente ";
            document.getElementById( "error_de" ).style.color = "blue";
            document.getElementById( "error_de" ).innerHTML = error;
            return true;
        }
    }
</script>
