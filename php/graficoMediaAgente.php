<?php
include ('./php/conexao.php');

$agente = $_SESSION['usuarioNome'];

$select_media_agente = "CALL select_gr_media_agente('$agente');";
$resultado_gr_media = mysqli_query($conn, $select_media_agente);
$mensagem_erro_media = '';

while($dado_gr_media = $resultado_gr_media -> fetch_array()){  
    $r1_gr_media = $dado_gr_media['r1'];  
    $r2_gr_media = $dado_gr_media['r2'];
    $r3_gr_media = $dado_gr_media['r3'];
    $r4_gr_media = $dado_gr_media['r4'];
    $r5_gr_media = $dado_gr_media['r5'];
}

if($r1_gr_media == 0 && $r2_gr_media == 0 && $r3_gr_media == 0 && $r4_gr_media == 0 && $r5_gr_media == 0){
    $mensagem_erro_media = 'Nenhum resultado encontrado!';
}
?>