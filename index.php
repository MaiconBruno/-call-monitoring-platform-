<?php
//incluindo arquivo.php
include('./php/graficoAvaliacao.php');

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
  <nav class="shadow p-3 mb-5 bg-white rounded navbar navbar-expand-lg navbar-inverse  bg-white fixed-top  border-size" id="mainNav">
    <div class="container">
      <div class="centralizador">

        <a class="text-titulo navbar-brand js-scroll-trigger" href="#page-top">
          <img class="imagen-titulo" src="./icones/LOGO.png" height="50px" width="125px" alt="">
        </a>
      </div>
      <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="text-primary text-size">...</span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto ">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger " href="#g-graficos">Grafico Geral</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger " href="#graficos">Graficos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger " href="#ranking">Ranking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger " href="#relatorio">Relatorios</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Fim da nav do menu fixo no top -->

  <!-- Inicio da div grafico principal -->
  <div id="g-graficos" class="bg-white card-principal">
    <!-- Titulo da sessão -->
    <div class="card-header py-3 bg-info shadow p-3 mb-5">
      <h4 class="d-flex justify-content-center m-0 font-weight-bold text-white ">Grafico Geral</h4>
    </div>
    <!-- Div menu radio -->
    <div class="d-flex justify-content-center menu-card">
      <form class=" form-inline " action=" <?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="d-flex">
          <div class="form-check form-check-inline centralizar">
            <input class="form-check-input" type="radio" name="opcaoAv" id="agente" value="campanha">
            <label class="form-check-label text-primary" for="Agente">Agente</label>
          </div>
          <div class="form-check form-check-inline centralizar">
            <input class="form-check-input" type="radio" name="opcaoAv" id="equipe" value="campanha">
            <label class="form-check-label text-primary" for="Equipe">Equipe</label>
          </div>
          <div class="form-check form-check-inline centralizar">
            <input class="form-check-input" type="radio" name="opcaoAv" id="campanha" value="campanha">
            <label class="form-check-label text-primary" for="campanha">Campanha</label>
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
  <div id="graficos" class="bg-white card-principal">
    <!-- Titulo da sessão -->
    <div class="card-header py-3 bg-info ">
      <h4 class="d-flex justify-content-center m-0 font-weight-bold text-white ">Graficos</h4>
    </div>
    <!-- Div menu superior -->
    <div class="row">

      <!-- CARD 1 SUPERIOR-->
      <div class="col-md-6 col-sm-12 col-xs-12 menu-card  ">
        <div class="card-header py-3 bg-danger">
          <h4 class="d-flex justify-content-center m-0 font-weight-bold text-white ">G1</h4>
        </div>
        <div class="row justify-content-center">
          <form class=" form-inline " action=" <?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="d-flex col-md-12 ">
              <div class="form-check form-check-inline col-md-4 ">
                <input class="form-check-input" type="radio" name="opcaoAv" id="agente" value="campanha">
                <label class="form-check-label text-primary" for="Agente">Agente</label>
              </div>
              <div class="form-check form-check-inline col-md-4">
                <input class="form-check-input" type="radio" name="opcaoAv" id="equipe" value="campanha">
                <label class="form-check-label text-primary" for="Equipe">Equipe</label>
              </div>
              <div class="form-check form-check-inline col-md-4 ">
                <input class="form-check-input" type="radio" name="opcaoAv" id="campanha" value="campanha">
                <label class="form-check-label text-primary" for="campanha">Campanha</label>
              </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
          <input type="text" name="parametro" class="form-control col-md-6 col-sm-6 col-xs-12" placeholder="Pesquisar..." required>
          <button type="submit" class="btn btn-outline-success col-md-3 col-sm- col-xs-12">Pesquisar</button>
        </div>
        </form>

        <div class="col-md-12 col-sm-12 col-xs-12">
          <canvas id="G1"></canvas>
          <script>
            new Chart(document.getElementById("G1"), {
              type: 'bar',
              data: {
                labels: ["Respota1", "Resposta2", "Resposta3", "Resposta4", "Resposta 5"],
                datasets: [{
                  label: "Population (millions)",
                  backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                  data: [30, 50, 25, 15, 12]
                }],
              },
              options: {
                responsive: true,
                title: {
                  display: true,
                  text: 'EMPRY',
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
      <div class="col-md-6 col-sm-12 col-xs-12 menu-card ">
        <div class="card-header py-3 bg-warning">
          <h4 class="d-flex justify-content-center m-0 font-weight-bold text-white ">G2</h4>
        </div>
        <div class="row justify-content-center">
          <form class=" form-inline " action=" <?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="d-flex col-md-12 ">
              <div class="form-check form-check-inline col-md-4 ">
                <input class="form-check-input" type="radio" name="opcaoAv" id="agente" value="campanha">
                <label class="form-check-label text-primary" for="Agente">Agente</label>
              </div>
              <div class="form-check form-check-inline col-md-4">
                <input class="form-check-input" type="radio" name="opcaoAv" id="equipe" value="campanha">
                <label class="form-check-label text-primary" for="Equipe">Equipe</label>
              </div>
              <div class="form-check form-check-inline col-md-4 ">
                <input class="form-check-input" type="radio" name="opcaoAv" id="campanha" value="campanha">
                <label class="form-check-label text-primary" for="campanha">Campanha</label>
              </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
          <input type="text" name="parametro" class="form-control col-md-6 col-sm-6 col-xs-12" placeholder="Pesquisar..." required>
          <button type="submit" class="btn btn-outline-success col-md-3 col-sm- col-xs-12">Pesquisar</button>
        </div>
        </form>

        <div class="col-md-12 col-sm-12 col-xs-12">
          <canvas id="G3"></canvas>
          <script>
            new Chart(document.getElementById("G3"), {
              type: 'bar',
              data: {
                labels: ["Respota1", "Resposta2", "Resposta3", "Resposta4", "Resposta 5"],
                datasets: [{
                  label: "Population (millions)",
                  backgroundColor: ["#3b95cd", "#1e5ee2", "#4cba9f", "#e9c3c9", "#b44650"],
                  data: [30, 50, 25, 15, 12]
                }],
              },
              options: {
                responsive: true,
                title: {
                  display: true,
                  text: 'EMPRY',
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
    <div class="row">

      <div class="col-md-6 col-sm-12 col-xs-12 menu-card ">
        <div class="card-header py-3 bg-success">
          <h4 class="d-flex justify-content-center m-0 font-weight-bold text-white ">G3</h4>
        </div>
        <div class="row justify-content-center">
          <form class=" form-inline " action=" <?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="d-flex col-md-12 ">
              <div class="form-check form-check-inline col-md-4 ">
                <input class="form-check-input" type="radio" name="opcaoAv" id="agente" value="campanha">
                <label class="form-check-label text-primary" for="Agente">Agente</label>
              </div>
              <div class="form-check form-check-inline col-md-4">
                <input class="form-check-input" type="radio" name="opcaoAv" id="equipe" value="campanha">
                <label class="form-check-label text-primary" for="Equipe">Equipe</label>
              </div>
              <div class="form-check form-check-inline col-md-4 ">
                <input class="form-check-input" type="radio" name="opcaoAv" id="campanha" value="campanha">
                <label class="form-check-label text-primary" for="campanha">Campanha</label>
              </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
          <input type="text" name="parametro" class="form-control col-md-6 col-sm-6 col-xs-12" placeholder="Pesquisar..." required>
          <button type="submit" class="btn btn-outline-success col-md-3 col-sm- col-xs-12">Pesquisar</button>
        </div>
        </form>

        <div class="col-md-12 col-sm-12 col-xs-12">
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
                  display: true,
                  text: 'Avaliações respondidas',
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
        <!-- Grafico 2 -->
        <div class="graf">
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
                  display: true,
                  text: 'Avaliações não respondidas',
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
      <!-- FIM DO 1 CARD -->

      <!-- CARD 2 SUPERIOR -->
      <div class="col-md-6 col-sm-12 col-xs-12 menu-card ">
        <!-- Tive que utilizar style nessa div de titulo pq por algum motivo impotar por classe n estava indo -->
        <div class="card-header py-3" style="background-color: rgb(120, 81, 190);">
          <h4 class="d-flex justify-content-center m-0 font-weight-bold text-white ">G4</h4>
        </div>
        <div class="row justify-content-center">
          <form class=" form-inline " action=" <?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="d-flex col-md-12 ">
              <div class="form-check form-check-inline col-md-4 ">
                <input class="form-check-input" type="radio" name="opcaoAv" id="agente" value="campanha">
                <label class="form-check-label text-primary" for="Agente">Agente</label>
              </div>
              <div class="form-check form-check-inline col-md-4">
                <input class="form-check-input" type="radio" name="opcaoAv" id="equipe" value="campanha">
                <label class="form-check-label text-primary" for="Equipe">Equipe</label>
              </div>
              <div class="form-check form-check-inline col-md-4 ">
                <input class="form-check-input" type="radio" name="opcaoAv" id="campanha" value="campanha">
                <label class="form-check-label text-primary" for="campanha">Campanha</label>
              </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
          <input type="text" name="parametro" class="form-control col-md-6 col-sm-6 col-xs-12" placeholder="Pesquisar..." required>
          <button type="submit" class="btn btn-outline-success col-md-3 col-sm- col-xs-12">Pesquisar</button>
        </div>
        </form>

        <div class="col-md-12 col-sm-12 col-xs-12">
          <!-- Aqui vai o grafico -->
          <canvas id="G-ligacao"></canvas>
          <script src="path/to/chartjs/dist/Chart.js"></script>
          <script>
            new Chart(document.getElementById("G-ligacao"), {
              type: 'pie',
              data: {
                labels: ["f1", "f2"],
                datasets: [{
                  label: "Chamadas (millions)",
                  backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                  data: [4, 5]
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
        <!-- Grafico 2 -->
        <div class="graf">
          <canvas id="G-naoAtendidas"></canvas>
          <script src="path/to/chartjs/dist/Chart.js"></script>
          <script>
            new Chart(document.getElementById("G-naoAtendidas"), {
              type: 'pie',
              data: {
                labels: ["f1", "f2"],
                datasets: [{
                  label: "Chamadas (millions)",
                  backgroundColor: ["#FFB1AF", "#FFAF9E", "#FFC9C2", "#FFDED9", "#FFC7E5"],
                  data: [4, 5]
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
      </div>
      <!-- Fim do 2 card -->
    </div>
    <!-- Fim da div do inferior -->
  </div>
  <!-- Fim do titulo da sessão -->

  <!-- div de ranking  -->
  <div id="ranking" class="bg-white card-principal">

    <div class="card-header py-3 bg-info ">
      <h4 class="d-flex justify-content-center m-0 font-weight-bold text-white ">Ranking</h4> <!-- Titulo da sessão -->
    </div>
    <!-- Tabela responsiva -->
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">NOME</th>
              <th scope="col">Equipe</th>
              <th scope="col">Campanha</th>
              <th scope="col">Licações atendidas</th>
              <th scope="col">Chamados Resolvidos</th>
              <th scope="col">Chamados Pendentes</th>
              <th scope="col">Chamados Transferido</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Pedro</td>
              <td>2</td>
              <td>12</td>
              <td>24</td>
              <td>5</td>
              <td>4</td>
              <td>12</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Lucas</td>
              <td>1</td>
              <td>23</td>
              <td>4</td>
              <td>2</td>
              <td>2</td>
              <td>0</td>
            </tr>

          </tbody>
        </table>
      </div>
      <nav>
        <ul class="pagination">
          <li class="page-item"> <a href="seleciona.php?pagina=0" class="page-link" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a> </li>
          <li class="page-link"><a href="seleciona.php?pagina=<?php echo $i; ?>">1</a></li>
          <li class="page-item"> <a href="seleciona.php?pagina=<?php echo $num_paginas - 1; ?>" class="page-link" aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a> </li>
        </ul>
      </nav>
    </div>
  </div>
  <!-- fim div de ranking  -->

  <!-- Relatorio -->
  <div id="relatorio" class="bg-white card-principal">

    <div class="card-header py-3 bg-info ">
      <h4 class="d-flex justify-content-center m-0 font-weight-bold text-white ">Relatorio</h4> <!-- Titulo da sessão -->
    </div>

  </div>
  <!-- FIm do Relatorio -->
  <!-- Rodape -->
  <footer class="d-flex justify-content-center card-header py-3 bg-primary border-rodape" align:center>
    <p class="text-white size"> © Copyright 2019 - JCR Tecnologia Integrada</p>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>