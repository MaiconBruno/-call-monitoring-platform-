<?php
session_start();

include('./conexao.php');

$usuario = $_POST['usuario'];
$senha = $_POST['password'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$matricula = $_POST['matricula'];
$ramal = $_POST['ramal'];
$funcao = $_POST['nivel'];


$sql = "INSERT INTO `pfc_db`.`funcionario`
    (`usuario`, `senha`, `nome`, `sobrenome`, `cpf`, `matricula`, `ramal`, `funcao`) VALUES
    ('$usuario','$senha','$nome ','$sobrenome','$cpf','$matricula','$ramal','$funcao');";

$resultado = mysqli_query($conn, $sql);

if (isset($resultado)){
    $_SESSION['SucessCad'] = "Usuário cadastrado com sucesso!!";
    header("Location: ../PaginaDeCadastro.php");

}else{
    $_SESSION['SucessCad'] = "Erro ao cadastrar usuário!!";
    header("Location: ../PaginaDeCadastro.php");
}

