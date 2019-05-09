<?php
include('./php/tabelaavaliacao.php');
?>

<html>

<head>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js">
    <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>


<body>

    <!-- Card principal -->
    <div class=" text-dark col-md-12 col-sm-12 com-xs-12 ">
        <div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <!-- Titulo -->
                <div class="col-md-12 col-sm-12 com-xs-12 ">
                    <div class="d-flex justify-content-center align-items-center col-md-12 col-sm-12 com-xs-12  ">
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
                    <div class=" d-flex col-md-12 col-sm-12 col-xs-12  justify-content-center align-items-center form-inline ">

                        <div class="radio d-flex justify-content-center align-items-center " id="divCampoBusca">
                            <label class="radio" for="campoBusca" id="labelCampoBusca">Campo Busca:</label>
                            <input type="text" class="form-control" onkeyup="habilitaCampoCampanha()" name="parametro" id="campoBusca" disabled="true">
                        </div>


                        <div class="radio d-flex justify-content-center align-items-center " id="divCampanhaEquipe">
                            <label class="radio" for="campoCampanha">Campanha:</label>
                            <input type="text" class="form-control" onkeyup="habilitaCampoEquipe()" name="campanha" id="campoCampanha" disabled="true">

                            <label class="radio" for="campoEquipe">Equipe:</label>
                            <input type="text" class="form-control" name="equipe" id="campoEquipe" disabled="true">
                        </div>

                        <div class="col-md-12 col-sm-12 com-xs-12">
                            <div class="radio d-flex justify-content-center align-items-center  id=" divData">
                                <label class="radio" for="campoDataInicial" id="labelDataInicial">Data Inical:</label>
                                <input type="date" class="form-control" name="dataInicial" id="campoDataInicial" disabled="true">

                                <label class="radio" for="campoDataFinal" id="labelDataFinal">Data Final:</label>
                                <input type="date" class="form-control" onmouseleave="habilitaCampoCampanhaData()" name="dataFinal" id="campoDataFinal" disabled="true">
                            </div>
                        </div>
                        <div class="radio d-flex justify-content-center align-items-center container ">
                            <input class="btn btn-primary botão" type="submit" value="Buscar" id="btnBuscar" disabled="true">
                            <input class="btn btn-danger botão" type="button" value="Limpar" onclick="limparCampos();">
                        </div>
                    </div>
                    <!-- FIm do campos text/date -->
                </div>
            </form>
            <div class="col-md-12 col-sm-12 col-xs-12 menu-card">

                <table class="table table-hover table-secondary " id="tbl_ligacao">
                    <thead>
                        <tr>
                            <th>Matricula</th>
                            <th>Agente</th>
                            <th>Contato do Cliente</th>
                            <th>Função</th>
                            <th>Data</th>
                            <th>Campanha</th>
                            <th>Equipe</th>
                            <th>Resposta 1</th>
                            <th>Resposta 2</th>
                            <th>Resposta 3</th>
                            <th>Resposta 4</th>
                            <th>Resposta 5</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php while ($dado = $resultado->fetch_array()) {
                            if ($dado['resposta_1'] == null) {
                                $dado['resposta_1'] = "N/A";
                            }
                            if ($dado['resposta_2'] == null) {
                                $dado['resposta_2'] = "N/A";
                            }
                            if ($dado['resposta_3'] == null) {
                                $dado['resposta_3'] = "N/A";
                            }
                            if ($dado['resposta_4'] == null) {
                                $dado['resposta_4'] = "N/A";
                            }
                            if ($dado['resposta_5'] == null) {
                                $dado['resposta_5'] = "N/A";
                            }
                            ?>

                            <tr>


                                <td><?php echo $dado['matricula']; ?></td>
                                <td><?php echo $dado['nome']; ?></td>
                                <td><?php echo $dado['ani']; ?></td>
                                <td><?php echo $dado['descricao']; ?></td>
                                <td><?php echo $dado['data_hora']; ?></td>
                                <td><?php echo $dado['campanha']; ?></td>
                                <td><?php echo $dado['equipe']; ?></td>
                                <td><?php echo $dado['resposta_1']; ?></td>
                                <td><?php echo $dado['resposta_2']; ?></td>
                                <td><?php echo $dado['resposta_3']; ?></td>
                                <td><?php echo $dado['resposta_4']; ?></td>
                                <td><?php echo $dado['resposta_5']; ?></td>
                            </tr>
                        <?php }  ?>
                    </tbody>
                </table>
            </div>


            <script>
                $(document).ready(function() {
                    $('#tbl_ligacao').DataTable({
                        "searching": false,
                        "language": {
                            "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json",
                        }
                    });
                });
            </script>
        </div>
    </div>
    <!-- Fim do card principal -->

    <script src="./js/avaliacao.js"></script>
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
</body>

</html>