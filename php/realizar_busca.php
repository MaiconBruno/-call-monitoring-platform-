<?php
session_start();
include('./conexao.php');
$cpf =  $_POST['cpf'];
$nivel = $_POST['nivel'];

$buscar = "SELECT * from funcionario where  cpf= '$cpf' AND funcao = '$nivel';"; //faz a pesquisa do usuario no banco de dados. 
$resultadoBusca = mysqli_query($conn, $buscar); // faz a conexão com banco e aloca o resultado na variavel resultado_usuario 
// Associa o resultado com o banco 

while ($row_usuario = mysqli_fetch_assoc($resultadoBusca)) {
  $_SESSION['id_usuario']  =   $row_usuario['id_funcionario'];
  $_SESSION['nome']  =   $row_usuario['nome'];
  $_SESSION['sobrenome']  =   $row_usuario['sobrenome'];
  $_SESSION['usuario']  =   $row_usuario['usuario'];
  $_SESSION['senha']  =   $row_usuario['senha'];
  $_SESSION['matricula']  =   $row_usuario['matricula'];
  $_SESSION['ramal']  =   $row_usuario['ramal'];
  $_SESSION['cpf']  =   $row_usuario['cpf'];
  $_SESSION['funcao']  =   $row_usuario['funcao'];
  $_SESSION['buscaRealiza'] = true;
}


if ($resultadoBusca != "") {
  header("Location:../PaginaEdicao.php");
 } else {
  session_start();
	unset(
    $_SESSION['id_usuario'] ,
    $_SESSION['nome'] ,
    $_SESSION['sobrenome'] ,
    $_SESSION['usuario'] ,
    $_SESSION['senha']  ,
    $_SESSION['matricula'] ,
    $_SESSION['ramal']  ,
    $_SESSION['cpf']  ,
    $_SESSION['funcao'],
    $_SESSION['buscaRealiza'] 

  );
  header("Location:./busca.php");
  $_SESSION['AlertaBusca'] = 'Usuario não encontrado!';
}
