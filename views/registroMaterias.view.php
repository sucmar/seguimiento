<?php include("views/global/header.view.php")?>


<div class="nt-registroMaterias" >
    <fieldset>
    <legend>REGISTRO DE MATERIAS:</legend>
        
        <form>
            
            <div class="form-group col-sm-6">
                <label>(*) Nombre Materia:</label>
                <input class="form-control input-global" type="text">
            
            </div>
            
            <div class="form-group col-sm-6">
                <label>(*) Sigla Materia:</label>
                <input class="form-control input-global" type="text">
            </div>
            
            <div class="form-group col-sm-6">
                <label>(*) Tipo Materia:</label>
                <select class="form-control select-global">
                    <option>CURRICULAR</option>
                    <option>NO CURRICULAR</option>
                </select>
            </div>
            
            <div class="form-group col-sm-6">
                <label>(*) Nivel Materia:</label>
                <select class="form-control select-global">
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
                    <button class="btn btn-default btn-global" type="button">Guardar</button>
                    <button class="btn btn-default btn-global" type="button" >Cancelar</button>
                    </div>
            </center>
            
            
        </form>
        
    </fieldset>
</div>