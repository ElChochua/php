function resetInputs() {
    document.getElementById('username').value = '';
    document.getElementById('password').value = '';
}
function isNull(user, pass){
  return user === "" || pass==="";
}
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('register-button').addEventListener('click', function() {

      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;
      // Leer registros de usuarios desde la cookie (si existe)
      flag = 0;

      var registros = document.cookie.replace(/(?:(?:^|.*;\s*)usuarios\s*\=\s*([^;]*).*$)|^.*$/, "$1");
      var usuarios = registros ? JSON.parse(registros) : {};
      if(isNull(username, password)){
        flag = 1;
        console.log(flag);
      }else if(usuarios.hasOwnProperty(username)){
        flag = 2;
        console.log(flag);
      }
      // Verificar si el usuario ya existe
      if (flag === 1 || flag === 2) {
          // El usuario ya existe, mostrar mensaje de error
          switch(flag){
            case 1:
              const NullError = Swal.mixin({
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
              NullError.fire({
                icon: "error",
                title: "Debe llenar ambos campos"
              });
              break;
            case 2:
              const DuplicateError = Swal.mixin({
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
              DuplicateError.fire({
                icon: "error",
                title: "Ese usuario ya se encuentra registrado"
              });
          }
      }else{
          // El usuario no existe, agregar al registro y guardar en la cookie
          usuarios[username] = password;
          document.cookie = "usuarios=" + JSON.stringify(usuarios) + "; expires=Fri, 31 Dec 2025 23:59:59 GMT; path=/;";
          // Mostrar mensaje de éxito
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
            icon: "success",
            title: "Se registro al usuario con correctamente"
          });
          console.log(document.cookie);
          // Resetear campos del formulario
          resetInputs();
      }
    });
});

// Función para eliminar la cookie de usuarios registrados
function eliminarCookie() {
  // Eliminar la cookie estableciendo su fecha de expiración en el pasado
  document.cookie = "usuarios=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  console.log("Cookie eliminada:", document.cookie); // Verifica si la cookie se ha eliminado correctamente
  
  // Mostrar mensaje de éxito
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
    icon: "success",
    title: "Cookies eliminadas correctamente"
  });
}

document.addEventListener("DOMContentLoaded", function() {
  document.getElementById('remove-cookie').addEventListener('click', eliminarCookie);
});

// Función para mostrar la lista de usuarios registrados
function mostrarListaUsuarios() {
  // Leer registros de usuarios desde la cookie (si existe)
  var registros = document.cookie.replace(/(?:(?:^|.*;\s*)usuarios\s*\=\s*([^;]*).*$)|^.*$/, "$1");
  var usuarios = registros ? JSON.parse(registros) : {};

  // Verificar si hay usuarios registrados
  if (Object.keys(usuarios).length === 0) {
    // No hay usuarios registrados, mostrar toast
    const Toast = Swal.mixin({
      toast: true,
      position: "bottom-end",
      showConfirmButton: false,
      timer: 1500,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
      }
    });
    Toast.fire({
      icon: "error",
      title: "No hay usuarios registrados"
    });
    return; // Salir de la función si no hay usuarios registrados
  }

  // Construir la lista de usuarios
  var listaHTML = "<h2>Lista de usuarios registrados</h2><ul>";
  for (var username in usuarios) {
    listaHTML += "<li><strong>Usuario:</strong> " + username + " - <strong>Contraseña:</strong> " + usuarios[username] + "</li>";
  }
  listaHTML += "</ul>";

  // Mostrar la lista de usuarios en un modal de SweetAlert2
  Swal.fire({
    html: listaHTML,
    width: 'auto'
  });
}

// Asignar la función al evento clic del botón "Listar Usuarios"
document.addEventListener("DOMContentLoaded", function() {
  document.getElementById('user-list').addEventListener('click', mostrarListaUsuarios);
});
//Ola amaral
function doSomething(){
  let dato_Miado = $('#texto').val();
  $.ajax({
    url: 'db-manager.php',
    type: 'POST',
    data:{
      dato: dato_Miado
    },
    success: function(response){
      console.log(response);
    },
    error: function(xhr,status, error){
      console.error("Error: " + status + " " + error);
    }
  });

}