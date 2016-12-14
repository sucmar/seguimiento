<?php include('views/global/header.view.php')?>

<div class="container nt-cargo">

    <h3>CREACION Y MODIFICACION DE ROLES Y TAREAS</h3>
    <fieldset>

        <legend>lista de roles</legend>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
            <div class="form-group col-sm-6">
                <label>Nombre del Rol:</label>
                <input class="form-control input-global" type="text" name="nomRol">
            </div>

            <div class="form-group col-sm-6">
                <label>Descripcion:</label>
                <textarea class="form-control input-global" rows="3" name="descrip" ></textarea>
            </div>

            <div class="form-group col-sm-6">
                <label>Nombre de la Tarea:</label>
                <input class="form-control input-global" type="text" name="nomTar">
            </div>

            <!--<div class="form-group col-sm-6">
                <label>Tipo rol:</label>
                <select class="form-control sel-expendido select-global" name='tipoRol' id='departamento'>
                    <option value='secretaria'>Secretaria</option>
                    <option value='jefedepartamento'>Jefe de departamento</option>
                    <option value='superadministrador'>SuperAdministrador</option>
                    <option value='docente'>Docente</option>
                </select>
            </div>-->

            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Rol</th>
                    <th>Descripcion</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($roles as $rol):?>
                <tr>
                    <td><?php echo $rol['NOMBRE_ROL'] ?></td>
                    <td><?php echo $rol['DESCRIPCION_ROL'] ?></td>
                </tr>
                <?php endforeach;?>
                </tbody>
            </table>
            <center>
                <div class="btn-inline">
                    <button type="submit" class="btn btn-global" >Crear</button>
                    <button class="btn btn-global" type="button" >Modificar</button>
                    <button class="btn btn-global" type="button" >Salir</button>
                </div>
            </center>
        </form>
    </fieldset>
</div>