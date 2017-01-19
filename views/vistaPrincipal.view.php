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
<div class="container">
  <div id="timer"></div>
    
  <div class="container text-center nt">
      <ul class="breadcrumb center-block">
          <li><a onclick="location.href='login.php'">Inicio</a></li>
          <li><a onclick="location.href='btDocente.php'">Docentes</a></li>
          <li><a onclick="location.href='contactos.php'">Información</a></li>
      </ul>
    <button id="button" class="btn btn-global">Ingresar</button>
  </div>
    
  <div class="jumbotron text-center inicio">

      <div class="container">
      <p>Sistema web que permite la generación de formularios de seguimiento y solicitud de nombramiento de docentes que se realiza para su respectiva contratación y que es solicitada a cada carrera por la Dirección de Planificación Académica (DPA), requerido para los procesos administrativos de nombramiento del plantel docente, brindando ayuda a la secretaria encargada de procesar ambos formularios con el sistema</p>
      </div>
  </div>
    
    <div class="container nt-pie-menu">
        <div class="row">
            
            <div class="col-sm-4" >
            </div>
            
            <div class="col-sm-4 container cop">
            <img class="img-circle img-responsive logo3 center-block" src="images/logo3.png">
            </div>
            
            <div class="col-sm-4 nt-pagina-relacionada text-center">
                <a target="_blank" href="http://www.cs.umss.edu.bo/"><img src="images/infsis.png" class="img-rounded icono-relacion"></a>
                <a target="_blank" href="http://websis.umss.edu.bo/"> <img src="images/Websiss_umss.jpg" class="img-rounded icono-relacion"></a>
                <a target="_blank" href="http://www.memi.umss.edu.bo/"><img src="images/memi.gif" class="img-rounded icono-relacion"></a>
                <a target="_blank" href="http://enlinea.umss.edu.bo/moodle2/"><img src="images/Moodle.jpe" class="img-rounded icono-relacion"></a>
                <a target="_blank" href="http://www.fcyt.umss.edu.bo/"><img src="images/fcyt_umss.jpg" class="img-rounded icono-relacion"></a>
                <a target="_blank" href="http://www.umss.edu.bo/"><img src="images/UMSS.png" class="img-rounded icono-relacion"></a>
          </div>
        </div>
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



  

<?php include('views/global/subtitle.view.php')?>


<?php include('views/global/footer.view.php')?>
