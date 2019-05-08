<?php
include ('./php/tabela_av.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="./css/style.css">
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- Importando chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <!-- Importando bliblioteca da google Charts so chamar 1x-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="PROJETO FINAL DE CURSO SENAI CETIND TURMA 58271">
    <meta name="author" content="EQUIPE PFC-SENAI">
    <!-- Importando chart.js -->
    <script src="path/to/chartjs/dist/Chart.js"></script>
    <title>DASH - JCR TECNOLOGIA</title>

    <!-- Biblioteca CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- import scrolling-nav.css -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <!-- import estilos.css -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>

</head>

<body>

    <div class="container-fluid">
        
    <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-4">
                <h1>Tabela de Avaliação</h1>
                <?php if ($num > 0) { ?>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>Matricula</td>
                                <td>Agente</td>
                                <td>Contato do Cliente</td>
                                <td>Função</td>
                                <td>Data</td>
                                <td>Campanha</td>
                                <td>Equipe</td>
                                <td>Resposta 1</td>
                                <td>Resposta 2</td>
                                <td>Resposta 3</td>
                                <td>Resposta 4</td>
                                <td>Resposta 5</td>
                            </tr>
                        </thead>
                        <tbody>
                       
                                <?php do { ?>
                                    <tr>
                                        <td><?php echo $produto['matricula']; ?></td>
                                        <td><?php echo $produto['nome']; ?></td>
                                        <td><?php echo $produto['ani']; ?></td>
                                        <td><?php echo $produto['descricao']; ?></td>
                                        <td><?php echo $produto['data_hora']; ?></td>
                                        <td><?php echo $produto['campanha']; ?></td>
                                        <td><?php echo $produto['equipe']; ?></td>
                                        <td><?php echo $produto['resposta_1']; ?></td>
                                        <td><?php echo $produto['resposta_2']; ?></td>
                                        <td><?php echo $produto['resposta_3']; ?></td>
                                        <td><?php echo $produto['resposta_4']; ?></td>
                                        <td><?php echo $produto['resposta_5']; ?></td>
                                    </tr>
                                <?php } while ($produto = $execute->fetch_assoc()); ?>
                            </tbody>
                        </table>

                        <nav>
                            <ul class="pagination pagination-md">
                                <li class="page-item">
                                    <a class="page-link" href="tabela.php?pagina=0" aria-label="Anterior"> 
                                        <span aria-hidden="true">Primeira Página</span>
                                    </a>
                                </li>
                                <?php
                                for ($i = 0; $i < $num_paginas; $i++) {
                                    $estilo = "";
                                    if ($pagina == $i)
                                        $estilo = "class=\"active\"";
                                    ?>
                                    <li class="page-item " <?php echo $estilo; ?>><a class="page-link" href="tabela.php?pagina=<?php echo $i; ?>"><?php echo $i + 1; ?></a></li>
                                <?php } ?>
                                <li class="page-item">
                                    <a class="page-link" href="tabela.php?pagina=<?php echo $num_paginas - 1; ?>" aria-label="próximo "> 
                                        <span  aria-hidden="true">Ultima Página</span>
                                       
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    <?php } ?>
                </div>
            </div>
        </div>




        <script src="./js/avaliacao.js"></script>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Custom JavaScript for this theme -->
        <script src="js/scrolling-nav.js"></script>
        <!-- Importando avaliacao.js -->

    </body>

    </html>