<?php
include ('./php/conexao.php');

$filtro = filter_input(INPUT_GET, "opcaoGrInteracao");
$parametro = filter_input(INPUT_GET, "parametroGrInteracao");

$interacao = 1;
$select_interacao_geral = "call pfc_db.select_gr_interacao_geral('$interacao');";
$select_interacao_equipe = "call pfc_db.select_gr_interacao_equipe('$interacao', '$parametro');";
$select_interacao_campanha = "call pfc_db.select_gr_interacao_campanha('$interacao', '$parametro');";
$select_interacao_agente = "call pfc_db.select_gr_interacao_agente('$interacao', '$parametro');";


if($filtro != ""){
    if ($filtro == "equipe"){
        $resultado_gr_interacao = mysqli_query($conn, $select_interacao_equipe);
    }
    else if ($filtro == "agente"){
        $resultado_gr_interacao = mysqli_query($conn, $select_interacao_agente);
    }
    else if ($filtro == "campanha"){
        $resultado_gr_interacao = mysqli_query($conn, $select_interacao_campanha);
    }
}else{
    $resultado_gr_interacao = mysqli_query($conn, $select_interacao_geral);
}

while($dado_gr_interacao = $resultado_gr_interacao -> fetch_array()){  
    $dado_interacao[$interacao] = $dado_gr_interacao['qtd_ligacoes'];  
}
?>

<?php
include ('./php/conexao.php');

$filtro = filter_input(INPUT_GET, "opcaoGrInteracao");
$parametro = filter_input(INPUT_GET, "parametroGrInteracao");

$interacao = 2;
$select_interacao_geral = "call pfc_db.select_gr_interacao_geral('$interacao');";
$select_interacao_equipe = "call pfc_db.select_gr_interacao_equipe('$interacao', '$parametro');";
$select_interacao_campanha = "call pfc_db.select_gr_interacao_campanha('$interacao', '$parametro');";
$select_interacao_agente = "call pfc_db.select_gr_interacao_agente('$interacao', '$parametro');";


if($filtro != ""){
    if ($filtro == "equipe"){
        $resultado_gr_interacao = mysqli_query($conn, $select_interacao_equipe);
    }
    else if ($filtro == "agente"){
        $resultado_gr_interacao = mysqli_query($conn, $select_interacao_agente);
    }
    else if ($filtro == "campanha"){
        $resultado_gr_interacao = mysqli_query($conn, $select_interacao_campanha);
    }
}else{
    $resultado_gr_interacao = mysqli_query($conn, $select_interacao_geral);
}

while($dado_gr_interacao = $resultado_gr_interacao -> fetch_array()){  
    $dado_interacao[$interacao] = $dado_gr_interacao['qtd_ligacoes'];  
}
?>

<?php
include ('./php/conexao.php');

$filtro = filter_input(INPUT_GET, "opcaoGrInteracao");
$parametro = filter_input(INPUT_GET, "parametroGrInteracao");

$interacao = 3;
$select_interacao_geral = "call pfc_db.select_gr_interacao_geral('$interacao');";
$select_interacao_equipe = "call pfc_db.select_gr_interacao_equipe('$interacao', '$parametro');";
$select_interacao_campanha = "call pfc_db.select_gr_interacao_campanha('$interacao', '$parametro');";
$select_interacao_agente = "call pfc_db.select_gr_interacao_agente('$interacao', '$parametro');";


if($filtro != ""){
    if ($filtro == "equipe"){
        $resultado_gr_interacao = mysqli_query($conn, $select_interacao_equipe);
    }
    else if ($filtro == "agente"){
        $resultado_gr_interacao = mysqli_query($conn, $select_interacao_agente);
    }
    else if ($filtro == "campanha"){
        $resultado_gr_interacao = mysqli_query($conn, $select_interacao_campanha);
    }
}else{
    $resultado_gr_interacao = mysqli_query($conn, $select_interacao_geral);
}

while($dado_gr_interacao = $resultado_gr_interacao -> fetch_array()){  
    $dado_interacao[$interacao] = $dado_gr_interacao['qtd_ligacoes'];  
}
?>

<?php
include ('./php/conexao.php');

$filtro = filter_input(INPUT_GET, "opcaoGrInteracao");
$parametro = filter_input(INPUT_GET, "parametroGrInteracao");

$interacao = 4;
$select_interacao_geral = "call pfc_db.select_gr_interacao_geral('$interacao');";
$select_interacao_equipe = "call pfc_db.select_gr_interacao_equipe('$interacao', '$parametro');";
$select_interacao_campanha = "call pfc_db.select_gr_interacao_campanha('$interacao', '$parametro');";
$select_interacao_agente = "call pfc_db.select_gr_interacao_agente('$interacao', '$parametro');";


if($filtro != ""){
    if ($filtro == "equipe"){
        $resultado_gr_interacao = mysqli_query($conn, $select_interacao_equipe);
    }
    else if ($filtro == "agente"){
        $resultado_gr_interacao = mysqli_query($conn, $select_interacao_agente);
    }
    else if ($filtro == "campanha"){
        $resultado_gr_interacao = mysqli_query($conn, $select_interacao_campanha);
    }
}else{
    $resultado_gr_interacao = mysqli_query($conn, $select_interacao_geral);
}

while($dado_gr_interacao = $resultado_gr_interacao -> fetch_array()){  
    $dado_interacao[$interacao] = $dado_gr_interacao['qtd_ligacoes'];  
}
?>

<?php
include ('./php/conexao.php');

$filtro = filter_input(INPUT_GET, "opcaoGrInteracao");
$parametro = filter_input(INPUT_GET, "parametroGrInteracao");

$interacao = 5;
$select_interacao_geral = "call pfc_db.select_gr_interacao_geral('$interacao');";
$select_interacao_equipe = "call pfc_db.select_gr_interacao_equipe('$interacao', '$parametro');";
$select_interacao_campanha = "call pfc_db.select_gr_interacao_campanha('$interacao', '$parametro');";
$select_interacao_agente = "call pfc_db.select_gr_interacao_agente('$interacao', '$parametro');";


if($filtro != ""){
    if ($filtro == "equipe"){
        $resultado_gr_interacao = mysqli_query($conn, $select_interacao_equipe);
    }
    else if ($filtro == "agente"){
        $resultado_gr_interacao = mysqli_query($conn, $select_interacao_agente);
    }
    else if ($filtro == "campanha"){
        $resultado_gr_interacao = mysqli_query($conn, $select_interacao_campanha);
    }
}else{
    $resultado_gr_interacao = mysqli_query($conn, $select_interacao_geral);
}

while($dado_gr_interacao = $resultado_gr_interacao -> fetch_array()){  
    $dado_interacao[$interacao] = $dado_gr_interacao['qtd_ligacoes'];  
}
?>

<?php
include ('./php/conexao.php');

$filtro = filter_input(INPUT_GET, "opcaoGrInteracao");
$parametro = filter_input(INPUT_GET, "parametroGrInteracao");

$interacao = 6;
$select_interacao_geral = "call pfc_db.select_gr_interacao_geral('$interacao');";
$select_interacao_equipe = "call pfc_db.select_gr_interacao_equipe('$interacao', '$parametro');";
$select_interacao_campanha = "call pfc_db.select_gr_interacao_campanha('$interacao', '$parametro');";
$select_interacao_agente = "call pfc_db.select_gr_interacao_agente('$interacao', '$parametro');";


if($filtro != ""){
    if ($filtro == "equipe"){
        $resultado_gr_interacao = mysqli_query($conn, $select_interacao_equipe);
    }
    else if ($filtro == "agente"){
        $resultado_gr_interacao = mysqli_query($conn, $select_interacao_agente);
    }
    else if ($filtro == "campanha"){
        $resultado_gr_interacao = mysqli_query($conn, $select_interacao_campanha);
    }
}else{
    $resultado_gr_interacao = mysqli_query($conn, $select_interacao_geral);
}

while($dado_gr_interacao = $resultado_gr_interacao -> fetch_array()){  
    $dado_interacao[$interacao] = $dado_gr_interacao['qtd_ligacoes'];  
}
?>

<?php

if($dado_interacao[1] == 0 && $dado_interacao[2] == 0 && $dado_interacao[3] == 0 && $dado_interacao[4] == 0 && $dado_interacao[5] == 0 && $dado_interacao[6] == 0){
    echo "<script>
    alert('Nenhum dado encontrado!'); location= './PaginaGraficos.php';
    </script>";
}


?>



