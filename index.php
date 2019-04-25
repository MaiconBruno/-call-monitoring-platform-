<?php 

include ('./php/graficoAv.php');

?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Nome');
        data.addColumn('number', 'Maior Nota');
        data.addColumn('number', 'Menor Nota');
        data.addColumn('boolean', 'Status');
        data.addRows([
          ['Mike',  {v: 10000, f: '10'},{v: 10000, f: '10'}, true],
          ['Jim',   {v:8000,   f: '20'},{v: 10000, f: '10'},  false],
          ['Alice', {v: 12500, f: '2'},{v: 10000, f: '10'}, true],
          ['Bob',   {v: 7000,  f: '5'},{v: 10000, f: '10'}, true]
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
      }
    </script>
<!-- Graficos JS -->
<script type="text/javascript">
 function GraficoGeral() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Mes', 'Nota 1', 'Nota 2', 'Nota 3','Nota 4','Nota 5'],
          ['Janeiro', 1000, 400, 200, 200, 200],
          ['Fevereiro', 1170, 460, 250, 200, 200],
          ['Março', 660, 1120, 300, 200, 200],
          ['Abril', 1030, 540, 350, 200, 200]
        ]);

        var options = {
          chart: {
          
          }
        };

        var chart = new google.charts.Bar(document.getElementById('Gf-geral'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }


function GraficoInteracao() {
  var data = google.visualization.arrayToDataTable([
    ['Plataformas', 'Facebook','Chat', 'Skype', 'WhatsApp', 'Email'],
    ['Tipo de Interações', 300, 100,30,40,60],   
  ]);

  var options = {
    chart: {
     
    }
  };

  var chart = new google.charts.Bar(document.getElementById('Gf_Interacao'));
  chart.draw(data, google.charts.Bar.convertOptions(options));
}

function GraficoCam() {
// Create the data table.
var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Copper", 8.94, "#b87333"],
        ["Silver", 10.49, "silver"],
        ["Gold", 19.30, "gold"],
        ["Platinum", 21.45, "color: #e5e4e2"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Density of Precious Metals, in g/cm^3",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("Gf-cam"));
      chart.draw(view, options);
  }

    function GraficoPizza() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Respota 1',     <?php echo $resposta1 ?>],
          ['Respota 2',     <?php echo $resposta2 ?>],
          ['Respota 3',     <?php echo $resposta3 ?>],
          ['Respota 4',     <?php echo $resposta4 ?>],
          ['Respota 5',     <?php echo $resposta5 ?>]
        ]);

        var options = {
          title: 'Total de avalição da empresa',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('Gf-pizza'));
        chart.draw(data, options);
      }
      
   

      function GraficoPizza2() {
        var data = google.visualization.arrayToDataTable([
          ['Language', 'Speakers (in millions)'],
          ['Assamese', 13], ['Bengali', 83], ['Bodo', 1.4],
          ['Dogri', 2.3], ['Gujarati', 46], ['Hindi', 300],
          ['Kannada', 38], ['Kashmiri', 5.5], ['Konkani', 5],
          ['Maithili', 20], ['Malayalam', 33], ['Manipuri', 1.5],
          ['Marathi', 72], ['Nepali', 2.9], ['Oriya', 33],
          ['Punjabi', 29], ['Sanskrit', 0.01], ['Santhali', 6.5],
          ['Sindhi', 2.5], ['Tamil', 61], ['Telugu', 74], ['Urdu', 52]
        ]);

        var options = {
          title: 'Indian Language Use',
          legend: 'none',
          pieSliceText: 'label',
          slices: {  4: {offset: 0.2},
                    12: {offset: 0.3},
                    14: {offset: 0.4},
                    15: {offset: 0.5},
          },
        };

        var chart = new google.visualization.PieChart(document.getElementById('Gf-pizza2'));
        chart.draw(data, options);
      }
</script>
<!-- Fim do Script -->

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="./css/style.css">
  <link href="css/sb-admin.css" rel="stylesheet">
  <!-- Importando chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <!-- Importando bliblioteca da google Charts so chamar 1x-->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <!-- Esse Scripts abaixo cada um faz referencia a o seu tipo de grafico e parametros passados nas function
    foi a unica maneira que encontrei de chamar mais de 1 grafico na mesma tela.  -->
  <!-- Estanciando os graficos -->
  <script type="text/javascript">
    google.charts.load('current', { packages: ['corechart'] })
    google.charts.setOnLoadCallback(GraficoInteracao)
  </script>
  <script type="text/javascript">
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(GraficoGeral);
  </script>
  <script type="text/javascript">
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(GraficoCam);
  </script>
   <script type="text/javascript">
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(GraficoPizza);
  </script>
    <script type="text/javascript">
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(GraficoPizza2);
  </script>

  <script type="text/javascript">
    google.charts.load('current', { 'packages': ['bar'] });
  </script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

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
                                  <h5  class="Text-primary titulo">Avaliações</h5>
                                <form class="form-inline display:flex;  justify-content:center; align-items:center; margin:10px 10px; auto;" action=""> 
                                    <!--Filtros do grafico -->
                                <select style="display:flex; padding:5px; margin: 5px 5px auto; " class="form-control " style="min-width:150px; margin-right:30px;" name="" id="">
                                       <option value="">AGENTE</option>
                                       <option value="">EQUIPE</option>
                                       <option value="">CAMPANHA</option>
                                     </select>
                                     <div class="border-primary" style="display:flex; justify-content:center;  min-width:200px; border-color:">  
                                       <input style="padding:10px; margin: 5px 5px auto;" type="text" class="form-control" id="validationCustom02" placeholder="Pesquisar..." value="" required>  
                                       <button style="margin: 5px 5px auto;" type="button" class="btn btn-primary">Buscar</button>
                                       </div>
                                 </form> 
                                  </div>
                            <div id="Gf-cam" class="graf"></div>
                     </div>
                     <!-- Fim do card -->
                       <!-- Quadrado  car -->
                       <div style="padding:10px; min-height:150px; width:50%; min-width:600px">
                            <div class="card-box bg-white titulo-card-box card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                  <h5  class="Text-primary titulo">Interações</h5>
                                <form class="form-inline display:flex;  justify-content:center; align-items:center; margin:10px 10px; auto;" action=""> 
                                    <!--Filtros do grafico -->
                                <select style="display:flex; padding:5px; margin: 5px 5px auto; " class="form-control " style="min-width:150px; margin-right:30px;" name="" id="">
                                       <option value="">AGENTE</option>
                                       <option value="">EQUIPE</option>
                                       <option value="">CAMPANHA</option>
                                     </select>
                                     <div class="border-primary" style="display:flex; justify-content:center;  min-width:200px; border-color:">  
                                       <input style="padding:10px; margin: 5px 5px auto;" type="text" class="form-control" id="validationCustom02" placeholder="Pesquisar..." value="" required>  
                                       <button style="margin: 5px 5px auto;" type="button" class="btn btn-primary">Buscar</button>
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

                            <canvas id="pie-chart"></canvas>
                              <script src="path/to/chartjs/dist/Chart.js"></script>
                              <script>
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
                                    options: {
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
                                  <h5  class="Text-primary titulo">Avaliações</h5>
                                <form class="form-inline display:flex;  justify-content:center; align-items:center; margin:10px 10px; auto;" action=""> 
                                    <!--Filtros do grafico -->
                                <select style="display:flex; padding:5px; margin: 5px 5px auto; " class="form-control " style="min-width:150px; margin-right:30px;" name="" id="">
                                       <option value="">AGENTE</option>
                                       <option value="">EQUIPE</option>
                                       <option value="">CAMPANHA</option>
                                     </select>
                                     <div class="border-primary" style="display:flex; justify-content:center;  min-width:200px; border-color:">  
                                       <input style="padding:10px; margin: 5px 5px auto;" type="text" class="form-control" id="validationCustom02" placeholder="Pesquisar..." value="" required>  
                                       <button style="margin: 5px 5px auto;" type="button" class="btn btn-primary">Buscar</button>
                                       </div>
                                 </form> 
                                  </div>
                            <div id="Gf-pizza2" class="graf"></div>
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
                <tr>
                  <td>tag php</td>
                  <td>tag php</td>
                  <td>tag php</td>
                  <td>tag php</td>
                  <td>tag php</td>
               </tr>
  
               <tr>
                  <td>tag php</td>
                  <td>tag php</td>
                  <td>tag php</td>
                  <td>tag php</td>
                  <td>tag php</td>
               </tr>
  
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