<?php
include ('./php/conexao.php');

$select_gr_avaliadas_ano = "call pfc_db.select_gr_chamadas_recebidas_ano();";
$resultado_gr_avaliadas_ano = mysqli_query($conn, $select_gr_avaliadas_ano);

?>

<?php
include ('./php/conexao.php');

$mes = filter_input(INPUT_GET, "opcaoAvaliadasNaoAvalidasMes");
$ano = filter_input(INPUT_GET, "opcaoAvaliadasNaoAvalidasAno");

if($ano == null){
    $ano = date('Y');
}

if($mes == null){
    $mes = date('n');
}

$num_semana = 0;
$select_gr_avaliadas = "call pfc_db.select_gr_avalidas('$num_semana', '$mes', '$ano');";
$resultado_gr_avaliadas = mysqli_query($conn, $select_gr_avaliadas);

while($dado_gr_avaliadas = $resultado_gr_avaliadas -> fetch_array()){  
    $array_gr_avaliadas[$num_semana] = $dado_gr_avaliadas['qtd_ligacoes'];  
}
?>


<?php
include ('./php/conexao.php');

$num_semana = 1;
$select_gr_avaliadas = "call pfc_db.select_gr_avalidas('$num_semana', '$mes', '$ano');";
$resultado_gr_avaliadas = mysqli_query($conn, $select_gr_avaliadas);

while($dado_gr_avaliadas = $resultado_gr_avaliadas -> fetch_array()){  
    $array_gr_avaliadas[$num_semana] = $dado_gr_avaliadas['qtd_ligacoes'];  
}
?>

<?php
include ('./php/conexao.php');

$num_semana = 2;
$select_gr_avaliadas = "call pfc_db.select_gr_avalidas('$num_semana', '$mes', '$ano');";
$resultado_gr_avaliadas = mysqli_query($conn, $select_gr_avaliadas);

while($dado_gr_avaliadas = $resultado_gr_avaliadas -> fetch_array()){  
    $array_gr_avaliadas[$num_semana] = $dado_gr_avaliadas['qtd_ligacoes'];  
}
?>

<?php
include ('./php/conexao.php');

$num_semana = 3;
$select_gr_avaliadas = "call pfc_db.select_gr_avalidas('$num_semana', '$mes', '$ano');";
$resultado_gr_avaliadas = mysqli_query($conn, $select_gr_avaliadas);

while($dado_gr_avaliadas = $resultado_gr_avaliadas -> fetch_array()){  
    $array_gr_avaliadas[$num_semana] = $dado_gr_avaliadas['qtd_ligacoes'];  
}
?>

<?php
include ('./php/conexao.php');

$num_semana = 4;
$select_gr_avaliadas = "call pfc_db.select_gr_avalidas('$num_semana', '$mes', '$ano');";
$resultado_gr_avaliadas = mysqli_query($conn, $select_gr_avaliadas);

while($dado_gr_avaliadas = $resultado_gr_avaliadas -> fetch_array()){  
    $array_gr_avaliadas[$num_semana] = $dado_gr_avaliadas['qtd_ligacoes'];  
}
?>

<?php
include ('./php/conexao.php');

$num_semana = 5;
$select_gr_avaliadas = "call pfc_db.select_gr_avalidas('$num_semana', '$mes', '$ano');";
$resultado_gr_avaliadas = mysqli_query($conn, $select_gr_avaliadas);

while($dado_gr_avaliadas = $resultado_gr_avaliadas -> fetch_array()){  
    $array_gr_avaliadas[$num_semana] = $dado_gr_avaliadas['qtd_ligacoes'];  
}
?>

<?php
include ('./php/conexao.php');

$num_semana = 6;
$select_gr_avaliadas = "call pfc_db.select_gr_avalidas('$num_semana', '$mes', '$ano');";
$resultado_gr_avaliadas = mysqli_query($conn, $select_gr_avaliadas);

while($dado_gr_avaliadas = $resultado_gr_avaliadas -> fetch_array()){  
    $array_gr_avaliadas[$num_semana] = $dado_gr_avaliadas['qtd_ligacoes'];  
}
?>
