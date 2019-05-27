<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="row ">
        <form id="idFormulario" class="col-md-12 col-sm-12 col-xs-12" action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <!-- Titulo -->
            <div class="d-flex justify-content-center align-items-center ">
                <div class=" form-check ">
                    <input type="radio" onclick="habilitaCampoBusca(),escondeDiv(),alteraLabelCampoBusca()" name="tipoBusca" id="radioMatricula" value="matricula">
                    <label for="radioMatricula">Matricula</label>
                </div>
                <div class=" form-check">
                    <input type="radio" onclick="habilitaCampoBusca(),escondeDiv(),alteraLabelCampoBusca()" name="tipoBusca" id="radioNome" value="nome">
                    <label for="radioNome">Agente</label>
                </div>
                <div class=" form-check">
                    <input type="radio" onclick="habilitaCampoBusca(),escondeDiv(),alteraLabelCampoBusca()" name="tipoBusca" id="radioAni" value="ani">
                    <label for="radioAni">Contato do Cliente</label>
                </div>
                <div class=" form-check">
                    <input type="radio" onclick="escondeDiv();" name="tipoBusca" id="radioData" value="data">
                    <label for="radioData">Data</label>
                </div>
            </div>
            <!-- Campos tipo Text e date -->
            <div class="row" id="divCampoBusca">
                <div class="d-flex col-md-12 col-sm-12 col-xs-12">
                    <label class="radio" for="campoBusca" id="labelCampoBusca">Busca: </label>
                    <input type="text" class="form-control" onkeyup="habilitaCampoCampanha()" name="parametro" id="campoBusca" disabled="true">
                </div>
            </div>
            <div class="row">
                <div class="d-flex row  col-md-12 col-sm-12 col-xs-12" id="divCampanhaEquipe">
                    <div class="d-flex col-md-6 col-sm-12 col-xs-12">
                        <label class="radio" for="campoCampanha">Campanha:</label>
                        <input type="text" class="form-control" onkeyup="habilitaCampoEquipe()" name="campanha" id="campoCampanha" disabled="true">
                    </div>
                    <div class="d-flex col-md-6 col-sm-12 col-xs-12">
                        <label class="radio" for="campoEquipe">Equipe:</label>
                        <input type="text" class="form-control" name="equipe" id="campoEquipe" disabled="true">
                    </div>
                </div>
            </div>



            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>