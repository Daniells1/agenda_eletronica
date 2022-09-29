<?php 
session_start();
require_once "../db/conexao.php";
//Aqui é onde de fato insiro dados vindos da tela de cadastro de atividades no banco de dados.
//resgate dos dados
$nome =$_POST["nome"];
$descricao=$_POST["descricao"];
$dt_inicio =$_POST["dt_inicio"];
$hr_inicio = $_POST["hr_inicio"];
$dt_fim = $_POST["dt_fim"];
$hr_fim =$_POST["hr_fim"];


require_once "../util/funcao.php";

$idusuario = $_SESSION["id"];


//Incluir algumas condições abaixo para garantir uma funcionálidade lógica aceitável para o sistema.Impedindo o usuário de inserir 
//alguns dados de forma imprudente.
if( $dt_inicio == $dt_fim && $hr_inicio >= $hr_fim){
   $msg = "Para atividades que acabam no mesmo dia,a hora de início deve ser inferior a de finalização.";
}else{

if($dt_inicio > $dt_fim ){

   $msg = "A data de início não não pode ser maior do que a data de término da atividade!";
}else{



$sqlMarcar = "insert into atividade values(NULL, '".$nome."', '".$descricao."', '$dt_inicio', '$hr_inicio',
'$dt_fim' , '$hr_fim' , 'PENDENTE', $idusuario)";



//echo $sqlMarcar;

   if(mysqli_query($conn,$sqlMarcar)){
      $msg = "Atividade marcada com sucesso!";
    }else{
    $msg = "Atividade não pode ser marcada";
   }
  }
 }

 mysqli_close($conn);
 header("location: cadastrar_atividade.php?m=" . base64_encode($msg));
//REDIRECIONA PARA A TELA DE CADASTRAR ATIVIDADES JUNTO COM A MENSAGEM