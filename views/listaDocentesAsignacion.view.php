<?php include("views/global/header.view.php")?>
<?php include('views/global/title.view.php')?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container nt-plantel-doc form-doc-asig ">
    <div class="container col-md-6 col-md-offset-3">
        <label>Asignar Materia a un Docente</label>
    </div><br>
    <LEGEND> <strong>LISTA DE DOCENTES</strong></LEGEND>
    <td><strong>NOMBRES Y APELLIDOS </strong></td>
    <div class="container col-md-12 table table-hover tabla-lista-docente">
        <table class="table table-hover">
            <tbody>
            <tr>
                <td></td>
                <td></td>

            </tr>
            <?php foreach ($docentes as $docente):?>

                <tr>
                    <td><?php echo $docente['NOMBRE_DOC']."  " ?><?php echo $docente['APELLPATERNO_DOC']."  " ?><?php echo $docente['APELLMATERNO_DOC'] ?></td>
                    <td><a href="docente.php?id=<?php echo $docente['ID_DOCENTE']?>" >AsignarMateria</a></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>


        <div class="col-md-2  col-md-offset-4">
            <button class="btn btn-info btn-global btn-bs" onClick="location.href='espacioSecretaria.php'">Salir</button>
        </div>
    </div>

    <br><br>
</div>
