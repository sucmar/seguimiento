
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

                       
                <legend>Lista de Aulas:</legend>
                 <div class="tabla-aula table-hover table-responsive ">
                <table class="table table-hover" id="tablaAula" class="tablaAula">  
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
                    <tr id="<?php echo "".$row['ID_AULA']?>">
                        <td><?php echo "".$cont++; ?></td>
                        <td><?php echo $row['NOMBRE_AULA'] ?></td>
                        <td><?php echo $row['DESCRIPCION_AULA'] ?></td>
                        <td class="idAula"><?php $row['ID_AULA'];?>  </td>
                        <td><a href="modificarAula.php?id=<?php echo $row['ID_AULA'] ?>" >Modificar</a></td>
                        <td><a href="eliminarAula.php?id=<?php echo $row['ID_AULA'] ?>" >Eliminar</a></td>
                    </tr>
                <?php } ?>  

                    </tbody>
                  </table>
                 </div>
                 <label>Llenar todos los campos con (*) </label>
                 <p id="error_de"> Enter a number and click OK:</p>
            </fieldset>

            <div class=" form-group col-md-offset-4">
                <button href="registrarAula.php" htype="submit" class="btn registrar btn-global" name="registrar" value="Registrar">Registrar</button>
                
                <button tipe="submit" onclick="salir()" class="btn cancelar btn-global"  >Salir</button>

            </div>

            <p id="error_para" ></p>

        </form>
	</div>
<!-- -->
    <script>
    $(document).ready(function(){   
        // code to read selected table row cell data (values).
        $(".btnSelect").on('click',function(){
             var currentRow=$(this).closest("tr");
             var nom=currentRow.find("td:eq(1)").html();
             var des=currentRow.find("td:eq(2)").html();
             var id=currentRow.find("td:eq(3)").html();
             var data=nom+"\n"+des+"\n"+id;
            document.getElementById("nom-aula").value = nom;
            document.getElementById("des-aula").value = des;             
        });
    });


    </script>

    <script type="text/javascript">
        function salir() {
            window.location = "http://localhost/tis/seguimiento/espacioSecretaria.php";
        }
    </script>

    <script>
        
    function validate()
    {
        var error="";
        var aula = /^[A-Za-z-1-9-0]+$/;
        var nombres = document.getElementById( "nom-aula" );      
        if( nombres.value == "" || !nombres.value.match(aula))
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
      