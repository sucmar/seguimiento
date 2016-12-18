$(document).ready(function(){
    //cuando haga click
    $("#tablaDocente").on('click','.eliminar', function () {
        var currentRow=$(this).closest("tr");
        var columna = currentRow.find(".idDocente").html();
        console.log(columna);

        $.ajax({
            type: 'GET',
            url: "capturado.php?valorDocente="+ columna,
            success: function(data){
                $("#respuesta") .html(data)
            },
            error: function(data){
                $("#respuesta") .html(data)
            }
        });
    });
});