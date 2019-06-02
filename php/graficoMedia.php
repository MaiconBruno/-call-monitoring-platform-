<?php
include ('./php/conexao.php');

$filtro = filter_input(INPUT_GET, "opcaoGrMedia");
$parametro = filter_input(INPUT_GET, "parametroGrMedia");

$select_media_geral = "CALL select_gr_media_geral();";
$select_media_campanha = "CALL select_gr_media_campanha('$parametro');";
$select_media_equipe = "CALL select_gr_media_equipe('$parametro');";
$select_media_agente = "CALL select_gr_media_agente('$parametro');";

if($filtro != ""){
    if ($filtro == "equipe"){
        $resultado_gr_media = mysqli_query($conn, $select_media_equipe);
    }
    else if ($filtro == "agente"){
        $resultado_gr_media = mysqli_query($conn, $select_media_agente);
    }
    else if ($filtro == "campanha"){
        $resultado_gr_media = mysqli_query($conn, $select_media_campanha);
    }
}else{
    $resultado_gr_media = mysqli_query($conn, $select_media_geral);
}

while($dado_gr_media = $resultado_gr_media -> fetch_array()){  
    $r1_gr_media = $dado_gr_media['r1'];  
    $r2_gr_media = $dado_gr_media['r2'];
    $r3_gr_media = $dado_gr_media['r3'];
    $r4_gr_media = $dado_gr_media['r4'];
    $r5_gr_media = $dado_gr_media['r5'];
}

if($r1_gr_media == 0 && $r2_gr_media == 0 && $r3_gr_media == 0 && $r4_gr_media == 0 && $r5_gr_media == 0){
    echo "<script>
    alert('Nenhum dado encontrado!'); location= './index.php';
    </script>";
}

?>