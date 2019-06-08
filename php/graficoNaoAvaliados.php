<?php
include ('./php/conexao.php');

$filtro = filter_input(INPUT_GET, "opcaoGrNa");
$parametro = filter_input(INPUT_GET, "parametroGrNa");
$mensagem_erro_naoAvaliados = '';

?>

<?php
include ('./php/conexao.php');

$select_na_r1 = "CALL select_gr_na_r1();";
$select_na_r1_agente = "CALL select_gr_na_r1_agente('$parametro');";
$select_na_r1_campanha = "CALL select_gr_na_r1_campanha('$parametro');";
$select_na_r1_equipe = "CALL select_gr_na_r1_equipe('$parametro');";

if($filtro != ""){
    if ($filtro == "equipe"){
        $resultado_r1 = mysqli_query($conn, $select_na_r1_equipe);
    }
    else if ($filtro == "agente"){
        $resultado_r1 = mysqli_query($conn, $select_na_r1_agente);
    }
    else if ($filtro == "campanha"){
        $resultado_r1 = mysqli_query($conn, $select_na_r1_campanha);
    }
}else{
    $resultado_r1 = mysqli_query($conn, $select_na_r1);
}

if($dado_na_r1 = $resultado_r1 -> fetch_array()){  
    $resposta1_na = $dado_na_r1['r1']; 
}
?>

<?php
include ('./php/conexao.php');

$select_na_r2 = "CALL select_gr_na_r2();";
$select_na_r2_agente = "CALL select_gr_na_r2_agente('$parametro');";
$select_na_r2_campanha = "CALL select_gr_na_r2_campanha('$parametro');";
$select_na_r2_equipe = "CALL select_gr_na_r2_equipe('$parametro');";

if($filtro != ""){
    if ($filtro == "equipe"){
        $resultado_r2 = mysqli_query($conn, $select_na_r2_equipe);
    }
    else if ($filtro == "agente"){
        $resultado_r2 = mysqli_query($conn, $select_na_r2_agente);
    }
    else if ($filtro == "campanha"){
        $resultado_r2 = mysqli_query($conn, $select_na_r2_campanha);
    }
}else{
    $resultado_r2 = mysqli_query($conn, $select_na_r2);
}

if($dado_na_r2 = $resultado_r2 -> fetch_array()){  
    $resposta2_na = $dado_na_r2['r2']; 
}
?>

<?php
include ('./php/conexao.php');

$select_na_r3 = "CALL select_gr_na_r3();";
$select_na_r3_agente = "CALL select_gr_na_r3_agente('$parametro');";
$select_na_r3_campanha = "CALL select_gr_na_r3_campanha('$parametro');";
$select_na_r3_equipe = "CALL select_gr_na_r3_equipe('$parametro');";

if($filtro != ""){
    if ($filtro == "equipe"){
        $resultado_r3 = mysqli_query($conn, $select_na_r3_equipe);
    }
    else if ($filtro == "agente"){
        $resultado_r3 = mysqli_query($conn, $select_na_r3_agente);
    }
    else if ($filtro == "campanha"){
        $resultado_r3 = mysqli_query($conn, $select_na_r3_campanha);
    }
}else{
    $resultado_r3 = mysqli_query($conn, $select_na_r3);
}

while($dado_na_r3 = $resultado_r3 -> fetch_array()){  
  $resposta3_na = $dado_na_r3['r3']; 
}
?>

<?php
include ('./php/conexao.php');

$select_na_r4 = "CALL select_gr_na_r4();";
$select_na_r4_agente = "CALL select_gr_na_r4_agente('$parametro');";
$select_na_r4_campanha = "CALL select_gr_na_r4_campanha('$parametro');";
$select_na_r4_equipe = "CALL select_gr_na_r4_equipe('$parametro');";

if($filtro != ""){
    if ($filtro == "equipe"){
        $resultado_r4 = mysqli_query($conn, $select_na_r4_equipe);
    }
    else if ($filtro == "agente"){
        $resultado_r4 = mysqli_query($conn, $select_na_r4_agente);
    }
    else if ($filtro == "campanha"){
        $resultado_r4 = mysqli_query($conn, $select_na_r4_campanha);
    }
}else{
    $resultado_r4 = mysqli_query($conn, $select_na_r4);
}

while($dado_na_r4 = $resultado_r4 -> fetch_array()){  
    $resposta4_na = $dado_na_r4['r4']; 
}
?>

<?php
include ('./php/conexao.php');

$select_na_r5 = "CALL select_gr_na_r5();";
$select_na_r5_agente = "CALL select_gr_na_r5_agente('$parametro');";
$select_na_r5_campanha = "CALL select_gr_na_r5_campanha('$parametro');";
$select_na_r5_equipe = "CALL select_gr_na_r5_equipe('$parametro');";

if($filtro != ""){
    if ($filtro == "equipe"){
        $resultado_r5 = mysqli_query($conn, $select_na_r5_equipe);
    }
    else if ($filtro == "agente"){
        $resultado_r5 = mysqli_query($conn, $select_na_r5_agente);
    }
    else if ($filtro == "campanha"){
        $resultado_r5 = mysqli_query($conn, $select_na_r5_campanha);
    }
}else{
    $resultado_r5 = mysqli_query($conn, $select_na_r5);
}

while($dado_na_r5 = $resultado_r5 -> fetch_array()){  
    $resposta5_na = $dado_na_r5['r5']; 
}
?>

<?php
if($resposta1_na == 0 && $resposta2_na == 0 && $resposta3_na == 0 && $resposta4_na == 0 && $resposta5_na == 0){
    $mensagem_erro_naoAvaliados = 'Nenhum resultado encontrado!';
}
?>