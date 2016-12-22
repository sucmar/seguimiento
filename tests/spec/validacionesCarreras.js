describe("Pruebas a validaciones de entrada", function() {
    describe("Deberia ser capaz de validar el Nombre de la Carrera", function() {
          it("Deberia el nombre contener caracteres", function() {
              var nombre = "SISTEMAS";
            //demonstrates use of custom matcher
            expect(validarNombres(nombre)).toBeTruthy();
            });
          it("Deberia el nombre no estar vacio", function() {
              var nombre = "";
            //demonstrates use of custom matcher
            expect(validarNombres(nombre)).toBeFalsy();
            });
    });
    describe("Deberia ser capaz de validar la Sigla de la Carrera", function() {
          it("Deberia la Sigla de la Carrera contener enteros", function() {
              var sigla = "123456";
            //demonstrates use of custom matcher
            expect(validarSigla(sigla)).toBeTruthy();
            });
          it("Deberia la sigla Carrera no estar vacio", function() {
              var sigla = "";
            //demonstrates use of custom matcher
            expect(validarSigla(sigla)).toBeFalsy();
            });
    });
    describe("Deberia ser capaz de validar el dpto Carrera", function() {
          it("Deberia el dpto Carrera contener caracteres", function() {
              var dpto = "sistemas";
            //demonstrates use of custom matcher
            expect(validarDpto(dpto)).toBeTruthy();
            });
          it("Deberia el dpto Carrera no estar vacio", function() {
              var dpto = "";
            //demonstrates use of custom matcher
            expect(validarDpto(dpto)).toBeFalsy();
            });
    });
	
	  var validarNombres = function(nombre) {
	  	if( nombre == "")
			{
			error = " Tienes que ingresar un valido Nombre Materia. ";
			return false;
			} 
			return true;
	  };  
	  var validarSigla = function (sigla) {
		 if( sigla == "" )
		{
			error = " Tienes que escribir un valido Sigla Carrera . ";
			return false;
		} else {
			return true;
		}
	  };
	  var validarDpto = function (dpto) {
		 if( dpto == "" )
		{
			error = " Tienes que escribir un valido dpto Carrera. ";
			return false;
		} else {
			return true;
		}
	  };
	  
});