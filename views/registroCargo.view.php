<?php include('views/global/header.view.php')?>

<div class="nt-registro-cargo" >
    <fieldset>
    <legend>CREACION DE ROLES:</legend>
        
        <form>
            
            <div class="form-group col-sm-12">
                <label>(*) Nombre de Cargo:</label>
                <input class="form-control" type="text">
            
            </div>
            
            <div class="form-group col-sm-4">
                <label>(*) Codigo:</label>
                <input class="form-control" type="text">
            </div>
            
            <div class="form-group col-sm-4">
                <label>(*) Carga de Horaria:</label>
                <input class="form-control" type="text">
            </div>
            
            <div class="form-group col-sm-4">
                <label>(*) Codigo:</label>
                <select class="form-control">
                    <option>SI</option>
                    <option>NO</option>
                </select>
            </div>
                        
            
            <div class="form-group col-sm-6">
                <label>(*) Tipo de Cargo:</label>
                <select class="form-control">
                    <option>TITULAR</option>
                    <option>**************</option>
                    <option>**************</option>
                </select>
            </div>
            
            <div class="form-group col-sm-6">
                <label>(*) laboratorio:</label>
                <select class="form-control">
                    <option>LABORATORIO DE COMPUTO (LAB)</option>
                    <option>**************</option>
                    <option>**************</option>
                </select>
            </div>
            
            <p>NOTA: Todos los campos con (*) deben ser llenados obligatoriamente</p>
            
            <div class="form-group col-sm-4">
            </div>
            <div class="btn-group col-sm-4">
                <button class="btn btn-registro-cargo" type="button">Aceptar</button>
                <button class="btn btn-registro-cargo" type="button">Cancelar</button>
            </div>
            <div class="form-group col-sm-4">
            </div>
            
        </form>
        
    </fieldset>
</div>

<style>
    div.nt-registro-cargo
                {
                margin: auto;
                margin-top: 30px;
                padding: 15px;
                width: 50%;
                border: 1px solid #CED5D7;
                border-radius: 6px;
                box-shadow: 0px 5px 10px #B5C1C5,0 0 0 10px #EEF5F7 inset;
                }
    
    div.nt-registro-cargo button.btn-registro-cargo
                {
                margin-top: 15px;
                color: white;
                background-color: #047BDE;
                border: 3px solid white;
                }

</style>