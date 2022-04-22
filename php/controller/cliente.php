<?php
    include '../model/cliente_model.php';

    include '../view/header.php';

    function index($msgAlert, $typeAlert){
        $clientes = listar();
        include '../view/cliente/index.php';
    }
    if(isset($_POST['cadastroCliente'])){
        inserir(
            $_POST['nome'], 
            $_POST['email']
        );
        $msgAlert = 'Cliente cadastrado com sucesso!';
        $typeAlert = 'success';
        index($msgAlert, $typeAlert);
    }else if(isset($_GET['id'])){
        $cliente = buscar($_GET['id']);
        include('../view/cliente/cliente_edit.php');
    }else if(isset($_POST['atualizar'])){
        atualizar(
            $_POST['id'],
            $_POST['nome'],
            $_POST['email']
        );
        $msgAlert = 'Cliente atualizado com sucesso!';
        $typeAlert = 'warning';
        index($msgAlert, $typeAlert);
    }else if(isset($_GET['excluir'])){
        excluir($_GET['excluir']);
        $msgAlert = 'Cliente excluido com sucesso!';
        $typeAlert = 'danger';
        index($msgAlert, $typeAlert);
    }else{
        $msgAlert = '';
        $typeAlert = '';
        index($msgAlert, $typeAlert);
    }

    include '../view/footer.php';
?>