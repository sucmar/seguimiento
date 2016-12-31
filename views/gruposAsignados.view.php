<?php include('views/global/header.view.php')?>
<?php include('views/global/title.view.php')?>


<table  class="table table-bordered table-hover" id="table">
    <thead class="thead-inverse">
    <tr class="header">
        <th style="width:60%;">MATERIA</th>
        <th style="width:40%;">NOMBRE GRUPO</th>
        <th></th>
    </tr>
    </thead>
    <?php foreach ($materiasAsignadas as $materia):?>
        <tr class="active">
            <td id="ideMateria"><?php echo $materia['NOMBRE_MATERIA'] ?></td>
            <td id="nombreMateria"><?php echo $materia['GRUPO'] ?></td>
            <td><a href="horarioMateria.php?id=<?php echo $materia['ID_DOCENTE']?>&idMateria=<?php echo $materia['ID_MATERIA']?>" class="btn btn-link">asignar horario</a></td>
        </tr>
    <?php endforeach;?>
</table>


