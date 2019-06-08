<?php
//Importa a validação da sessão para evitar acesso via URL
include('./php/validaPagina.php');
//verifica se a pagina pertence ao nivel do usuario logado 
if ($_SESSION['Logado'] = true && $_SESSION['usuarioNiveisAcessoId'] != "1") { // comparação para verificar o nivel do acesso
  session_start();
  unset($_SESSION['usuarioId'],
  $_SESSION['usuarioNome'],
  $_SESSION['usuarioNiveisAcessoId'],
  $_SESSION['usuarioLogin'],
  $_SESSION['usuarioSenha']);
  header("Location: index.php");
  $_SESSION['loginAcesso'] = "Acesso Negado!"; //mensagem exibida quando o acesso não e permitido 
  exit();
} else { }
?>
<?php

if ($_SESSION['buscaRealiza'] == true) {
  $id_user =  $_SESSION['id_usuario'];
  $nome_user = $_SESSION['nome'];
  $sobrenome_user = $_SESSION['sobrenome'];
  $usuario_user = $_SESSION['usuario'];
  $senha_user = $_SESSION['senha'];
  $matricula_user = $_SESSION['matricula'];
  $ramal_user = $_SESSION['ramal'];
  $cpf_user = $_SESSION['cpf'];
  $funcao_user = $_SESSION['funcao'];
  $_SESSION['id'] = $id_user;

  unset($_SESSION['id_usuario'],
  $_SESSION['nome'],
  $_SESSION['sobrenome'],
  $_SESSION['usuario'],
  $_SESSION['senha'],
  $_SESSION['matricula'],
  $_SESSION['ramal'],
  $_SESSION['cpf'],
  $_SESSION['funcao'],
  $_SESSION['buscaRealiza']);
} else {
  unset($_SESSION['id_usuario'],
  $_SESSION['nome'],
  $_SESSION['sobrenome'],
  $_SESSION['usuario'],
  $_SESSION['senha'],
  $_SESSION['matricula'],
  $_SESSION['ramal'],
  $_SESSION['cpf'],
  $_SESSION['funcao'],
  $_SESSION['buscaRealiza']);
  header("Location:./busca.php");
  $_SESSION['AlertaBusca'] = 'Usuario não encontrado!';
}



?>
<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>DashBoard JCR</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>


<body class="bg-gradient-primary">
  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"> </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h3 text-gray-900 mb-4">Preencha os campos para Editar</h1>
              </div>

              <form method="POST" action="./php/editar_dados.php">
                <div class="form-group row" style="margin-top:30px">

                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="senha">Senha:</label>
                    <input type="text" class="form-control form-control-user" required id="nome" name="nome" value="<?php echo $nome_user; ?>" disabled>
                  </div>
                  <div class="col-sm-6">
                    <label for="senha">Senha:</label>
                    <input type="text" class="form-control form-control-user" required id="sobrenome" name="sobrenome" value="<?php echo  $sobrenome_user; ?>" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label for="senha">Senha:</label>
                  <input type="text" class="form-control form-control-user" maxlength="15" disabled id="usuario" onclick="limparusuario()" name="usuario" required value="<?php echo $usuario_user ?>">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="senha">Senha:</label>
                    <input type="password" class="form-control form-control-user" maxlength="15" onclick="limparsenha()" disabled id="password" name="senha" required value="<?php echo  $senha_user; ?>">
                  </div>

                  <div class="col-sm-6">
                    <label for="confirmarsenha"> Confimar senha:</label>
                    <input type="password" class="form-control form-control-user" maxlength="15" disabled id="confirmarsenha" required value="<?php echo  $senha_user; ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" required disabled onclick="limparmatricula()" id="matricula" name="matricula" maxlength="15" value="<?php echo $matricula_user; ?>">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" disabled class="form-control form-control-user" disabled required id="nivel" maxlength="15" value="<?php
                                                                                                                                          if ($funcao_user == 1) {
                                                                                                                                            $conta_nivel = "Administrador";
                                                                                                                                          } else if ($funcao_user == 3) {
                                                                                                                                            $conta_nivel = "Supervisor";
                                                                                                                                          } else {
                                                                                                                                            $conta_nivel = "Agente";
                                                                                                                                          }
                                                                                                                                          echo $conta_nivel;
                                                                                                                                          ?>">

                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" onclick="limparramal()" disabled required id="ramal" name="ramal" maxlength="12" value="<?php echo $ramal_user; ?>">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" required maxlength="14" class="form-control form-control-user" id="cpf" value="<?php echo  $cpf_user; ?>" disabled>
                  </div>
                </div>
                <div class="d-flex">
                  <button type="submit" id="cadastronovo" class="btn btn-success btn-sm btn-user btn-block" disabled>Confirmar Edição</button>
                  <button type="button" id="editar" class="btn btn-warning btn-sm btn-user" style="margin-left:10px; min-width:150px;" onclick="habilitar_edicao()">Editar</button>
                </div>
              </form>
              <hr>
              <div class="text-center">
                <h5 class="font-weight-bold"> O que deseja fazer agora...?</h5>
                <form action="./php/excluir_cadastro.php">
                  <button id="excluir" type="submit" class="btn btn-danger btn-sm btn-user">Excluir usuário</button></a>
                  <a href="./config.php"><button type="submit" id="voltar" class="btn btn-secondary btn-sm btn-user">Voltar</button></a>
                </form>
                <a href="./config.php"><button type="submit" id="voltar" class="btn btn-secondary btn-sm btn-user">Voltar</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="./js/pesquisa.js"></script>
  <script src="./js/cadastro.js"></script>
  <!-- Bootstrap core JavaScript-->
  <script src="bibliotecas/jquery/jquery.min.js"></script>
  <script src="bibliotecas/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="bibliotecas/jquery-easing/jquery.easing.min.js"></script>

  <script src="./js/mascaras.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
</body>

</html>