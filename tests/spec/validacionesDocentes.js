/**
 * Created by ESTALIN on 12/15/2016.
 */
describe("Pruebas a validaciones de entrada docente", function() {
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
    describe("Deberia ser capaz de validar el ci", function() {
        it("Deberia el numero contener numeros", function() {
            var ci = 12345;
            //demonstrates use of custom matcher
            expect(validarCi(ci)).toBeTruthy();
        });
        it("Deberia la cuenta no estar vacio", function() {
            var ci = 0;
            //demonstrates use of custom matcher
            expect(validarCi(ci)).toBeFalsy();
        });
    });
    describe("Deberia ser capaz de validar la fecha de nacimiento", function() {
        it("Deberia validar la fecha de nacimiento", function() {
            var fecha = "12/12/1996";
            //demonstrates use of custom matcher
            expect(validarFecha(fecha)).toBeTruthy();
        });
        it("No deberia ser vacio", function() {
            var fecha = "";
            //demonstrates use of custom matcher
            expect(validarFecha(fecha)).toBeFalsy();
        });
    });
    describe("Deberia ser capaz de validar el telefono fijo", function() {
        it("Deberia validar el telefono", function() {
            var telefono = "67551151";
            //demonstrates use of custom matcher
            expect(validarTelefono(telefono)).toBeTruthy();
        });
        it("No deberia ser vacio", function() {
            var fecha = "";
            //demonstrates use of custom matcher
            expect(validarTelefono(fecha)).toBeFalsy();
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

    describe("Deberia ser capaz de validar la profesion", function() {
        it("Deberia la profecion ser valido", function() {
            var profecion = "info@gmail.com";
            //demonstrates use of custom matcher
            expect(validarProfecion(profecion)).toBeTruthy();
        });
        it("No deberia ser vacio", function() {
            var profecion = "";
            //demonstrates use of custom matcher
            expect(validarProfecion(profecion)).toBeFalsy();
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
    var validarCi = function (nombres) {
        if( nombres == "" )
        {
            error = " Tienes que escribir un ci. ";
            return false;
        } else {
            return true;
        }
    };
    var validarFecha = function (nombres) {
        if( nombres == "" )
        {
            error = " Tienes que escribir una fecha. ";
            return false;
        } else {
            return true;
        }
    };
    var validarTelefono = function (nombres) {
        if( nombres == "" )
        {
            error = " Tienes que escribir un telefono. ";
            return false;
        } else {
            return true;
        }
    };
    var validarProfecion = function (nombres) {
        if( nombres == "" )
        {
            error = " Tienes que escribir una profesion. ";
            return false;
        } else {
            return true;
        }
    };
});
