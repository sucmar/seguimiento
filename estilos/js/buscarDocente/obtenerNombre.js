/**
 * Created by ESTALIN on 12/14/2016.
 */
$(document).ready(function(){
    //cuando haga click
    $("#seleccionar").click(function(){
        //obtemos la variable
        var nombre = "";
        $(this).find("#nombre").each(function(){
            nombre=$(this).html()+"\n";
            console.log("ese"+nombre);
        });
        //var var_js = $("#ide").val();
        //console.log("ese"+var_js);
        //creamos una peticion get via ajax a js2php.php
        $.ajax({
            type: 'GET',
            url: "seguimiento.php?nombre="+ nombre,
            success: function(data){
                $("#nom") .html(data)
            },
            error: function(data){
                $("#nom") .html(data)
            }
        });
    })
});
