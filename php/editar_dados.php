<?php
session_start();

include('./conexao.php');

$id_usuario = $_SESSION['id_usuario'];

    $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conn, $_POST['password']);
    $matricula = mysqli_real_escape_string($conn, $_POST['matricula']);
    $ramal = mysqli_real_escape_string($conn, $_POST['ramal']);
    $senha = md5($senha);

    $sql = "UPDATE `pfc_db`.`funcionario` 
    SET usuario = '$usuario', 'senha' = '$senha', matricula = '$matricula', ramal = '$ramal' WHERE (id_funcionario = '$idusuario');";

    $resultado = mysqli_query($conn, $sql);

    if (isset($resultado)) {
        $_SESSION['Sucessedit'] = "Usuário editado com sucesso!!";
        header("Location: ../busca.php");
    } else {
        $_SESSION['Sucessedit'] = "Erro ao editar usuário!!";
        header("Location: ../busca.php");
    }
