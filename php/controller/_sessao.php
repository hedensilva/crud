<?php
    session_start();

    function setUsuario($usuario){
        $_SESSION['primeiro_nome'] = $usuario['primeiro_nome'];
        $_SESSION['ultimo_nome'] = $usuario['ultimo_nome'];
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['senha'] = $usuario['senha'];
    }

    function isSession(){
        if(!isset($_SESSION['email'])){
            header('location:usuario.php?login');
        }
    }
?>