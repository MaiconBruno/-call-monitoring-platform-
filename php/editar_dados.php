<?php
session_start();
include_once("./conexao.php");
 
$id_usuario = $_SESSION['id_usuario'];


$usuario = filter_input(INPUT_POST, 'usuarioAtual', FILTER_SANITIZE_NUMBER_INT);
$senha = filter_input(INPUT_POST, 'passwordAtual', FILTER_SANITIZE_STRING);
$matricula = filter_input(INPUT_POST, 'matriculaAtual', FILTER_SANITIZE_STRING);
$ramal = filter_input(INPUT_POST, 'ramalAtual', FILTER_SANITIZE_STRING);

// echo $id_usuario."<br>";
// echo $usuario."<br>";
// echo $senha."<br>";
// echo $matricula."<br>";
// echo $ramal."<br>";

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "call pfc_db.editar_cadastro('$usuario','$senha','$matricula','$ramal','$id_usuario');";
$resultado_usuario = mysqli_query($conn, $result_usuario);

