<?php include('views/global/header.view.php')?>

<!--
<div class="nt-cargo">
        
        <fieldset>
        <legend>CARGOS:</legend>

            <form>
                <div class="form-group col-sm-12" >
                    <label class:"form-control">Buscar por:</label>
                </div>
                
                <div class="form-group col-sm-6" >
                    <label class:"form-control">Cargo:</label>
                    <input class="form-control" type="text">
                </div>
                
                <div class="form-group col-sm-6" >
                    <label class:"form-control">Laboratorio:</label>
                    <input class="form-control" type="text">
                </div>
                
                <div class="form-group col-sm-12" >
                    <input class="form-control" type="text-area">
                </div>
                
                <div class="btn-group col-sm-12">
                    <button class="btn btn-cargo col-sm-3" type="button">Insertar</button>
                        <button class="btn btn-cargo col-sm-3" type="button" >Modificar</button>
                        <button class="btn btn-cargo col-sm-3" type="button" >Eliminar</button>
                        <button class="btn btn-cargo col-sm-3" type="button" >Salir</button>
                </div>
            </form>

        </fieldset>
</div>

-->

<div class="container nt-cargo">

    <h3>CREACION Y MODIFICACION DE ROLES Y TAREAS</h3>
    <fieldset>
        
    <legend>lista de roles</legend>
            <form>
                <!--
                -->
                    <div class="form-group col-sm-6">
                    <label>Nombre del Rol:</label>
                    <input class="form-control input-global" type="text">
                    </div>
                
                    <div class="form-group col-sm-6">
                    <label>Descripcion:</label>
                    <input class="form-control input-global" type="text">
                    </div>
                
                
                
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Nombre de Rol</th>
                            <th>Descripcion</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>John</td>
                            <td>Doe</td>
                          </tr>
                          <tr>
                            <td>Mary</td>
                            <td>Moe</td>
                          </tr>
                          <tr>
                            <td>July</td>
                            <td>Dooley</td>
                          </tr>
                        </tbody>
                    </table>
                    
                    <div class="form-group col-sm-12">
                    <label>Tarea para asignar al rol:</label>
                    <input class="form-control input-global" type="text">
                    </div>
                
                <center>
                    <div class="btn-inline">
                    <button class="btn btn-global" type="button">Crear</button>
                    <button class="btn btn-global" type="button" >Modificar</button>
                    <button class="btn btn-global" type="button" >Salir</button>
                    </div>
                </center>
            </form>

        <legend>tareas por rol</legend>
            <form>
                    <div class="form-group col-sm-6">
                    <label>Nombre de la Tarea:</label>
                    <input class="form-control input-global" type="text">
                    </div>
                
                    <div class="form-group col-sm-6">
                    <label>Descripcion:</label>
                    <input class="form-control input-global" type="text">
                    </div>
                    
                    <table class="table table-hover">
                            <thead>
                            <tr>
                            <th>Tarea</th>
                            <th>Descripcion</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <td>John</td>
                            <td>Doe</td>
                            </tr>
                            <tr>
                            <td>Mary</td>
                            <td>Moe</td>
                            </tr>
                            <tr>
                            <td>July</td>
                            <td>Dooley</td>
                            </tr>
                            </tbody>
                    </table>
                
                <center>
                    <div class="btn-inline">
                    <button class="btn btn-global" type="button">Crear</button>
                    <button class="btn btn-global" type="button" >Modificar</button>
                    <button class="btn btn-global" type="button" >Eliminar</button>
                    </div>
                </center>
                

            </form>    
    </fieldset>
</div>