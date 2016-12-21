/**
 * Created by ESTALIN on 12/17/2016.
 */
$(document).ready(function(){
    //cuando haga click
    $("#tablaDocente").on('click','.modificar', function () {
        var currentRow=$(this).closest("tr");
        var columna = currentRow.find(".idDocente").html();
        console.log(columna);

        $.ajax({
            type: 'GET',
            url: "modificarDocente.php?valor="+ columna,
            success: function(data){
                $("#res") .html(data)
            },
            error: function(data){
                $("#res") .html(data)
            }
        });
    });
});





