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
            <a class="nav-link js-scroll-trigger " href="#inicio">Graficos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger " href="#tabelas">Tabelas</a>
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
  <div id="g-graficos" class="bg-white card-principal ">
    <!-- Titulo da sessão -->
    <div class="bg-titulo py-3">
      <h4 class="d-flex justify-content-center m-0 font-weight-bold text-white ">Grafico Geral</h4>
    </div>
    <!-- Div menu radio -->
    <div class="d-flex justify-content-center menu-card">
      <form class=" form-inline " action=" <?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="d-flex ">
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
  <div id="inicio" class="bg-white card-principal ">
    <!-- Titulo da sessão -->
    <div class="bg-titulo py-3">
      <h4 class="d-flex justify-content-center m-0 font-weight-bold text-white ">Graficos</h4>
    </div>
    <!-- Div menu superior -->
    <div class="row">

      <!-- CARD 1 SUPERIOR-->
      <div class="col-md-6 col-sm-12 col-xs-12 card-secundario  ">
        <div class="py-3 bg-titulo-card">
          <h4 class="d-flex justify-content-center m-0 font-weight-bold text-white ">LIGAÇÕES</h4>
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
      <div class="col-md-6 col-sm-12 col-xs-12   ">
        <div class="py-3 bg-titulo-card">
          <h4 class="d-flex justify-content-center m-0 font-weight-bold text-white ">TIPO DE INTERAÇÃO</h4>
        </div>
        <div class="row justify-content-center">
          <form class=" form-inline " action=" <?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="d-flex col-md-12 menu-card ">
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
    <div class="row ">

      <div class="col-md-6 col-sm-12 col-xs-12 menu-card card-secundario ">
        <div class="py-3 bg-titulo-card">
          <h4 class="d-flex justify-content-center m-0 font-weight-bold text-white ">AVALIADAS</h4>
        </div>
        <div class="row justify-content-center">
          <form class=" form-inline " action=" <?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="d-flex col-md-12 menu-card ">
              <div class="form-check form-check-inline col-md-4 ">
                <input class="form-check-input" type="radio" name="opcaoAv" id="agente" value="agente">
                <label class="form-check-label text-primary" for="Agente">Agente</label>
              </div>
              <div class="form-check form-check-inline col-md-4">
                <input class="form-check-input" type="radio" name="opcaoAv" id="equipe" value="equipe">
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

      </div>
      <!-- FIM DO 1 CARD -->
      <!-- CARD 2 -->
      <div class="col-md-6 col-sm-12 col-xs-12 menu-card card-secundario  ">
        <div class="py-3 bg-titulo-card">
          <h4 class="d-flex justify-content-center m-0 font-weight-bold text-white ">NÃO AVALIADAS</h4>
        </div>
        <div class="row justify-content-center">
          <form class=" form-inline " action=" <?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="d-flex col-md-12 menu-card ">
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
      <!-- FIM DO CARD 2 -->
    </div>

    <div class="bg-white card-principal " id="tabelas">

      <div class="bg-titulo py-3 col-md-12 col-sm-12 col-xs-12">
        <h4 class="d-flex justify-content-center m-0 font-weight-bold text-white ">Tabelas</h4>
      </div>

      <div class="row">

        <div class="col-md-7 col-sm-12 col-xs-12 borda" style="min-height:400px;">

          <div class="borda col-md-12 col-sm-12 col-xs-12" style="min-height:450px;"></div>
          <div class="borda col-md-12 col-sm-12 col-xs-12" style="min-height:450px;"></div>

        </div>

        <div class="col-md-5 col-sm-12 col-xs-12 borda" style="min-height:400px;">

          <div class="borda col-md-12 col-sm-12 col-xs-12" style="min-height:300px;"></div>
          <div class="borda col-md-12 col-sm-12 col-xs-12" style="min-height:300px;"></div>
          <div class="borda col-md-12 col-sm-12 col-xs-12" style="min-height:300px;"></div>

        </div>
      </div>

    </div>

    <!-- Relatorio -->
    <div class="row" id="relatorio">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="bg-titulo py-3">
          <h4 class="d-flex justify-content-center m-0 font-weight-bold text-white ">Relatorio</h4>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 borda " style="min-height:450px;">

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

</body>

</html>