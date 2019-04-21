<?php
include ('./php/conexao.php');

$mes = [];
$av1 = [];
$av2 = [];
$av3 = [];
$av4 = [];
$av5 = [];
$i = 0;

$sql = 'SELECT a.resposta_1,a.resposta_2,a.resposta_3,a.resposta_4,a.resposta_5,b.data_hora FROM ligacao b
INNER JOIN resposta a ON a.ligacao = b.id_ligacao;';
$resultado = mysqli_query($conn, $sql);

while($dado = $resultado -> fetch_array()){
    $data = $dado['data_hora'];
    $partes = explode("-", $data);
    $mes[$i] = $partes[1];

    echo '--------'.$mes[$i] ;
    $i = $i + 1;
}

//$data = "04/20/2019";
//$partes = explode("/", $data);
//$mes = $partes[0];
//echo $mes;

?>

<html>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Mês', 'Avaliação 1', 'Avalição 2', 'Avaliação 3', 'Avaliação 4', 'Avaliação 5'],
          ['2014', 1000, 400, 200, 200, 200],
          ['2015', 1170, 460, 250, 200, 200],
          ['2016', 660, 1120, 300, 200, 200],
          ['2017', 1030, 540, 350, 200, 200]
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('gf_geral'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="gf_geral" style="width: 800px; height: 500px;"></div>
  </body>
</html>

</html>