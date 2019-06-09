<?php
include ('./php/conexao.php');

$mensagem_erro_naoAvaliados = '';
$agente = $_SESSION['usuarioNome'];

?>

<?php
include ('./php/conexao.php');


$select_na_r1_agente = "CALL select_gr_na_r1_agente('$agente');";
$resultado_r1 = mysqli_query($conn, $select_na_r1_agente);

if($dado_na_r1 = $resultado_r1 -> fetch_array()){  
    $resposta1_na = $dado_na_r1['r1']; 
}
?>

<?php
include ('./php/conexao.php');


$select_na_r2_agente = "CALL select_gr_na_r2_agente('$agente');";
$resultado_r2 = mysqli_query($conn, $select_na_r2_agente);

if($dado_na_r2 = $resultado_r2 -> fetch_array()){  
    $resposta2_na = $dado_na_r2['r2']; 
}
?>

<?php
include ('./php/conexao.php');

$select_na_r3_agente = "CALL select_gr_na_r3_agente('$agente');";
$resultado_r3 = mysqli_query($conn, $select_na_r3_agente);

while($dado_na_r3 = $resultado_r3 -> fetch_array()){  
  $resposta3_na = $dado_na_r3['r3']; 
}
?>

<?php
include ('./php/conexao.php');


$select_na_r4_agente = "CALL select_gr_na_r4_agente('$agente');";
$resultado_r4 = mysqli_query($conn, $select_na_r4_agente);


while($dado_na_r4 = $resultado_r4 -> fetch_array()){  
    $resposta4_na = $dado_na_r4['r4']; 
}
?>

<?php
include ('./php/conexao.php');


$select_na_r5_agente = "CALL select_gr_na_r5_agente('$agente');";
$resultado_r5 = mysqli_query($conn, $select_na_r5_agente);

while($dado_na_r5 = $resultado_r5 -> fetch_array()){  
    $resposta5_na = $dado_na_r5['r5']; 
}
?>

<?php
if($resposta1_na == 0 && $resposta2_na == 0 && $resposta3_na == 0 && $resposta4_na == 0 && $resposta5_na == 0){
    $mensagem_erro_naoAvaliados = 'Nenhum resultado encontrado!';
}
?>