<?php include("views/global/header.view.php")?>

<?php include('views/global/title.view.php')?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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

<?php ?>
<div class="container nombramiento">
    <form role="form" id="form_ajax" action="registroNombramiento.php?id=<?php echo $docente['ID_DOCENTE'] ?>" method="POST" onsubmit="return verificaRadios(this)">
            <legend>Nombramiento de Docente</legend>
            <div class="col-md-12">
                                    <p id="error_para" ></p>
                <div class="col-md-3">
                    <label for="nombre" class="control-label">Nombre del Docente</label>
                </div>
                <?php $nombre="".$docente['NOMBRE_DOC']." ".$docente['APELLPATERNO_DOC']." ".$docente['APELLMATERNO_DOC'];?>
                <div class=" form-group col-md-9">
                    <input class="form-control" value="<?php echo $nombre; ?> " disabled="disabled" id="nombre" type="text" name="nombre"/>
                </div>


            <div class="d-borde col-md-12">
                <div class=" col-md-12">
                    <label class="">Categoria del Nombramiento Solicitado</label>
                </div>

                <div class="form-group col-md-offset-5">
                        <input type="radio" name="categoria" value="1">Interino:<br>
                        <input type="radio" name="categoria" value="2"> Invitado:<br>
                        <input type="radio" name="categoria" value="3"> Asistente (A):<br>
                        <input type="radio" name="categoria" value="4"> Adjunto(B):<br>
                        <input type="radio" name="categoria" value="5"> Catedratico(C):
                </div>
            </div>

            <div>
                    <label class="control-label">Tiempo de Dedicacion:</label> <br>
            </div>
            <div class="col-md-offset-3">
                    <input class="col-md-offset-" type="radio" name="tiempo" value="1"> Parcial
                    <input  type="radio" name="tiempo" value="2"> Exclusivo
            </div>

            <br>
            <div class="col-md-4">
                <label>Nombramiento a Partir del:</label>
                <input  class="form-hh input-global" type="text" name="inicio" id="inicio" placeholder="AAAA-DD-MM">
            </div>
            <div class="col-md-4">
                <label>Tiempo de Duracion:</label>
                <input class="form-hh input-global" type="text" name="gestion" id="gestion" placeholder="II/2016">
            </div>
            <div class="col-md-4">
                <label>Fecha de Solicitud:</label>
                <input class="form-hh input-global" type="text" name="fin" id="fin" placeholder="AAAA-DD-MM">
            </div>
            <br>
            <br>
            <br>
            <div class=" col-md-offset-4">
                <button type="submit" class="btn registrar btn-global" >Registrar</button>
                <button type="button" class="btn btn-info btn-global btn-bs" onClick="location.href='espacioSecretaria.php'"> Salir</button>
            </div>
    </form>
</div>
    <style>
        #error_para {
            color: red;
            text-align: center;
            margin-top: 10px;
            font-size: 15px;
        }
    </style>

<script type="text/javascript">
    function verificaRadios(form){
        marcado=false;
        marcado2=false;
        for ( var i = 0; i < form.categoria.length; i++ ) {
            if (form.categoria[i].checked)
            {
                
                marcado = true;
            }
          
        }
        
        if(!marcado ){
            alert("Por favor, debe elegir una opción de categoria del nombramiento!");
           
                return false;
             
        }
        var inicio = document.getElementById( "inicio" ).value;
        if( !moment(inicio, 'YYYY-DD-MM',true).isValid() )
        {
            error = " Tienes que escribir una fecha correcta de nombramiento. ";
            document.getElementById( "error_para" ).innerHTML = error;
            return false;
        }
        var fin = document.getElementById( "fin" ).value;
        if( !moment(fin, 'YYYY-DD-MM',true).isValid() )
        {
            error = " Tienes que escribir una correcta fecha de solicitud. ";
            document.getElementById( "error_para" ).innerHTML = error;
            return false;
        }
        var gestion = document.getElementById( "gestion" ).value;
        if( gestion == "" )
        {
            error = " Tienes que escribir la gestion para el nombramiento. ";
            document.getElementById( "error_para" ).innerHTML = error;
            return false;
        }
                 else
                        {
                            error = " Datos insertados correctamente ";
                            document.getElementById( "error_para" ).style.color = "blue"
                            document.getElementById( "error_para" ).innerHTML = error;
                            return true;
                        }
        
    }
    </script>
