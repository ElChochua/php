<?php
    include '/login-registro/db-manager.php';
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        alert($username, $password);
        registerUser($username,$password,$conn);
    }
?>