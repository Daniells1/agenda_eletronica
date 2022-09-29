<?php 

require_once "../db/conexao.php";

//Aqui é onde será executado o cadastro do usuário no sistema

//1-resgatar os dados do formulário.
$login = trim($_POST["login"]);
$senha = trim($_POST["senha"]);



$login = mysqli_escape_string($conn, $login);
$senha = mysqli_escape_string($conn, $senha);



$msg ="";
$valido = true;
//Validação de dados na segunda camada(no servidor)


if($login == "" || $senha == ""){
    $msg = "Preencha todos os campos!";
    $valido = false;
}

$sqllogin = "select login from usuario where login = '".$login."'";
$resultSetLogin = mysqli_query($conn, $sqllogin) ;

if(mysqli_num_rows($resultSetLogin) > 0){
    $msg = "O login ($login) já existe no sistema!";
    $valido = false;
}
//criptografar no banco de dados
$senha = md5($senha);



if($valido){
$sql="insert into usuario values (NULL, '".$login."', '".$senha."')";

if(mysqli_query($conn,$sql))
    $msg = "Usuário cadastrado com sucesso!";
else
    $msg = "Dados não cadastrados no sistema,ocorreu um erro.";
}
mysqli_close($conn);
header("location:cadastrar.php?m=".base64_encode($msg));
