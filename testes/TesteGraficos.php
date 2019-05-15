<?php

include ('../php/conexao.php');
$resposta1 = 0;
$resposta2 = 0;
$resposta3 = 0;
$resposta4 = 0;
$resposta5 = 0;

$filtro = filter_input(INPUT_GET, "opcaoAv");
$parametro = filter_input(INPUT_GET, "parametro");

$select_equipe = "CALL select_equipe_gr_pizza('$parametro')";

$select_campanha = "CALL select_campanha_gr_pizza('$parametro')";

$select_geral = "CALL pfc_db.select_geral_gr_pizza()";

$select_agente = "CALL select_agente_gr_pizza('$parametro')";

if($filtro != ""){
    if ($filtro == "equipe"){
        $resultado = mysqli_query($conn, $select_equipe);
    }
    else if ($filtro == "agente"){
        $resultado = mysqli_query($conn, $select_agente);
    }
    else if ($filtro == "campanha"){
        $resultado = mysqli_query($conn, $select_campanha);
    }
}else{
    $resultado = mysqli_query($conn, $select_geral);
    
}

while($dado = $resultado -> fetch_array()){  
    $resposta1 = $dado['r1'];  
    $resposta2 = $dado['r2'];
    $resposta3 = $dado['r3'];
    $resposta4 = $dado['r4'];
    $resposta5 = $dado['r5'];
}

if($resposta1 == 0 && $resposta2 == 0 && $resposta3 == 0 && $resposta4 == 0 && $resposta5 == 0){
    $url = './TesteGraficos.php';
    echo '<META HTTP-EQUIV=Refresh CONTENT="0.; URL=' . $url . '">';
    echo "<script>alert('Dados não encontrados!');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="js/jquery-3.4.1.js" type="text/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>

<div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Filtrar por:</label>
            
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

        <input type="text" name="parametro"> 
        <input type="submit" value="buscar" id="btn_submit"> 
    </form>
</div>

<div style="width: 900px; height: 500px;" id="gr_pizza">
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

        var intervalo = setInterval(function() { $('#gr_pizza').load('TesteGraficos.php'); }, 10000);
    </script>
</div>

</body>
</html>




                    
       