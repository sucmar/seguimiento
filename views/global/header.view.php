<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema De Apoyo</title>
    <link rel="stylesheet" href="estilos/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="estilos/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="estilos/fonts/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="estilos/css/menu.css">

    <link rel="stylesheet" type="text/css" href="estilos/css/plantelDocente.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/registroDocentes.css">

    <link rel="stylesheet" type="text/css" href="estilos/css/listaUsuarios.css">

    <link rel="stylesheet" type="text/css" href="estilos/css/seguimiento.css">
    <link rel="stylesheet" type="text/css" href="estilos/css/registroRoles.css">

    <link rel="stylesheet" href="estilos/css/jquery-ui.css">    
    <script src="estilos/js/jquery.min.js"></script>
    <script src="estilos/js/jquery-ui.min.js"></script>
    <script src="estilos/js/moment.js"></script>
    <script src="estilos/js/timer.js"></script>

    <script>
        $('document').ready(function () {
            function hora() {
                $.ajax({
                    type: 'GET',
                    url: 'funciones.php',
                    success: function ($hora) {
                        $('#hora').html($hora);
                        setTimeout(hora(),1000);
                    }
                });
            }
            setTimeout(hora(),1000);
        });
    </script>
</head>