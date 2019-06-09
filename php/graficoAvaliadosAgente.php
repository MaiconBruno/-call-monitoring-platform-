<?php
//Captura os elementos da pagina conexao.php 
include ('./php/conexao.php');

$mensagem_erro_avaliadas = '';
$agente = $_SESSION['usuarioNome'];

$select_agente = "CALL select_agente_gr_pizza('$agente')";
$resultado = mysqli_query($conn, $select_agente);

// carregamento dos dados do banco.
while($dado = $resultado -> fetch_array()){  
    $resposta1 = $dado['r1'];  
    $resposta2 = $dado['r2'];
    $resposta3 = $dado['r3'];
    $resposta4 = $dado['r4'];
    $resposta5 = $dado['r5'];
}

// caso não existir algum dado que foi passado como parametro retorna para pagina inicial
if($resposta1 == 0 && $resposta2 == 0 && $resposta3 == 0 && $resposta4 == 0 && $resposta5 == 0){
    $mensagem_erro_avaliadas = 'Nenhum resultado encontrado!';
}