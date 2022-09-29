<?php require_once 'components/topo.php'; ?>
        <h2 style="text-align:center">Cadastrar Atividades</h2>
        <?php if(isset($_GET["m"])){?>
        <div class="message">
            <?=base64_decode($_GET["m"])?>
        </div>
        <?php }?>

       <!--ESSA A TELA ONDE O USUÁRIO IRAR INSERIR OS DADOS PARA O CREATE(INSERT) DO CRUD-->
        <form action="cadastrar_atividade-save.php" method="POST">
        <div>
            <label for="nome">Nome da Atividade:</label>
            <br>
            <input type="text" name="nome" id="nome" class="w-100" required>
        </div>
        <div>
            <label for="descricao">Descrição:</label>
            <br>
            <textarea name="descricao" id="descricao" cols="30" rows="3" class="w-100" required></textarea>
        </div>
        <div>
            <label for="dt_inicio">Data de Início:</label>
            <br>
            <input type="date" name="dt_inicio" id="dt_inicio" class="w-100" required>
        </div>
        <div>
            <label for="hr_inicio">Hora de Início:</label>
            <br>
            <input type="time" name="hr_inicio" id="hr_inicio" class="w-100" required>
        </div>
        <div>
            <label for="dt_fim">Data de Finalização:</label><br>
            <input type="date" name="dt_fim" id="dt_fim" class="w-100" required>
        </div>
        <div>
            <label for="hr_fim">Hora de Finalização:</label><br>
            <input type="time" name="hr_fim" id="hr_fim" class="w-100" required>
        </div>
        <br>
        <input type="submit" value="Cadastrar Atividade" class="btn btn-success w-40" required>
    </form>
    </section>

    
    <?php require_once 'components/rodape.php'; ?>