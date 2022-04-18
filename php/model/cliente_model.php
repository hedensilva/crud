<?php
    include 'dbfunctions.php';

    function inserir($nome, $email){
        $sql = "INSERT INTO cliente(nome, email) VALUES ('$nome', '$email')";
        executarSQL($sql);
    }
    function listar(){
        $sql = "SELECT * FROM cliente";
        $resultado = consultarSQL($sql);
        return $resultado;
    }
    function buscar($id){
        $sql = "SELECT * FROM cliente WHERE id = '$id'";
        $resultado = consultarSQL($sql);
        return $resultado[0];
    }
    function atualizar($id, $nome, $email){
        $sql = "UPDATE cliente SET nome = '$nome', email = '$email' WHERE id = '$id'";
        executarSQL($sql);
    }
    function excluir($id){
        $sql = "DELETE FROM cliente WHERE id = '$id'";
        executarSQL($sql);
    }
?>