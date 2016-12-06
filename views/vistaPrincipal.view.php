<?php include('views/global/header.view.php')?>


<div class="container nt-menu-titulo">
        <div class="row">

            <div class="col-sm-4">
                <img src="images/logo2.png" class="img-responsive">  
            </div>

            <div class="col-sm-4">
                <h4 class="titulo"><strong>Sistema de Seguimiento y Nombramiento Docente</strong></h4>
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

<div class="container">
  <div id="timer"></div>
  <div class="container text-center nt">
      <ul class="breadcrumb center-block">
          <li><a href="#">Inicio</a></li>
          <li><a href="listaDocentes.php">Docentes</a></li>
          <li><a href="#">Informacion</a></li>
      </ul>
    <button id="button" class="btn btn-success">Ingresar</button>
  </div>
  <div class="jumbotron text-center inicio">

      <div class="container">
      <p>Sistema web que permite la generación de formularios de seguimiento y solicitud de nombramiento de docentes que se realiza para su respectiva contratación y que es solicitada a cada carrera por la Dirección de Planificación Académica (DPA), requerido para los procesos administrativos de nombramiento del plantel docente, brindando ayuda a la secretaria encargada de procesar ambos formularios con el sistema</p>
      </div>
  </div>
<div class="col-sm-4">

</div>
  <div class="col-sm-4 container cop">
    <img class="img-circle img-responsive logo3 center-block" src="images/logo3.png">
  </div>

    <div class="col-sm-4 pag-rel">
    <a target="_blank" href="http://www.cs.umss.edu.bo/"><img src="images/infsis.png" class="img-rounded icono-relacion"></a>
    <a target="_blank" href="http://websis.umss.edu.bo/"> <img src="images/Websiss_umss.jpg" class="img-rounded icono-relacion"></a>
    <a target="_blank" href="http://www.memi.umss.edu.bo/"><img src="images/memi.gif" class="img-rounded icono-relacion"></a>
    <a target="_blank" href="http://enlinea.umss.edu.bo/moodle2/"><img src="images/Moodle.jpe" class="img-rounded icono-relacion"></a>
    <a target="_blank" href="http://www.fcyt.umss.edu.bo/"><img src="images/fcyt_umss.jpg" class="img-rounded icono-relacion"></a>
    <a target="_blank" href="http://www.umss.edu.bo/"><img src="images/UMSS.png" class="img-rounded icono-relacion"></a>
    </div>
</div>
<script>
  window.onload = function () {
    document.getElementById('button').onclick = function () {
      location.href = 'login.php';
    };
    setInterval(function() {
    var currentTime = new Date ( );    
    var currentHours = currentTime.getHours ( );   
    var currentMinutes = currentTime.getMinutes ( );   
    var currentSeconds = currentTime.getSeconds ( );
    currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;   
    currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;    
    var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";    
    currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;    
    currentHours = ( currentHours == 0 ) ? 12 : currentHours;
    var dd = currentTime.getDate();
    var mm = currentTime.getMonth(); //January is 0!
    var yyyy = currentTime.getFullYear();
    var month = new Array();
    month[0] = "enero";
    month[1] = "febrero";
    month[2] = "marzo";
    month[3] = "abril";
    month[4] = "mayo";
    month[5] = "junio";
    month[6] = "julio";
    month[7] = "agosto";
    month[8] = "septiembre";
    month[9] = "octubre";
    month[10] = "noviembre";
    month[11] = "diciembre";
    var n = month[mm]; 
    if(dd<10) {
        dd='0'+dd
    } 
    if(mm<10) {
        mm='0'+mm
    } 
    var today = dd+' de '+n+' del '+yyyy;   
    var currentTimeString = today + " - " + currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
    document.getElementById("timer").innerHTML = currentTimeString;
}, 1000);
  } 
</script>
<style type="text/css">
  div#timer {
    font-size: 18px;
    color: #337ab7;

  }

  div.pag-rel {
      margin-top: 150px;
  }

  div.nt ul.breadcrumb {
    margin-top: 10px;
    width: 400px;
    border: 1px solid #EF9A9A;
    font-size: 20px;
  }

  div.nt button.btn {
    float:right;
    margin-right: -100px;
  }

  div.inicio {
    margin-top: -40px;
    border: 1px solid #9E9E9E;
  }


  img.logo3 {
    width: 200px;
    height: 200px;
  }

  div.cop {
    margin-top: -10px;
    border: 1px solid transparent;
  }
</style>

<?php include('views/global/subtitle.view.php')?>

<style type="text/css">
  
div.nt-menu-subpie {
  margin-top: 16.48%;
  background-image: url("images/pie.png");
  background-size: cover;
  /*background-color: #3949AB;*/
  border-top: 1px solid #BDBDBD;
  bottom: 0;
  position: fixed;
  width: 100%;
  text-align: center;

}

div.col-sm-4 i.inicio {
  margin-top: 7px;
  margin-left: 80px;
}

div.col-sm-4 b {
  font-family: verdana, arial, helvetica, sans-serif;
  font-size: 13px;
  color: white;
}
div.col-sm-4 a {
  color: white;
  font-size: 13px;
}

</style>


<?php include('views/global/footer.view.php')?>
