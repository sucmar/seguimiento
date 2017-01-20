<?php include("views/global/header.view.php")?>
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
<body >
<div class="container nt-contactos">
	<div class="col-md-12">
		<h2 class="informacion">Información de contacto</h2>
		<h3 class="soporte">Contacto y soporte técnico</h3><br>

		<h4 class="copyright" >Cualquier duda o consulta sobre nuestros servicios te puedes comunicar con nosotros y te responderemos a la brevedad. También nos puedes seguir a través de redes sociales.<h4>

		<ul class="col-md-offset-3">
			<p><i class="fa fa-map-marker" aria-hidden="true"></i>
Dirección: Av. Circunvalación entre calle Hernando Siles</p>
			<p><i class="fa fa-mobile " aria-hidden="true"></i>
Móvil: 67551151 </p>
			<p  ><i class="fa fa-facebook-square " aria-hidden="true"></i>
Facebook: <a href="https://web.facebook.com/NextSoft-1818679721697223/?fref=ts">NextSoft</a></p>
			<p><i class="fa fa-twitter-square" aria-hidden="true"></i>
Twitter: <a>NextSoft</a></p>
			<p><i class="fa fa-envelope" aria-hidden="true"></i>
 E-mail: <a>nextsoft.tis@gmail.com</a> </p>
		</ul>

		<h4 class="copyright">Copyright © 2016, 2017 Nextsoft Srl.</h4>

			
	</div>
	<div class="button-container col-md-offset-5">
			<a href="espacioSecretaria.php" class="btn-a btn btn-global">Atrás</a>
		</div>
</div>
</body>
<style>
		div.nt-contactos{
			margin: auto;
			width: 70%;
			height: auto;
			margin-top: 30px;
			font: 
		}


		h3.soporte{
			text-align: center;
		}

		h2.informacion{
			text-align: center;	
		}

		h4.copyright{
			text-align: center;	
		}

		body{
			font-weight: normal;
			font: message-box;
			color: var(--in-content-page-color);
		}
</style>


<?php include('views/global/subtitle.view.php')?>
<?php include('views/global/footer.view.php')?>