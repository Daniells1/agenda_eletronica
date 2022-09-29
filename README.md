# Agenda Eletrônica
Projeto de Agenda Eletrônica
<br>

PHP:Versão 8.1.6
<br>
Bootstrap:Versão 5.2
<br>
Versão do servidor: 10.4.24-MariaDB - mariadb.org binary distribution (Banco de dados)
<br>
Biblioteca empregada:Full-calendar:Versão 3.6.2 

# Características de funcionamento

## Visão Geral

Consiste em um sistema de agenda eletrônica que permita o cadastro, visualização de listagem, atualização de dados de atividade e por fim também deleta-las se desejado(CRUD).
<br>

Também temos o uso da biblioteca JS full-calendar para a criação da to-do list das atividades
<br>
Há também um sistema de login e cadastro de usuários,com uma validação de acesso para que usuários não logados não tenham acesso a área administrativa do sistema.
<br>
O sistema também permite que o usuário tenha acesso apenas as suas próprias atividas registradas,conforme foi solicitado.

## Modelagem do Banco de dados

![image](https://user-images.githubusercontent.com/96155029/192920018-4b242f74-655b-44e4-bd4f-bf64db01d125.png)

## Overview do Projeto
### Tela de login
Nessa tela temos 2 inputs de entrada para o login e a senha do usuário que são obrigatório de preenchimento e 2 botões um do tipo submit,que caso o usuário esteja cadastrado no sistema será redirecionado para a área administrativo e outro botão a que redirecionará o usuário para área de cadastro.
<br>
No caso da inserção de dados de um login ou senha não cadestrados no sistema,aparecerá então a mensagem de usuário ou senha inválidos.

### Tela de Cadastro
Nessa tela temos 2 inputs para o login e a senha do usuário que são obrigatório de preenchimento,optou-se por não empregar validação de dados de primeira camada,no entanto há uma validação com o banco de dados impendindo que haja mais de um usuário com o mesmo login.
<br>
Há 2 botões,um do tipo submit para que haja o cadastro do usuário no sistema,e outro redirecionando de volta para a tela de login.
<br>
Caso não exista outro usuário com o mesmo login,após a entrada de dados aparecerá então a mensagem de usuário cadastrado com sucesso.
<br>
Caso já exista outro usuário com o mesmo aparacerá então a mensagem "O login já existe no sistema".

### Área Administrativa

#### Home

Composta basicamente por um topo com o link para as demais telas do sistema onde serão realizadas as funções que compoem o CRUD,uma área de conteúdo com uma mensagem de bem vindo,com um botão de link para o calendário que será explicado
