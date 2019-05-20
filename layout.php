<?php
//incluindo arquivo.php
include('./php/graficoAvaliacao.php');
include('./php/tabela_av.php');
include('./php/tabelaavaliacao.php');
//include('../php/tabelaavaliacao.php')
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
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js">
<link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="PROJETO FINAL DE CURSO SENAI CETIND TURMA 58271">
<meta name="author" content="EQUIPE PFC-SENAI">
<!-- Importando chart.js -->
<script src="path/to/chartjs/dist/Chart.js"></script>
<title>DASH - JCR TECNOLOGIA</title>

<!-- Biblioteca CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<!-- import scrolling-nav.css -->
<link href="css/scrolling-nav.css" rel="stylesheet">
<!-- import estilos.css -->

</head>
<body>
<nav class="border-size-top fixed-top">
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="logo"> <img src="./icones/LOGO.png" height="50px" width="140px" alt=""> </div>
        </div>
      </div>
    </div>
  </div>
</nav>
<div class="page-content" style="padding-top:60px; background-color:#DFDFFF"> <!-- div da pagina toda -->
  <div class="row">
    <div class="col-md-12" >
      <div class="row" > <!-- Aqui começa o primeiro card-->
        <div class="col-md-5">
          <div class="content-box-header">
            <div class="panel-title">Total de chamadas recebidas</div>
            
          </div>
          <div class="content-box-large box-with-header" >
            <canvas id="G_ligacao"></canvas>
            <script>
        new Chart(document.getElementById("G_ligacao"), {
          type: 'line',
         
		 data:{
		  
        labels : ["Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out","Nov","Dez"],
 datasets : [
 
 {
  backgroundColor: ["red"],
  fill: false,
  
  borderColor: "red",
 data : [20,40,42,58,31,21,50,60,42,13,23,11]
 }
		]},
        
            options: {
            animation: {
              easing: "easeInOutCirc", //easeOutBack,easeInOutCirc,easeOutCirc,easeOutExpo,easeInOutQuint,easeInQuint
              animateScale: true,
              animateRotate: true
            },
            legend: {
            display: false
        }
           
          }
        });
      </script>  
          </div>
          <div class="content-box-header">
            <div class="panel-title">Total avaliadas e não avaliadas</div>
          </div>
          <div class="content-box-large box-with-header">
            <canvas id="G_ligacaoN"></canvas>
            <script>
        new Chart(document.getElementById("G_ligacaoN"), {
          type: 'line',
         
		 data:{
		  
        labels : ["Seg","Ter","Qua","Qui","Sex","Sab","Dom"],
 datasets : [
 {
	  backgroundColor: ["blue"],
	  label:"Avaliadas",
fill: false,
borderColor: "#0000ff",
 data : [65,54,30,81,56,55,40]
 },
 {
  backgroundColor: ["red"],
  fill: false,
  label:"Não Avaliadas",
  borderColor: "red",
 data : [20,60,42,58,31,21,50]
 }
		]},
        
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
        </div>
        
        <!-- Aqui termina o primeiro card-->
        <div class="col-md-4"><!-- Aqui começa o segundo card-->
          <div class="row">
            <div class="col-md-12">
              <div class="content-box-header">
                <div class="panel-title" align="center">Ranking por tipo de entrada</div>
              </div>
              <div class="content-box-large box-with-header">
                <div class="row select-margin">
                  <div class="col-md-12">
                    <form class="form-inline" action=" <?php echo $_SERVER['PHP_SELF']; ?>">
                      <input type="date" class="form-control col-md-7 col-sm-4 col-xs-4" name="data" id="campoData" >
                      <button type="submit" class="form-control btn-outline-success col-md-5 col-sm-4 col-xs-4">Buscar</button>
                    </form>
                  </div>
                </div>
               
                <br/>
                <canvas id="G-interacao"></canvas>
                <script>
            new Chart(document.getElementById("G-interacao"), {
              type: 'horizontalBar',
              data: {
                labels: ["Facebook", "Email", "Chat", "WhatsApp", "Telefone", "Skype" ],
                datasets: [{
                  
                  backgroundColor: ["#0000FF", "#5882FA", "#00BFFF", "#01A9DB", "#04B4AE", "#A9D0F5"],
                  data: [30, 50, 25, 15, 12, 14]
                }],
              },
              options: {
                responsive: true,
                title: {
                  display: false,
                },
				
                animation: {
                  easing: "easeInQuad",
                  animateScale: true,
                  animateRotate: true
                },
				legend: {
            display: false,
            
        }
              }
            });
          </script> 
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="content-box-header">
                <div class="panel-title">Média por perguntas</div>
              </div>
              <div class="content-box-large box-with-header">
              <div class="col-md-12">
                  <div class="row select-margin">
                    <form class="form-inline" action=" <?php echo $_SERVER['PHP_SELF']; ?>">
                      <input type="date" class="form-control col-md-8 col-sm-4 col-xs-4" name="data" id="campoData" >
                      <button type="submit" class="form-control btn-outline-success col-md-4 col-sm-4 col-xs-4">Buscar</button>
                    </form>
                  </div>
                 
                </div>
              <canvas id="G-mediaRespondidas"></canvas>
                <script>
            new Chart(document.getElementById("G-mediaRespondidas"), {
              type: 'doughnut',
              data: {
				  
                datasets: [{
                 backgroundColor: ["#01DF74", "#00FF80", "#2EFE9A", "#58FAAC", "#81F7BE"],
                  data: [7,6,5,4,3],
				  }],
              },
              options: {
                title: {
                  display: false,
                },
                animation: {
                  easing: "easeInOutCirc", 
				  animateScale: true,
                  animateRotate: true
                },
              }
            });
          </script> 
          <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary" ></i> Direct
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Social
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Referral
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Social
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Referral
                    </span>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3" style="padding-top:40px; background-color:#A9D0F5"><!-- Aqui começa o segundo card-->
          <div class="row">
            <div class="col-md-12">
              <div class="content-box-header">
                <div class="panel-title">Pergunta mais respondida</div>
              </div>
              <div class="content-box-large box-with-header">
                <div class="col-md-12">
                  <div class="row select-margin">
                    <form class="form-inline" action=" <?php echo $_SERVER['PHP_SELF']; ?>">
                      <input type="date" class="form-control col-md-7 col-sm-4 col-xs-4" name="data" id="campoData" >
                      <button type="submit" class="form-control btn-outline-success col-md-5 col-sm-4 col-xs-4">Buscar</button>
                    </form>
                  </div>
                  <br/>
                </div>
                <canvas id="G-Respondidas"></canvas>
                <script>
            new Chart(document.getElementById("G-Respondidas"), {
              type: 'doughnut',
              data: {
				  
                datasets: [{
                  backgroundColor: ["#FF0000", "#FF4000", "#FF8000", "#FFBF00", "#F7FE2E"],
                  data: [7,6,5,4,3],
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
                },
              }
            });
          </script> <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary" ></i> Direct
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Social
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Referral
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Social
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Referral
                    </span>
                  </div>
              </div>
              
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="content-box-header">
                <div class="panel-title">Pergunta menos respondida</div>
              </div>
              <div class="content-box-large box-with-header">
                <div class="col-md-12">
                  <div class="row select-margin">
                    <form class="form-inline" action=" <?php echo $_SERVER['PHP_SELF']; ?>">
                      <input type="date" class="form-control col-md-7 col-sm-4 col-xs-4" name="data" id="campoData" >
                      <button type="submit" class="form-control btn-outline-success col-md-5 col-sm-4 col-xs-4">Buscar</button>
                    </form>
                  </div>
                </div>
                <canvas id="G-naoRespondidas"></canvas>
                <script>
            new Chart(document.getElementById("G-naoRespondidas"), {
              type: 'doughnut',
              data: {
				  
                datasets: [{
                 backgroundColor: ["#F78181", "#F79F81", "#F7BE81", "#F5DA81", "#F3F781"],
                  data: [7,6,5,4,3],
				  }],
              },
              options: {
                title: {
                  display: false,
                },
                animation: {
                  easing: "easeInOutCirc", 
				  animateScale: true,
                  animateRotate: true
                },
              }
            });
          </script> 
          <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary" ></i> Direct
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Social
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Referral
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Social
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Referral
                    </span>
                  </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 panel-warning">
          <div class="content-box-header panel-heading">
            <div class="panel-title ">Tabela de busca geral</div>
          </div>
          <div class="content-box-large box-with-header">
            <div class="row"> 
              <!-- Div Esquerda que aloca 2 graficos -->
              <div class="col-md-12 col-sm-12 col-xs-12 "> 
                <!-- Card principal -->
                <div class="text-dark col-md-12 col-sm-3 com-xs-3">
                  <div>
                    <form id="idFormulario" action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                      <!-- Titulo -->
                      <div class="col-md-12 col-sm-3 com-xs-3">
                        <div class="d-flex justify-content-center align-items-center col-md-12 col-sm-12 com-xs-12  ">
                          <div class=" form-check ">
                            <input type="radio" onclick="habilitaCampoBusca(),escondeDiv(),alteraLabelCampoBusca()" name="tipoBusca" id="radioMatricula" value="matricula">
                            <label for="radioMatricula">Matricula</label>
                          </div>
                          <div class=" form-check">
                            <input type="radio" onclick="habilitaCampoBusca(),escondeDiv(),alteraLabelCampoBusca()" name="tipoBusca" id="radioNome" value="nome">
                            <label for="radioNome">Agente</label>
                          </div>
                          <div class=" form-check">
                            <input type="radio" onclick="habilitaCampoBusca(),escondeDiv(),alteraLabelCampoBusca()" name="tipoBusca" id="radioAni" value="ani">
                            <label for="radioAni">Contato do Cliente</label>
                          </div>
                          <div class=" form-check">
                            <input type="radio" onclick="escondeDiv();" name="tipoBusca" id="radioData" value="data">
                            <label for="radioData">Data</label>
                          </div>
                        </div>
                        <!-- Campos tipo Text e date -->
                        <div class=" d-flex col-md-12 col-sm-12 col-xs-12  justify-content-center align-items-center form-inline">
                          <div class="radio d-flex justify-content-center align-items-center" id="divCampoBusca">
                            <label class="radio" for="campoBusca" id="labelCampoBusca">Campo Busca:</label>
                            <input type="text" class="form-control" onkeyup="habilitaCampoCampanha()" name="parametro" id="campoBusca" disabled="true">
                          </div>
                          <div class="radio d-flex justify-content-center align-items-center" id="divCampanhaEquipe">
                            <label class="radio" for="campoCampanha">Campanha:</label>
                            <input type="text" class="form-control" onkeyup="habilitaCampoEquipe()" name="campanha" id="campoCampanha" disabled="true">
                            <label class="radio" for="campoEquipe">Equipe:</label>
                            <input type="text" class="form-control" name="equipe" id="campoEquipe" disabled="true">
                          </div>
                          <div class="col-md-12 col-sm-12 com-xs-12">
                            <div class="radio d-flex justify-content-center align-items-center" id="divData">
                              <label class="radio" for="campoDataInicial" id="labelDataInicial">Data Inical:</label>
                              <input type="date" class="form-control" name="dataInicial" id="campoDataInicial" disabled="true">
                              <label class="radio" for="campoDataFinal" id="labelDataFinal">Data Final:</label>
                              <input type="date" class="form-control" onmouseleave="habilitaCampoCampanhaData()" name="dataFinal" id="campoDataFinal" disabled="true">
                            </div>
                          </div>
                          <div class="radio d-flex justify-content-center align-items-center container ">
                            <input class="btn btn-primary botão" type="submit" value="Buscar" id="btnBuscar" disabled="true">
                            <input class="btn btn-danger botão" onclick="limpezaCampos();" type="button" value="Limpar">
                          </div>
                        </div>
                        <!-- FIm do campos text/date --> 
                      </div>
                    </form>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <table class="table table-hover table-primary table-responsive-lg " id="tbl_ligacao">
                        <thead>
                          <tr class=>
                            <th>Matricula</th>
                            <th>Agente</th>
                            <th>Contato do Cliente</th>
                            <th>Função</th>
                            <th>Data</th>
                            <th>Campanha</th>
                            <th>Equipe</th>
                            <th>Resposta 1</th>
                            <th>Resposta 2</th>
                            <th>Resposta 3</th>
                            <th>Resposta 4</th>
                            <th>Resposta 5</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php while ($dado = $resultado->fetch_array()) {
                      if ($dado['resposta_1'] == null) {
                        $dado['resposta_1'] = "N/A";
                      }
                      if ($dado['resposta_2'] == null) {
                        $dado['resposta_2'] = "N/A";
                      }
                      if ($dado['resposta_3'] == null) {
                        $dado['resposta_3'] = "N/A";
                      }
                      if ($dado['resposta_4'] == null) {
                        $dado['resposta_4'] = "N/A";
                      }
                      if ($dado['resposta_5'] == null) {
                        $dado['resposta_5'] = "N/A";
                      }
                      ?>
                          <tr>
                            <td><?php echo $dado['matricula']; ?></td>
                            <td><?php echo $dado['nome']; ?></td>
                            <td><?php echo $dado['ani']; ?></td>
                            <td><?php echo $dado['descricao']; ?></td>
                            <td><?php echo $dado['data_hora']; ?></td>
                            <td><?php echo $dado['campanha']; ?></td>
                            <td><?php echo $dado['equipe']; ?></td>
                            <td><?php echo $dado['resposta_1']; ?></td>
                            <td><?php echo $dado['resposta_2']; ?></td>
                            <td><?php echo $dado['resposta_3']; ?></td>
                            <td><?php echo $dado['resposta_4']; ?></td>
                            <td><?php echo $dado['resposta_5']; ?></td>
                          </tr>
                          <?php }  ?>
                        </tbody>
                      </table>
                    </div>
                    <script>
                $(document).ready(function() {
                  $('#tbl_ligacao').DataTable({
                    "searching": false,
                    "language": {
                      "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json",
                    },
                    columnDefs: [{
                      type: 'date-eu',
                      targets: 4
                    }]
                  });
                });
              </script> 
                  </div>
                </div>
                <!-- Fim do card principal --> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<footer>
  <div class="container">
    <div class="copy text-center"> Copyright 2014 <a href='#'>Website</a> </div>
  </div>
</footer>
<!-- Bootstrap core JavaScript --> 
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<!-- Plugin JavaScript --> 
<script src="vendor/jquery-easing/jquery.easing.min.js"></script> 
<!-- Custom JavaScript for this theme --> 
<script src="js/scrolling-nav.js"></script> 
<!-- Importando avaliacao.js --> 
<script src="../js/avaliacao.js"></script> 
<!-- imports do Jquery --> 
<script src="./js/avaliacao.js"></script> 
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script> 
<script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script> 
<script src="//cdn.datatables.net/plug-ins/1.10.19/sorting/date-eu.js"></script> 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://code.jquery.com/jquery.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="vendor/bootstrap/js/bootstrap.min.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>