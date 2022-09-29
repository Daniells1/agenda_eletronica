<?php require_once 'components/topo.php'; ?>
<?php require_once '../db/conexao.php'; ?>
<?php   
//AQUI É ONDE EU FAÇO A INTERAÇÃO COM O BANCO DE DADOS PARA EFETUAR O UPDATE DOS DADOS DA ATIVIDADE NO SISTEMA
//OS DADOS FORAM INSERIDOS PELO USUÁRIO NA TELA DE EDIÇÃO.
   //1 - abrir conexão com o banco
  
  
   
   $nome = trim($_POST["nome"]);
   $descricao = trim($_POST["descricao"]);
   $dt_inicio = trim($_POST["dt_inicio"]);
   $hr_inicio = trim($_POST["hr_inicio"]);
   $dt_fim = trim($_POST["dt_fim"]);
   $hr_fim = trim($_POST["hr_fim"]);
   $status = trim($_POST["status"]);
   $id = $_POST["id"];
   
 

//algumas condições para entrada de dados que achei interessante para garantir um fluxo lógico aceitável do sistema
   if( $dt_inicio == $dt_fim && $hr_inicio >= $hr_fim){
      $msg = "Para atividades que acabam no mesmo dia,a hora de início deve ser inferior a de finalização.";
   }else{ 


   if($dt_inicio > $dt_fim ){

      $msg = "A data de início não não pode ser maior do que a data de término da atividade!";
   }else{
   
   //crud  -- create(insert)  

   //2 - montar o sql com os dados para inserir na tabela
   $sql = "UPDATE atividade SET nome='".$nome."', descricao = '".$descricao."', dt_inicio = '$dt_inicio', hr_inicio = '$hr_inicio', dt_fim ='$dt_fim', hr_fim ='$hr_fim', status = '".$status."'  WHERE id = ". $id;
   //executar o sql
    //3 - inserir na tabela(executar o sql -- mysqli_query)
   if(mysqli_query($conn,$sql)){
    $msg = "Atividade editada com sucesso!";
   }else{
    $msg = "Atividade não pode ser editada.";
   }
   //4 - fechar conexão com banco
}
   }
   mysqli_close($conn);
   header("location: ver_atividade.php?m=" . base64_encode($msg));
//REDIRECIONA PARA A TELA DE LISTAR ATIVIDADES JUNTO COM A MENSAGEM 
   ?>
  
<?php include_once "components/rodape.php";?>      