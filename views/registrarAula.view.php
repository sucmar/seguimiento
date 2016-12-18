
<?php include("views/global/header.view.php")?>

<?php include('views/global/title.view.php')?>




    <div class="container nt-form-aulab">

        <form name="fm-aula" id="fm-aula" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" onsubmit="return validate(); ">

            <fieldset class="form-group ">
                <LEGEND>Aula</LEGEND>

                <div class="form-group col-md-5">
                    <label>(*) Nombre Aula:</label>
                    <input type="text" class="form-control input-global " id="nom-aula" name="nom-aula" placeholder="624 B" required="required" >
                </div>
                <div class="form-group col-md-7">
                    <label>(*) Descripcion del Aula:</label>
                    <input type="text" class="form-control input-global " id="des-aula" name="des-aula" placeholder="Ubicacion del aula" required="required" >
                </div>

                <div class=" col-md-offset-4 ">
                <button href="registrarAula.php" htype="submit" class="btn registrar btn-global" name="registrar" value="Registrar">Registrar</button>

                </div>
            </fieldset>
        </form>
        <form>
            <fieldset>        
                <legend>Lista de Aulas:</legend>
                 <div class="tabla-aula table-hover table-responsive ">
                <table class="table table-hover">  
                    <thead>
                        <tr>
                            <th name=""><strong>Nro</strong> </th>
                            <th name="th-nom-au"><strong>Aula</strong> </th>
                            <th name="th-des-au"><strong>Ubicacion</strong></th>
                        </tr>
                      </thead>

                    <tbody class="tbody-aula">
                    <?php  $cont=1;
                       while ($row=$resultado->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo "".$cont++; ?></td>
                        <td><?php echo $row['NOMBRE_AULA'] ?></td>
                        <td><?php echo $row['DESCRIPCION_AULA'] ?></td>
                        <td> <?php echo "".$row['ID_AULA'];?>  </td>
                        <td><button  onclick="seleccionar()" class="btnSelect">selecionar</button> </td>

                    </tr>
                <?php } ?>               
                    </tbody>
                  </table>
                 </div>
                 <label>Llenar todos los campos con (*) </labes>
            </fieldset>

            <div class=" form-group ">
               
                <button type="submit" class="btn registrar btn-global" name="modificar" value="Modificar">Modificar</button>
                <button type="submit" class="btn registrar btn-global" name="eliminar" value="Eliminar">Eliminar</button>
                <button tipe="submit" onclick="salir()" class="btn cancelar btn-global"  >Salir</button>

            </div>

            <p id="error_para" ></p>

        </form>
	</div>

<script>

$(document).ready(function(){
    // code to read selected table row cell data (values).
    $(".btnSelect").on('click',function(){
         var currentRow=$(this).closest("tr");
         var col1=currentRow.find("td:eq(0)").html();
         var col2=currentRow.find("td:eq(1)").html();
         var col3=currentRow.find("td:eq(2)").html();
         var col4=currentRow.find("td:eq(3)").html();
         var data=col1+"\n"+col2+"\n"+col3+"\n"+col4;
        alert(data);
         
    });
});

</script>

<script type="text/javascript">
    function salir() {
        window.location = "http://localhost/tis/seguimiento/espacioSecretaria.php";
    }
</script>
	