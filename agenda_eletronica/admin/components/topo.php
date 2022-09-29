
<?php require_once "validar-acesso.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
       
        #welcome{
            color:#FFF;
            padding :2rem;
           
        }
        #welcome h2{
           
            padding-top :0.5rem;
            padding-bottom:0.5rem;
           
        }
        #welcome p{
           
          
           padding-bottom:0.5rem;
          
       }
        .bg-site{
            background-color: rgb(122,0,75);
        }
        .navbar a, .logo a{
            text-decoration: none;
            color: #FFF;
            font-weight:bold;
        }
    footer{    
    background: #3C948B;
    position:absolute;
    bottom:0; 
    width:100%;
    margin-top: 10px;
    text-align:center;
    
}
form{
    padding:1rem;
}
form input{
    border-radius:5px;
}
form textarea{
    border-radius:5px;
}
.message{
    border:1px solid rgb(104, 6, 104);
    background-color:  rgba(104,6,104,0.7);
    color:#FFF;
    padding:1rem;
    border-radius:5px;
}
 form button a{
   text-decoration: none;
   color: #FFF;
   

}
    </style>
</head>
<body>
<header id="header" class="bg-site">
    <div class="container d-flex justify-content-between">
        <h1 class="logo"><a href="#">Agenda Eletrônica</a></h1>
        <nav id="navbar" class="navbar navbar-expand-sm">
            <ul class="navbar-nav mb-2">
                <li class="nav-item"><a href="home.php" class="nav-link">HOME</a></li>
                <li class="nav-item"><a href="cadastrar_atividade.php" class="nav-link">CASDASTRAR ATIVIDADES</a></li>
                <li class="nav-item"><a href="ver_atividade.php" class="nav-link">LISTAR ATIVIDADES</a></li>
                <li class="nav-item"><a href="sair.php" class="nav-link">SAIR</a></li>
            </ul>
        </nav>
    </div>
</header>
<section id="welcome">
    <div class="container-fluid" style="background-color: rgba(24,0,73,0.5);border-radius:5px;">