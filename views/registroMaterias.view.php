<?php include("views/global/header.view.php")?>


<div class="nt-registroMaterias" >
    <fieldset>
    <legend>REGISTRO DE MATERIAS:</legend>
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" onsubmit="return validate();">
			
			<div class="form-group col-sm-12">
                <label>(*) Carrera:</label>
                <input class="form-control input-global" type="number" id="idCarrera" name="idCarrera" required>
            
            </div>
            
            <div class="form-group col-sm-6">
                <label>(*) Nombre Materia:</label>
                <input class="form-control input-global" type="text" id="nombreMateria" name="nombreMateria" required>
            
            </div>
            
            <div class="form-group col-sm-6">
                <label>(*) Sigla Materia:</label>
                <input class="form-control input-global" type="text" id="siglaMateria" name="siglaMateria" required>
            </div>
            
            <div class="form-group col-sm-6">
                <label>(*) Tipo Materia:</label>
                <select class="form-control select-global" id="tipoMateria" name="tipoMateria">
                    <option>CURRICULAR</option>
                    <option>NO CURRICULAR</option>
                </select>
            </div>
            
            <div class="form-group col-sm-6">
                <label>(*) Nivel Materia:</label>
                <select class="form-control select-global" id="nivelMateria" name="nivelMateria">
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    <option>E</option>
                    <option>F</option>
                    <option>G</option>
                    <option>H</option>
                    <option>I</option>
                    <option>J</option>

                </select>
            </div>
            
            <p>NOTA: Todos los campos con (*) deben ser llenados obligatoriamente</p>
            <center>
                    <div class="btn-inline">
                    <button class="btn btn-default btn-global" type="submit">Guardar</button>
                    <button class="btn btn-default btn-global" type="submit" >Cancelar</button>
                    </div>
            </center>
            
            
        </form>
        
    </fieldset>
</div>