<?php
include ('./php/conexao.php');

$agente = $_SESSION['usuarioNome'];

$num_semana = 0;
$select_gr_avaliadas = "call pfc_db.select_gr_avalidas_agente('$num_semana', '$agente');";
$resultado_gr_avaliadas = mysqli_query($conn, $select_gr_avaliadas);

while($dado_gr_avaliadas = $resultado_gr_avaliadas -> fetch_array()){  
    $array_gr_avaliadas[$num_semana] = $dado_gr_avaliadas['qtd_ligacoes'];  
}
?>

<?php
include ('./php/conexao.php');

$num_semana = 1;
$select_gr_avaliadas = "call pfc_db.select_gr_avalidas_agente('$num_semana', '$agente');";
$resultado_gr_avaliadas = mysqli_query($conn, $select_gr_avaliadas);

while($dado_gr_avaliadas = $resultado_gr_avaliadas -> fetch_array()){  
    $array_gr_avaliadas[$num_semana] = $dado_gr_avaliadas['qtd_ligacoes'];  
}
?>

<?php
include ('./php/conexao.php');

$num_semana = 2;
$select_gr_avaliadas = "call pfc_db.select_gr_avalidas_agente('$num_semana', '$agente');";
$resultado_gr_avaliadas = mysqli_query($conn, $select_gr_avaliadas);

while($dado_gr_avaliadas = $resultado_gr_avaliadas -> fetch_array()){  
    $array_gr_avaliadas[$num_semana] = $dado_gr_avaliadas['qtd_ligacoes'];  
}
?>

<?php
include ('./php/conexao.php');

$num_semana = 3;
$select_gr_avaliadas = "call pfc_db.select_gr_avalidas_agente('$num_semana', '$agente');";
$resultado_gr_avaliadas = mysqli_query($conn, $select_gr_avaliadas);

while($dado_gr_avaliadas = $resultado_gr_avaliadas -> fetch_array()){  
    $array_gr_avaliadas[$num_semana] = $dado_gr_avaliadas['qtd_ligacoes'];  
}
?>

<?php
include ('./php/conexao.php');

$num_semana = 4;
$select_gr_avaliadas = "call pfc_db.select_gr_avalidas_agente('$num_semana', '$agente');";
$resultado_gr_avaliadas = mysqli_query($conn, $select_gr_avaliadas);

while($dado_gr_avaliadas = $resultado_gr_avaliadas -> fetch_array()){  
    $array_gr_avaliadas[$num_semana] = $dado_gr_avaliadas['qtd_ligacoes'];  
}
?>

<?php
include ('./php/conexao.php');

$num_semana = 5;
$select_gr_avaliadas = "call pfc_db.select_gr_avalidas_agente('$num_semana', '$agente');";
$resultado_gr_avaliadas = mysqli_query($conn, $select_gr_avaliadas);

while($dado_gr_avaliadas = $resultado_gr_avaliadas -> fetch_array()){  
    $array_gr_avaliadas[$num_semana] = $dado_gr_avaliadas['qtd_ligacoes'];  
}
?>

<?php
include ('./php/conexao.php');

$num_semana = 6;
$select_gr_avaliadas = "call pfc_db.select_gr_avalidas_agente('$num_semana', '$agente');";
$resultado_gr_avaliadas = mysqli_query($conn, $select_gr_avaliadas);

while($dado_gr_avaliadas = $resultado_gr_avaliadas -> fetch_array()){  
    $array_gr_avaliadas[$num_semana] = $dado_gr_avaliadas['qtd_ligacoes'];  
}
?>
