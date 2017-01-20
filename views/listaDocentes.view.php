<?php include('views/global/header.view.php')?>
<?php include('views/global/title.view.php')?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
    .fax {
        height: 15px;
    }
    * {
        border: 0px;
        padding: 0px;
    }

    body {
        background-color: #F5F5F5;
    }

    div.nt-menu-titulo {
        background-color: #3949AB;
        border-bottom: 1px solid #BDBDBD;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.26);
        width: 100%;
    }

    img {
        margin-left: 50px;
        width: 60px;
    }

    div.nt-menu-titulo div.row div.col-sm-4 h4.titulo {
        font-family: verdana, arial, helvetica, sans-serif;
        margin-top: 25px;
        text-align: center;
        color: white;
    }
</style>

<?php ?>
<div class="container from-lista-reporte  ">
    <LEGEND> <strong>LISTA DE DOCENTES</strong></LEGEND>
    <div class="container col-md-12 table table-hover tabla-lista-reporte">
     <input type="text" class="input-global form-group form-control" name="campoBuscador" id="buscarMateria" onkeyup="doSearch()">
        <table class="table table-hover" id="tablaMateria">
            
            <tr>
               <td><strong>NRO. </strong></td>
                <td><strong>NOMBRE </strong></td>
                <td> <strong>APELLIDO PATERNO</strong></td>
                <td><strong>APELLIDO MATERNO</strong></td>
            </tr>
            <?php foreach ($docentes as $docente):?>

                <tr>
                    <td class="idDocente"><?php echo $docente['ID_DOCENTE'] ?></td>
                    <td ><?php echo $docente['NOMBRE_DOC'] ?></td>
                    <td><?php echo $docente['APELLPATERNO_DOC'] ?></td>
                    <td><?php echo $docente['APELLMATERNO_DOC'] ?></td>
                    <td><a href="modificarDocente.php?id=<?php echo $docente['ID_DOCENTE'] ?>" >modificar</a></td>
                    <td><a href="eliminarDocente.php?id=<?php echo $docente['ID_DOCENTE'] ?>" class="eliminar">eliminar</a></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
    <br><br>
</div>
<div id='respuesta'></div>
