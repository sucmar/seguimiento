<?php include("views/global/header.view.php")?>

<?php include('views/global/title.view.php')?>

<div class="container nt-form-asignar-grupo ">
    <form class="form-inline" action="establecerGrupo.php?idDoc=<?php echo $idDocMateria ?>&idMa=<?php echo $idMateria?>&idDocente=<?php echo $idDoc?>" method="post">
        <legend>Grupos que tiene la Materia</legend>
        <div class="form-group div-form-ded col-md-8 col-md-offset-2">
            <label for="lab-ded">Eliga un grupo:</label>
            <select class="form-control select-global" name="grup">
                <?php foreach ($grupos as $grupo): ?>
                    <option  value="<?php echo  $grupo['ID_GRUPO'] ?>"><?php  echo  $grupo['NOM_GRUPO'] ?></option>
                <?php endforeach;?>
            </select>
        </div>
        <br>
        <br>
        <div class="col-md-8 col-md-offset-2" >
            <input type="submit" class="btn registrar btn-global" name="" value="selecionar">
            <button type="button" onclick="history.back()" class="btn cancelar btn-global" >Cancelar</button>
        </div>
    </form>
</div>
