<?php include("views/global/header.view.php")?>


<div class="nt-registroMaterias" >
    <fieldset>
    <legend>REGISTRO DE MATERIAS:</legend>
        
        <form action="" method="POST" onsubmit="return validate();">
           			
			<div class="form-group col-sm-12">
                <label>(*) Carrera:</label>
                <select class="form-control select-global" name="nombreCarrera">
                    <?php foreach ($carreras as $carrera):?>
                        <option><?php echo $carrera['NOMBRE_CARRERA'] ?></option>
                    <?php endforeach;?>
                </select>
            
            </div>
           <div class="form-group col-sm-6">
                <label>(*) Nombre Materia:</label>
                <input class="form-control input-global" type="text" id="nombreMateria" name="nombreMateria" required>
            
            </div>
            
            <div class="form-group col-sm-6">
                <label>(*) Sigla Materia:</label>
                <input class="form-control input-global" type="text" id="siglaMateria" name="siglaMateria" required>
            </div>
			
			<div class="form-group col-sm-12">
                <label>(*) Nombre Departamento:</label>
                <select class="form-control select-global" name="nombreDpto">
                    <?php foreach ($departamentos as $departamento):?>
                        <option><?php echo $departamento['NOMBRE_DPTO'] ?></option>
                    <?php endforeach;?>
                </select>
            </div>
			
			<div class="form-group col-sm-4">
                <label>(*) Carga Horaria:</label>
                <input class="form-control input-global" type="text" id="cargaHorariaMateria" name="cargaHorariaMateria" required>
            </div>
            
            <div class="form-group col-sm-4">
                <label>(*) Tipo Materia:</label>
                <select class="form-control select-global" id="tipoMateria" name="tipoMateria">
                    <option>CURRICULAR</option>
                    <option>NO CURRICULAR</option>
                </select>
            </div>
            
            <div class="form-group col-sm-4">
                <label>(*) Nivel Semestral Materia:</label>
                <select class="form-control select-global" id="nivelMateria" name="nivelMateria">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                    <option value="H">H</option>
                    <option value="I">I</option>
                    <option value="J">J</option>

                </select>
            </div>
            
            
            
            <p>NOTA: Todos los campos con (*) deben ser llenados obligatoriamente</p>
            <p id="error_de"> Enter a number and click OK:</p>

            <center>
                    <div class="btn-inline">
                    <button class="btn btn-default btn-global" type="submit">Guardar</button>
                    <a class="btn btn-default btn-global" href="espacioSecretaria.php">Cancelar</a>
                    </div>
            </center>
            
            
        </form>
        
    </fieldset>
</div>

<script>

function validate()
    {
        var error="";
        var nombres = document.getElementById( "nombreMateria" );
        var letters = /^[A-Za-z- -]+$/;
        var numbers = /^[1-9-0]+$/;
                
        if( nombres.value == "" || !nombres.value.match(letters))
        {
            error = " Nombre de carrera no deberia contener numeros o caracteres especiales ";
            document.getElementById( "error_de" ).style.color = "red";
            document.getElementById( "error_de" ).innerHTML = error;
            return false;
        }
        var sigla = document.getElementById( "siglaMateria" );
        if( sigla.value == "" || !sigla.value.match(numbers) )
        {
            error = " Tienes que escribir una sigla numeral para la Carrera ";
            document.getElementById( "error_de" ).style.color = "red";
            document.getElementById( "error_de" ).innerHTML = error;
            return false;
        }
        var tipo = document.getElementById( "tipoMateria" );
        if( tipo.value == "" || !tipo.value.match(letters) )
        {
            error = " Tienes que escribir una sigla para la Carrera ";
            document.getElementById( "error_de" ).style.color = "red";
            document.getElementById( "error_de" ).innerHTML = error;
            return false;
        }
        var nivel = document.getElementById( "nivelMateria" );
        if( nivel.value == "" || !nivel.value.match(letters) )
        {
            error = " Tienes que escribir una sigla para la Carrera ";
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



