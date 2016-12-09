describe("Pruebas a validaciones de entrada", function() {
    describe("Deberia ser capaz de validar el nombre", function() {
          it("Deberia el nombre contener caracteres", function() {
              var nombre = "Juan";
            //demonstrates use of custom matcher
            expect(validarNombres(nombre)).toBeTruthy();
            });
          it("Deberia el nombre no estar vacio", function() {
              var nombre = "";
            //demonstrates use of custom matcher
            expect(validarNombres(nombre)).toBeFalsy();
            });
    });
    describe("Deberia ser capaz de validar el apellido paterno", function() {
          it("Deberia el apellido paterno contener caracteres", function() {
              var apellido = "Loza";
            //demonstrates use of custom matcher
            expect(validarApellidos(apellido)).toBeTruthy();
            });
          it("Deberia el apellido paterno no estar vacio", function() {
              var apellido = "";
            //demonstrates use of custom matcher
            expect(validarApellidos(apellido)).toBeFalsy();
            });
    });
    describe("Deberia ser capaz de validar el apellido materno", function() {
          it("Deberia el apellido materno contener caracteres", function() {
              var apellido = "Loza";
            //demonstrates use of custom matcher
            expect(validarApellidos(apellido)).toBeTruthy();
            });
          it("Deberia el apellido materno no estar vacio", function() {
              var apellido = "";
            //demonstrates use of custom matcher
            expect(validarApellidos(apellido)).toBeFalsy();
            });
    });    
    describe("Deberia ser capaz de validar la cuenta", function() {
          it("Deberia la cuenta contener caracteres", function() {
              var cuenta = "Loza";
            //demonstrates use of custom matcher
            expect(validarApellidos(cuenta)).toBeTruthy();
            });
          it("Deberia la cuenta no estar vacio", function() {
              var cuenta = "";
            //demonstrates use of custom matcher
            expect(validarApellidos(cuenta)).toBeFalsy();
            });
    });    
    describe("Deberia ser capaz de validar el carrera", function() {
          it("Deberia la carrera contener caracteres", function() {
              var nombre = "Ingenieria de Sistemas";
            //demonstrates use of custom matcher
            expect(validarCarrera(nombre)).toBeTruthy();
            });
          it("Deberia el carrera no estar vacio", function() {
              var nombre = "";
            //demonstrates use of custom matcher
            expect(validarCarrera(nombre)).toBeFalsy();
            });
    });
    describe("Deberia ser capaz de validar el email", function() {
          it("Deberia el email ser valido", function() {
              var email = "info@gmail.com";
            //demonstrates use of custom matcher
            expect(validarEmail(email)).toBeTruthy();
            });
          it("No deberia ser valido un email sin @ y .", function() {
              var email = "asdcvcv";
            //demonstrates use of custom matcher
            expect(validarEmail(email)).toBeFalsy();
            });
    });
    describe("Deberia ser capaz de validar la contraseña", function() {
 
          it("Deberia la contraseña contener al menos un digito, una letra mayuscula, una letra minuscula", function() {
              var password1 = "Aabs1234";
              var password2 = "Aabs1234";
            //demonstrates use of custom matcher
            expect(validarContrasenias(password1, password2)).toBeTruthy();
            });
          it("Deberia las contraseñas ser iguales", function() {
              var password1 = "Aabs1231";
              var password2 = "Aabs1234";
            //demonstrates use of custom matcher
            expect(validarContrasenias(password1, password2)).toBeFalsy();
            });
          it("Deberia la contraseña al menos contener un digito", function() {
              var password1 = "Aabvbvb1";
              var password2 = "Aabvbvb1";
            //demonstrates use of custom matcher
            expect(validarContrasenias(password1, password2)).toBeTruthy();
            });
          it("Deberia la contraseña al menos contener una minuscula", function() {
              var password1 = "BEBDDBb1";
              var password2 = "BEBDDBb1";
            //demonstrates use of custom matcher
            expect(validarContrasenias(password1, password2)).toBeTruthy();
            });
           it("Deberia la contraseña al menos contener una mayuscula", function() {
              var password1 = "Aabs1234";
              var password2 = "Aabs1234";
            //demonstrates use of custom matcher
            expect(validarContrasenias(password1, password2)).toBeTruthy();
            });           
           it("Deberia la contraseña al menos contener 8 digitos", function() {
              var password1 = "Aabs1234";
              var password2 = "Aabs1234";
            //demonstrates use of custom matcher
            expect(validarContrasenias(password1, password2)).toBeTruthy();
            });   
           it("No deberia la contraseña contener menos de 8 digitos", function() {
              var password1 = "Aabs12";
              var password2 = "Aabs12";
            //demonstrates use of custom matcher
            expect(validarContrasenias(password1, password2)).toBeFalsy();
            });               
           it("Deberia la contraseña a lo mucho contener 20 digitos", function() {
              var password1 = "Aabs1234Aabs1234Aabs";
              var password2 = "Aabs1234Aabs1234Aabs";
            //demonstrates use of custom matcher
            expect(validarContrasenias(password1, password2)).toBeTruthy();
            });   
           it("No deberia la contraseña contener mas de 20 digitos", function() {
              var password1 = "Aabs1234Aabs1234Aabsasdsad";
              var password2 = "Aabs1234Aabs1234Aabsasdsad";
            //demonstrates use of custom matcher
            expect(validarContrasenias(password1, password2)).toBeFalsy();
            });                                    

    });    
  var validarEmail = function(email) {
      if( email == "" || email.indexOf( "@" ) == -1 || email.indexOf( "." ) == -1 )
        {
        error = " Tienes que ingresar un valido email. ";
        return false;
        } 
        return true;
  };  
  var validarNombres = function (nombres) {
     if( nombres == "" )
    {
        error = " Tienes que escribir un nombre. ";
        return false;
    } else {
        return true;
    }
  };
  var validarApellidos = function (nombres) {
     if( nombres == "" )
    {
        error = " Tienes que escribir un apellido. ";
        return false;
    } else {
        return true;
    }
  };
  var validarCarrera = function (nombres) {
     if( nombres == "" )
    {
        error = " Tienes que escribir una carrera. ";
        return false;
    } else {
        return true;
    }
  }; 
  var validarCuenta = function (nombres) {
     if( nombres == "" )
    {
        error = " Tienes que escribir un cuenta. ";
        return false;
    } else {
        return true;
    }
  };
  var validarContrasenias = function (pass1, pass2) {
    var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}$/;
    if( pass1 == "" || pass2 == "" )
    {
        error = " Tienes que escribir una contraseña. ";
        return false;
    } 
    if (pass1 != pass2){
        error = " Tienes las contraseñas no son identicas, vuelva intentarlo. ";
        return false;
    }  
    if(pass1 == pass2) {
        if(!pass1.match(passw))   
        {   
            error = " La constraseña debe tener al menos un digito, una letra mayuscula y minuscula. Debe contener al menos 8 caracteres. ";
            return false;
        }
    }
    return true;
  };
});
