<?php

include ('./php/conexao.php');
$resposta1 = 0;
$resposta2 = 0;
$resposta3 = 0;
$resposta4 = 0;
$resposta5 = 0;

$filtro = filter_input(INPUT_GET, "opcaoAv");

$parametro = filter_input(INPUT_GET, "parametro");

$select_equipe = "CALL select_equipe_gr_pizza('$parametro')";

$select_campanha = "CALL select_campanha_gr_pizza('$parametro')";

$select_geral = "CALL select_geral_gr_pizza()";

$select_agente = "CALL select_agente_gr_pizza('$parametro')";

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

while($dado = $resultado -> fetch_array()){  
    $resposta1 = $dado['r1'];  
    $resposta2 = $dado['r2'];
    $resposta3 = $dado['r3'];
    $resposta4 = $dado['r4'];
    $resposta5 = $dado['r5'];
}

if($resposta1 == 0 && $resposta2 == 0 && $resposta3 == 0 && $resposta4 == 0 && $resposta5 == 0){
    $url = './index.php';
    echo '<META HTTP-EQUIV=Refresh CONTENT="0.; URL=' . $url . '">';
    echo "<script>alert('Dados não encontrados!');</script>";
}