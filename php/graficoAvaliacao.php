<?php
//Captura os elementos da pagina conexao.php 
include ('./php/conexao.php');
// Vr responsavel pela alocação dos dados no array 
$resposta1 = 0;
$resposta2 = 0;
$resposta3 = 0;
$resposta4 = 0;
$resposta5 = 0;
$mensagem_erro_avaliadas = '';


//Vr que aloca o dados da opcaoAv do Html e faz a leitura do dado que sera usad para determinar o tipo Proc a ser chamada. 
$filtro = filter_input(INPUT_GET, "opcaoAv");
//variavel que determina o parametro passado no input type text do html parametro como nome da equipe/agente/campanha
$parametro = filter_input(INPUT_GET, "parametro");

//Vr que executa as proc do banco. 
$select_equipe = "CALL select_equipe_gr_pizza('$parametro')";

$select_campanha = "CALL select_campanha_gr_pizza('$parametro')";

$select_geral = "CALL select_geral_gr_pizza()";

$select_agente = "CALL select_agente_gr_pizza('$parametro')";


//condições para a execução das proc
if($filtro != ""){
    if ($filtro == "equipe"){
        $resultado = mysqli_query($conn, $select_equipe);
    }
    else if ($filtro == "agente"){
        $resultado = mysqli_query($conn, $select_agente);
    }
    else if ($filtro == "campanha"){
        $resultado = mysqli_query($conn, $select_campanha);
    }
}else{
    $resultado = mysqli_query($conn, $select_geral);
    
}

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