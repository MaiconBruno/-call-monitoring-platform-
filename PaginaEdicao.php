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

include('./php/conexao.php');
$cpf =  $_POST['cpf'];
$nivel = $_POST['nivel'];

$buscar = "SELECT * from funcionario where  cpf= '$cpf' AND funcao = '$nivel';"; //faz a pesquisa do usuario no banco de dados. 
$resultadoBusca = mysqli_query($conn, $buscar); // faz a conexão com banco e aloca o resultado na variavel resultado_usuario 
// Associa o resultado com o banco 

while ($row_usuario = mysqli_fetch_assoc($resultadoBusca)) {
  $id_usuario = $row_usuario['id_funcionario'];
  $nome_usuario =  $row_usuario['nome'];
  $sobrenome_usuario =   $row_usuario['sobrenome'];
  $usuario_usuario =   $row_usuario['usuario'];
  $senha_usuario =   $row_usuario['senha'];
  $matricula_usuario =   $row_usuario['matricula'];
  $ramal_usuario =   $row_usuario['ramal'];
  $cpf_usuario =   $row_usuario['cpf'];
  $funcao_usuario =   $row_usuario['funcao'];
  $_SESSION['id_usuario'] = $id_usuario;
}


if ($nome_usuario != "") { } else {
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

<script language='JavaScript'>
  //função para so permitir no campo numeros
  function SomenteNumero(e) {
    var tecla = (window.event) ? event.keyCode : e.which;
    if ((tecla > 47 && tecla < 58)) return true;
    else {
      if (tecla == 8 || tecla == 0) return true;

      else alert("Letras ou símbolos não são aceitos nesse campo!!");
      return false;
    }
  }
  //função que permite letras e simbolos e acentuação
  function soLetras(e) {
    if (document.all) {
      var evt = event.keyCode;
    } else {
      var evt = e.charCode;
    }
    var chr = String.fromCharCode(evt);
    // var re = /[A-Za-z]/; // se prefere somente letras de A-Z e de a-z 
    var re = /[A-Za-z\s-ÃÕÑÁÉjgxÍÓÚÀÜÇãõñáéíóúàçü]/; // permite de A-Z, a-z, espaços,
    // hífens e caracteres acentuados. Mais caracteres podem ser adicionados a Lista
    return (re.test(chr)); // com evt<20 permitimos <ENTER>,<TAB>,<BACKSPACE>
  }

  function abrir(URL) {
    window.open('busca.html', 'janela', 'width=1200, height=450, top=100, left=699, scrollbars=no, status=no, toolbar=no, location=no, menubar=no, resizable=no, fullscreen=no')
  }

  function abrir2(URL) {
    window.open('excluir.html', 'janela', 'width=1200, height=700, top=100, left=699, scrollbars=no, status=no, toolbar=no, location=no, menubar=no, resizable=no, fullscreen=no')
  }
</script>

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
                    <input type="text" class="form-control form-control-user" required id="nome" placeholder="Nome" value="<?php echo $nome_usuario; ?>" disabled>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" required id="sobrenome" placeholder="Sobrenome" value="<?php echo $sobrenome_usuario; ?>" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" disabled id="usuario" name="usuarioAtual" required value="<?php echo $usuario_usuario; ?>">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" disabled id="password" name="passwordAtual" required value="<?php echo $senha_usuario; ?>">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" disabled id="confirmarsenha" required value="<?php echo $senha_usuario; ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" required disabled id="matricula" name="matriculaAtual" maxlength="15" value="<?php echo $matricula_usuario; ?>">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" disabled class="form-control form-control-user" disabled required id="nivel" maxlength="15" value="<?php
                                                                                                                                          if ($funcao_usuario == 1) {
                                                                                                                                            $conta_nivel = "Administrador";
                                                                                                                                          } else if ($funcao_usuario == 3) {
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
                    <input type="text" class="form-control form-control-user" disabled required id="ramal" name="ramalAtual" onkeypress='return SomenteNumero(event)' maxlength="12" value="<?php echo $ramal_usuario; ?>">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" required onkeypress='return SomenteNumero(event)' maxlength="14" class="form-control form-control-user" id="cpf" value="<?php echo $cpf_usuario; ?>" disabled>
                  </div>
                </div>
                <div class="d-flex">
                  <button type="submit" id="cadastronovo" class="btn btn-success btn-sm btn-user btn-block" disabled>Confirmar Edição</button>
                  <button type="button" id="editar" class="btn btn-warning btn-sm btn-user" style="margin-left:10px; min-width:150px;" onclick="habilitar_edicao()">Editar</button>
                </div>
              </form>
              <hr>
              <p class="text-center text-danger">
                <?php if (isset($_SESSION['Sucessedit'])) {
                  echo $_SESSION['Sucessedit'];
                  unset($_SESSION['Sucessedit']);
                } ?>
              </p>
              <div class="text-center">
                <h5 class="font-weight-bold"> O que deseja fazer agora...?</h5>
                <button id="excluir" class="btn btn-danger btn-sm btn-user">Excluir usuário</button></a>
                <a href="./config.php"><button type="submit" id="voltar" class="btn btn-secondary btn-sm btn-user">Voltar</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="./js/pesquisa.js"></script>
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