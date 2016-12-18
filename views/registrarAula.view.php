
<?php include("views/global/header.view.php")?>

<?php include('views/global/title.view.php')?>




    <div class="container nt-form-aulab">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" onsubmit="return validate(); require=">

            <fieldset class="form-group ">
                <LEGEND>Aula</LEGEND>

                <div class="form-group col-md-5">
                    <label>(*) Nombre Aula:</label>
                    <input type="text" class="form-control input-global" id="nom-aula" name="nom-aula" placeholder="624 B" required="required">
                </div>
                <div class="form-group col-md-7">
                    <label>(*) Descripcion del Aula:</label>
                    <input type="text" class="form-control input-global" id="des-aula" name="des-aula" placeholder="Ubicacion del aula" required="required" >
                </div>

                <legend>Lista de Aulas:</legend>
        <div class="form-group  tabla-cont table-hover">
                <table class="table table-hover ta-mat">  
                    <thead>
                        <tr>
                            <th name=""><strong>Nro</strong> </th>
                            <th name="th-nom-au"><strong>Aula</strong> </th>
                            <th name="th-des-au"><strong>Ubicacion</strong></th>
                        </tr>
                      </thead>

                    <tbody class="tbody-aula">
                    <?php $cont=1;
                       while ($row=$resultado->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo "".$cont++; ?></td>
                        <td><?php echo $row['NOMBRE_AULA'] ?></td>
                        <td><?php echo $row['DESCRIPCION_AULA'] ?></td>
                    </tr>
                <?php } ?>               
                    </tbody>
                  </table>
                 </div>
                 <label>Llenar todos los campos con (*) </labes>
            </fieldset>

            <div class=" form-group ">
                <button type="submit" class="btn registrar btn-global" >Registrar</button>
                <button type="submit" class="btn registrar btn-global" >Modificar</button>
                <button type="submit" class="btn registrar btn-global" >Eliminar</button>
                <button href="" onclick="salir()" class="btn cancelar btn-global" >Salir</button>

            </div>

            <p id="error_para" ></p>

        </form>
	</div>

	