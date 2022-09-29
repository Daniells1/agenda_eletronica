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

Após executar o login no sistema o usuário será redirecionado para área administrativa caso esteja cadastrado.

#### Home

Composta basicamente por um topo  com o link para as demais telas do sistema (e que será reaproveita ao longo do sitema) onde serão realizadas as funções que compoem o CRUD,uma área de conteúdo com uma mensagem de bem vindo,com um botão de link para o calendário em baixo.

####Calendário
Foi utilizado o Full-Calendar do JS para criálo
Aqui aparecerão lista as atividades cadastradas pelo usuário que tem status 'PENDENTE',atividades com o status 'CONCLUIDO' e 'CANCELADO' não serão mostradas.
<br>
O usuário só poderá visualizar no calendário atividades que ele mesmo cadastrou.

#### CADASTRAR ATIVIDADES
Nessa tela teremos então a funcionalidade CREATE(insert) do CRUD,onde haverá a entrada de dados do usuário no sistema.
<br>
Optei por empregar algumas condições para garantir um funciomento lógico para execução do sistema.
<br>
-- O usuário é obrigado a preencher todos os campos.
<br>
-- A data de início de uma atividade não pode ser superior a sua data de finalização.
<br>
-- Atividades que acabam no mesmo dia,a hora de início deve ser inferior a hora de finalização.
<br>
No caso de alguma das condições acima não forem atendidas o usuário receberá uma mensagem denotando cada caso,e não haverá a inserção de dados no banco.
No caso de satisfeitas as condições acima,o usuário receberá a mensagem de dados cadastraados com sucesso e haverá a inserção dos no banco.
Sendo o status será automaticamente inserido como 'PENDENTE'.

#### LISTAR ATIVIDADES
Nessa tela teremos então a funcionalidade READ do CRUD,onde as atividades cadastradas ficarão listadas para que o usuário as visualize.
<br>

É mostrada uma contagem com o número de atividades,caso não haja atividades cadastradas aparecerá uma mensagem contendo "Nenhuma movimentação encontrada no banco."
Havendo se poderá ver uma tabela com os dados da atividade e 2 botões de link que levarão a tela de editar atividades,e outro de deletar com a funcionalidade DELETE do nosso CRUD,que removerá a atividade do banco de dados.
<br>
Só serão listadas as atividades cadastradas pelo próprio usuário.



#### EDITAR ATIVIDADES
Nessa tela teremos a funcionalidade UPDATE do  CRUD,onde haverá a atualização de dados no banco de dados.
A tela em si é quase identica a de cadastrar a atividades.Onde a entrada de dados realizada pelo usuário,respeitará as mesmas condições que foram mencionadas mais acima.
<br>
Havendo também um botão de cancelar que redireciona o usuário de volta a tela de listar atividades. 
<br>
A diferença se dá que aqui,enquanto na tela de cadastro de atividades o status era incluido automaticamente,nesta tela em específico o usuário poderá mudar o status da atividade para "CONCLUIDO" ou "CANCELADO".Além disso no caso de algum erro ou sucesso durante a inclusão dos dados o usuário será redirecionado de volta para a tela de listar atividades onde aparecerá a mensagem informando qual foi o caso.

#### SAIR
Ao clicar nesse link no topo,a sessão do usuário será encerrada e o usuário será direcionada para a tela de login.

## Layout
![ezgif-3-618b126182](https://user-images.githubusercontent.com/96155029/192928991-1a6eda39-2661-40d4-a1bb-1a1b576d3fc9.gif)

## Considerações Finais
A nível de exercício ,o sistema cumpre a proposta do desafio em si porém há espaço para algumas melhorias,entre elas acho relevante citar:
<br>
-- Aplicação de validação de dados para os inputs de data e hora para impedir que o usuário de entrada de valores de datas e horas absurdos para o banco.
<br>
-- Para atividades de um único dia o calendário fornecido pelo Full-Calendar atende perfeitamente,porém para atividades que ultrapassam essa margem há um decrescimo de um dia na data mostrada devido a algumas pré-configuração,há algumas formas de contornar esse problema que poderiam vir a ser futuramente exploradas.



