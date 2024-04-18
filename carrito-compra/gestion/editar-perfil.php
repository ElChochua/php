<?php
    include "../manager/db-manager.php";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $correo = $_POST["email"];
        $user = $_POST["username"];
        $password = $_POST["password"];
        $newPassword = $_POST["newPassword"];
        $confirmPassword=$_POST["confirmPassword"];
        $datos = array(
            "nombre" => $nombre,
            "edad" => $edad,
            "email" =>$correo,
            "user" => $user,
            "password" => $password,
            "newPassword" => $newPassword,
            "confirmPassword" => $confirmPassword
        );
        modificarUsuario($datos,$conn); 
        header("Location: /index.php");
        exit();
    }