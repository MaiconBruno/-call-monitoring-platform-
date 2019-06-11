<?php
include ('./php/conexao.php');

$agente = $_SESSION['usuarioNome'];
$mensagem_erro_contarLigacoes = '';

$ano = filter_input(INPUT_GET, "opcaoAnoTotalChamadas");

if($ano == null){
    $ano = date('Y');
}

$select_gr_cr_mes = "call pfc_db.select_gr_chamadas_recebidas_mes();";
$resultado_gr_cr_mes = mysqli_query($conn, $select_gr_cr_mes);

$i = 0;
while ($dado_gr_cr_mes = $resultado_gr_cr_mes->fetch_array()){                
    $array_mes[$i] = $dado_gr_cr_mes['mes'];
    $i = $i+1;
}
?>

<?php
include ('./php/conexao.php');

$select_gr_cr_ano = "call pfc_db.select_gr_chamadas_recebidas_ano();";
$resultado_gr_cr_ano = mysqli_query($conn, $select_gr_cr_ano);

?>

<?php
include ('./php/conexao.php');

$mes = 1;
$select_gr_cr_mes_contarLigacoes = "call pfc_db.select_gr_chamadas_recebidas_contar_ligacoes_agente('$mes', '$ano', '$agente');";
$resultado_gr_cr_mes_contarLigacoes = mysqli_query($conn, $select_gr_cr_mes_contarLigacoes);

while ($dado_gr_cr_mes_contarLigacoes = $resultado_gr_cr_mes_contarLigacoes->fetch_array()){                
    $array_mes_contarLigacoes[$mes] = $dado_gr_cr_mes_contarLigacoes['total_chamadas'];
}

?>

<?php
include ('./php/conexao.php');

$mes = 2;
$select_gr_cr_mes_contarLigacoes = "call pfc_db.select_gr_chamadas_recebidas_contar_ligacoes_agente('$mes', '$ano', '$agente');";
$resultado_gr_cr_mes_contarLigacoes = mysqli_query($conn, $select_gr_cr_mes_contarLigacoes);

while ($dado_gr_cr_mes_contarLigacoes = $resultado_gr_cr_mes_contarLigacoes->fetch_array()){                
    $array_mes_contarLigacoes[$mes] = $dado_gr_cr_mes_contarLigacoes['total_chamadas'];
}

?>

<?php
include ('./php/conexao.php');

$mes = 3;
$select_gr_cr_mes_contarLigacoes = "call pfc_db.select_gr_chamadas_recebidas_contar_ligacoes_agente('$mes', '$ano', '$agente');";
$resultado_gr_cr_mes_contarLigacoes = mysqli_query($conn, $select_gr_cr_mes_contarLigacoes);

while ($dado_gr_cr_mes_contarLigacoes = $resultado_gr_cr_mes_contarLigacoes->fetch_array()){                
    $array_mes_contarLigacoes[$mes] = $dado_gr_cr_mes_contarLigacoes['total_chamadas'];
}

?>

<?php
include ('./php/conexao.php');

$mes = 4;
$select_gr_cr_mes_contarLigacoes = "call pfc_db.select_gr_chamadas_recebidas_contar_ligacoes_agente('$mes', '$ano', '$agente');";
$resultado_gr_cr_mes_contarLigacoes = mysqli_query($conn, $select_gr_cr_mes_contarLigacoes);

while ($dado_gr_cr_mes_contarLigacoes = $resultado_gr_cr_mes_contarLigacoes->fetch_array()){                
    $array_mes_contarLigacoes[$mes] = $dado_gr_cr_mes_contarLigacoes['total_chamadas'];
}

?>

<?php
include ('./php/conexao.php');

$mes = 5;
$select_gr_cr_mes_contarLigacoes = "call pfc_db.select_gr_chamadas_recebidas_contar_ligacoes_agente('$mes', '$ano', '$agente');";
$resultado_gr_cr_mes_contarLigacoes = mysqli_query($conn, $select_gr_cr_mes_contarLigacoes);

while ($dado_gr_cr_mes_contarLigacoes = $resultado_gr_cr_mes_contarLigacoes->fetch_array()){                
    $array_mes_contarLigacoes[$mes] = $dado_gr_cr_mes_contarLigacoes['total_chamadas'];
}

?>

<?php
include ('./php/conexao.php');

$mes = 6;
$select_gr_cr_mes_contarLigacoes = "call pfc_db.select_gr_chamadas_recebidas_contar_ligacoes_agente('$mes', '$ano', '$agente');";
$resultado_gr_cr_mes_contarLigacoes = mysqli_query($conn, $select_gr_cr_mes_contarLigacoes);

while ($dado_gr_cr_mes_contarLigacoes = $resultado_gr_cr_mes_contarLigacoes->fetch_array()){                
    $array_mes_contarLigacoes[$mes] = $dado_gr_cr_mes_contarLigacoes['total_chamadas'];
}
?>

<?php
include ('./php/conexao.php');

$mes = 7;
$select_gr_cr_mes_contarLigacoes = "call pfc_db.select_gr_chamadas_recebidas_contar_ligacoes_agente('$mes', '$ano', '$agente');";
$resultado_gr_cr_mes_contarLigacoes = mysqli_query($conn, $select_gr_cr_mes_contarLigacoes);

while ($dado_gr_cr_mes_contarLigacoes = $resultado_gr_cr_mes_contarLigacoes->fetch_array()){                
    $array_mes_contarLigacoes[$mes] = $dado_gr_cr_mes_contarLigacoes['total_chamadas'];
}

?>

<?php
include ('./php/conexao.php');

$mes = 8;
$select_gr_cr_mes_contarLigacoes = "call pfc_db.select_gr_chamadas_recebidas_contar_ligacoes_agente('$mes', '$ano', '$agente');";
$resultado_gr_cr_mes_contarLigacoes = mysqli_query($conn, $select_gr_cr_mes_contarLigacoes);

while ($dado_gr_cr_mes_contarLigacoes = $resultado_gr_cr_mes_contarLigacoes->fetch_array()){                
    $array_mes_contarLigacoes[$mes] = $dado_gr_cr_mes_contarLigacoes['total_chamadas'];
}

?>

<?php
include ('./php/conexao.php');

$mes = 9;
$select_gr_cr_mes_contarLigacoes = "call pfc_db.select_gr_chamadas_recebidas_contar_ligacoes_agente('$mes', '$ano', '$agente');";
$resultado_gr_cr_mes_contarLigacoes = mysqli_query($conn, $select_gr_cr_mes_contarLigacoes);

while ($dado_gr_cr_mes_contarLigacoes = $resultado_gr_cr_mes_contarLigacoes->fetch_array()){                
    $array_mes_contarLigacoes[$mes] = $dado_gr_cr_mes_contarLigacoes['total_chamadas'];
}

?>

<?php
include ('./php/conexao.php');

$mes = 10;
$select_gr_cr_mes_contarLigacoes = "call pfc_db.select_gr_chamadas_recebidas_contar_ligacoes_agente('$mes', '$ano', '$agente');";
$resultado_gr_cr_mes_contarLigacoes = mysqli_query($conn, $select_gr_cr_mes_contarLigacoes);

while ($dado_gr_cr_mes_contarLigacoes = $resultado_gr_cr_mes_contarLigacoes->fetch_array()){                
    $array_mes_contarLigacoes[$mes] = $dado_gr_cr_mes_contarLigacoes['total_chamadas'];
}

?>

<?php
include ('./php/conexao.php');

$mes = 11;
$select_gr_cr_mes_contarLigacoes = "call pfc_db.select_gr_chamadas_recebidas_contar_ligacoes_agente('$mes', '$ano', '$agente');";
$resultado_gr_cr_mes_contarLigacoes = mysqli_query($conn, $select_gr_cr_mes_contarLigacoes);

while ($dado_gr_cr_mes_contarLigacoes = $resultado_gr_cr_mes_contarLigacoes->fetch_array()){                
    $array_mes_contarLigacoes[$mes] = $dado_gr_cr_mes_contarLigacoes['total_chamadas'];
}

?>

<?php
include ('./php/conexao.php');

$mes = 12;
$select_gr_cr_mes_contarLigacoes = "call pfc_db.select_gr_chamadas_recebidas_contar_ligacoes_agente('$mes', '$ano', '$agente');";
$resultado_gr_cr_mes_contarLigacoes = mysqli_query($conn, $select_gr_cr_mes_contarLigacoes);

while ($dado_gr_cr_mes_contarLigacoes = $resultado_gr_cr_mes_contarLigacoes->fetch_array()){                
    $array_mes_contarLigacoes[$mes] = $dado_gr_cr_mes_contarLigacoes['total_chamadas'];
}

?>

<?php
if($array_mes_contarLigacoes[1] == 0 && $array_mes_contarLigacoes[2] == 0 && $array_mes_contarLigacoes[3] == 0 && $array_mes_contarLigacoes[4] == 0 && $array_mes_contarLigacoes[5] == 0 && $array_mes_contarLigacoes[6] == 0 && $array_mes_contarLigacoes[7] == 0 && $array_mes_contarLigacoes[8] == 0 && $array_mes_contarLigacoes[9] == 0 && $array_mes_contarLigacoes[10] == 0 && $array_mes_contarLigacoes[11] == 0 && $array_mes_contarLigacoes[12] == 0){
    $mensagem_erro_contarLigacoes = 'Nenhum resultado encontrado!';
}
?>