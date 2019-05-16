<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN-DASHBOARD JCR</title>

</head>

<body>
    <div>
        <div class=" container centralizador col-md-12 col-sm-12 col-xs-12">
            <div>
                <div>
                    <img src="./icones/LOGO.PNG" alt="" height="140px" width="350px">
                </div>
                <br>
                <form action="" class="form-grup">
                    <div class="d-flex justify-content-center">
                        <div class="radio  ">
                            <label for="login">Login de usuario: </label>
                            <input id="login" class="form-control" type="text" placeholder="Digite seu login...">
                            <br>
                            <label for="senha">Senha</label>
                            <input id="senha" class="form-control" type="password" placeholder="Digite sua senha...">
                            <br>
                            <label for="senhaconf">Confirmar Senha</label>
                            <input id="senhaconf" class="form-control" type="password" placeholder="Confirme sua senha...">
                            <br>
                        </div>
                        <div class="radio">
                            <label for="campanha">Campanha: </label>
                            <input id="campanha" class="form-control" type="text" placeholder="Digite seu login...">
                            <br>
                            <label for="matricula">Matricula</label>
                            <input id="matricula" class="form-control" type="text" placeholder="Digite sua senha...">
                            <br>
                            <label for="nivel">Nivel da conta</label>
                            <select name="niveis" id="nivel" class="form-control">
                                <option class="form-control" value="Agente" selected>Agente</option>
                                <option class="form-control"  value="Supervisor">Supervisor</option>
                                <option class="form-control" value="Administrador">Administrador</option>
                            </select>
                            <br>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-success radio">Cadastrar</button>
                        <button type="button" class="btn btn-danger radio">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>

        <footer class="bg-primary border-rodape vertical-align">
            <h5 class="text-white size"> © Copyright 2019 - JCR Tecnologia Integrada</h5>
        </footer>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>