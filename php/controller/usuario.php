<?php
    include '../model/usuario_model.php';
    include_once '_sessao.php';

    function index($msgAlert, $typeAlert){
        $usuarios = listar();
        include '../view/header.php';
        include '../view/usuario/index.php';
        include '../view/footer.php';
    }
    function login($msgAlert, $typeAlert){
        include '../view/usuario/login.php';
    }
    function cadastroForm($msgAlert, $typeAlert){
        include '../view/usuario/cadastro_form.php';
    }

    if(isset($_POST['cadastrar'])){
        $resultado = buscar($_POST['email']);
        if($resultado == 0){
            if($_POST['senha'] == $_POST['senha_copia']){
                inserir(
                    $_POST['primeiro_nome'], 
                    $_POST['ultimo_nome'], 
                    $_POST['email'],
                    $_POST['senha'], 
                );
                $msgAlert = 'Usuário cadastrado com sucesso!';
                $typeAlert = 'success';
            }else{
                $msgAlert = 'As senhas devem ser iguais';
                $typeAlert = 'warning';
            }
        }else{
            $msgAlert = 'E-mail já cadastrado';
            $typeAlert = 'warning';
        }
        cadastroForm($msgAlert, $typeAlert);      
    }else if(isset($_GET['email'])){
        $usuario = buscar($_GET['email']);
        include '../view/header.php';
        include('../view/usuario/usuario_edit.php');
        include '../view/footer.php';
    }else if(isset($_POST['atualizar'])){
        atualizar(
            $_POST['primeiro_nome'], 
            $_POST['ultimo_nome'], 
            $_POST['email'],
            $_POST['senha'], 
        );
        $msgAlert = 'usuario atualizado com sucesso!';
        $typeAlert = 'warning';
        index($msgAlert, $typeAlert);
    }else if(isset($_GET['excluir'])){
        excluir($_GET['excluir']);
        $msgAlert = 'usuario excluido com sucesso!';
        $typeAlert = 'danger';
        index($msgAlert, $typeAlert);
    }else if(isset($_GET['login'])){
        $msgAlert = '';
        $typeAlert = '';
        login($msgAlert,$typeAlert);
    }else if(isset($_POST['autenticar'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $resultado = buscar($email);
        if($resultado != 0){
            if($resultado[0]['email'] == $email && $resultado[0]['senha'] == $senha){
                setUsuario($resultado[0]);
                header('location:cliente.php');
            }else{
                $msgAlert = 'Usuário e/ou senha incorretos';
                $typeAlert = 'danger';
                login($msgAlert, $typeAlert);
            }      
        }else{
            $msgAlert = 'Usuário não encontrado';
            $typeAlert = 'warning';
            login($msgAlert, $typeAlert);
        }
    }else if(isset($_GET['cadastro_form'])){
        $msgAlert = '';
        $typeAlert = '';
        cadastroForm($msgAlert,$typeAlert);
    }else if(isset($_GET['logout'])){
        session_destroy();
        header('location:../../index.php');
    }else{
        $msgAlert = '';
        $typeAlert = '';
        index($msgAlert, $typeAlert);
    } 
?>