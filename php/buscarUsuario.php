<?php
include ('./conexao.php');

$cpf =  $_POST ['cpfs'];
$nivel = $_POST['nivelS'];

$buscar = "SELECT * FROM funcionario WHERE cpf = '$cpf' AND funcao = '$nivel';";//faz a pesquisa do usuario no banco de dados. 
$resultadoBusca = mysqli_query($conn, $buscar); // faz a conexão com banco e aloca o resultado na variavel resultado_usuario 
$resultado = mysqli_fetch_assoc($resultadoBusca); // Associa o resultado com o banco 

if(isset($resultado)){
    header("Location: ../PaginaEdicao.php");
}else{

}




