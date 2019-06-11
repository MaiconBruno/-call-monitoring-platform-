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
$select_gr_naoavaliadas = "call pfc_db.select_gr_naoavalidas('$num_semana', '$mes', '$ano');";
$resultado_gr_naoavaliadas = mysqli_query($conn, $select_gr_naoavaliadas);

while($dado_gr_naoavaliadas = $resultado_gr_naoavaliadas -> fetch_array()){  
    $array_gr_naoavaliadas[$num_semana] = $dado_gr_naoavaliadas['qtd_ligacoes'];  
}

?>

<?php
include ('./php/conexao.php');

$num_semana = 1;
$select_gr_naoavaliadas = "call pfc_db.select_gr_naoavalidas('$num_semana', '$mes', '$ano');";
$resultado_gr_naoavaliadas = mysqli_query($conn, $select_gr_naoavaliadas);

while($dado_gr_naoavaliadas = $resultado_gr_naoavaliadas -> fetch_array()){  
    $array_gr_naoavaliadas[$num_semana] = $dado_gr_naoavaliadas['qtd_ligacoes'];  
}
?>

<?php
include ('./php/conexao.php');

$num_semana = 2;
$select_gr_naoavaliadas = "call pfc_db.select_gr_naoavalidas('$num_semana', '$mes', '$ano');";
$resultado_gr_naoavaliadas = mysqli_query($conn, $select_gr_naoavaliadas);

while($dado_gr_naoavaliadas = $resultado_gr_naoavaliadas -> fetch_array()){  
    $array_gr_naoavaliadas[$num_semana] = $dado_gr_naoavaliadas['qtd_ligacoes'];  
}
?>

<?php
include ('./php/conexao.php');

$num_semana = 3;
$select_gr_naoavaliadas = "call pfc_db.select_gr_naoavalidas('$num_semana', '$mes', '$ano');";
$resultado_gr_naoavaliadas = mysqli_query($conn, $select_gr_naoavaliadas);

while($dado_gr_naoavaliadas = $resultado_gr_naoavaliadas -> fetch_array()){  
    $array_gr_naoavaliadas[$num_semana] = $dado_gr_naoavaliadas['qtd_ligacoes'];  
}
?>

<?php
include ('./php/conexao.php');

$num_semana = 4;
$select_gr_naoavaliadas = "call pfc_db.select_gr_naoavalidas('$num_semana', '$mes', '$ano');";
$resultado_gr_naoavaliadas = mysqli_query($conn, $select_gr_naoavaliadas);

while($dado_gr_naoavaliadas = $resultado_gr_naoavaliadas -> fetch_array()){  
    $array_gr_naoavaliadas[$num_semana] = $dado_gr_naoavaliadas['qtd_ligacoes'];  
}
?>

<?php
include ('./php/conexao.php');

$num_semana = 5;
$select_gr_naoavaliadas = "call pfc_db.select_gr_naoavalidas('$num_semana', '$mes', '$ano');";
$resultado_gr_naoavaliadas = mysqli_query($conn, $select_gr_naoavaliadas);

while($dado_gr_naoavaliadas = $resultado_gr_naoavaliadas -> fetch_array()){  
    $array_gr_naoavaliadas[$num_semana] = $dado_gr_naoavaliadas['qtd_ligacoes'];  
}
?>

<?php
include ('./php/conexao.php');

$num_semana = 6;
$select_gr_naoavaliadas = "call pfc_db.select_gr_naoavalidas('$num_semana', '$mes', '$ano');";
$resultado_gr_naoavaliadas = mysqli_query($conn, $select_gr_naoavaliadas);

while($dado_gr_naoavaliadas = $resultado_gr_naoavaliadas -> fetch_array()){  
    $array_gr_naoavaliadas[$num_semana] = $dado_gr_naoavaliadas['qtd_ligacoes'];  
}
?>