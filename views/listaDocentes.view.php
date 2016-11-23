<?php include('views/global/header.view.php')?>

<?php include('views/global/title.view.php')?>

 <div class="container nt-plantel-doc ">
    <div class="container col-md-12 table table-hover">
    <table class="table table-hover">
      <LEGEND>LISTA DE DOCENTES</LEGEND>
        <!--<tbody>
          <tr>  <th scope="row">  1 </th> <td>  Ing. Ayoroa Cardozo Jose Richard  </td> </tr>
          <tr>  <th scope="row">  2 </th> <td>  Msc. Costas Jáuregui Vladimir </td> </tr>
          <tr>  <th scope="row">  3 </th> <td>  Msc. Lic. Jaldin Rosales K. Rolando </td> </tr>
          <tr>  <th scope="row">  4 </th> <td>  Msc. Lic. Montecinos Choque Marco Antonio </td> </tr>
          <tr>  <th scope="row">  5 </th> <td>  Msc. Ing. Orellana Araoz Jorge Walter </td> </tr>
          <tr>  <th scope="row">  6 </th> <td>  Msc. Lic. Rodriguez Bilbao Erika Patricia </td> </tr>
          <tr>  <th scope="row">  7 </th> <td>  Msc. Lic. Salazar Serrudo Carla </td> </tr>
          <tr>  <th scope="row">  8 </th> <td>  Msc. Lic. Torrico Bascopé Rosemary  </td> </tr>
          <tr>  <th scope="row">  9 </th> <td>  Ing. Villarroel Novillo Jimmy </td> </tr>
        </tbody>-->
      <tbody>
        <?php foreach ($docentes as $docente):?>
            <tr>
              <th><?php echo $docente['ID_DOC'] ?></th>
              <td><?php echo $docente['PROFESION_DOC'] ?></td>
              <td><?php echo $docente['NOMBRE_DOC'] ?></td>
              <td><?php echo $docente['APELLPA_DOC'] ?></td>
              <td><?php echo $docente['APELLMA_DOC'] ?></td>
            </tr>
        <?php endforeach;?>
      </tbody>
      </table>
      </div>
      <br><br>
  </div>
