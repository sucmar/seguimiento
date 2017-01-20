<?php include('views/global/header.view.php')?>
<?php include('views/global/title.view.php')?>

<div class="container nt-form-grupos-asignados">
<LEGEND><?php echo "DOCENTE: ".$doc['NOMBRE_DOC']." ".$doc['APELLPATERNO_DOC']." ".$doc['APELLMATERNO_DOC']?></LEGEND>
    <table  class="table table-bordered table-hover" id="table">
        <thead class="thead-inverse">
        <tr class="header">
            <th style="width:60%;">MATERIA</th>
            <th style="width:40%;">GRUPO</th>
            <th></th>
        </tr>
        </thead>
        <?php foreach ($materiasAsignadas as $materia):?>
            <tr class="active">
                <td id="ideMateria"><?php echo $materia['NOMBRE_MATERIA'] ?></td>
                <td id="nombreMateria"><?php echo $materia['GRUPO'] ?></td>
                <td><a href="horarioMateria.php?idDoc=<?php echo $materia['ID_DOCENTE']?>&idMateria=<?php echo $materia['ID_MATERIA']?>&grupo=<?php echo $materia['ID_GRUP']?>&idDocMateria=<?php echo $materia['ID_DOCMATERIA']?>" class="btn btn-link">asignar horario</a></td>

            </tr>
        <?php endforeach;?>
    </table>
<a href="docente.php?id=<?php echo $idDoc?>" class="btn btn-global btn-info col-md-offset-5">Volver</a>
<br>
<br>
</div>

