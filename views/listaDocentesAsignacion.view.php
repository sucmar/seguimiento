<?php include("views/global/header.view.php")?>
<?php include('views/global/title.view.php')?>

 <div class="container nt-plantel-doc ">
      <div class="container col-md-6 col-md-offset-3">
      <label>Asignar Materia a un Docente</label>
      </div>
    <div class="container col-md-12 table table-hover">
    <table class="table table-hover">
      <LEGEND> <strong>LISTA DE DOCENTES</strong></LEGEND>
      <tbody>
      <tr>
          <td><strong>NOMBRE </strong></td>
          <td> <strong>APEL. PATERNO</strong></td>
          <td><strong>APEL. MATERNO</strong></td>
          <td></td>
          <td></td>

      </tr>
        <?php foreach ($docentes as $docente):?>

            <tr>
              <td><?php echo $docente['NOMBRE_DOC'] ?></td>
              <td><?php echo $docente['APELLPATERNO_DOC'] ?></td>
              <td><?php echo $docente['APELLMATERNO_DOC'] ?></td>
              <td><a href="materiaDocente.php?id=<?php echo $docente['ID_DOCENTE'] ?>" >AsignarMateria</a></td>
            </tr>
        <?php endforeach;?>
      </tbody>
      </table>


        <div class="col-md-2  col-md-offset-4">
          <button class="btn btn-info btn-global btn-bs" href="espacioSecretaria.php"> Salir </button>
        </div>
      </div>

      <br><br>
  </div>
