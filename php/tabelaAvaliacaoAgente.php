<?php
include ('./php/conexao.php');

$agente = $_SESSION['usuarioNome'];
$select_nome = "CALL select_tbl_ligacao_nome('$agente');";
$resultado = mysqli_query($conn, $select_nome);
?>