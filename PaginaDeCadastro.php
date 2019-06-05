<?php
//Importa a validação da sessão para evitar acesso via URL
include('./php/validaPagina.php');
//Importa a validação da sessão para evitar acesso via URL


//verifica se a pagina pertence ao nivel do usuario logado 
// if ($_SESSION['Logado'] = true && $_SESSION['usuarioNiveisAcessoId'] != "1") { // comparação para verificar o nivel do acesso
//     session_start();
//     unset($_SESSION['usuarioId'],
//     $_SESSION['usuarioNome'],
//     $_SESSION['usuarioNiveisAcessoId'],
//     $_SESSION['usuarioLogin'],
//     $_SESSION['usuarioSenha']);
//     header("Location: index.php");
//     $_SESSION['loginAcesso'] = "Você tentou acessa uma pagina que não corresponde ao seu acesso."; //mensagem exibida quando o acesso não e permitido 
//     exit();
// } else { }

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN-DASHBOARD JCR</title>
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
                                <h1 class="h3 text-gray-900 mb-4">Preencha os campos para cadastrar</h1>
                            </div>
                            <form class="user" method="POST" action="./php/cadastro.php">
                                <div class="form-group row" style="margin-top:30px">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" onkeypress='return soLetras(event)' required id="nome" name="nome" placeholder="Nome">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" onkeypress='return soLetras(event)' required id="sobrenome" name="sobrenome" placeholder="Sobrenome">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" required id="usuario" name="usuario" placeholder="Login">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" required id="password" name="password" placeholder="Senha">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" required id="confirm_password" placeholder="Confirmar senha">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" required id="matricula" name="matricula" maxlength="15" placeholder="Matricula">
                                    </div>
                                    <div class="col-sm-6">
                                        <select id="nivel" name="nivel" class="custom-select" name="nivel">
                                            <option id="agente" value="2" selected>Agente</option>
                                            <option id="supervisor" value="3">Supervisor</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" required id="ramal" name="ramal" maxlength="12" placeholder="Ramal">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" required onkeypress='return SomenteNumero(event)' maxlength="14" class="form-control form-control-user" id="cpf" name="cpf" placeholder="CPF">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-sm btn-user btn-block">Confirmar cadastro</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a href="config.php"><button type="submit" id="voltar" class="btn btn-danger btn-sm btn-user">Cancelar é voltar</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
         <script src="./js/cadastro.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>