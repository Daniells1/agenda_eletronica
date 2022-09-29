<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Eletrônica</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="login">
    <h1 class="text-center">Agenda Eletrônica</h1>
    <?php if(isset($_GET["m"])){?>
        <div class="message">
            <?=base64_decode($_GET["m"])?>
        </div>
        <?php }?>
 <!--Tela de login-->
    <form action="logar.php" method="POST" class="needs-validation">

        <div class="form-group was-validated" >
            <label class="form-label" for="login">Login:</label>
            <input class="form-control" type="text" id="login" name="login" required>
            <div class="invalid-feedback">
                Digite seu login
            </div>
        </div>

        <div class="form-group was-validated">
            <label class="form-label"  for="senha">Senha:</label>
            <input class="form-control" type="password" id="senha" name="senha" required>
            <div class="invalid-feedback">
                Digite sua senha
            </div>
        </div>

        <input class="btn btn-success w-40" type="submit" value="Entrar">
        <button class="btn btn-secondary w-40" type="button" ><a href="cadastrar.php">Cadastrar</a> </button>
    </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>  

</body>
</html>