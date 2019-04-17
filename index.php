
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
          ['Month', 'Bolivia', 'Ecuador', 'Madagascar', 'Papua New Guinea', 'Rwanda', 'Average'],
          ['2004/05',  165,      938,         522,             998,           450,      614.6],
          ['2005/06',  135,      1120,        599,             1268,          288,      682],
          ['2006/07',  157,      1167,        587,             807,           397,      623],
          ['2007/08',  139,      1110,        615,             968,           215,      609.4],
          ['2008/09',  136,      691,         629,             1026,          366,      569.6]
        ]);

        var options = {
          title : 'Monthly Coffee Production by Country',
          vAxis: {title: 'Cups'},
          hAxis: {title: 'Month'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('Gf-geral'));
        chart.draw(data, options);
      }


function GraficoInteracao() {
  var data = google.visualization.arrayToDataTable([
    ['Plataformas', 'Facebook','Chat', 'Skype', 'WhatsApp', 'Email'],
    ['Tipo de Interações', 300, 100,30,40,60],   
  ]);

  var options = {
    chart: {
      title: 'Interações',
    }
  };

  var chart = new google.charts.Bar(document.getElementById('Gf_Interacao'));
  chart.draw(data, google.charts.Bar.convertOptions(options));
}

function GraficoCam() {
// Create the data table.
var data = google.visualization.arrayToDataTable([
        ['Plataformas', 'Avaliação Positiva', 'Avaliação Negativa', 'Não Avaliadas', { role: 'annotation' } ],
        ['Campanhax', 10, 24, 20, ''],
        ['Campanhax', 16, 22, 23, ''],
        ['Campanhax', 28, 19, 29, ''],
        ['Campanhax', 16, 22, 23, ''],
        ['Campanhax', 16, 22, 23, ''],
        ['Campanhax', 16, 22, 23, ''],
        ['Campanhax', 16, 22, 23, ''],
        ['Campanhax', 16, 22, 23, ''],
        ['Campanhax', 16, 22, 23, ''],
        ['Campanhax', 16, 22, 23, ''],
        ['Campanhax', 16, 22, 23, ''],
        ['Campanhax', 16, 22, 23, ''],
        ['Campanhax', 16, 22, 23, ''],
        ['Campanhax', 16, 22, 23, ''],
      ]);

      var options = {
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: true
      };
    
// Instantiate and draw our chart, passing in some options.
var chart = new google.visualization.BarChart(document.getElementById('Gf_cam'));
chart.draw(data, options);
}

function GraficoPizza() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities',
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
  <link rel="stylesheet" href="./css/estilos.css">
  <link href="css/sb-admin.css" rel="stylesheet">

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

  <!-- Estilos -->
  <link href="css/scrolling-nav.css" rel="stylesheet">
  <!-- minha arquivo css -->
  <link rel="stylesheet" href="./css/meus-estilos.css">

</head>

<body id="page-top">

  <!-- Navigation -->
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
  </nav>

<!-- Graficos  -->
  <div id="ggraficos">
    <div class="card-grafico">
      <div class="card-header py-3 bg-info">
        <h6 class="m-0 font-weight-bold text-white " align="center">Grafico Geral</h6>
      </div>
      <div class="flex">
          <div class="grafico" id="Gf-geral"  style="width:100%; height:500px;"></div>
      </div>
    </div>
  </div>

  <div id="graficos" class="bg-light">
      <div class="card-grafico">
          <div class="card-header py-3 bg-info">
            <h6 class="m-0 font-weight-bold text-white " align="center">Graficos</h6>
          </div>
          <div class="flex">
          <div class="grafico" id="Gf_Interacao" style="width: 100%; height: 500px; "></div>
          <div class="grafico" id="Gf_cam"  style="width:100%; height:500px;"></div>
          </div>
          <div class="flex">
          <div class="grafico" id="Gf-pizza" style="width: 100%; height: 500px; "></div>
          <div class="grafico" id="Gf-pizza2"  style="width:100%; height:500px;"></div>
          </div>
        </div>
  </div>


  <div id="ranking" class="bg-light">
      <div class="card-grafico">
          <div class="card-header py-3 bg-info">
            <h6 class="m-0 font-weight-bold text-white " align="center">Ranking</h6>
          </div>
          <div class="flex">
          <div class="grafico" id="table_div" style="width:100%; height:500px;"></div>
          </div>
        </div>
  </div>

  <div id="relatorios" class="bg-light">
      <div class="card-grafico">
          <div class="card-header py-3 bg-info">
            <h6 class="m-0 font-weight-bold text-white " align="center">Relatorio</h6>
          </div>
          <div class="container flex">
            
          </div>
        </div>
  </div>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
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