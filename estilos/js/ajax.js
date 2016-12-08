/**
 * Created by ESTALIN on 12/7/2016.
 */
$(function () {
    $('#search').submit(function (e) {
        e.preventDefault();
    })

    $('#buscar').keyup(function () {
        var envio = $('#buscar').val();

        $('#resultado').html('<h2>buscando...</h2>');

        $.ajax({
            type: 'POST',
            url: 'seguimiento.php',
            data: ('buscar='+envio),
            success: function (resp) {
                if(resp!=""){
                    $('#resultado').html(resp);
                }
            }
        })
    })
})