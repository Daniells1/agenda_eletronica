<?php require_once 'components/topo.php';

require_once '../util/funcao.php';

require_once '../db/conexao.php';

//AQUI FICA A PARTE DO READ DO CRUD ONDE USUÁRIO PODERÁ VER AS ATIVIDADES QUE CADASTROU
?>
        <h2 style="text-align:center">Ver Atividades</h2>
        
        <?php if(isset($_GET["m"])){?>
        <div class="message">
            <?=base64_decode($_GET["m"])?>
        </div>
        <?php }?>


 

  
    <?php 
  
   $idusuario = $_SESSION["id"];
    
    $sql = "SELECT id, nome, descricao, dt_inicio, hr_inicio, dt_fim, hr_fim, status FROM atividade WHERE usuario_id=".$idusuario; 
    
    $resultSet = mysqli_query($conn,$sql);
    $totalResgistros= mysqli_num_rows($resultSet);
    
    if($totalResgistros >0 ){

    
    ?>
  
    <h4>Total de atidades encontradas foi de <?= $totalResgistros; ?></h4>
   <table class="table">
    <thead>
    <tr>
        <th>Nome</th>
        <th>Descricao</th>
        <th>Início</th>
        <th>Finalização</th>
        <th>Status</th>
        <th>Atualizar/Deletar</th>
       
        
    </tr>
    </thead>
   
    <tbody>
    <?php while ($registro = mysqli_fetch_assoc($resultSet)){
       
        ?>
    <tr>
     <td><?=mb_strtoupper($registro["nome"], "UTF-8") ?> </td>
     <td><?=($registro["descricao"]) ?>  </td>
     <td> <h6>Data:</h6><?=formatDateFromDb($registro["dt_inicio"]) ?> <br>

     <h6>Hora:</h6><?=$registro["hr_inicio"] ?>
    </td>
    <td><h6>Data:</h6><?=formatDateFromDb($registro["dt_fim"]) ?> <br>
    <h6>Hora:</h6><?=$registro["hr_fim"] ?>
    </td>
     <td> <?=$registro["status"] ?>  </td>
     <td >
    <!--ACESSO AS FUNCIONÁLIDADES DE UPDATE E DELETE -->
     <button class="btn btn-info w-40" type="button" ><a href="editar.php?id=<?=$registro["id"]?>" style="text-decoration:none;color:#FFF;font-weight:bold;">Editar</a> </button>
     <button class="btn btn-danger w-40" type="button" ><a href="deletar.php?id=<?=$registro["id"]?>" style="text-decoration:none;color:#FFF;font-weight:bold;" >Deletar</a> </button></td>
    
    </tr>
    <?php } ?>

    </tbody>
   </table>
   
   <?php
   }else{
    echo "<h4>Nenhuma movimentação encontrada no banco de dados.</h4>";
   }
   ?>  
     

</section>
        
    <?php require_once 'components/rodape.php'; ?>