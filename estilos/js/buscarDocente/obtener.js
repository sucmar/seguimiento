/**
 * Created by ESTALIN on 12/11/2016.
 */
//esperamos a que carge el dom
//esperamos a que carge el dom
//esperamos a que carge el dom
$(document).ready(function(){
    //cuando haga click
    $("tr").click(function(){
        //obtemos la variable
        var var_js = "";
        $(this).find("#ide").each(function(){
            var_js=$(this).html()+"\n";
            console.log("ese"+var_js);
        });
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