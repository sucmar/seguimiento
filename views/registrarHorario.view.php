<?php include("views/global/header.view.php")?>
<?php include('views/global/title.view.php')?>


    <div class="container nt-form-horario">
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" onsubmit="return validate();">

            <fieldset class="form-group ">
                <LEGEND>Registro de Horario</LEGEND>

                <div class="form-group col-md-3">
                    <label>(*) Periodo:</label>
                </div >

                <div class="col-md-3 form-group">
                    <input name="periodo" type="number" min="00" max="60" step="5"  required="required" class="form-control input-global">
                </div>

                <div class="form-group col-md-6">
                    <label> En minutos</label>
                    <br>
                    <br>
                </div >

                <div class="form-group div-form-ape-pat col-md-3">
                    <label >Hora Inicial:</label>
				</div>

                 <div class="col-md-3 input-group bootstrap-timepicker timepicker">
                    <input id="timepicker2" name="hr-ini" id="hr-ini"type="text" class="form-control input-small input-global">
                </div>
                <br>
                <br>
                <div class=" form-group col-md-3">
                    <label for="lab-ape-mat" >Hora Final:</label>
                </div>  

	            <div class="col-md-3 input-group bootstrap-timepicker timepicker">
                    <input id="timepicker3" name="hr-fin" id="hr-fin" type="text" class="form-control input-small input-global">
                    
            


        <script type="text/javascript">
            $('#timepicker1').timepicker({ 
                    showMeridian: false,
                    minuteStep: 5,
                    
                 timeFormat: 'mm'});
        </script>


        <script type="text/javascript">
            $('#timepicker2').timepicker({ 
                    showMeridian: false,
                    showHours: true,
                    minuteStep: 5});
        </script>
        <script type="text/javascript">
            $('#timepicker3').timepicker({ 
                    showMeridian: false,
                    minuteStep: 5});
        </script>
             <p id="error_para" ></p>
            </fieldset>
            <div class=" form-group col-md-offset-3">
                <button type="submit" class="btn registrar btn-global" >Registrar</button>

                <button href="" onclick="salir()" class="btn cancelar btn-global" >Cancelar</button>

            </div>

           

        </form>
	</div>

	<script type="text/javascript">
        function salir() {
            window.location = "http://localhost/tis/seguimiento/espacioSecretaria.php";
        }
    </script>

    <script>
        
    function validate()
    {
        var error="";
        var hora = /^[1-9-0-:]+$/;
        var nombres = document.getElementById( "hr-ini" );      
        if( nombres.value == "" || !nombres.value.match(hora))
        {
            error = " El periodo inicial no debe tener letras ";
            document.getElementById( "error_de" ).style.color = "red";
            document.getElementById( "error_de" ).innerHTML = error;
            return false;
        }
        if( nombres.value == "" || !nombres.value.match(hora))
        {
            error = " El periodo final no debe tener letras ";
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