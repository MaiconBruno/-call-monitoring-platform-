<?php
session_start();	
include ('./conexao.php');
//Captura as informações digitadas no input text do html da pagina de login 
$usuario = mysqli_real_escape_string($conn, $_POST['login']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
$senha = mysqli_real_escape_string($conn, $_POST['senha']);//Escapar de caracteres especiais, como aspas, prevenindo SQL injection
$senha = md5($senha);


 if(($usuario != null) && ($senha != null)){  // Verifica se os campos foram preenchidos, caso não redireciona para pagina index.php e exibi a mensagem de alerta!
        
        $result_usuario = "call pfc_db.select_valida_usuario('$usuario','$senha');"; //Procedure que captura os dados do banco para comparação.
		$resultado_usuario = mysqli_query($conn, $result_usuario); // faz a conexão com banco e aloca o resultado na variavel resultado_usuario 
        $resultado = mysqli_fetch_assoc($resultado_usuario); // Associa o resultado com o banco 
        
        if($resultado != null){ // Se o resultado for vazio ele volta para pagina de login se não for ele cria uma sessão com os dados. 
			$_SESSION['usuarioId'] = $resultado['id_funcionario']; //Guarda uma sessão com ID do usuario logado
			$_SESSION['usuarioNome'] = $resultado['nome']; //Guarda em uma sessão o nome do usuario logado
			$_SESSION['usuarioNiveisAcessoId'] = $resultado['funcao'];//Guarda em uma sessão o nivel do usuario logado
			$_SESSION['usuarioUsuario'] = $resultado['usuario'];//Guarda em uma sessão o login do usuario 
			
			if($_SESSION['usuarioNiveisAcessoId'] == "1"){// verifica o nivel e direciona para pagina correspondente 
				$_SESSION['Logado'] = true; // Cria a sessão que Valida o login 
				header("Location: ../PaginaAdministrador.php");
			}elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
				$_SESSION['Logado'] = true;  // Cria a sessão que Valida o login 
				header("Location: ../PaginaDoAgente.php"); //Colocar Url da paginas Relacionadas ao usuario Agente
			}else{
				$_SESSION['Logado'] = true;  // Cria a sessão que Valida o login 
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
	 //Váriavel global recebendo a mensagem de erro
    $_SESSION['loginErro'] = "Usuário ou senha inválido";
    header("Location: ../index.php");
 }
 ?>