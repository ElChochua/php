<?php 
    session_start();
    include "../manager/db-manager.php";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $usuario = $_POST["username"];
        $password = $_POST["password"];
        if(checkLogin($usuario, $password, $conn)){
            $tipo = accountType($usuario,$conn);
            $_SESSION['username'] = $usuario;
            $_SESSION['Type']  = $tipo;
            header("Location: /carrito-compra/Fruteria-Inicio.php");
            exit();
        }else{
            $_SESSION['error'] = "Credenciales incorrectas";
        }
    }
