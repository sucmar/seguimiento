<?php include("views/global/header.view.php")?>
<?php include('views/global/title.view.php')?>



<div class="container nt-form-materiaDocente">

    <form name="fm-mat-doc" id="fm-mat-doc" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" onsubmit="return validate(); ">

        <fieldset class="form-group  ">

            <LEGEND><?php echo $doc['NOMBRE_DOC']." ".$doc['APELLPATERNO_DOC']." ".$doc['APELLMATERNO_DOC']?></LEGEND>
            <div class="col-md-12 col-md-offset-2">
                <div class="col-md-5 ">
                    <div class="col-md-12 form-group">
                        <label class="control-label"> Materias:</label>
                    </div>

                    <div class=" form-group col-md-12">
                        <select class="form-control select-global " name="post_materia" id="post_materia" >
                            <?php foreach ($listaMaterias as $listaMateria): ?>
                                <option  value="<?php echo  $listaMateria['ID_MATERIA'] ?>"><?php  echo  $listaMateria['NOMBRE_MATERIA'] ?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>

                <div class="col-md-2 ">
                    <div class="col-md-12 form-group">
                        <label class="control-label"> Grupo:</label>
                    </div>

                    <div class=" form-group col-md-12">
                        <select class="form-control select-global " >
                            <?php foreach ($listaGrupos as $grupo): ?>
                                <option  value="<?php echo  $grupo['NOM_GRUPO'] ?>"><?php  echo  $grupo['NOM_GRUPO'] ?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>
            </div>
            <!—                          —>


            <legend>Lista Materias:</legend>
            <div class="tabla-aula table-hover table-responsive ">
                <table class="table table-hover" id="tablaAula" class="tablaAula">
                    <thead>
                    <tr>
                        <th name=""><strong>Nro</strong> </th>
                        <th name="th-nom-au"><strong>Materia</strong> </th>
                        <th name="th-des-au"><strong>Grupo</strong></th>
                    </tr>
                    </thead>

                    <tbody class="tbody-aula">
                    <?php // $cont=1;
                    //while ($row=$resultado->fetch_assoc()) { ?>
                    <tr id="<?php //echo "".$row['ID_AULA']?>">
                        <td><?php //echo "".$cont++; ?></td>
                        <td><?php //echo $row['NOMBRE_AULA'] ?></td>
                        <td><?php ///echo $row['DESCRIPCION_AULA'] ?></td>
                        <td class="idAula"><?php //$row['ID_AULA'];?>  </td>
                        <td><a href="    ?id=<?php //echo $row['ID_AULA'] ?>" >Horarior</a></td>
                        <td><a href="    ?id=<?php //echo $row['ID_AULA'] ?>" >Eliminar</a></td>
                    </tr>
                    <?php //} ?>

                    </tbody>
                </table>
            </div>
            <p id="error_de"> Enter a number and click OK:</p>
        </fieldset>

        <div class=" form-group col-md-offset-4">
            <button href=" " htype="submit" class="btn registrar btn-global" name="registrarMateria" value="registrarMateria">Registrar</button>

            <button tipe="submit" onclick="salir()" class="btn cancelar btn-global"  >Salir</button>

        </div>