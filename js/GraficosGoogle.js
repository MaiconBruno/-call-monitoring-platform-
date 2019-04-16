function drawChart() {
    const container = document.querySelector('#chart')
    const data = new google.visualization.arrayToDataTable([
        ['Character', 'Ki'],
        ['Goku', 10000],
        ['Vegeta', 9000],
        ['Gohan', 8000],
        ['Freeza', 5000],
        ['Piccolo', 2000]
    ])
    const options = {
        title: 'Grafico 1',
        height: 450,
        width: 620
    }
    const chart = new google.visualization.ColumnChart(container)
    // const chart = new google.visualization.BarChart(container)
    // const chart = new google.visualization.LineChart(container)
    //const chart = new google.visualization.PieChart(container)
    chart.draw(data, options)
}

function drawVisualization() {
    // Some raw data (not necessarily accurate)
    var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Work',     11],
        ['Eat',      2],
        ['Commute',  2],
        ['Watch TV', 2],
        ['Sleep',    7]
      ]);

      var options = {
        title: 'Grafico 2',
        pieHole: 0.4,
      };


    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(data, options);
}

function drawStuff() {
    var data = new google.visualization.arrayToDataTable([
        ['', 'Numero de Interações'],
        ["Telefone ", 114],
        ["E-mail ", 31],
        ["P.chamados", 12],
        ["Rede social ", 20],
        ['Chat', 30]
      ]);

      var options = {
      
        width: 1100,
        height:500,
        legend: { position: 'none' },
        chart: { title: '',},
        bars: 'horizontal', // Required for Material Bar Charts.
        axes: {
          x: {
            0: { side: 'top', label: ''} // Top x-axis.
          }
        },
        bar: { groupWidth: "90%" }
      };

  var chart = new google.charts.Bar(document.getElementById('dual_x_div'));
  chart.draw(data, options);
};
