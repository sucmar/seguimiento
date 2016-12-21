$(document).ready(function(){
    //cuando haga click
    $("#tablaAula").on('click','.eliminarAula', function () {
        var currentRow=$(this).closest("tr");
        var columna = currentRow.find(".idAula").html();
        console.log(columna);

        $.ajax({
            type: 'GET',
            url: "capturado.php?valorAula="+ columna,
            success: function(data){
                $("#respuesta") .html(data)
            },
            error: function(data){
                $("#respuesta") .html(data)
            }
        });
    });
});