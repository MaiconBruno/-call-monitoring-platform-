<?php 
//incluindo arquivo.php
include ('./php/graficoAvaliacao.php');

?>

<!-- Graficos JS -->
<script type="text/javascript"></script>

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
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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
       <select  class="form-control Text-primary bg-primary mb-2" name="acc-tip" id="acc" style="border:none;">
        <option value="adm">Administrador</option>
        <option value="sup">Supervisor</option>
        <option value="agn">Agente</option>
       </select>
    </div>
  </nav> 
  <!-- Fim da barra de navegação -->

<!-- Graficos Principal Geral -->
  <div id="ggraficos">
  <div style="padding:10px; min-height:150px; width:100%; min-width:600px; margin-top:70px;">
                            <div class="card-box bg-white titulo-card-box card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                  <h5  class="Text-primary titulo">Desempenho geral da empresa</h5>
                                <form class="form-inline display:flex;  justify-content:center; align-items:center; margin:10px 10px; auto;" action=""> 
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
                                       <select class="form-control" name="" id="">
                                            <option value="anoAtual" select>Selecione o ano....</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                       </select>  
                                       <button style="margin: 5px 5px auto;" type="submit" class="btn btn-primary">Buscar</button>
                                    </div>
                                 </form>  
                                  </div>
                            <div  id="Gf-geral" class="graf"></div>
                     </div>
  </div>
  <!-- Fim do grafico geral -->  
 <!-- Div do graficos secundarios  -->
  <div id="graficos" class="bg-light card-box" >
      <div class="card-grafico">
          <div class="card-header py-3 bg-info">
            <h6 class="m-0 font-weight-bold Text-white " align="center">Graficos</h6>
          </div> 
          <!-- Div horizontal superior  -->
                <div style="display:flex; min-height:400px;"> 
                      <!-- Quadrado car  -->
                      <div style="padding:10px; min-height:150px; width:50%; min-width:600px;">
                            <div class="card-box bg-white titulo-card-box card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                  <h5  class="Text-primary titulo">Ligações</h5>
                                <form class="form-inline display:flex;  justify-content:center; align-items:center; margin:10px 10px; auto;" action=""> 
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
                                       <input style="padding:10px; margin: 5px 5px auto;" type="text" name="parametro" class="form-control"  placeholder="Pesquisar..." required>  
                                       <button style="margin: 5px 5px auto;" type="submit" class="btn btn-primary">Buscar</button>
                                    </div>
                                 </form> 
                                  </div>
                            <div class="graf">
                            <canvas id="G-chamadas"></canvas>
                            <script>
                                      var myLineChart = new Chart (document.getElementById("G-chamadas"), {
                                      type: 'line',
                                      data: {
                                          labels: ["Respota1", "Resposta2", "Resposta3", "Resposta4", "Resposta 5"],
                                          datasets: [{
                                          label: "Population (millions)",
                                          backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                                          borderColor: window.chartColors.red,
                                          fill: false,
                                          data: [1,2,5,6,3]
                                        }],
                                      },
                                      options: {
                                        animation: {
                                            duration: 0 // general animation time
                                        },
                                        hover: {
                                            animationDuration: 0 // duration of animations when hovering an item
                                        },
                                        responsiveAnimationDuration: 0 // animation duration after a resize
                                    }

                                  });

                                  
                              </script>
                            
                            
                            </div>
                     </div>
                     <!-- Fim do card -->
                       <!-- Quadrado  car -->
                       <div style="padding:10px; min-height:150px; width:50%; min-width:600px">
                            <div class="card-box bg-white titulo-card-box card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                  <h5  class="Text-primary titulo">Interações</h5>
                                <form class="form-inline display:flex;  justify-content:center; align-items:center; margin:10px 10px; auto;" action=""> 
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
                                       <input style="padding:10px; margin: 5px 5px auto;" type="text" name="parametro" class="form-control"  placeholder="Pesquisar..." required>  
                                       <button style="margin: 5px 5px auto;" type="submit" class="btn btn-primary">Buscar</button>
                                       </div>
                                 </form> 
                                  </div>
                            <div id="Gf_Interacao" class="graf"></div>
                     </div>
                </div> 
        <!-- Div horizontal superior -->
                <div style="display:flex; min-height:400px;"> 
                     <!-- Quadrado  -->
                     <div style="padding:10px; min-height:150px; width:50%; min-width:600px">
                            <div class="card-box bg-white titulo-card-box card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                  <h5  class="Text-primary titulo">Avaliações</h5>
                                <form class="form-inline display:flex;  justify-content:center; align-items:center; margin:10px 10px; auto;" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
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
                                       <input style="padding:10px; margin: 5px 5px auto;" type="text" name="parametro" class="form-control"  placeholder="Pesquisar..." required>  
                                       <button style="margin: 5px 5px auto;" type="submit" class="btn btn-primary">Buscar</button>
                                       </div>
                                 </form> 
                                  </div>
                            <div class="graf">

                            <canvas id="G-avaliacao"></canvas>
                                  
                                  <script>
<<<<<<< HEAD
                                      new Chart(document.getElementById("G-avaliacao"), {
                                      type: 'doughnut',
                                      data: {
                                          labels: ["Respota1", "Resposta2", "Resposta3", "Resposta4", "Resposta 5"],
                                          datasets: [{
                                          label: "Population (millions)",
                                          backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                                          data: [  <?php echo $resposta1 ?>, <?php echo $resposta1 ?>, <?php echo $resposta1 ?>,<?php echo $resposta4 ?>, <?php echo $resposta5 ?>]
                                        }],
                                      },
                                      
=======
                                      new Chart(document.getElementById("pie-chart"), {
                                        type: 'pie',
                                        data: {
                                            labels: ["Respota1", "Resposta2", "Resposta3", "Resposta4", "Resposta 5"],
                                            datasets: [{
                                            label: "Quantidade de respostas",
                                            backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                                            borderColor: "#000000",          
                                            borderWidth: 1,
                                            data: [  <?php echo $resposta1 ?>, <?php echo $resposta2 ?>, <?php echo $resposta3 ?>,<?php echo $resposta4 ?>, <?php echo $resposta5 ?>]
                                            }]
                                        },
>>>>>>> 1b2a899ee5f36d5ed16bac2aaa7a1ade5c0ef4b8
                                        options: {
                                            responsive: true,
                                                title: {
                                                    display: true,
                                                    text: 'Quantidade de respostas por perguntas',
                                                },
                                                animation:{
                                                    easing: "easeInQuad",
                                                    animateScale: true,
                                                    animateRotate: true
                                                }
                                        }
                                  });
                              </script>

                            </div>
                     </div>
                     <!-- Quadrado  -->
                     <div style="padding:10px; min-height:150px; width:50%; min-width:600px">
                            <div class="card-box bg-white titulo-card-box card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                  <h5  class="Text-primary titulo">GF2</h5>
                                <form class="form-inline display:flex;  justify-content:center; align-items:center; margin:10px 10px; auto;" action=""> 
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
                                       <input style="padding:10px; margin: 5px 5px auto;" type="text" name="parametro" class="form-control"  placeholder="Pesquisar..." required>  
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
                                          data: [  4, 5]
                                        }],
                                      },
                                      
                                        options: {
                                          animation:{
                                              easing: "easeInOutCirc", //easeOutBack,easeInOutCirc,easeOutCirc,easeOutExpo,easeInOutQuint,easeInQuint
                                              animateScale: true,
                                              animateRotate: true
                                          }
                                          }

                                  });
                              </script>
                            
                            </div>
                     </div>
                </div>
              
        </div>
  </div>
<!-- fim dos graficos secundarios -->

  <div id="ranking" class="bg-light">
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
                  <th scope="col">EMAIL</th>
                  <th scope="col">ASSUNTO</th>
                  <th scope="col">MENSAGEM</th>
                </tr>
              </thead>
              <tbody>
              <tr>
                  <td>tag php</td>
                  <td>tag php</td>
                  <td>tag php</td>
                  <td>tag php</td>
                  <td>tag php</td>
                </tr>

              </tbody>
            </table>
          </div>
          <nav >
            <ul class="pagination">
              <li class="page-item"> <a href="seleciona.php?pagina=0" class="page-link" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a> </li>
              <li class="page-link"><a href="seleciona.php?pagina=<?php echo $i; ?>">1</a></li>
              <li class="page-item"> <a href="seleciona.php?pagina=<?php echo $num_paginas-1; ?>" class="page-link" aria-label="Next"> <span  aria-hidden="true">&raquo;</span> </a> </li>
            </ul>
          </nav></div>
         
        </div>
  </div>

  <div id="relatorios" class="bg-light">
          <div style="padding:10px; min-height:150px; width:100%; min-width:600px; margin-top:70px;">
                            <div class="card-box bg-white titulo-card-box card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                  <h5  class="Text-primary">Relatorio</h5>
                                <form class="form-inline display:flex;  justify-content:center; align-items:center; margin:10px 10px; auto;" action=""> 
                                    <!--Filtros do grafico -->
                                <select style="display:flex; padding:5px; margin: 5px 5px auto; " class="form-control " style="min-width:150px; margin-right:30px;" name="" id="">
                                       <option value="">MES</option>
                                       <option value="">EQUIPE</option>
                                      
                                     </select>
                                     <div class="border-primary" style="display:flex; justify-content:center;  min-width:200px; border-color:">  
                                       <input style="padding:10px; margin: 5px 5px auto;" type="text" class="form-control" id="validationCustom02" placeholder="Pesquisar..." value="" required>  
                                       <button style="margin: 5px 5px auto;" type="button" class="btn btn-primary">Buscar</button>
                                       </div>
                                 </form>  
                                  </div>
                            <div  id="Gf-geral" style="width:100%; padding:15px; height:400px; background-color:white;"></div>
                     </div>
  </div>

  <!-- Footer -->
  <footer class="py-5 bg-primary">
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