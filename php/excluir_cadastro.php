<?php
session_start();
include ("./conexao.php");
 
$user_id = $_SESSION['id'] ;

unset($_SESSION['id']);
// $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
// $senha = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
// $matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_STRING);
// $ramal = filter_input(INPUT_POST, 'ramal', FILTER_SANITIZE_STRING);

$result_usuario = "call pfc_db.select_deletar_funcionario('$user_id');";
$resultado_usuario = mysqli_query($conn, $result_usuario);


if ($resultado_usuario != ""){
    header("Location: ../busca.php");
    $_SESSION['AlertaBusca'] = 'Usuario Excluido com sucesso!!';
}else{
    header("Location: ../busca.php");
    $_SESSION['AlertaBusca'] = 'Erro durante exclusão!!';
}



