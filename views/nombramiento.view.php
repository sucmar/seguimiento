<?php include("views/global/header.view.php")?>

<?php include('views/global/title.view.php')?>


<script type="text/javascript">
    $(document).ready(function(){
        //cuando haga click
        $("tr").click(function(){
            //obtemos la variable
            var idMat = "";
            $(this).find("#nombreDoc").each(function(){
                idMat=$(this).html()+"\n";
                console.log(idMat);
            });
            $.ajax({
                type: 'GET',
                url: "capturarMateria.php?idMat="+ idMat,
                success: function(data){
                    $("#nombre") .val(data)
                },
                error: function(data){
                    $("#valIdMateria") .html(data)
                }
            });
        })
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        //cuando haga click
        $("tr").click(function(){
            //obtemos la variable
            var idMat = "";
            $(this).find("#ide").each(function(){
                idMat=$(this).html()+"\n";
                console.log(idMat);
            });
            $.ajax({
                type: 'GET',
                url: "capturarMateria.php?idMat="+ idMat,
                success: function(data){
                    $("#idMon") .val(data)
                },
                error: function(data){
                    $("#valIdMateria") .html(data)
                }
            });
        })
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        //cuando haga click
        $("tr").click(function(){
            //obtemos la variable
            var idMat = "";
            $(this).find("#apellidoP").each(function(){
                idMat=$(this).html()+"\n";
                console.log(idMat);
            });
            $.ajax({
                type: 'GET',
                url: "capturarMateria.php?idMat="+ idMat,
                success: function(data){
                    $("#apellido") .val(data)
                },
                error: function(data){
                    $("#valIdMateria") .html(data)
                }
            });
        })
    });
</script>

<div class="container nombramiento">
    <form>
        <fieldset>
            <legend>Nombramiento de Docente</legend>
            <div class="col-md-12">
                <div class="col-md-3">
                    <label for="nombre" class="control-label">Nombre del Docente</label>
                </div>
                <div class=" form-group col-md-1">
                    <input class="form-control" disabled="disabled" id="idMon" type="text" name=""/>
                </div>
                <div class=" form-group col-md-2">
                    <input class="form-control" disabled="disabled" id="nombre" type="text" name=""/>
                </div>
                <div class=" form-group col-md-2">
                    <input class="form-control" disabled="disabled" id="apellido" type="text" name=""/>
                </div>
                <div class=" form-group col-md-4">
                    <button type="button" class="btn btn-default btn-global" data-toggle="modal" data-target="#myModal">Buscar</button>
                </div>

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
                                                    <td id="nombreDoc"><?php echo $docente['NOMBRE_DOC'] ?></td>
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

            <div class="d-borde col-md-12">
                <div class=" col-md-10">
                    <label class="">Categoria del Nombramiento Solicitado</label>
                </div>


                <div class="col-md-3">

                </div>

                <div class=" form-group checkbox col-md-3 ">
                    <label >
                        <input type="checkbox">Interino:
                    </label>
                    <br>
                    <label>
                        <input type="checkbox"> Titular:
                    </label>
                </div>
                <div class=" checkbox col-md-6 ">
                    <label>
                        <input type="checkbox"> Asistente (A):
                    </label>
                    <br>
                    <label>
                        <input type="checkbox"> Adjunto(B):
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" value="catedratico"> Catedratico(C):
                    </label>
                </div>
            </div>

            <div class="col-md-4">
                <label>Tiempo de Dedicacion:</label>
            </div>
            <div class="col-md-3">
                <label>
                    <input type="checkbox"> Parcial
                </label>
            </div>
            <div class="col-md-3">
                <label>
                    <input type="checkbox"> Exclusivo
                </label>
            </div>

            <div class="col-md-4">
                <label>Nombramiento a Partir del:</label>
            </div>
            <div class="col-md-2">
                <input  class="form-hh input-global" type="text">
            </div>
            <div class="col-md-3">
                <label>Tiempo de Duracion:</label>
            </div>
            <div class="col-md-2">
                <input class="form-hh input-global" type="text">
            </div>
            <div class="col-md-4">
                <label>Fecha de Solicitud:</label>
            </div>
            <div class="col-md-2">
                <input class="form-hh input-global" type="text">
            </div>
        </fieldset>
        <div class="col-md-8">

        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-info btn-global btn-bs" >Guardar</button>
        </div>
        <div class="col-md-2">
            <button type="button" class="btn btn-info btn-global btn-bs" onClick="location.href='espacioSecretaria.php'" > Salir </button>
            <div>
    </form>
</div>
