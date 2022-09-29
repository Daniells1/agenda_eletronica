<?php require_once 'components/topo.php'; ?>
<?php require_once '../db/conexao.php'; ?>
<?php   

$id =$_GET["id"];
$sql = "SELECT * FROM atividade WHERE id =".$id;
$resultSet = mysqli_query($conn,$sql);
$totalRegistros =mysqli_num_rows($resultSet);

if($totalRegistros == 0){

    echo "Nenhuma atividade encontrada.";
    exit;
}
//pegar a linha da movimentação pelo id
$registro = mysqli_fetch_assoc($resultSet);
?>
    <h1 style="text-align:center;">Editar Atividades</h1>
    <?php if(isset($_GET["m"])){?>
        <div class="message">
            <?=base64_decode($_GET["m"])?>
        </div>
        <?php }?>
        <!--TELA DE EDIÇÃO DO SISTEMA ONDE INSERIREMOS OS DADOS PARA O UPDATE DO CRUD -->
         <!--Para obrigar o usuário a preencher os campos temos o "required" no final dos inputs-->
    <form action="editar-save.php" method="POST">
        <input type="hidden" name ="id" value="<?=$registro["id"]?>">
        <div>
            <label for="nome">Nome:</label>
            <br>
            <input type="text" name="nome" id="nome" class="w-100" value="<?=$registro["nome"]?>" required>
        </div>
        <div>
            <label for="descricao">Descrição:</label>
            <br>
            <textarea name="descricao" id="descricao" cols="30" rows="3" class="w-100"  required><?=$registro["descricao"]?></textarea>

        </div>
        <div>
            <label for="dt_inicio">Data de Início:</label>
            <br>
            <input type="date" name="dt_inicio" id="dt_inicio" class="w-100" value="<?=$registro["dt_inicio"]?>" required >
        </div>
        <div>
            <label for="hr_inicio">Hora de Início:</label>
            <br>
            <input type="time" name="hr_inicio" id="hr_inicio" class="w-100" value="<?=$registro["hr_inicio"]?>" required>
        </div>
        <div>
            <label for="dt_fim">Data de Finalização:</label><br>
            <input type="date" name="dt_fim" id="dt_fim" class="w-100" value="<?=$registro["dt_fim"]?>" required>
        </div>
        <div>
            <label for="hr_fim">Hora de Finalização:</label><br>
            <input type="time" name="hr_fim" id="hr_fim" class="w-100" value="<?=$registro["hr_fim"]?>" required>
        </div>
        <div>
            <label for="status">Status(Atual:<?=$registro["status"]?>)</label ><br>
            
            <input type="radio" name ="status" value="PENDENTE" required>Pendente <br>
            <input type="radio" name ="status" value="CONCLUIDO" required>Concluído <br>
            <input type="radio" name ="status" value="CANCELADO" required>Cancelado 
            
        
            
        </div>
      
    <br>
        
        <input type="submit" value="Atualizar Atividade" class="btn btn-success w-40">
        <button class="btn btn-danger w-40" type="button" ><a href="ver_atividade.php">Cancelar</a> </button>
        
    </form>
</section> 

<?php include_once "components/rodape.php";?>     