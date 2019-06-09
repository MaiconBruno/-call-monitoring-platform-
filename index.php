<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>JCR TECNOLOGIA</title>
    <meta name="author" content="GRUPO PFC - SENAI LIDER FENRNADA PORTO / TURMA 2019 58271" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://static.wixstatic.com/media/a917a1_d8844d4baaa443a7a31eeaf9b1c214c3%7Emv2.png/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/a917a1_d8844d4baaa443a7a31eeaf9b1c214c3%7Emv2.png" type="image/png">
 
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Entre com seu login!</h1>
                                    </div>

                                    <form class="user" method="POST" action="./php/valida.php">
                                        <div class="form-group" style="margin-top:30px">
                                            <!-- <label for="email">E-mail</label> -->
                                            <input type="text" class="form-control form-control-user" id="login" name="login" alt="Preencha com o login..." placeholder="Seu login...">
                                        </div>
                                        <div class="form-group">
                                            <!-- <label for="senha">Senha</label> -->
                                            <input type="password" class="form-control form-control-user" id="senha" name="senha" placeholder="Sua senha...">
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block" type="submit">Login</button>
                                    </form>
                                    <!-- Exibi a mensagem de erro caso login seja efetuado incorretamente -->
                                    <p class="text-center text-danger">
                                        <?php if (isset($_SESSION['loginErro'])) {
                                            echo $_SESSION['loginErro'];
                                            unset($_SESSION['loginErro']);
                                        } ?>
                                    </p>
                                    <!-- Exibi a mensagem de Acesso Invalido -->
                                    <p class="text-center text-danger">
                                        <?php if (isset($_SESSION['loginAcesso'])) {
                                            echo $_SESSION['loginAcesso'];
                                            unset($_SESSION['loginAcesso']);
                                        } ?>
                                    </p>
                                    <hr>
                                    <div class="text-center"> <a class="small" href="senha_erro.html">Esqueceu a senha?</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>