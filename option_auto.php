<?php
include ('./php/conexao.php');
$resposta1 = 0;
$resposta2 = 0;
$resposta3 = 0;
$resposta4 = 0;
$resposta5 = 0;

$filtro = filter_input(INPUT_GET, "filtro");
$parametro = filter_input(INPUT_GET, "parametro");

$select_equipe = "SELECT count(resposta_1) as 'r1',count(resposta_2) as 'r2',count(resposta_3) as 'r3',count(resposta_4) as 'r4',count(resposta_5) as 'r5',b.equipe FROM ligacao b
INNER JOIN resposta a ON a.ligacao = b.id_ligacao
where b.equipe = '$parametro'";

$select_campanha = "SELECT count(resposta_1) as 'r1',count(resposta_2) as 'r2',count(resposta_3) as 'r3',count(resposta_4) as 'r4',count(resposta_5) as 'r5',b.campanha FROM ligacao b
INNER JOIN resposta a ON a.ligacao = b.id_ligacao
where b.campanha='$parametro'";

$select_geral = "SELECT count(resposta_1) as 'r1',count(resposta_2) as 'r2',count(resposta_3) as 'r3',count(resposta_4) as 'r4',count(resposta_5) as 'r5' from resposta";

$select_agente = "SELECT count(resposta_1) as 'r1',count(resposta_2) as 'r2',count(resposta_3) as 'r3',count(resposta_4) as 'r4',count(resposta_5) as 'r5',c.nome FROM ligacao b
INNER JOIN resposta a ON a.ligacao = b.id_ligacao
INNER JOIN funcionario c ON c.id_funcionario = b.funcionario
where c.nome = '$parametro'";

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
    $url = './option_auto.php';
    echo '<META HTTP-EQUIV=Refresh CONTENT="0.; URL=' . $url . '">';
    echo "<script>alert('Dados não encontrados!');</script>";
}

?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Respota 1',     <?php echo $resposta1 ?>],
          ['Respota 2',     <?php echo $resposta2 ?>],
          ['Respota 3',     <?php echo $resposta3 ?>],
          ['Respota 4',     <?php echo $resposta4 ?>],
          ['Respota 5',     <?php echo $resposta5 ?>]
        ]);

        var options = {
          title: 'My Daily Activities',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
    }

</script>



<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label>Filtrar por:</label>
    <select name="filtro">
        <option value="">Selecione...</option>
        <option value="equipe">Equipe</option>
        <option value="agente">Agente</option>
        <option value="campanha">Campanha</option>
    </select>

	<input type="text" name="parametro"> 
	<input type="submit" value="buscar"> 
</form>


<div id="donutchart" style="width: 900px; height: 500px;"></div>

<?php echo $resposta1?>

</html>
