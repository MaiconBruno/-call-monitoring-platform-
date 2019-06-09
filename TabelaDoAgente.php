<?php
//Importa a validação da sessão para evitar acesso via URL
include('./php/validaPagina.php');

//verifica se a pagina pertence ao nivel do usuario logado 
if ($_SESSION['Logado'] = true && $_SESSION['usuarioNiveisAcessoId'] != "2") { // comparação para verificar o nivel do acesso
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

include('./php/tabela_av.php');
include('./php/tabelaavaliacao.php');
//include('../php/tabelaavaliacao.php')
?>

<!-- Graficos JS -->
<script type="text/javascript"></script>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- Importando chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <!-- Importando bliblioteca da google Charts so chamar 1x-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js">
    <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="PROJETO FINAL DE CURSO SENAI CETIND TURMA 58271">
    <meta name="author" content="EQUIPE PFC-SENAI">
    <!-- Importando chart.js -->
    <script src="path/to/chartjs/dist/Chart.js"></script>
    <title>DASH - JCR TECNOLOGIA</title>

    <!-- Biblioteca CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <!-- import scrolling-nav.css -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <!-- import estilos.css -->

</head>

<body>
<nav class="border-size-top fixed-top">
    <div class="header d-flex" style="background-color:white;">
      <div class="container">
        <div class="row ">
          <div class="col-md-12 d-flex justify-content-center">
            <div class="logo" style="margin-left:90px;"> <img src="./icones/LOGO.png" height="50px" width="140px" alt=""> </div>
          </div>
        </div>
      </div>
      <div class="dropdown" style="margin-right:15px;">
      <span class="nav-link  text-menu  text-primary" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><img width="45" height="45" src="./icones/menu.png"></span>
        <ul class="dropdown-menu " aria-labelledby="dropdownMenu1">
          <li class="centralizador"><a class="text-secondary"><?php echo $_SESSION['usuarioNome']; ?></a></li>
          <li class="centralizador"><a class="text-success"><?php
                                                            $acesso = '';
                                                            if ($_SESSION['usuarioNiveisAcessoId'] == 1) {
                                                              $acesso = 'ADMINISTRADOR';
                                                            } else if ($_SESSION['usuarioNiveisAcessoId'] == 2) {
                                                              $acesso = 'AGENTE';
                                                            } else if ($_SESSION['usuarioNiveisAcessoId'] == 3) {
                                                              $acesso = 'SUPERVISOR';
                                                            }
                                                            echo $acesso;
                                                            ?></a></li>
          <li class="centralizador"><a class="text-primary" href="./php/sair.php">Sair</a></li>
        </ul>
      </div>
    </div>
  </nav>
    <div class="page-content" style="padding-top:1px; background-color:#E6ECEC">
        <!-- div da pagina toda -->
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12 col-sm-12 col-xs-12 panel-warning ">
                    <div class="content-box-header panel-heading">
                        <div class="panel-title ">Tabela de busca geral</div>
                    </div>
                    <div class="content-box-large box-with-header ">
                        <div class="row">
                            <!-- Div Esquerda que aloca 2 graficos -->

                            <!-- Card principal -->
                            <div class="text-dark col-md-12 col-sm-12 com-xs-12">

                                <table class="table table-hover table-primary table-responsive-lg " id="tbl_ligacao">
                                    <thead>
                                        <tr class=>
                                            <th>Matricula</th>
                                            <th>Agente</th>
                                            <th>Contato do Cliente</th>
                                            <th>Função</th>
                                            <th>Data</th>
                                            <th>Campanha</th>
                                            <th>Equipe</th>
                                            <th>R1</th>
                                            <th>R2</th>
                                            <th>R3</th>
                                            <th>R4</th>
                                            <th>R5</th>
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

                                <script>
                                    $(document).ready(function() {
                                        $('#tbl_ligacao').DataTable({
                                            "searching": false,
                                            "language": {
                                                "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json",
                                            },
                                            columnDefs: [{
                                                type: 'date-eu',
                                                targets: 4
                                            }]
                                        });
                                    });
                                </script>

                                <!-- Aqui vai a tabela
                             -->
                            </div>
                        </div>
                    </div>
                    <!-- Fim do card principal -->
                </div>
            </div>
        </div>
    </div>

    <div class="tabelas-fixo zoom pd ">
        <a href="./PaginaDoAgente.php">
            <img class="img-responsive" src="./icones/icone_RA.png" width="35px" height="35px" alt="Tabelas" />
        </a>
    </div>
    </div>

    <footer>
        <div class="container">
            <div class="copy text-center"> Copyright 2019 <a href='#'>Dashboard de Qualidade JCR </a> </div>
        </div>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>
    <!-- Importando avaliacao.js -->
    <script src="../js/avaliacao.js"></script>
    <!-- imports do Jquery -->
    <script src="./js/avaliacao.js"></script>
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/plug-ins/1.10.19/sorting/date-eu.js"></script>

</body>

</html>