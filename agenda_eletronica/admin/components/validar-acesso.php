<?php 
session_start();

//verifica se o usuário está logado,se não estiver o redireciona para tela de login.
//Garante mais segurança ao sistema.

if(!isset($_SESSION["id"]) || !isset($_SESSION["login"]) ){
    session_destroy();
    header("Location: ../login_cadastro/entrar.php");
    exit;
}


?>