$(document).ready(function(){
    var valores="";
    $("#resultado").click(function(){
        // Obtenemos todos los valores contenidos en los <td> de la fila
        // seleccionada
        $(this).find("#nom").each(function(){
            valores=$(this).html()+"\n";
        });
        console.log(valores);
        alert("se hara el seguimiento de "+valores);
        //window.location = "pagina.php?valor="+valores;
        //$("#contenedor").load("pagina.php",{variable:valores});

    });
});