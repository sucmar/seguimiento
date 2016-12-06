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
