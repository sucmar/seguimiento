<?php include("views/global/header.view.php")?>

<?php include('views/global/title.view.php')?>


    <div class="container nt-form-auxiliar">
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">

        <fieldset class="form-group">
            <LEGEND>Registro de Auxiliares</LEGEND>
                <div class="">   
                    <div class="form-group  div-form-nom-aux col-md-4">
                        <label for="lab-nom-aux">(*) Nombres:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="nombres">
                    </div>
                </div>

                    <div class="form-group div-form-ape-pat col-md-4">
                        <label for="lab-ape-pat-aux">(*) Apellido Paterno</label>
                        <input type="text" class="form-control" name="apePaterno" placeholder="apellido paterno">
                    </div>

                    <div class="form-group div-form-ape-mat col-md-4">
                        <label for="lab-ape-mat-aux">Apellido Materno</label>
                        <input type="text" class="form-control" name="apeMaterno" placeholder="apellido materno">
                    </div>
                
                <div class="col-md-3">   
                    <div>   
                        <div class="form-group col-xs-2 div-form-ci">
                            <label for="lab-ci-aux">(*) C.I.:</label>
                            <input type="text" class="form-control" name="ci" placeholder="carnet">
                        </div>

                        <div class="form-group col-xs-2 div-form-sel">
                            <label for="lab-exp">Expendido:</label>
                            <select class="form-control" name='departamento'>
                                    <option value='lpz'>LPZ</option>
                                    <option value='cbba'>CBBA</option>
                                    <option value='scz'>SCZ</option>  
                                    <option value='pts'>PTS</option>
                                    <option value='tja'>TJA</option> 
                                    <option value='oru'>ORU</option>
                                    <option value='ben'>BEN</option>
                                    <option value='pdo'>PDO</option>  
                                    <option value='chq'>CHQ</option>
                            </select>
                        </div>
                    </div>
                </div>

                    <div class="form-group div-form-fec-nac-aux col-md-3">
                        <label for="lab-fec-nav-aux">Fecha de Nacimiento:</label>
                        <input type="date" class="form-control" name="fecNacimiento" placeholder="dd/mm/aa">
                    </div>

                    <div class="form-group div-from-sex-aux col-md-2">
                        <label for="lab-sex-aux">Sexo:</label>
                        <select class="form-control" name='sexo'>
                            <option>F</option>
                            <option>M</option>
                        </select>
                    </div>

                    <div class="form-group div-form-tel-aux col-md-2">
                        <label for="lab-tel-aux">Teléfono Fijo</label>
                        <input type="text" class="form-control" name="telf" placeholder="telefono">
                    </div>

                    <div class="form-group div-form-cel-aux col-md-2">
                        <label for="lab-cel">Celular:</label>
                        <input type="text" class="form-control" name="cel" placeholder="celular">
                    </div>

                    <div class="form-group div-form-dir-dom col-md-3">
                        <label for="lab-dir-dom">Dirección Domiciliaria:</label>
                        <input type="text" class="form-control" name="direccion" placeholder="direccion">
                    </div>

                    <div class="form-group div-form-cor-elc col-md-3">
                        <label for="lab-cor-elc">Correo Electronico</label>
                        <input type="mail" class="form-control" name="correo" placeholder="xyz@dominio.com">
                    </div>

                    <div class="form-group div-form-car col-md-3">
                        <label for="lab-carrera">Carrera</label>
                        <input type="text" class="form-control" name="carrera" placeholder="carrera">
                    </div>

                <div class="col-md-8">
                    <br>
                    <label for="formGroupExampleInput">NOTA: Todos los campos con (*) deben ser llenados obligatoriamente</label> 
                </div>

                
        </fieldset>
        <div class=" form-group col-mod-4 col-md-offset-4">    
                    <button type="submit" class="btn btn-success registrar" >Registrar
                    </button>
                
                    <button type="submit" class="btn btn-success cancelar" >Cancelar
                    </button>
        </div>
        </form>

    </div>