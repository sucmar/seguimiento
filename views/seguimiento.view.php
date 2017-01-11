<?php include("views/global/header.view.php")?>
<?php include('views/global/title.view.php')?>

<div class="container seguimiento">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" class="form-inline">
        <fieldset >
            <legend>Registro de Seguimiento de Docentes</legend>
            <div class="col-md-12">
                <div class="col-md-3 form-group">
                    <label class="lab control-label" > Nombre del Docente</label>
                </div>
                <div class="col-md-3 form-group">
                    <!--<div id="resp"></div>-->
                </div>



                <div class="container col-md-2 form-group">

                    <!-- Boton buscar -->
                    <button type="button" class="btn btn-default btn-global" data-toggle="modal" data-target="#myModal">Buscar</button>
                    <!-- Boton buscar -->


                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                                                                    <div class="modal-body">
                                    <form>
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
                                                    </tr>
                                                <?php endforeach;?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                    <p><b>Los campos con (*) deben ser llenados obligatoriamente.</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Fin Modal -->


                </div>

                <div class="col-md-1 form-group">
                    <label class="lab">Dedicación</label>
                </div>
                <div class="col-md-3 form-group">
                    <input type="text" disabled='disabled' class="input-global form-control" value="<?php echo $NUM ?>" name="">
                </div>
            </div>
        </fieldset>
    </form>

</div>


<script>
    $('.seleccionar').click(function () {
        var id = $(this).closest("tr").find('td:eq(0)').text();
        $('#sig').val(id);
    });
    $('.seleccionarGrupo').click(function () {
        var id = $(this).closest("tr").find('td:eq(1)').text();
        $.cookie("idGrupo", id);
        var nom = $(this).closest("tr").find('td:eq(2)').text();
        $.cookie("nom_grupo_cookie", nom);
        $.cookie("connected", true);
    });

</script>
