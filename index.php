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
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Importando chart.js -->
  <script src="path/to/chartjs/dist/Chart.js"></script>
  <title>DASH - JCR TECNOLOGIA</title>

  <!-- Biblioteca CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- import scrolling-nav.css -->
  <link href="css/scrolling-nav.css" rel="stylesheet">
  <!-- import estilos.css -->
  <link rel="stylesheet" href="./css/meus-estilos.css">

</head>

<body id="page-top">

  <!--  Barra superior de navegação  -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav">
    <div class="container">
      <div class="conteiner-top">
        <img class="imagen-titulo" src="./icones/LOGO.png" height="50px" width="50px" alt="">
        <a class="text-titulo navbar-brand js-scroll-trigger" href="#page-top">DashBoard JCR</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#ggraficos">Grafico Geral</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#graficos">Graficos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#ranking">Ranking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#relatorios">Relatorios</a>
          </li>
        </ul>
      </div>
    </div>
    <div>
      <select class="form-control Text-primary bg-primary mb-2" name="acc-tip" id="acc" style="border:none;">
        <option value="adm">Administrador</option>
        <option value="sup">Supervisor</option>
        <option value="agn">Agente</option>
      </select>
    </div>
  </nav>
  <!-- Fim da barra de navegação -->
  <div style="margin: 70px 70px auto;"></div>
  <!-- Graficos Principal Geral -->
  <div class="card-box card-grafico" id="ggraficos">
    <div>
      <div class="card-header py-3 bg-info">
        <h6 class="m-0 font-weight-bold Text-white " align="center">Desempenho geral da empresa</h6>
      </div>
      <div class="menu-geral">
        <form class="form-inline  centralizar" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <!--Filtros do grafico -->
          <div class="form-check form-check-inline centralizar">
            <input class="form-check-input" type="radio" name="opcaoAv" id="campanha" value="campanha">
            <label class="form-check-label" for="campanha">Campanha</label>
          </div>
          <div class="form-check form-check-inline centralizar">
            <input class="form-check-input" type="radio" name="opcaoAv" id="equipe" value="equipe">
            <label class="form-check-label" for="equipe">Equipe</label>
          </div>
          <div class="form-check form-check-inline centralizar">
            <input class="form-check-input" type="radio" name="opcaoAv" id="agente" value="agente">
            <label class="form-check-label" for="agente">Agente</label>
          </div>
          <div>
            <select class="form-control centralizar" name="" id="">
              <option value="anoAtual" select>Selecione o ano....</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
            </select>
          </div>
          <div class="botao">
            <button type="submit" class="btn btn-primary centralizar">Buscar</button>
          </div>
        </form>
      </div>
      <div  class="graf">
      <canvas id="G-geral" style="max-height:400px; width:100%; display:flex;"></canvas>
            <script>
              var ctx = document.getElementById('G-geral');
              var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                  labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                  datasets: [{
                    fill:false,
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(54, 162, 235, 0.2)',
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(75, 192, 192, 0.2)',
                      'rgba(153, 102, 255, 0.2)',
                      'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                  }]
                },
                options: {
                  scales: {
                    yAxes: [{
                      ticks: {
                        beginAtZero: true
                      }
                    }]
                  }
                }
              });
            </script>
      </div>
    </div>
  </div>
  <!-- Fim do grafico geral -->
  <!-- Div do graficos secundarios  -->
  <div id="graficos" class="bg-light card-box card-grafico">
    <div class="card-grafico">
      <div class="card-header py-3 bg-info">
        <h6 class="m-0 font-weight-bold Text-white " align="center">Graficos</h6>
      </div>
      <!-- Div horizontal superior  -->
      <div style="display:flex; min-height:400px;">
        <!-- Quadrado car  -->
        <div style="padding:10px;  width:50%;" class="card-box">
          <div class="centralizar">
            <h5 class="Text-primary titulo">Ligações</h5>
            <form class="form-inline  centralizar" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <!--Filtros do grafico -->
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="opcaoAv" id="campanha" value="campanha">
                <label class="form-check-label" for="campanha">Campanha</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="opcaoAv" id="equipe" value="equipe">
                <label class="form-check-label" for="equipe">Equipe</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="opcaoAv" id="agente" value="agente">
                <label class="form-check-label" for="agente">Agente</label>
              </div>
              <div class="border-primary" style="display:flex; justify-content:center;  min-width:200px; border-color:">
                <input style="padding:10px; margin: 5px 5px auto;" type="text" name="parametro" class="form-control" placeholder="Pesquisar..." required>
                <button style="margin: 5px 5px auto;" type="submit" class="btn btn-primary">Buscar</button>
              </div>
            </form>
          </div>
          <div class="graf">
          <canvas id="G-na"></canvas>
            <script>
              var ctx = document.getElementById('G-na');
              var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                  labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                  datasets: [{
                    fill:false,
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(54, 162, 235, 0.2)',
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(75, 192, 192, 0.2)',
                      'rgba(153, 102, 255, 0.2)',
                      'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                  }]
                },
                options: {
                  scales: {
                    yAxes: [{
                      ticks: {
                        beginAtZero: true
                      }
                    }]
                  }
                }
              });
            </script>


          </div>
        </div>
        <!-- Fim do card -->
        <!-- Quadrado  car -->
        <div style="padding:10px;  width:50%;" class="card-box">
          <div class="centralizar">
            <h5 class="Text-primary titulo">Interações</h5>
            <form class="form-inline  centralizar" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <!--Filtros do grafico -->
              <div class="form-check form-check-inline centralizar">
                <input class="form-check-input" type="radio" name="opcaoAv" id="campanha" value="campanha">
                <label class="form-check-label" for="campanha">Campanha</label>
              </div>
              <div class="form-check form-check-inline centralizar">
                <input class="form-check-input" type="radio" name="opcaoAv" id="equipe" value="equipe">
                <label class="form-check-label" for="equipe">Equipe</label>
              </div>
              <div class="form-check form-check-inline centralizar">
                <input class="form-check-input" type="radio" name="opcaoAv" id="agente" value="agente">
                <label class="form-check-label" for="agente">Agente</label>
              </div>
              <div class="border-primary">
                <input style="padding:10px; margin: 5px 5px auto;" type="text" name="parametro" class="form-control" placeholder="Pesquisar..." required>
                <button style="margin: 5px 5px auto;" type="submit" class="btn btn-primary">Buscar</button>
              </div>
            </form>
          </div>
          <div class="graf">

            <canvas id="G-interacao"></canvas>
            <script>
              var ctx = document.getElementById('G-interacao');
              var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                  labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                  datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(54, 162, 235, 0.2)',
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(75, 192, 192, 0.2)',
                      'rgba(153, 102, 255, 0.2)',
                      'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                  }]
                },
                options: {
                  scales: {
                    yAxes: [{
                      ticks: {
                        beginAtZero: true
                      }
                    }]
                  }
                }
              });
            </script>
          </div>
        </div>
      </div>
      <!-- Div horizontal superior -->
      <div style="display:flex; min-height:400px;">
        <!-- Quadrado  -->
        <div style="padding:10px;  width:50%;" class="card-box">
          <div class="centralizar">
            <h5 class="Text-primary titulo">Avaliações</h5>
            <form class="form-inline  centralizar" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <!--Filtros do grafico -->
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="opcaoAv" id="campanha" value="campanha">
                <label class="form-check-label" for="campanha">Campanha</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="opcaoAv" id="equipe" value="equipe">
                <label class="form-check-label" for="equipe">Equipe</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="opcaoAv" id="agente" value="agente">
                <label class="form-check-label" for="agente">Agente</label>
              </div>
              <div class="border-primary" style="display:flex; justify-content:center;  min-width:200px; border-color:">
                <input style="padding:10px; margin: 5px 5px auto;" type="text" name="parametro" class="form-control" placeholder="Pesquisar..." required>
                <button style="margin: 5px 5px auto;" type="submit" class="btn btn-primary">Buscar</button>
              </div>
            </form>
          </div>
          <div class="graf">
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
          <!-- Fim do grafico 2 -->
        </div>
        <!-- Quadrado  -->
        <div style="padding:10px;  width:50%;" class="card-box">
          <div class="centralizar">
            <h5 class="Text-primary titulo">GF2</h5>
            <form class="form-inline  centralizar" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <!--Filtros do grafico -->
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="opcaoAv" id="campanha" value="campanha">
                <label class="form-check-label" for="campanha">Campanha</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="opcaoAv" id="equipe" value="equipe">
                <label class="form-check-label" for="equipe">Equipe</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="opcaoAv" id="agente" value="agente">
                <label class="form-check-label" for="agente">Agente</label>
              </div>
              <div class="border-primary" style="display:flex; justify-content:center;  min-width:200px; border-color:">
                <input style="padding:10px; margin: 5px 5px auto;" type="text" name="parametro" class="form-control" placeholder="Pesquisar..." required>
                <button style="margin: 5px 5px auto;" type="submit" class="btn btn-primary">Buscar</button>
              </div>
            </form>
          </div>
          <div class="graf">
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
          <!-- Fim do grafico 2 -->
        </div>
      </div>
    </div>
  </div>
  <!-- fim dos graficos secundarios -->

  <div id="ranking" class="bg-light card-box card-grafico">
    <div class="card-grafico">
      <div class="card-header py-3 bg-info">
        <h6 class="m-0 font-weight-bold Text-white titulo " align="center">Ranking</h6>
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
  </div>
  <!-- inicio da div de relatorios -->
  <div class="card-box card-grafico" id="relatorios">
    <div>
      <div class="card-header py-3 bg-info">
        <h6 class="m-0 font-weight-bold Text-white " align="center">Relatorio</h6>
      </div>
      <div class="menu-geral">
        <form class="form-inline  centralizar" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <!--Filtros do grafico -->
          <div class="form-check form-check-inline centralizar">
            <input class="form-check-input" type="radio" name="opcaoAv" id="campanha" value="campanha">
            <label class="form-check-label" for="campanha">Campanha</label>
          </div>
          <div class="form-check form-check-inline centralizar">
            <input class="form-check-input" type="radio" name="opcaoAv" id="equipe" value="equipe">
            <label class="form-check-label" for="equipe">Equipe</label>
          </div>
          <div class="form-check form-check-inline centralizar">
            <input class="form-check-input" type="radio" name="opcaoAv" id="agente" value="agente">
            <label class="form-check-label" for="agente">Agente</label>
          </div>
          <div>
            <select class="form-control centralizar" name="" id="">
              <option value="anoAtual" select>Selecione o ano....</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
            </select>
          </div>
          <div class="botao">
            <button type="submit" class="btn btn-primary centralizar">Buscar</button>
          </div>
        </form>
      </div>
      <div id="Gf-geral" class="graf"></div>
    </div>
  </div>
  <!-- Termino da div relatorios -->
  <!-- Footer -->
  <footer class="py-5 bg-primary card-grafico">
    <div class="container">
      <p class="m-0 text-center Text-primary">Copyright &copy; JCR tecnologia 2019</p>
    </div>
    <!-- /.container -->
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