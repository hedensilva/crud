<?php
    include '../model/cliente_model.php';

    include '../view/header.php';

    function index(){
        $clientes = listar();
        include '../view/cliente/index.php';
    }
    if(isset($_POST['cadastroCliente'])){
        inserir(
            $_POST['nome'], 
            $_POST['email']
        );
        index();
    }else if(isset($_GET['id'])){
        $cliente = buscar($_GET['id']);
        include('../view/cliente/cliente_edit.php');
    }else if(isset($_POST['atualizar'])){
        atualizar(
            $_POST['id'],
            $_POST['nome'],
            $_POST['email']
        );
        index();
    }else if(isset($_GET['excluir'])){
        excluir($_GET['excluir']);
        index();
    }else{
        index();
    }

    include '../view/footer.php';
?>