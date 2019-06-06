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
</script>

<body class="bg-gradient-primary">
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2"></h1>
                  </div>
                  <form class="user" method="POST" action="./php/buscarUsuario.php">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-2">Preencha alguns campos...</h1>
                    </div>
                    <div class="form-group row" style="margin-top:30px">
                      
                      <div class="col-sm-12">
                        <input type="text" required onkeypress='return SomenteNumero(event)' maxlength="14" class="form-control" id="cpf" name="cpfs" placeholder="CPF">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-12">
                        <select class="custom-select" id="nivel" name="nivelS">
                          <option id="agente" value="2" selected>Agente</option>
                          <option id="supervisor" value="3">Supervisor</option>
                        </select>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between">
                      <button type="submit" class="btn btn-success btn-user btn-block" style="margin-right:10px;"> Buscar Usuário </button>
                      <a href="./config.php"> <button type="button" class=" btn btn-secondary btn-user btn-block">Voltar</button></a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="bibliotecas/jquery/jquery.min.js"></script>
  <script src="bibliotecas/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="bibliotecas/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
</body>

</html>