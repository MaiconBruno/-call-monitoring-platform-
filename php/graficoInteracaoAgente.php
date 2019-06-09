<?php
include ('./php/conexao.php');

$agente = $_SESSION['usuarioNome'];
$interacao = 1;

$select_interacao_agente = "call pfc_db.select_gr_interacao_agente('$interacao', '$agente');";
$resultado_gr_interacao = mysqli_query($conn, $select_interacao_agente);

while($dado_gr_interacao = $resultado_gr_interacao -> fetch_array()){  
    $dado_interacao[$interacao] = $dado_gr_interacao['qtd_ligacoes'];  
}
?>

<?php
include ('./php/conexao.php');

$interacao = 2;
$select_interacao_agente = "call pfc_db.select_gr_interacao_agente('$interacao', '$agente');";
$resultado_gr_interacao = mysqli_query($conn, $select_interacao_agente);

while($dado_gr_interacao = $resultado_gr_interacao -> fetch_array()){  
    $dado_interacao[$interacao] = $dado_gr_interacao['qtd_ligacoes'];  
}
?>

<?php
include ('./php/conexao.php');

$interacao = 3;
$select_interacao_agente = "call pfc_db.select_gr_interacao_agente('$interacao', '$agente');";
$resultado_gr_interacao = mysqli_query($conn, $select_interacao_agente);

while($dado_gr_interacao = $resultado_gr_interacao -> fetch_array()){  
    $dado_interacao[$interacao] = $dado_gr_interacao['qtd_ligacoes'];  
}
?>

<?php
include ('./php/conexao.php');

$interacao = 4;
$select_interacao_agente = "call pfc_db.select_gr_interacao_agente('$interacao', '$agente');";
$resultado_gr_interacao = mysqli_query($conn, $select_interacao_agente);

while($dado_gr_interacao = $resultado_gr_interacao -> fetch_array()){  
    $dado_interacao[$interacao] = $dado_gr_interacao['qtd_ligacoes'];  
}
?>

<?php
include ('./php/conexao.php');

$interacao = 5;
$select_interacao_agente = "call pfc_db.select_gr_interacao_agente('$interacao', '$agente');";
$resultado_gr_interacao = mysqli_query($conn, $select_interacao_agente);

while($dado_gr_interacao = $resultado_gr_interacao -> fetch_array()){  
    $dado_interacao[$interacao] = $dado_gr_interacao['qtd_ligacoes'];  
}
?>

<?php
include ('./php/conexao.php');

$interacao = 6;
$select_interacao_agente = "call pfc_db.select_gr_interacao_agente('$interacao', '$agente');";
$resultado_gr_interacao = mysqli_query($conn, $select_interacao_agente);

while($dado_gr_interacao = $resultado_gr_interacao -> fetch_array()){  
    $dado_interacao[$interacao] = $dado_gr_interacao['qtd_ligacoes'];  
}
?>

<?php

$mensagem_erro_interacao = '';

if($dado_interacao[1] == 0 && $dado_interacao[2] == 0 && $dado_interacao[3] == 0 && $dado_interacao[4] == 0 && $dado_interacao[5] == 0 && $dado_interacao[6] == 0){
    $mensagem_erro_interacao = 'Nenhum resultado encontrado!';
}
?>



