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


	<div class="container varios">
		<div class="title">
			<h1 class="title-text"><i class="fa fa-check-square-o" aria-hidden="true"></i>
Agradecimientos</h1>
		</div>
		
		<div>
			<p>
				Nextsoft: Usted puede visitar la pagina oficial de <a target="_blank" href="http://nextsoft.webcindario.com">Nextsoft srl.</a>
			</p>
		</div>
		<div>
			<ul>
				<li class="varios">A nuestros Docentes de FCYT UMSS por compartirnos su conocimientos.</li>
				<li class="varios">A nuestros amigos por su colaboracion.</li>
				<li class="varios">A nuestra familias por brindarnos siempre su apoyo incondicional.</li>
				<li class="varios">A Dios por estar siempre en nuestro largo recorrido de la vida.</li>
			</ul>
		</div>
		
		<div class="button-container">
			<a href="espacioSecretaria.php" class="btn-a btn btn-global">Atrás</a>
		</div>
		
	</div>

<style>

	.container {
		margin: auto;
		width: 50%;
	}
	
	h1 {
    font-weight: lighter;
    line-height: 1.2;
    color: var(--in-content-text-color);
    margin: 0;
    margin-bottom: .5em;
}
	
	.title-text {
    border-bottom: 1px solid #C1C1C1;
    font-size: inherit;
    padding-bottom: 0.4em;
}
	
	.title {
    font-size: 2.5em;
}
	p {
		font-size: 1.2em;
	}
	
	ul > li, ol > li {
    margin-bottom: .5em;
}
	
	li.varios {
		font-size: 1.2em;
	}
	
	.button-container {
    margin-top: 1.2em;
}
	a.btn-a {
		padding: 3px;
		font: inherit;
		font-size: 1.1em;
		width: 15%;
	}
</style>

<?php include('views/global/subtitle.view.php')?>
<?php include('views/global/footer.view.php')?>