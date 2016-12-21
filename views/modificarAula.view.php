
<?php include("views/global/header.view.php")?>

<?php include('views/global/title.view.php')?>



    <div class="container nt-form-aulab">

        <form name="fm-aula" id="fm-aula" action="actualizarAula.php?id=<?php echo $aulas['ID_AULA'] ?>" method="POST" onsubmit="return validate(); ">

            <fieldset class="form-group ">
                <LEGEND>Aula</LEGEND>

                <div class="form-group col-md-5">
                    <label>(*) Nombre Aula:</label>
                    <input type="text" class="form-control input-global " id="nom-aula" name="nom-aula" placeholder="624 B" required="required"  value="<?php echo $aulas['NOMBRE_AULA']; ?>" >
                </div>
                <div class="form-group col-md-7">
                    <label>(*) Descripcion del Aula:</label>
                    <input type="text" class="form-control input-global " id="des-aula" name="des-aula" placeholder="Ubicacion del aula" required="required"  value="<?php echo $aulas['DESCRIPCION_AULA']; ?>" >
                </div>
                <label>Llenar todos los campos con (*) </labes>
                <p id="error_de">click OK:</p>
            </fieldset>
        
       
            <div class=" form-group ">
                <button type="submit" class="btn registrar btn-global" name="guardar" >Guardar</button>
                <button tipe="submit" onclick="salir()" class="btn cancelar btn-global"  >Cancelar</button>

            </div>
            <p id="error_para" ></p>

        </form>
	</div>

    <script type="text/javascript">
        function salir() {
            window.location = "http://localhost/tis/seguimiento/registarAula.php";
        }
    </script>

    <script>
        
    function validate()
    {
        var error="";
        var aula = /^[A-Za-z- -.]+$/;
        var nombres = document.getElementById( "nom-aula" );      
        if( nombres.value == "" || nombres.value.match(aula))
        {
            error = " Nombre de aula no deberia contener caracteres especiales y espacio ";
            document.getElementById( "error_de" ).style.color = "red";
            document.getElementById( "error_de" ).innerHTML = error;
            return false;
        }
        else
        {
            error = " Datos insertados correctamente ";
            document.getElementById( "error_de" ).style.color = "blue";
            document.getElementById( "error_de" ).innerHTML = error;
            return true;
        }
    }
    </script>