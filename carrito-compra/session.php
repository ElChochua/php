<?php
session_start();
    include 'db-manager.php';
// Verificar si se ha enviado el formulario de inicio de sesión
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Leer registros de usuarios desde la cookie (si existe)
    $registros = isset($_COOKIE['usuarios']) ? json_decode($_COOKIE['usuarios'], true) : [];
    
    // Verificar si el usuario existe y las credenciales son correctas
    //array_key_exists($username, $registros) && $registros[$username] === $password || 
    if (checkLogin($username,$password,$conn)) {
        // Credenciales correctas, establecer la sesión y redirigir al usuario
        $_SESSION['username'] = $username;
        header("Location: /index.php");
    } else {
        // Credenciales incorrectas, mostrar mensaje de error
        alert("Usuario o contraseña incorrectos");
    }
}
?>
