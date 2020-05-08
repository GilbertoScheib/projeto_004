<?php
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    include("lib.php");
    $conexao=new Conexao;
    $$conexao->valida($email,$senha); 

?>
