<?php include("views/global/header.view.php")?>


<div class="nt-reporteDocente" >
    <fieldset>
        <legend>Nombramiento de Docentes:</legend>

        <form action="" method="POST" onsubmit="return validate()">
            <div class="form-group col-sm-12">
                <label>(*) Criterio:</label>
                <input class="form-control input-global" type="text" id="buscado" onkeyup="buscar()">
            </div>
            <div class="container col-sm-12">
                <table class="table table-hover" id="data">
                    <thead>
                    <tr>
                        <th>ID DOCENTE</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO PATERNO</th>
                        <th>APELLIDO MATERNO</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($docentes as $docente):?>
                        <tr id="seleccionar">
                            <td id="ide"><?php echo $docente['ID_DOCENTE'] ?></td>
                            <td id="nombre"><?php echo $docente['NOMBRE_DOC'] ?></td>
                            <td id="apellidoP"><?php echo $docente['APELLPATERNO_DOC'] ?></td>
                            <td id="apellidoM"><?php echo $docente['APELLMATERNO_DOC'] ?></td>

                            <td><button class="btn btn-primary btn-xs" type="button" 
                            onclick="location.href='nombramiento.php'">Seleccionar</button></td>

                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
            <center>
                <div class="btn-inline">

                    <button class="btn btn-default btn-global" type="button" onclick="location.href='espacioSecretaria.php'">Salir</button>
                </div>
            </center>
        </form>
    </fieldset>
</div>
