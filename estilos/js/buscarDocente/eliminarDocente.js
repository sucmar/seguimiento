$(document).ready(function(){
    //cuando haga click
    $("#eliminar").click(function(){
        //obtemos la variable
        var var_js = "";
        $("#idDocente")
        //var var_js = $("#ide").val();
        //console.log("ese"+var_js);
        //creamos una peticion get via ajax a js2php.php
        $.ajax({
            type: 'GET',
            url: "capturado.php?var_js="+ var_js,
            success: function(data){
                $("#response") .html(data)
            },
            error: function(data){
                $("#response") .html(data)
            }
        });
    })
});