<?php
$buscar = $_POST['b'];
if(!empty($buscar)) {
    buscar($buscar);
}
function buscar($b) {
    $enlace = mysqli_connect("localhost", "root", "", "bd_seguimiento");
    $sql = "SELECT ID_DOC, NOMBRE_DOC, APELLPA_DOC, APELLMA_DOC, TIPO_DOC 
                                         FROM docente 
                                         WHERE NOMBRE_DOC LIKE '%".$b."%' 
                                               OR APELLPA_DOC LIKE '%".$b."%' 
                                               OR APELLMA_DOC LIKE '%".$b."%'";
    $result = mysqli_query($enlace,$sql);
    $contar = mysqli_num_rows($result);
    if($contar == 0){
        echo "No se han encontrado resultados para '<b>".$b."</b>'.";
    }else{
        while($row=mysqli_fetch_array($result)){
            $id = $row['ID_DOC'];
            $nombre = $row['NOMBRE_DOC'];
            $apellido = $row['APELLPA_DOC'];
            //echo $id." - ".$nombre."<br/><br/>";
            echo "<tr id='buscado'>
                    <td id='ide'>$id</td>
                    <td id='nom'>$nombre</td>
                    <td id='ape'>$apellido</td>
                  </tr>";
        }
    }
}
?>