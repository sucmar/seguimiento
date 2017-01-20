<?php include("views/global/header.view.php")?>
<?php include('views/global/title.view.php')?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        //cuando haga click
        $("tr").click(function(){
            //obtemos la variable
            var varMateria = "";
            $(this).find("#nombreMateria").each(function(){
                varMateria=$(this).html()+"\n";
                console.log(varMateria);
            });
            $.ajax({
                type: 'GET',
                url: "capturarMateria.php?varMateria="+ varMateria,
                success: function(data){
                    $("#valMateria") .val(data)
                },
                error: function(data){
                    $("#valMateria") .html(data)
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
            $(this).find("#ideMateria").each(function(){
                idMat=$(this).html()+"\n";
                console.log(idMat);
            });
            $.ajax({
                type: 'GET',
                url: "capturarMateria.php?idMat="+ idMat,
                success: function(data){
                    $("#valIdMateria") .val(data)
                },
                error: function(data){
                    $("#valIdMateria") .html(data)
                }
            });
        })
    });
</script>

<script type="text/javascript">
    function enviar(){
        var materia=document.getElementById('valIdMateria').value;
        var docente=document.getElementById('valIdDoc').value;

        var dataen = 'valIdMateria='+materia +'&valIdDoc='+docente;

        $.ajax({
            type:'post',
            url:'registrarMateriaDocente.php',
            data: dataen,
            success:function(resp){
                $("#respa").html(resp);
            }
        });
        return false;
    }
</script>
<script type="text/javascript">
    function tiempoReal() {
        var idDocente = document.getElementById('valIdDoc').value;

        var tabla = $.ajax({
            url: 'tablaMaterias.php?valor='+idDocente,
            dataType:'text',
            async:false
        }).responseText;

        document.getElementById("miTabla").innerHTML = tabla;
    }
    setInterval(tiempoReal, 10000)
</script>
<?php ?>
<div class="alert alert-dismissible alert-info "><strong><p id="respa"></p></strong></div>

<div class="container nt-form-docs">
    <!-- MOSTRAMOS LAS MATERIAS QUE SE REGISTRARON POR FORMULARIO -->
    <legend><strong><?php echo "Docente: ".$docente['NOMBRE_DOC']."  ".$docente['APELLPATERNO_DOC']."  "
            .$docente['APELLMATERNO_DOC']?></strong></legend>
    <div class="table-hover col-md-12 ">
        <legend>Lista de materia</legend>
        <input type="text" class="input-global form-group form-control" name="campoBuscador" id="buscarMateria"
               onkeyup="doSearch()">
        <div class="tabla-docente1  ">
        <table  class="table table-bordered table-hover " id="tablaMateria">
            <thead class="thead-inverse">
            <tr class="header">
                <th >ID_MATERIA</th>
                <th >NOMBRE_MATERIA</th>
            </tr>
            </thead>
            <?php foreach ($materias as $materia):?>
                <tr class="active">
                    <td id="ideMateria"><?php echo $materia['ID_MATERIA'] ?></td>
                    <td id="nombreMateria"><?php echo $materia['NOMBRE_MATERIA'] ?></td>
                </tr>
            <?php endforeach;?>
        </table>
        </div>
    </div>
    <div class="col-md-12">
        <form class="form-inline" role="form"" method="post" onsubmit="return enviar();">
        <div class="form-group">
            <div>
                <input type="text" class="form-control" disabled="disabled" name="valIdMateria" id="valIdMateria">
            </div>
        </div>
        <div class="form-group">
            <div>
                <input type="text" class="form-control" disabled="disabled" name="valMateria" id="valMateria">
            </div>
        </div>
        <div class="form-group">
            <div>
                <input type="text" class="form-control" name="valIdDoc" disabled="disabled" id="valIdDoc"
                       value="<?php echo $valor ?>">

            </div>
        </div>
        <div class="form-group">
            <div>
                <input type="submit" class="btn btn-primary" value="asignar materia">
            </div>
        </div>
        </form>

        <h3>Lista de materia asignadas al docente</h3>
    </div>

    <section id="miTabla" class="col-md-12"></section>
    <div class="col-md-2 col-md-offset-5" >
        <input type="button" class="btn btn-primary" value="SALIR" onClick="location.href='listaDocentesAsignacion.php'"/>
    </div>
</div>
