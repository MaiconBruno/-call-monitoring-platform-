<?php
include ('./php/tabelaavaliacao.php');
?>

<html>
<head>
  <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div>
            <label>Pesquisar por:*</label>
            <input type="radio" onclick="habilitaCampoBusca(),escondeDiv(),alteraLabelCampoBusca()" name="tipoBusca" id="radioMatricula" value="matricula">
            <label for="radioMatricula">Matricula</label>

            <input type="radio" onclick="habilitaCampoBusca(),escondeDiv(),alteraLabelCampoBusca()" name="tipoBusca" id="radioNome" value="nome">
            <label for="radioNome">Agente</label>

            <input type="radio" onclick="habilitaCampoBusca(),escondeDiv(),alteraLabelCampoBusca()" name="tipoBusca" id="radioAni" value="ani">
            <label for="radioAni">Contato do Cliente</label>

            <input type="radio" onclick="escondeDiv();" name="tipoBusca" id="radioData" value="data">
            <label for="radioData">Data</label>
        </div>

        <div id="divCampoBusca">
            <label for="campoBusca" id="labelCampoBusca">Campo Busca:</label>
            <input type="text" onkeyup="habilitaCampoCampanha()" name="parametro" id="campoBusca" disabled="true">
        </div>

        <div id="divCampanhaEquipe">
            <label for="campoCampanha">Campanha:</label>
            <input type="text" onkeyup="habilitaCampoEquipe()" name="campanha" id="campoCampanha" disabled="true">

            <label for="campoEquipe">Equipe:</label>
            <input type="text" name="equipe" id="campoEquipe" disabled="true">
        </div>

        <div id="divData">
            <label for="campoDataInicial" id="labelDataInicial">Data Inical:</label>
            <input type="date" name="dataInicial" id="campoDataInicial" disabled="true">

            <label for="campoDataFinal" id="labelDataFinal">Data Final:</label>
            <input type="date" onmouseleave="habilitaCampoCampanhaData()" name="dataFinal" id="campoDataFinal" disabled="true">
        </div>


        <input type="submit" value="Buscar" id="btnBuscar" disabled="true">
        <input type="button" value="Limpar" onclick="limparCampos();">
    </form>

    <br>

    <div>
        <table border="1" id="tbl_ligacao">
            <thead>
                <tr class="table table-hover">
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
        <script src="./js/avaliacao.js"></script>
    </div>

    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#tbl_ligacao').DataTable();
        });
  </script>
</body>
</html>