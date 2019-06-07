<?php
session_start();

include('./conexao.php');

if (($_POST['usuario'] && $_POST['password'] && $_POST['nome'] && $_POST['sobrenome'] && $_POST['cpf'] && $_POST['matricula'] &&
    $_POST['ramal'] && $_POST['nivel']) != null) {

    $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conn, $_POST['password']);
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $sobrenome = mysqli_real_escape_string($conn, $_POST['sobrenome']);
    $cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
    $matricula = mysqli_real_escape_string($conn, $_POST['matricula']);
    $ramal = mysqli_real_escape_string($conn, $_POST['ramal']);
    $funcao = mysqli_real_escape_string($conn, $_POST['nivel']);

    $sql = "INSERT INTO `pfc_db`.`funcionario`
    (`usuario`, `senha`, `nome`, `sobrenome`, `cpf`, `matricula`, `ramal`, `funcao`) VALUES
    ('$usuario','$senha','$nome ','$sobrenome','$cpf','$matricula','$ramal','$funcao');";

    $resultado = mysqli_query($conn, $sql);

    if (isset($resultado)) {
        $_SESSION['SucessCad'] = "Usuário cadastrado com sucesso!!";
        header("Location: ../PaginaDeCadastro.php");
    } else {
        $_SESSION['SucessCad'] = "Erro ao cadastrar usuário!!";
        header("Location: ../PaginaDeCadastro.php");
    }
    
} else {
    $_SESSION['SucessCad'] = "Dados de cadastro informados de forma incorreta!!";
    header("Location: ../PaginaDeCadastro.php");
}
