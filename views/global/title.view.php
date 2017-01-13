
<div class="container nt-menu-titulo">
        <div class="row">
            <div class="col-sm-4">
                <img src="images/logo2.png" class="img-responsive">
              
            </div>

            <div class="col-sm-4">
                <h4 class="titulo"><strong>Sistema de Seguimiento y Nombramiento Docente</strong></h4>
            </div>
            <div class="col-sm-4">
                <form action="./cerrar.php" class="navbar-form navbar-right" >
                <p id="nombre-usuario" style="color: white"><?php echo $_SESSION['usuario']?>
                    <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                </p>
                <input type="submit" class="btn btn-global" name="" value="salir">
                </form>

            </div>


        </div>
    </div>
<style type="text/css">

    * {
        border: 0px;
        padding: 0px;
    }

    body {
        background-color: #F5F5F5;
    }
    div.horaT {
        color: white;
        float: left;
        margin-left: -20px;
    }

    div.nt-menu-titulo {
        background-color: #3949AB;
        border-bottom: 1px solid #BDBDBD;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.26);
        width: 100%;
    }

    img {
        margin-left: 50px;
        width: 60px;
    }

    div.nt-menu-titulo div.row div.col-sm-4 h4.titulo {
        font-family: verdana, arial, helvetica, sans-serif;
        margin-top: 25px;
        text-align: center;
        color: white;
    }
</style>
