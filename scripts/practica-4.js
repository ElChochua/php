// Funciones de cifrado César
function cifrarCesar(texto, clave) {
    clave = clave % 26;
    var resultado = '';

    for (var i = 0; i < texto.length; i++) {
        var charCode = texto.charCodeAt(i);

        if (charCode >= 65 && charCode <= 90) { // Letras mayúsculas
            resultado += String.fromCharCode((charCode - 65 + clave) % 26 + 65);
        } else if (charCode >= 97 && charCode <= 122) { // Letras minúsculas
            resultado += String.fromCharCode((charCode - 97 + clave) % 26 + 97);
        } else {
            resultado += texto.charAt(i); // Mantener otros caracteres sin cambio
        }
    }

    return resultado;
}

// Funciones de validación
function validarNombre(nombre) {
    return /^[a-zA-Z\s]+$/.test(nombre);
}

function validarEdad(edad) {
    var numeroEdad = parseInt(edad);
    return !isNaN(numeroEdad) && numeroEdad > 0 && numeroEdad < 100;
}

function validarEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

function validarUsuario(usuario) {
    return /^[a-zA-Z0-9]{5,}$/.test(usuario);
}

function validarPassword(password) {
    // Personaliza según tus criterios de validación
    return /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(password);
}

function validarFormulario() {
    // Restablecer estilos
    resetearEstilos();

    // Obtener referencias a los elementos del formulario
    var nombre = document.getElementById('nombre');
    var edad = document.getElementById('edad');
    var email = document.getElementById('email');
    var usuario = document.getElementById('usuario');
    var password = document.getElementById('password');
    var confirmarPassword = document.getElementById('confirmarPassword');

    // Validar los campos
    var errores = [];

    if (!validarNombre(nombre.value)) {
        errores.push('El nombre debe contener solo letras y espacios.');
        resaltarCampoError(nombre);
    }

    if (!validarEdad(edad.value)) {
        errores.push('La edad debe ser un número mayor a 0 y menor a 100.');
        resaltarCampoError(edad);
    }

    if (!validarEmail(email.value)) {
        errores.push('Formato de email no válido.');
        resaltarCampoError(email);
    }

    if (!validarUsuario(usuario.value)) {
        errores.push('El usuario debe contener solo letras y números, al menos 5 caracteres.');
        resaltarCampoError(usuario);
    }

    if (!validarPassword(password.value)) {
        errores.push('La contraseña debe contener letras, al menos un número, al menos un símbolo especial y tener al menos 8 caracteres.');
        resaltarCampoError(password);
    }

    if (password.value !== confirmarPassword.value) {
        errores.push('Las contraseñas no coinciden.');
        resaltarCampoError(password);
        resaltarCampoError(confirmarPassword);
    }

    // Mostrar mensajes de error
    mostrarMensajesError(errores);

    // Si no hay errores, pasamos el formulario
    if (errores.length === 0) {
        // Encriptar la contraseña con cifrado César
        var claveCesar = 12;
        var passwordEncriptada = cifrarCesar(password.value, claveCesar);

        // Mostrar los datos en un alert
        var mensajeAlert = "Formulario enviado correctamente\n\n" +
            "Nombre: " + nombre.value + "\n" +
            "Edad: " + edad.value + "\n" +
            "Email: " + email.value + "\n" +
            "Usuario: " + usuario.value + "\n" +
            "Contraseña: " + password.value + "\n" +
            "Contraseña encriptada: " + passwordEncriptada;

        alert(mensajeAlert);
    }
}

function mostrarMensajesError(errores) {
    var mensajeErrorContainer = document.getElementById('mensaje-error');
    mensajeErrorContainer.innerHTML = '';

    if (errores.length > 0) {
        var listaErrores = document.createElement('ul');
        errores.forEach(function (error) {
            var itemError = document.createElement('li');
            itemError.textContent = error;
            listaErrores.appendChild(itemError);
        });
        mensajeErrorContainer.appendChild(listaErrores);
    }
}

function resaltarCampoError(campo) {
    campo.classList.add('error');
}

function resetearEstilos() {
    var campos = document.querySelectorAll('input');
    campos.forEach(function (campo) {
        campo.classList.remove('error');
    });

    var mensajeErrorContainer = document.getElementById('mensaje-error');
    mensajeErrorContainer.innerHTML = '';
}

function limpiarFormulario() {
    var confirmacion = confirm("¿Estás seguro de que deseas cancelar y limpiar todos los campos?");

    if (confirmacion) {
        var campos = document.querySelectorAll('input');
        campos.forEach(function (campo) {
            campo.value = '';
        });

        resetearEstilos();
    }
}

