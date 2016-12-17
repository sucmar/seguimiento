<?php include("views/global/header.view.php")?>


<div class="nt-registroCarrera" >
    <fieldset>
    <legend>REGISTRO DE CARRERA:</legend>
        
        <form action="" method="POST">
            
            <div class="form-group col-sm-6">
                <label>(*) Facultad:</label>
                <input class="form-control input-global" type="number" id="idFacultad" name="idFacultad" required>
            
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
			
			
			
			<p> Enter a number and click OK:</p>

        </form>
        
    </fieldset>
</div>