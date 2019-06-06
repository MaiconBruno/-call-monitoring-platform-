<?php
include ('./php/conexao.php');

$select_gr_cr_mes = "call pfc_db.select_gr_chamadas_recebidas_mes();";
$resultado_gr_cr_mes = mysqli_query($conn, $select_gr_cr_mes);

/*if($r1_gr_media == 0 && $r2_gr_media == 0 && $r3_gr_media == 0 && $r4_gr_media == 0 && $r5_gr_media == 0){
    echo "<script>
    alert('Nenhum dado encontrado!'); location= './PaginaGraficos.php';
    </script>";
}*/

?>