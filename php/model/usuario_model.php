<?php
    include 'dbfunctions.php';

    function inserir($primeiroNome, $ultimoNome, $email, $senha){
        $sql = "INSERT INTO usuario (primeiro_nome, ultimo_nome, email, senha) VALUES ('$primeiroNome', '$ultimoNome','$email','$senha')";
        executarSQL($sql);
    }
    function listar(){
        $sql = "SELECT * FROM usuario";
        $resultado = consultarSQL($sql);
        return $resultado;
    }
    function buscar($email){
        $sql = "SELECT * FROM usuario WHERE email = '$email'";
        $resultado = consultarSQL($sql);
        return $resultado;
    }
    function atualizar($primeiroNome, $ultimoNome, $email, $senha){
        $sql = "UPDATE usuario  SET primeiro_nome = '$primeiroNome', ultimo_nome='$ultimoNome',senha='$senha' WHERE email = '$email'";
        executarSQL($sql);
    }
    function excluir($email){
        $sql = "DELETE FROM usuario  WHERE email = '$email'";
        executarSQL($sql);
    }
?>