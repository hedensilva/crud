<?php
$con;
function setConexao($servidor, $usuario, $senha,$database){
	global $con;
	$con = new mysqli($servidor,$usuario, $senha, $database);
	if(mysqli_connect_errno()){
		echo "Erro na conexão: " .mysqli_connect_error();
		echo "<br>";
	}
}

function consultarSQL($sql){//select
	global $con;
	$resultado = $con->query($sql);
	if(mysqli_num_rows($resultado) > 0){
		$linhas = array();
		while($dados = $resultado->fetch_array(MYSQLI_ASSOC)){
			$linhas[] = $dados;
		}
		return $linhas;
	}else{
		return 0;
	}
}

function executarSQL($sql){//update, delete ou insert
	global $con;
	$resultado = $con->query($sql);
	return $resultado;
}
setConexao('localhost','root','','projeto');
?>






