/**
 * Created by ESTALIN on 12/21/2016.
 */
$(document).ready(function(){
    //cuando haga click
    $("tr").click(function(){
        //obtemos la variable
        var var_js = "";
        $(this).find("#materiaId").each(function(){
            var_js=$(this).html()+"\n";
            console.log("ese"+var_js);
        });
        //var var_js = $("#ide").val();
        //console.log("ese"+var_js);
        //creamos una peticion get via ajax a js2php.php
        $.ajax({
            type: 'GET',
            url: "capturadoDos.php?materia="+ var_js,
            success: function(data){
                $("#idMateria") .html(data)
            },
            error: function(data){
                $("#idMateria") .html(data)
            }
        });
    })
});