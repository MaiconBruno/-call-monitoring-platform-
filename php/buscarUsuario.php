<?php
session_start();

include('./conexao.php');

$cpf =  $_POST['cpfs'];
$nivel = $_POST['nivelS'];

$buscar = "SELECT * from funcionario where  cpf= $cpf AND funcao = '$nivel';"; //faz a pesquisa do usuario no banco de dados. 
$resultadoBusca = mysqli_query($conn, $buscar); // faz a conexão com banco e aloca o resultado na variavel resultado_usuario 
// Associa o resultado com o banco 

while ($dado_gr_media = $resultadoBusca->fetch_array()) {
    $usuario = $dado_gr_media['usuario'];
    $senha = $dado_gr_media['senha'];
    $nome = $dado_gr_media['nome'];
    $sobrenome = $dado_gr_media['sobrenome'];
    $cpfs = $dado_gr_media['cpf'];
    $ramal = $dado_gr_media['ramal'];
    $matricula = $dado_gr_media['matricula'];
    $funcao = $dado_gr_media['funcao'];
}



if (isset($resultado)) {
    header("Location: ../PaginaEdicao.php");
    $_SESSION['BuscaRealizada'] = $resultado;
} else {
    header("Location: ../busca.php");
    $_SESSION['AlertaBusca'] = 'Usuario não encontrado!';
}
