<?php include_once "components/topo.php";?>
<?php require_once "../db/conexao.php";?>
<?php 
//AQUI EXECUTO O DELETE DO CRUD.
//1 - pegar  o ID da movimentação que será excluido via GET
$id = $_GET["id"];

//2 - Montar o SQL para excluir o registro
$sql = "DELETE FROM atividade WHERE id ='".$id."'";

if(mysqli_query($conn,$sql)){
    $msg = "Atividade deletada com sucesso!";
}else{
    $msg = "Atividade não pode ser deletada.";
} 
mysqli_close($conn);
header("location: ver_atividade.php?m=" . base64_encode($msg));

?>




<?php include_once "components/rodape.php";?>      