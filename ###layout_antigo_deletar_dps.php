
<?php
//incluindo arquivo.php
include('./php/graficoAvaliacao.php');
include('./php/tabela_av.php');
include('./php/tabelaavaliacao.php');
//include('../php/tabelaavaliacao.php')
?>

<!-- Graficos JS -->
<script type="text/javascript"></script>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <link rel="stylesheet" href="./css/style.css">
  <link href="css/sb-admin.css" rel="stylesheet">
  <!-- Importando chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <!-- Importando bliblioteca da google Charts so chamar 1x-->
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

  <!-- import scrolling-nav.css -->
  <link href="css/scrolling-nav.css" rel="stylesheet">
  <!-- import estilos.css -->


</head>

<body id="page-back" class="page-back">
  <!-- Nav menu do topo -->
  <nav class=" shadow p-3 mb-5 bg-white rounded navbar navbar-expand-lg navbar-inverse  bg-white fixed-top  border-size-top" id="mainNav">
    <div class="container ">
      <div class="centralizador ">
        <a class="text-titulo navbar-brand js-scroll-trigger" href="#inicio">
          <img class="imagen-titulo" src="./icones/LOGO.png" height="80px" width="185px" alt="">
        </a>
      </div>
      <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class=" text-size">...</span>
      </button>
      <div class="collapse navbar-collapse  card-grafico" id="navbarResponsive">
        <ul class="navbar-nav ml-auto ">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-menu text-secondary" href="#g-graficos">Grafico Geral</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-menu text-secondary" href="#inicio">Graficos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-menu text-secondary " href="#tabelas">Tabelas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-menu  text-secondary" href="#relatorio">Relatorios</a>
          </li>
          <div class="dropdown">
            <span class="nav-link  text-menu  text-primary" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Usuario</span>
            <ul class="dropdown-menu " aria-labelledby="dropdownMenu1">
              <li class="centralizador"><a class="text-dark" href="./PaginaDeCadastro.php"><?php echo $_SESSION['usuarioNome']; ?></a></li>
              <li class="centralizador"><a class="text-dark" href="./PaginaEdicao.php"><?php
              $acesso = '';
              if ($_SESSION['usuarioNiveisAcessoId'] == 1) {
                $acesso = 'ADMINISTRADOR';
              } else if ($_SESSION['usuarioNiveisAcessoId'] == 2) {
                $acesso = 'AGENTE';
              } else if ($_SESSION['usuarioNiveisAcessoId'] == 3) {
                $acesso = SUPERVISOR;
              }
              echo $acesso;
              ?></a></li>
               <li class="centralizador"><a class="text-dark" href="./php/sair.php">Sair</a></li>
            </ul>
          </div>
        </ul>
      </div>
    </div>
    <br>
    <div class="top-margin col-md-1 col-sm-12 col-xs-12">
      <h4 class="text-primary size3">Tipo de conta:</h4>
      <h4 class="text-primary size2">Administrador</h4>
    </div>
  </nav>


  <!-- Fim da nav do menu fixo no top -->

  <!-- Inicio da div grafico principal -->
  <div id="g-graficos" class="bg-white card-principal ">
    <!-- Titulo da sessão -->
    <div class="py-3 border-size">
      <h4 class="d-flex justify-content-center m-0 font-weight-bold text-secondary ">Graficos</h4>
    </div>
    <!-- Div menu radio -->
    <div class="d-flex justify-content-center menu-card">
      <form class=" form-inline " action=" <?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="d-flex ">
          <div class="form-check form-check-inline centralizar">
            <input class="form-check-input" type="radio" name="opcaoAv" id="agente" value="campanha">
            <label class="form-check-label " for="Agente">Agente</label>
          </div>
          <div class="form-check form-check-inline centralizar">
            <input class="form-check-input" type="radio" name="opcaoAv" id="equipe" value="campanha">
            <label class="form-check-label " for="Equipe">Equipe</label>
          </div>
          <div class="form-check form-check-inline centralizar">
            <input class="form-check-input" type="radio" name="opcaoAv" id="campanha" value="campanha">
            <label class="form-check-label " for="campanha">Campanha</label>
          </div>
        </div>
        <button type="submit" class="btn btn-outline-success">Pesquisar</button>
      </form>
    </div>
    <!-- Fim div menu radio -->
    <!-- Inicio da div do grafico -->
    <div class="container d-flex justify-content-center ">
      <canvas id="G_ligacao"></canvas>
      <script src="path/to/chartjs/dist/Chart.js"></script>
      <script>
        new Chart(document.getElementById("G_ligacao"), {
          type: 'line',
          data: {
            labels: ["f1", "f2"],
            datasets: [{
              label: "Chamadas (millions)",
              backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
              data: [4, 5],
              fill: false,
              borderColor: "rgb(75, 192, 192)",
            }],
          },
          options: {
            animation: {
              easing: "easeInOutCirc", //easeOutBack,easeInOutCirc,easeOutCirc,easeOutExpo,easeInOutQuint,easeInQuint
              animateScale: true,
              animateRotate: true
            }
          }
        });
      </script>
    </div>
    <!-- Fim da div do grafico -->
  </div>
  <!-- Fim do titulo da sessão -->
  <!-- Fim da div grafico principal  -->

  <!-- Inicio da div grafico principal -->
  <div id="inicio" class="bg-white card-principal ">
    <!-- Titulo da sessão -->

    <!-- Div menu superior -->
    <div class="row">

      <!-- CARD 1 SUPERIOR-->
      <div class="col-md-6 col-sm-12 col-xs-12  ">
        <div class="py-3 border-size">
          <h4 class="d-flex justify-content-center m-0 font-weight-bold text-secondary ">LIGAÇÕES</h4>
        </div>
        <div class="row centralizador select-margin">
          <form class=" form-inline " action=" <?php echo $_SERVER['PHP_SELF']; ?>">

            <select class="form-control col-md-5 col-sm-4 col-xs-4" name="liga-ano" id="liga-date">
              <option value="">JANEIRO</option>
              <option value="">FEREVEIRO</option>
            </select>
            <select class="form-control col-md-4 col-sm-4 col-xs-4" name="liga-ano" id="liga-date">
              <option value="">2019</option>
              <option value="">2020</option>
            </select>
            <button type="submit" class="btn btn-outline-success col-md-3 col-sm-4 col-xs-4">Buscar</button>
        </div>
        </form>

        <div class="col-md-12 col-sm-12 col-xs-12 size-card">
          <canvas id="G-ligacao"></canvas>
          <script>
            new Chart(document.getElementById("G-ligacao"), {
              type: 'doughnut',
              data: {
                labels: ["Atendidas", "N/Atendidas"],
                datasets: [{
                  label: "Population (millions)",
                  backgroundColor: ["#3b95cd", "#1e5ee2", "#4cba9f", "#e9c3c9", "#b44650"],
                  data: [30, 50]
                }],
              },
              options: {
                responsive: true,
                title: {
                  display: false,
                },
                animation: {
                  easing: "easeInQuad",
                  animateScale: true,
                  animateRotate: true
                }
              }
            });
          </script>
        </div>
      </div>
      <!-- FIM DO 1 CARD -->

      <!-- CARD 2 SUPERIOR -->
      <div class="col-md-6 col-sm-12 col-xs-12   ">
        <div class="py-3 border-size">
          <h4 class="d-flex justify-content-center m-0 font-weight-bold text-secondary ">RANKING DE INTERAÇÃO</h4>
        </div>
        <div class="row justify-content-center">
          <form class=" form-inline " action=" <?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="d-flex col-md-12 menu-card ">
              <div class="form-check form-check-inline col-md-4 ">
                <input class="form-check-input" type="radio" name="opcaoAv" id="agente" value="campanha">
                <label class="form-check-label " for="Agente">Agente</label>
              </div>
              <div class="form-check form-check-inline col-md-4">
                <input class="form-check-input" type="radio" name="opcaoAv" id="equipe" value="campanha">
                <label class="form-check-label " for="Equipe">Equipe</label>
              </div>
              <div class="form-check form-check-inline col-md-4 ">
                <input class="form-check-input" type="radio" name="opcaoAv" id="campanha" value="campanha">
                <label class="form-check-label " for="campanha">Campanha</label>
              </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
          <input type="text" name="parametro" class="form-control col-md-6 col-sm-6 col-xs-12" placeholder="Pesquisar..." required>
          <button type="submit" class="btn btn-outline-success col-md-3 col-sm- col-xs-12">Pesquisar</button>
        </div>
        </form>

        <div class="col-md-12 col-sm-12 col-xs-12 size-card">
          <canvas id="G-interacao"></canvas>
          <script>
            new Chart(document.getElementById("G-interacao"), {
              type: 'horizontalBar',
              data: {
                labels: ["Facebook", "Email", "Chat", "WhatsApp", "Telefone"],
                datasets: [{
                  label: "Population (millions)",
                  backgroundColor: ["#3b95cd", "#1e5ee2", "#4cba9f", "#e9c3c9", "#b44650"],
                  data: [30, 50, 25, 15, 12]
                }],
              },
              options: {
                responsive: true,
                title: {
                  display: false,
                },
                animation: {
                  easing: "easeInQuad",
                  animateScale: true,
                  animateRotate: true
                }
              }
            });
          </script>
        </div>
      </div>
      <!-- Fim do 2 card -->

    </div>
    <!-- Fim da div do superior -->
    <!-- Div menu inferior -->
    <div class="row ">

      <div class="col-md-6 col-sm-12 col-xs-12 menu-card ">
        <div class="py-3 border-size">
          <h4 class="d-flex justify-content-center m-0 font-weight-bold text-secondary ">AVALIADAS</h4>
        </div>
        <div class="row justify-content-center">
          <form class=" form-inline " action=" <?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="d-flex col-md-12 menu-card ">
              <div class="form-check form-check-inline col-md-4 ">
                <input class="form-check-input" type="radio" name="opcaoAv" id="agente" value="agente">
                <label class="form-check-label " for="Agente">Agente</label>
              </div>
              <div class="form-check form-check-inline col-md-4">
                <input class="form-check-input" type="radio" name="opcaoAv" id="equipe" value="equipe">
                <label class="form-check-label " for="Equipe">Equipe</label>
              </div>
              <div class="form-check form-check-inline col-md-4 ">
                <input class="form-check-input" type="radio" name="opcaoAv" id="campanha" value="campanha">
                <label class="form-check-label " for="campanha">Campanha</label>
              </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
          <input type="text" name="parametro" class="form-control col-md-6 col-sm-6 col-xs-12" placeholder="Pesquisar..." required>
          <button type="submit" class="btn btn-outline-success col-md-3 col-sm- col-xs-12">Pesquisar</button>
        </div>
        </form>

        <div class="col-md-12 col-sm-12 col-xs-12 size-card">
          <canvas id="G-avaliacao"></canvas>
          <script>
            new Chart(document.getElementById("G-avaliacao"), {
              type: 'doughnut',
              data: {
                labels: ["Respota1", "Resposta2", "Resposta3", "Resposta4", "Resposta 5"],
                datasets: [{
                  label: "Population (millions)",
                  backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                  data: [<?php echo $resposta1 ?>, <?php echo $resposta1 ?>, <?php echo $resposta1 ?>, <?php echo $resposta4 ?>, <?php echo $resposta5 ?>]
                }],
              },
              options: {
                responsive: true,
                title: {
                  display: false,
                },
                animation: {
                  easing: "easeInQuad",
                  animateScale: true,
                  animateRotate: true
                }
              }
            });
          </script>
        </div>

      </div>
      <!-- FIM DO 1 CARD -->
      <!-- CARD 2 -->
      <div class="col-md-6 col-sm-12 col-xs-12 menu-card   ">
        <div class="py-3 border-size">
          <h4 class="d-flex justify-content-center m-0 font-weight-bold text-secondary ">NÃO AVALIADAS</h4>
        </div>
        <div class="row justify-content-center">
          <form class=" form-inline " action=" <?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="d-flex col-md-12 menu-card ">
              <div class="form-check form-check-inline col-md-4 ">
                <input class="form-check-input" type="radio" name="opcaoAv" id="agente" value="campanha">
                <label class="form-check-label " for="Agente">Agente</label>
              </div>
              <div class="form-check form-check-inline col-md-4">
                <input class="form-check-input" type="radio" name="opcaoAv" id="equipe" value="campanha">
                <label class="form-check-label " for="Equipe">Equipe</label>
              </div>
              <div class="form-check form-check-inline col-md-4 ">
                <input class="form-check-input" type="radio" name="opcaoAv" id="campanha" value="campanha">
                <label class="form-check-label " for="campanha">Campanha</label>
              </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
          <input type="text" name="parametro" class="form-control col-md-6 col-sm-6 col-xs-12" placeholder="Pesquisar..." required>
          <button type="submit" class="btn btn-outline-success col-md-3 col-sm- col-xs-12">Pesquisar</button>
        </div>
        </form>

        <div class="col-md-12 col-sm-12 col-xs-12">
          <canvas id="G-naoRespondidas"></canvas>
          <script src="path/to/chartjs/dist/Chart.js"></script>
          <script>
            new Chart(document.getElementById("G-naoRespondidas"), {
              type: 'doughnut',
              data: {
                labels: ["Respota1", "Resposta2", "Resposta3", "Resposta4", "Resposta 5"],
                datasets: [{
                  label: "Chamadas (millions)",
                  backgroundColor: ["#FFB1AF", "#FFAF9E", "#FFC9C2", "#FFDED9", "#FFC7E5"],
                  data: [4, 5, 6, 3, 2]
                }],
              },
              options: {
                title: {
                  display: false,
                },
                animation: {
                  easing: "easeInOutCirc", //easeOutBack,easeInOutCirc,easeOutCirc,easeOutExpo,easeInOutQuint,easeInQuint
                  animateScale: true,
                  animateRotate: true
                }
              }
            });
          </script>
        </div>
      </div>
      <!-- FIM DO CARD 2 -->
    </div>

    <div class="bg-white card-principal " id="tabelas">

      <div class="py-3 border-size">
        <h4 class="d-flex justify-content-center m-0 font-weight-bold text-secondary ">TABELA</h4>
      </div>

      <div class="row">
        <!-- Div Esquerda que aloca 2 graficos -->
        <div class="col-md-12 col-sm-12 col-xs-12 ">
          <!-- Card principal -->
          <div class=" text-dark col-md-12 col-sm-12 com-xs-12 ">
            <div>
              <form id="idFormulario" action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
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
                  <div class=" d-flex col-md-12 col-sm-12 col-xs-12  justify-content-center align-items-center form-inline">

                    <div class="radio d-flex justify-content-center align-items-center" id="divCampoBusca">
                      <label class="radio" for="campoBusca" id="labelCampoBusca">Campo Busca:</label>
                      <input type="text" class="form-control" onkeyup="habilitaCampoCampanha()" name="parametro" id="campoBusca" disabled="true">
                    </div>


                    <div class="radio d-flex justify-content-center align-items-center" id="divCampanhaEquipe">
                      <label class="radio" for="campoCampanha">Campanha:</label>
                      <input type="text" class="form-control" onkeyup="habilitaCampoEquipe()" name="campanha" id="campoCampanha" disabled="true">

                      <label class="radio" for="campoEquipe">Equipe:</label>
                      <input type="text" class="form-control" name="equipe" id="campoEquipe" disabled="true">
                    </div>

                    <div class="col-md-12 col-sm-12 com-xs-12">
                      <div class="radio d-flex justify-content-center align-items-center" id="divData">
                        <label class="radio" for="campoDataInicial" id="labelDataInicial">Data Inical:</label>
                        <input type="date" class="form-control" name="dataInicial" id="campoDataInicial" disabled="true">

                        <label class="radio" for="campoDataFinal" id="labelDataFinal">Data Final:</label>
                        <input type="date" class="form-control" onmouseleave="habilitaCampoCampanhaData()" name="dataFinal" id="campoDataFinal" disabled="true">
                      </div>
                    </div>
                    <div class="radio d-flex justify-content-center align-items-center container ">
                      <input class="btn btn-primary botão" type="submit" value="Buscar" id="btnBuscar" disabled="true">
                      <input class="btn btn-danger botão" onclick="limpezaCampos();" type="button" value="Limpar">
                    </div>
                  </div>
                  <!-- FIm do campos text/date -->
                </div>
              </form>
              <div class="col-md-12 col-sm-12 col-xs-12">

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
                    },
                    columnDefs: [{
                      type: 'date-eu',
                      targets: 4
                    }]
                  });
                });
              </script>
            </div>
          </div>
          <!-- Fim do card principal -->
        </div>
      </div>

    </div>

    <!-- Relatorio -->
    <div class="row" id="relatorio">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="py-3 border-size">
          <h4 class="d-flex justify-content-center m-0 font-weight-bold text-secondary ">RELATORIOS</h4>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12  " style="min-height:450px;">
        </div>
      </div>
    </div>
    <!-- FIm do Relatorio -->
    <!-- Rodape -->
    <footer class="bg-primary border-rodape">
      <h5 class="text-white size"> © Copyright 2019 - JCR Tecnologia Integrada</h5>
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