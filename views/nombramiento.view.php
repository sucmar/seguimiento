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

<div class="container nombramiento">
    <form role="form" id="form_ajax" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <fieldset>
            <legend>Nombramiento de Docente</legend>
            <div>
                    <label for="nombre" class="control-label">Nombre del Docente</label>
                    <input type="text" class="form-control col-sm-4" id="idMon" name="idMon"/>
                    <input class="form-control col-sm-4" disabled="disabled" id="nombre" type="text" name="nombre"/>
                    <input class="form-control col-sm-4" disabled="disabled" id="apellido" type="text" name="apellido"/>
            </div>

            <div class="d-borde col-md-12">
                <div class=" col-md-10">
                    <label class="">Categoria del Nombramiento Solicitado</label>
                </div>

                <div class="form-group col-md-6">
                        <input type="radio" name="interino" value="X">Interino:<br>
                        <input type="radio"   name="invitado" value="X"> Invitado:
                </div>
                <div class="checkbox col-md-6">
                        <input type="radio" name="x" value="asistente"> Asistente (A):<br>
                        <input type="radio" name="x" value="adjunto"> Adjunto(B):<br>
                        <input type="radio" name="x" value="catedratico"> Catedratico(C):
                </div>
            </div>

            <div>
                    <label class="control-label">Tiempo de Dedicacion:</label>
                    <input  type="radio" name="y" value="parcial"> Parcial
                    <input  type="radio" name="y" value="exclusivo"> Exclusivo
            </div>

            <br>
            <div class="col-md-4">
                <label>Nombramiento a Partir del:</label>
                <input  class="form-hh input-global" type="text" name="inicio" placeholder="AAAA-DD-MM">
            </div>
            <div class="col-md-4">
                <label>Tiempo de Duracion:</label>
                <input class="form-hh input-global" type="text" name="gestion"  placeholder="II/2016">
            </div>
            <div class="col-md-4">
                <label>Fecha de Solicitud:</label>
                <input class="form-hh input-global" type="text" name="fin" placeholder="AAAA-DD-MM">
            </div>
        </fieldset>
            <div class="btn-inline col-md-12">
            <button type="submit" class="btn registrar btn-global" >Registrar</button>
            <button type="button" class="btn btn-info btn-global btn-bs" onClick="location.href='espacioSecretaria.php'"> Salir</button>
            </div>

    </form>
</div>
