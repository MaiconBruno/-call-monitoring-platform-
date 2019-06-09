<?php 
//Importa a validação da sessão para evitar acesso via URL
include('./php/validaPagina.php');

//verifica se a pagina pertence ao nivel do usuario logado 
if ($_SESSION['Logado'] = true && $_SESSION['usuarioNiveisAcessoId'] != "2" ) { // comparação para verificar o nivel do acesso
  session_start();
  unset(
		$_SESSION['usuarioId'],
		$_SESSION['usuarioNome'],
		$_SESSION['usuarioNiveisAcessoId'],
		$_SESSION['usuarioLogin'],
		$_SESSION['usuarioSenha']
	);
  header("Location: index.php");
  $_SESSION['loginAcesso'] = "Acesso Negado!"; //mensagem exibida quando o acesso não e permitido 
   exit();
} else {
 
}

?>

<?php

//incluindo arquivo.php
include('./php/graficoAvaliacao.php');
include('./php/tabela_av.php');
include('./php/tabelaavaliacao.php');
include('./php/graficoNaoAvaliados.php');
include('./php/graficoMedia.php');

//include('../php/tabelaavaliacao.php')
?>

<!-- Graficos JS -->
<script type="text/javascript"></script>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <link rel="stylesheet" href="./css/styles.css">
  <link rel="stylesheet" href="./css/style.css">
  <link href="css/sb-admin.css" rel="stylesheet">
  <!-- Importando chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <!-- Importando bliblioteca da google Charts so chamar 1x-->
  <link rel="shortcut icon" href="https://static.wixstatic.com/media/a917a1_d8844d4baaa443a7a31eeaf9b1c214c3%7Emv2.png/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/a917a1_d8844d4baaa443a7a31eeaf9b1c214c3%7Emv2.png" type="image/png">
 
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
    <div class="header d-flex" style="background-color:white;">
      <div class="container">
        <div class="row ">
          <div class="col-md-12 d-flex justify-content-center">
            <div class="logo" style="margin-left:90px;"> <img src="./icones/LOGO.png" height="50px" width="140px" alt=""> </div>
          </div>
        </div>
      </div>
      <div class="dropdown" style="margin-right:15px;">
      <span class="nav-link zoom  text-menu  text-primary" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><img width="45" height="45" src="./icones/menu.png"></span>
        <ul class="dropdown-menu " aria-labelledby="dropdownMenu1">
          <li class="centralizador"><a class="text-secondary"><?php echo $_SESSION['usuarioNome']; ?></a></li>
          <li class="centralizador"><a class="text-success"><?php
                                                            $acesso = '';
                                                            if ($_SESSION['usuarioNiveisAcessoId'] == 1) {
                                                              $acesso = 'ADMINISTRADOR';
                                                            } else if ($_SESSION['usuarioNiveisAcessoId'] == 2) {
                                                              $acesso = 'AGENTE';
                                                            } else if ($_SESSION['usuarioNiveisAcessoId'] == 3) {
                                                              $acesso = 'SUPERVISOR';
                                                            }
                                                            echo $acesso;
                                                            ?></a></li>
          <li class="centralizador"><a class="text-primary" href="./php/sair.php">Sair</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="row  ">
    <div class="page-content col-md-9 " style="padding-top:1px; background-color:#D9ECDD">
      <!-- div da pagina toda -->
      <div class="row ">
        <div class="col-md-12 ">
          <div class="row">
            <!-- Aqui começa o primeiro card-->
            <div class="col-md-7 ">
              <div class="box-one">
                <div class="content-box-header col-md-12">
                  <div class="panel-title">Cálculo Geral de chamadas recebidas</div>
                </div>
                <div class="content-box-large box-with-header">
                  <canvas id="G_ligacao"></canvas>
                  <script>
                    new Chart(document.getElementById("G_ligacao"), {
                      type: 'line',
                      data: {
                        labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
                        datasets: [{
                          backgroundColor: ["#EBD603"],
                          fill: false,
                          borderColor: "#EBD603",
                          data: [20, 40, 42, 58, 31, 21, 50, 60, 42, 13, 23, 11]
                        }]
                      },
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
              </div>
              <div class="box-one">
                <div class="content-box-header ">
                  <div class="panel-title">TOTAL DE AVALIADAS E NÃO AVALIADAS</div>
                </div>
                <div class="content-box-large box-with-header">
                  <canvas id="G_ligacaoN" height="155"></canvas>
                  <script>
                    new Chart(document.getElementById("G_ligacaoN"), {
                      type: 'line',
                      data: {
                        labels: ["Seg", "Ter", "Qua", "Qui", "Sex", "Sab", "Dom"],
                        datasets: [{
                            backgroundColor: ["#2EFE9A"],
                            label: "Avaliadas",
                            fill: false,
                            borderColor: "#2EFE9A",
                            data: [65, 54, 30, 81, 56, 55, 40]
                          },
                          {
                            backgroundColor: ["#FF4436"],
                            fill: false,
                            label: "Não Avaliadas",
                            borderColor: "#FF4436",
                            data: [20, 60, 42, 58, 31, 21, 50]
                          }
                        ]
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
              </div>
            </div>

            <!-- Aqui termina o primeiro card-->
            <div class="col-md-5">
              <!-- Aqui começa o segundo card-->
              <div class="row">
                <div class="col-md-12">
                  <div class="content-box-header">
                    <div class="panel-title" align="center">RANKING POR TIPO DE ENTRADA</div>
                  </div>
                  <div class="content-box-large box-with-header">
                   
                    <canvas id="G-interacao" height="200"></canvas>
                    <script>
                      new Chart(document.getElementById("G-interacao"), {
                        type: 'horizontalBar',
                        data: {
                          labels: ["Facebook", "Email", "Chat", "WhatsApp", "Telefone", "Skype"],
                          datasets: [{
                            backgroundColor: ["#304CFF", "#B2FF82", "#27C4CC", "#FF5951", "#EBD603", "#8A21F0"],
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
              <div class="row ">
                <div class="col-md-12">
                  <div class="content-box-header">
                    <div class="panel-title">Média por pergunta</div>
                  </div>
                  <div class="content-box-large box-with-header">
                    <canvas id="G-mediaRespondidas" height="250"></canvas>
                    <script>
                      new Chart(document.getElementById("G-mediaRespondidas"), {
                        type: 'doughnut',
                        data: {
                          labels: ["R1", "R2", "R3", "R4", "R5"],
                          datasets: [{
                            backgroundColor: ["#4E807F", "#4FFFFC", "#7CCCCB", "#01807D", "#9CFFFD"],
                            data: [<?php echo $r1_gr_media ?>, <?php echo $r2_gr_media ?>, <?php echo $r3_gr_media ?>, <?php echo $r4_gr_media ?>, <?php echo $r5_gr_media ?>],
                          }],
                        },
                        options: {
                          responsive: true,
                          legend: {
                            position: 'bottom',
                            labels: {
                              boxWidth: 13,
                              fontSize: 13,

                            },
                          },
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
                    </script>
                    <!-- <div class="mt-4 text-center small"> <span class="mr-2"> <i class="fas fa-circle text-primary"></i> Direct </span> <span class="mr-2"> <i class="fas fa-circle text-success"></i> Social </span> <span class="mr-2"> <i class="fas fa-circle text-info"></i> Referral </span> <span class="mr-2"> <i class="fas fa-circle text-success"></i> Social </span> <span class="mr-2"> <i class="fas fa-circle text-info"></i> Referral </span> </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 " style=" background-color:#C8D0EA; padding-top:10px; padding-right:20px; min-height:788px;">
      <!-- Aqui começa o segundo card-->
      <div class="row">
        <div class="col-md-12">
          <div class="content-box-header col-md-12">
            <div class="panel-title col-md-12">Perguntas respondidas</div>
          </div>
          <div class="content-box-large box-with-header">
            <canvas id="G-Respondidas" height="295px"></canvas>
            <script>
              new Chart(document.getElementById("G-Respondidas"), {
                type: 'doughnut',
                data: {
                  labels: ["R1", "R2", "R3", "R4", "R5"],
                  datasets: [{
                    backgroundColor: ["#4E807F", "#4FFFFC", "#7CCCCB", "#01807D", "#9CFFFD"],
                    data: [<?php echo $resposta1 ?>, <?php echo $resposta2 ?>, <?php echo $resposta3 ?>, <?php echo $resposta4 ?>, <?php echo $resposta5 ?>],
                  }],
                },
                options: {
                  responsive: true,
                  legend: {
                    position: 'bottom',
                    labels: {

                      boxWidth: 13,
                      fontSize: 13,

                    },
                  },
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
            </script>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="content-box-header col-md-12 col-sm-12 col-xs-12 ">
            <div class="panel-title col-md-12 col-sm-12 col-xs-12">PERGUNTAS NÃO RESPONDIDAS</div>
          </div>
          <div class="content-box-large box-with-header">
            <canvas id="G-naorespondidas" height="300px"></canvas>
            <script>
              new Chart(document.getElementById("G-naorespondidas"), {
                type: 'doughnut',
                data: {
                  labels: ["R1", "R2", "R3", "R4", "R5"],
                  datasets: [{
                    backgroundColor: ["#4E807F", "#4FFFFC", "#7CCCCB", "#01807D", "#9CFFFD"],
                    data: [<?php echo $resposta1_na ?>, <?php echo $resposta2_na ?>, <?php echo $resposta3_na ?>, <?php echo $resposta4_na ?>, <?php echo $resposta5_na ?>],
                  }],
                },
                options: {
                  responsive: true,
                  legend: {
                    position: 'bottom',
                    labels: {
                      boxWidth: 13,
                      fontSize: 13,

                    },
                  },
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
            </script>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <div class="d-flex tabelas-fixo">
    <div class=" zoom pd ">
      <a href="./TabelaDoAgente.php">
        <img class="img-responsive" src="./icones/tabela.png" width="35px" height="35px" alt="Tabelas" />
      </a>
    </div>
  </div>
  <footer>
    <div class="container">
      <div class="copy text-center"> Copyright 2019 <a href='#'>Dashboard de Qualidade JCR </a> </div>
    </div>
  </footer>
  <!-- Bootstrap core JavaScript -->
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
  <script src="./js/validacaoForm.js"></script>
  <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script src="//cdn.datatables.net/plug-ins/1.10.19/sorting/date-eu.js"></script>
</body>

</html>