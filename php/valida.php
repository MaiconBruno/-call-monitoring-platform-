<?php
session_start();	
include ('./conexao.php');

$usuario = mysqli_real_escape_string($conn, $_POST['login']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
$senha = mysqli_real_escape_string($conn, $_POST['senha']);



 if(($usuario != null) && ($senha != null)){
        
        $result_usuario = "call pfc_db.select_valida_usuario('$usuario','$senha');";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        if($resultado != null){
			$_SESSION['usuarioId'] = $resultado['id_funcionario'];
			$_SESSION['usuarioNome'] = $resultado['nome'];
			$_SESSION['usuarioNiveisAcessoId'] = $resultado['funcao'];
			$_SESSION['usuarioUsuario'] = $resultado['usuario'];
			if($_SESSION['usuarioNiveisAcessoId'] == "1"){
				header("Location: ../PaginaGraficos.php");
			}elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
				header("Location: ../PaginaDoAgente.php"); //Colocar Url da paginas Relacionadas ao usuario Agente
			}else{
				header("Location: ../PaginaSupervisor.php"); //Colocar Url da paginas Relacionadas ao usuario supervisor
			}
		//Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		//redireciona o usuario para a página de login
		}else{	
			//Váriavel global recebendo a mensagem de erro
			$_SESSION['loginErro'] = "Usuário ou senha Inválido";
			header("Location: ../index.php");
		}

 }else {
    $_SESSION['loginErro'] = "Usuário ou senha inválido";
    header("Location: ../index.php");
 }
 ?>