/*
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById('login-button').addEventListener('click', function () {
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;

        // Leer registros de usuarios desde la cookie (si existe)
        var registros = document.cookie.replace(/(?:(?:^|.*;\s*)usuarios\s*\=\s*([^;]*).*$)|^.*$/, "$1");
        var usuarios = registros ? JSON.parse(registros) : {};
        console.log("Contenido de la cookie de usuarios:", registros);

        // Verificar si el usuario existe y las credenciales son correctas
        if (usuarios.hasOwnProperty(username) && usuarios[username] === password) {
            // Después de verificar las credenciales y antes de redirigir al usuario a la página principal
            document.cookie = "logged_in=true; path=/";
            // Credenciales correctas, redirigir al usuario a la página de inicio
           // window.location.href = "/carrito-compra/fruteria-inicio/practica-6-desarrollar-carrito-de-compra-v0.1-inicio.php";
            // También puedes mostrar el nombre del usuario en algún lugar de la página de inicio
            // Por ejemplo:
            document.getElementById('bypass-over').textContent = username;
        } else {
            // Credenciales incorrectas, mostrar mensaje de error
            const Toast = Swal.mixin({
                toast: true,
                position: "bottom-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "error",
                title: "Credenciales incorrectas"
            });
        }

        resetInputs();
    });
});
*/

// Función para reiniciar los campos del formulario
function resetInputs() {
    document.getElementById('username').value = '';
    document.getElementById('password').value = '';
}
