describe("Pruebas a validaciones de entrada", function() {
    describe("Deberia ser capaz de validar el Nombre de la Materia", function() {
          it("Deberia el nombre contener caracteres", function() {
              var nombre = "TIS";
            //demonstrates use of custom matcher
            expect(validarNombres(nombre)).toBeTruthy();
            });
          it("Deberia el nombre no estar vacio", function() {
              var nombre = "";
            //demonstrates use of custom matcher
            expect(validarNombres(nombre)).toBeFalsy();
            });
    });
    describe("Deberia ser capaz de validar la Sigla de la Materia", function() {
          it("Deberia la Sigla de la Materia contener enteros", function() {
              var sigla = "123456";
            //demonstrates use of custom matcher
            expect(validarSigla(sigla)).toBeTruthy();
            });
          it("Deberia la sigla materia no estar vacio", function() {
              var sigla = "";
            //demonstrates use of custom matcher
            expect(validarSigla(sigla)).toBeFalsy();
            });
    });
    describe("Deberia ser capaz de validar el Tipo de Materia", function() {
          it("Deberia el Tipo de Materia contener caracteres", function() {
              var tipo = "curricular";
            //demonstrates use of custom matcher
            expect(validarTipo(tipo)).toBeTruthy();
            });
          it("Deberia el tipo de materia no estar vacio", function() {
              var tipo = "";
            //demonstrates use of custom matcher
            expect(validarTipo(tipo)).toBeFalsy();
            });
    });
	describe("Deberia ser capaz de validar el Nivel de la Materia", function() {
          it("Deberia el nivel materia contener caracteres", function() {
              var nivel = "A";
            //demonstrates use of custom matcher
            expect(validarNivel(nivel)).toBeTruthy();
            });
          it("Deberia el nivel materia no estar vacio", function() {
              var nivel = "";
            //demonstrates use of custom matcher
            expect(validarNivel(nivel)).toBeFalsy();
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
			error = " Tienes que escribir un valido Sigla Materia . ";
			return false;
		} else {
			return true;
		}
	  };
	  var validarTipo = function (tipo) {
		 if( tipo == "" )
		{
			error = " Tienes que escribir un valido Tipo Materia. ";
			return false;
		} else {
			return true;
		}
	  };
	  var validarNivel = function (nivel) {
		 if( nivel == "" )
		{
			error = " Tienes que escribir un valido Nivel Materia. ";
			return false;
		} else {
			return true;
		}
	  };
});