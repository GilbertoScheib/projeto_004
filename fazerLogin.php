<?php
	session_start();
	
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    include("lib.php");
    $conexao=new Conexao;
    if($conexao->valida($email,$senha) == "valido"){
		$_SESSION['email'] = $email;
		echo "Valido";
	}else if($conexao->valida($email,$senha) == "invalido"){
		echo "Invalido";
	}else{
		echo "Erro Inesperado";
	}

?>
