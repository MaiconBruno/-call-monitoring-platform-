<?php

//Importa a validação da sessão para evitar acesso via URL
include('./php/validaPagina.php');
//Importa a validação da sessão para evitar acesso via URL


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
<html lang="pt-BR">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CADASTRO-DASHBOARD JCR</title>
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://static.wixstatic.com/media/a917a1_d8844d4baaa443a7a31eeaf9b1c214c3%7Emv2.png/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/a917a1_d8844d4baaa443a7a31eeaf9b1c214c3%7Emv2.png" type="image/png">
 
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
                                <p class="text-center text-danger">
                                    <?php if (isset($_SESSION['SucessCad'])) {
                                        $msg = $_SESSION['SucessCad'];
                                        echo "<script>
                                window.alert('$msg')
                                </script>";
                                        unset($_SESSION['SucessCad']);
                                    } ?>
                                </p>
                            </div>
                            <form class="user" method="POST" action="./php/cadastro.php">
                                <div class="form-group row" style="margin-top:30px">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="nome">Nome:</label>
                                        <input type="text" maxlength="20" class="form-control form-control-user" onkeypress='return soLetras(event)' required id="nome" name="nome" placeholder="Nome... ">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="sobrenome">Sobrenome:</label>
                                        <input type="text" maxlength="20" class="form-control form-control-user" onkeypress='return soLetras(event)' required id="sobrenome" name="sobrenome" placeholder="Sobrenome... ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="usuario">Nome de usuário:</label>
                                    <input type="text" maxlength="20" class="form-control form-control-user" required id="usuario" name="usuario" placeholder="Login">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="password">Senha:</label>
                                        <input type="password" maxlength="14" class="form-control form-control-user" required id="password" name="password" placeholder="Senha">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="confirmarsenha"> Confimar senha:</label>
                                        <input type="password" maxlength="14" class="form-control form-control-user" required id="confirmarsenha" placeholder="Confirmar senha">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="matricula"> Matricula:</label>
                                        <input type="text" maxlength="20" class="form-control form-control-user" required id="matricula" name="matricula" maxlength="15" placeholder="Matricula">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="nivel">Nivel do usuário:</label>
                                        <select id="nivel" name="nivel" class="custom-select" name="nivel">
                                            <option id="agente" value="2" selected>Agente</option>
                                            <option id="supervisor" value="3">Supervisor</option>
                                            <option id="administrador" value="1">Administrador</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="ramal">Ramal:</label>
                                        <input type="text" maxlength="20" class="form-control form-control-user" required onkeypress='return SomenteNumero(event)' id="ramal" name="ramal" maxlength="12" placeholder="Ramal">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="cpf">CPF:</label>
                                        <input type="text" required maxlength="14" class="form-control form-control-user" id="cpf" name="cpf" placeholder="CPF" onkeydown="javascript: fMasc( this, mCPF );">
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <button type="submit" class="btn btn-success btn-sm btn-user btn-block radio" style="font-size:17px; margin-right:10px;">Confirmar cadastro</button>
                                    <a style="text-decoration:none;" href="config.php"><button type="button" id="voltar" class="btn btn-danger btn-sm btn-user " style="font-size:17px;">Cancelar</button></a>
                                </div>
                            </form>
                            <hr>
                            <div class="text-center">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="./js/mascaras.js"></script>
        <script src="./js/cadastro.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>