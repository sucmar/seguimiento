<?php include("views/global/header.view.php")?>


<div class="nt-registroFacultad" >
    <fieldset>
    <legend>REGISTRO DE FACULTADES:</legend>
        
        <form action="demo_form.asp" method="POST" onsubmit="return validate();">
            
            <div class="form-group col-sm-6">
                <label>(*) Nombre Facultad:</label>
                <input class="form-control input-global" type="text" id="nombreFacultad" name="nombreFacultad" required>
            
            </div>
            
            <div class="form-group col-sm-6">
                <label>(*) Ubicacion Facultad:</label>
                <input class="form-control input-global" type="text" id="ubicacionFacultad" name="ubicacionFacultad" required>
            </div>
            
            
            
            <p>NOTA: Todos los campos con (*) deben ser llenados obligatoriamente</p>
            <center>
                    <div class="btn-inline">
                    <button class="btn btn-default btn-global" type="submit">Guardar</button>
                    <button class="btn btn-default btn-global" type="submit" >Cancelar</button>
                    </div>
            </center>
			
			
			
			<p>Enter a number and click OK:</p>

        </form>
        
    </fieldset>
</div>