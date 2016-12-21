describe("Pruebas a validaciones de entrada del registro de facultad", function() {
    describe("Deberia ser capaz de validar el nombre de facultad", function() {
          it("Deberia el nombre de facultad contener caracteres", function() {
              var nombre = "Ciencias y tecnologia";
            //demonstrates use of custom matcher
            expect(validarNombres(nombre)).toBeTruthy();
            });
          it("Deberia el nombre de facultad no estar vacio", function() {
              var nombre = "";
            //demonstrates use of custom matcher
            expect(validarNombres(nombre)).toBeFalsy();
            });
    });
    describe("Deberia ser capaz de validar la ubicacion de la facultad", function() {
          it("Deberia la ubicacion de la facultad contener caracteres", function() {
              var ubicacion = "Sucre entre belzu";
            //demonstrates use of custom matcher
            expect(validarUbicacion(ubicacion)).toBeTruthy();
            });
          it("Deberia la ubicacion de la facultad no estar vacio", function() {
              var ubicacion = "";
            //demonstrates use of custom matcher
            expect(validarUbicacion(ubicacion)).toBeFalsy();
            });
    });
    });    
  var validarNombres = function (nombres) {
     if( nombres == "" )
    {
        error = " Tienes que escribir un nombre. ";
        return false;
    } else {
        return true;
    }
  };
  var validarUbicacion = function (nombres) {
     if( nombres == "" )
    {
        error = " Tienes que escribir la ubicacion. ";
        return false;
    } else {
        return true;
    }
  };

