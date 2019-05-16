<?php
include ('../php/conexao.php');

$select_na_r1 = "CALL select_gr_na_r1();";
$select_na_r2 = "CALL select_gr_na_r2();";
//$select_na_r3 = "CALL select_gr_na_r3();";
//$select_na_r4 = "CALL select_gr_na_r4();";
//$select_na_r5 = "CALL select_gr_na_r5();";

$resultado_r1 = mysqli_query($conn, $select_na_r1);
$resultado_r2 = mysqli_query($conn, $select_na_r2);
//$resultado_r3 = mysqli_query($conn, $select_na_r3);
//$resultado_r4 = mysqli_query($conn, $select_na_r4);
//$resultado_r5 = mysqli_query($conn, $select_na_r5);

if($dado_na_r1 = $resultado_r1 -> fetch_array()){  
    $resposta1_na = $dado_na_r1['r1']; 
}
if($dado_na_r2 = $resultado_r2 -> fetch_array()){  
    $resposta2_na = $dado_na_r2['r2']; 
}
/*while($dado_na_r3 = $resultado_r3 -> fetch_array()){  
    $resposta3_na = $dado_na_r3['r3']; 
}*/
/*while($dado_na_r4 = $resultado_r4 -> fetch_array()){  
    $resposta4_na = $dado_na_r4['r4']; 
}*/
/*while($dado_na_r5 = $resultado_r5 -> fetch_array()){  
    $resposta5_na = $dado_na_r5['r5']; 
}*/

echo $resposta1_na;
echo $resposta2_na;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <div style="width: 900px; height: 500px;" class="col-md-12 col-sm-12 col-xs-12">
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
</head>
<body>
    
</body>
</html>