<?php
include ('./php/conexao.php');

$tipoBusca = filter_input(INPUT_GET, "tipoBusca");
$parametro = filter_input(INPUT_GET, "parametro");
$campanha = filter_input(INPUT_GET, "campanha");
$equipe = filter_input(INPUT_GET, "equipe");
$dataInicial = filter_input(INPUT_GET, "dataInicial");
$dataFinal = filter_input(INPUT_GET, "dataFinal");

$select_tabela_ligacao = "CALL select_tbl_ligacao();";

$select_matricula = "CALL select_tbl_ligacao_matricula('$parametro');";
$select_nome = "CALL select_tbl_ligacao_nome('$parametro');";
$select_ani = "CALL select_tbl_ligacao_ani('$parametro');";

$select_matricula_campanha = "CALL select_tbl_ligacao_matricula_campanha('$parametro','$campanha');";
$select_nome_campanha = "CALL select_tbl_ligacao_nome_campanha('$parametro','$campanha');";
$select_ani_campanha = "CALL select_tbl_ligacao_ani_campanha('$parametro','$campanha');";

$select_matricula_campanha_equipe = "CALL select_tbl_ligacao_matricula_campanha_equipe('$parametro','$campanha','$equipe');";
$select_nome_campanha_equipe = "CALL select_tbl_ligacao_nome_campanha_equipe('$parametro', '$campanha', '$equipe');";
$select_ani_campanha_equipe = "CALL select_tbl_ligacao_ani_campanha_equipe('$parametro', '$campanha', '$equipe');";

$select_matricula_data = "CALL select_tbl_ligacao_matricula_data('$parametro','$dataInicial','$dataFinal');";
$select_nome_data = "CALL select_tbl_ligacao_nome_data('$parametro','$dataInicial','$dataFinal');";
$select_ani_data = "CALL select_tbl_ligacao_ani_data('$parametro','$dataInicial','$dataFinal');";

$select_matricula_campanha_data = "CALL select_tbl_ligacao_matricula_campanha_data('$parametro','$campanha','$dataInicial','$dataFinal');";
$select_nome_campanha_data = "CALL select_tbl_ligacao_nome_campanha_data('$parametro','$campanha','$dataInicial','$dataFinal');";
$select_ani_campanha_data = "CALL select_tbl_ligacao_ani_campanha_data('$parametro','$campanha','$dataInicial','$dataFinal');";

$select_matricula_campanha_equipe_data = "CALL select_tbl_ligacao_matricula_campanha_equipe_data('$parametro','$campanha','$equipe','$dataInicial','$dataFinal');";
$select_nome_campanha_equipe_data = "CALL select_tbl_ligacao_nome_campanha_equipe_data('$parametro','$campanha','$equipe','$dataInicial','$dataFinal');";
$select_ani_campanha_equipe_data = "CALL select_tbl_ligacao_ani_campanha_equipe_data('$parametro','$campanha','$equipe','$dataInicial','$dataFinal');";

$select_data = "CALL select_tbl_ligacao_data('$dataInicial','$dataFinal');";
$select_campanha_data = "CALL select_tbl_ligacao_campanha_data('$campanha','$dataInicial','$dataFinal');";
$select_campanha_equipe_data = "CALL select_tbl_ligacao_campanha_equipe_data('$campanha','$equipe','$dataInicial','$dataFinal');";

function verificaLinha($comando){
    $total = mysqli_num_rows($comando);
    if($total == 0){
        echo "<script>
        alert('Nenhum dado encontrado!'); location= './tabela.php';
        </script>";
    }
}

if ($tipoBusca == "matricula"){

    if($campanha != "" && $equipe == "" && $dataInicial == "" && $dataFinal == ""){   
        $resultado = mysqli_query($conn, $select_matricula_campanha);
        verificaLinha($resultado);  
    }
    else if($campanha == "" && $equipe == "" && $dataInicial != "" && $dataFinal != ""){
        $resultado = mysqli_query($conn, $select_matricula_data);
        verificaLinha($resultado);
    }
    else if($campanha != "" && $equipe != "" && $dataInicial == "" && $dataFinal == ""){
        $resultado = mysqli_query($conn, $select_matricula_campanha_equipe);
        verificaLinha($resultado);
    }
    else if($campanha != "" && $equipe == "" && $dataInicial != "" && $dataFinal != ""){
        $resultado = mysqli_query($conn, $select_matricula_campanha_data);
        verificaLinha($resultado);
    }
    else if($campanha != "" && $equipe != "" && $dataInicial != "" && $dataFinal != ""){
        $resultado = mysqli_query($conn, $select_matricula_campanha_equipe_data);
        verificaLinha($resultado);
    }
    else{
        $resultado = mysqli_query($conn, $select_matricula);
        verificaLinha($resultado);
    }

}else if ($tipoBusca == "nome"){

    if($campanha != "" && $equipe == "" && $dataInicial == "" && $dataFinal == ""){   
        $resultado = mysqli_query($conn, $select_nome_campanha);
        verificaLinha($resultado);
    }
    else if($campanha == "" && $equipe == "" && $dataInicial != "" && $dataFinal != ""){
        $resultado = mysqli_query($conn, $select_nome_data);
        verificaLinha($resultado);
    }
    else if($campanha != "" && $equipe != "" && $dataInicial == "" && $dataFinal == ""){
        $resultado = mysqli_query($conn, $select_nome_campanha_equipe);
        verificaLinha($resultado);
    }
    else if($campanha != "" && $equipe == "" && $dataInicial != "" && $dataFinal != ""){
        $resultado = mysqli_query($conn, $select_nome_campanha_data);
        verificaLinha($resultado);
    }
    else if($campanha != "" && $equipe != "" && $dataInicial != "" && $dataFinal != ""){
        $resultado = mysqli_query($conn, $select_nome_campanha_equipe_data);
        verificaLinha($resultado);
    }
    else{
        $resultado = mysqli_query($conn, $select_nome);
        verificaLinha($resultado);
    }

}else if ($tipoBusca == "ani"){

    if($campanha != "" && $equipe == "" && $dataInicial == "" && $dataFinal == ""){   
        $resultado = mysqli_query($conn, $select_ani_campanha);
        verificaLinha($resultado);
    }
    else if($campanha != "" && $equipe != "" && $dataInicial == "" && $dataFinal == ""){
        $resultado = mysqli_query($conn, $select_ani_campanha_equipe);
        verificaLinha($resultado);
    }
    else if($campanha == "" && $equipe == "" && $dataInicial != "" && $dataFinal != ""){
        $resultado = mysqli_query($conn, $select_ani_data);
        verificaLinha($resultado);
    }
    else if($campanha != "" && $equipe == "" && $dataInicial != "" && $dataFinal != ""){
        $resultado = mysqli_query($conn, $select_ani_campanha_data);
        verificaLinha($resultado);
    }
    else if($campanha != "" && $equipe != "" && $dataInicial != "" && $dataFinal != ""){
        $resultado = mysqli_query($conn, $select_ani_campanha_equipe_data);
        verificaLinha($resultado);
    }
    else{
        $resultado = mysqli_query($conn, $select_ani);
        verificaLinha($resultado);
    }

}else if ($tipoBusca == "data"){
    if($campanha == "" && $equipe == "" && $dataInicial != "" && $dataFinal != ""){
        $resultado = mysqli_query($conn, $select_data);
        verificaLinha($resultado);
    }
    else if($campanha != "" && $equipe == "" && $dataInicial != "" && $dataFinal != ""){
        $resultado = mysqli_query($conn, $select_campanha_data);
        verificaLinha($resultado);
    }
    else if($campanha != "" && $equipe != "" && $dataInicial != "" && $dataFinal != ""){
        $resultado = mysqli_query($conn, $select_campanha_equipe_data);
        verificaLinha($resultado);
    }
}else{
    $resultado = mysqli_query($conn, $select_tabela_ligacao);
}



?>