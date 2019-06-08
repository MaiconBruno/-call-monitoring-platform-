<?php 
//Importa a validação da sessão para evitar acesso via URL
include('./php/validaPagina.php');



//verifica se a pagina pertence ao nivel do usuario logado 
if ($_SESSION['Logado'] = true && $_SESSION['usuarioNiveisAcessoId'] != "1" ) { // comparação para verificar o nivel do acesso
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
//incluindo arquivo.php[
include('./php/graficoAvaliacao.php');
include('./php/tabela_av.php');
include('./php/tabelaavaliacao.php');
include('./php/graficoNaoAvaliados.php');
include('./php/graficoMedia.php');
include('./php/graficoChamadasRecebidas.php');
include('./php/graficoInteracao.php');
include('./php/graficoTotalAvaliadas.php');
include('./php/graficoTotalNaoAvaliadas.php');

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
            <div class="logo"> <img src="./icones/LOGO.png" height="50px" width="140px" alt=""> </div>
          </div>
        </div>
      </div>
      <div class="d-flex flex-column p-1 text-black" style="  margin-right:5px;">
        <div class="text-center"><?php echo $_SESSION['usuarioNome']; ?></div>
        <div class="text-center text-success  "><?php
              $acesso = '';
              if ($_SESSION['usuarioNiveisAcessoId'] == 1) {
                $acesso = 'ADMINISTRADOR';
              } else if ($_SESSION['usuarioNiveisAcessoId'] == 2) {
                $acesso = 'AGENTE';
              } else if ($_SESSION['usuarioNiveisAcessoId'] == 3) {
                $acesso = 'SUPERVISOR';
              }
              echo $acesso;
              ?>
        </div>
        <a class="text-center text-uppercase" style="font-size:13px;" href="./php/sair.php">Sair</a>
      </div>
    </div>
  </nav>
  <div class="row  ">
    <div class="page-content col-md-9 " style="padding-top:1px; background-color:#E6ECEC">
      <!-- div da pagina toda -->
      <div class="row ">
        <div class="col-md-12 ">
          <div class="row">
            <!-- Aqui começa o primeiro card-->
            <div class="col-md-7 ">
              <div class="box-one">
                <div class="content-box-header col-md-12">
                  <div class="panel-title">TOTAL DE CHAMADAS RECEBIDAS</div>
                </div>
                <div class="content-box-large box-with-header">
                  <canvas id="G_ligacao"></canvas>
                  <script>
                    new Chart(document.getElementById("G_ligacao"), {
                      type: 'line',
                      data: {
                        labels: ["<?php echo $array_mes[0] ?>", "<?php echo $array_mes[1] ?>", "<?php echo $array_mes[2] ?>", "<?php echo $array_mes[3] ?>", "<?php echo $array_mes[4] ?>", "<?php echo $array_mes[5] ?>", "<?php echo $array_mes[6] ?>", "<?php echo $array_mes[7] ?>", "<?php echo $array_mes[8] ?>", "<?php echo $array_mes[9] ?>", "<?php echo $array_mes[10] ?>", "<?php echo $array_mes[11] ?>"],
                        datasets: [{
                          backgroundColor: ["#FFB412"],
                          fill: false,
                          borderColor: "#FFB412",
                          data: ["<?php echo $array_mes_contarLigacoes[1] ?>", "<?php echo $array_mes_contarLigacoes[2] ?>", "<?php echo $array_mes_contarLigacoes[3] ?>", "<?php echo $array_mes_contarLigacoes[4] ?>", "<?php echo $array_mes_contarLigacoes[5] ?>", "<?php echo $array_mes_contarLigacoes[6] ?>", "<?php echo $array_mes_contarLigacoes[7] ?>", "<?php echo $array_mes_contarLigacoes[8] ?>", "<?php echo $array_mes_contarLigacoes[9] ?>", "<?php echo $array_mes_contarLigacoes[10] ?>", "<?php echo $array_mes_contarLigacoes[11] ?>", "<?php echo $array_mes_contarLigacoes[12] ?>", ]
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
                  <canvas id="G_ligacaoN" height="193"></canvas>
                  <script>
                    new Chart(document.getElementById("G_ligacaoN"), {
                      type: 'line',
                      data: {
                        labels: ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sab"],
                        datasets: [{
                            backgroundColor: ["#2EFE9A"],
                            label: "Avaliadas",
                            fill: false,
                            borderColor: "#2EFE9A",
                            data: ["<?php echo $array_gr_avaliadas[0] ?>", "<?php echo $array_gr_avaliadas[1] ?>", "<?php echo $array_gr_avaliadas[2] ?>", "<?php echo $array_gr_avaliadas[3] ?>", "<?php echo $array_gr_avaliadas[4] ?>", "<?php echo $array_gr_avaliadas[5] ?>", "<?php echo $array_gr_avaliadas[6] ?>"]
                          },
                          {
                            backgroundColor: ["#FF4436"],
                            fill: false,
                            label: "Não Avaliadas",
                            borderColor: "#FF4436",
                            data: ["<?php echo $array_gr_naoavaliadas[0] ?>", "<?php echo $array_gr_naoavaliadas[1] ?>", "<?php echo $array_gr_naoavaliadas[2] ?>", "<?php echo $array_gr_naoavaliadas[3] ?>", "<?php echo $array_gr_naoavaliadas[4] ?>", "<?php echo $array_gr_naoavaliadas[5] ?>", "<?php echo $array_gr_naoavaliadas[6] ?>", ]
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
            <div class="col-md-5 ">
              <!-- Aqui começa o segundo card-->
              <div class="row">
                <div class="col-md-12">
                  <div class="content-box-header">
                    <div class="panel-title" align="center">RANKING POR TIPO DE ENTRADA</div>
                  </div>
                  <div class="content-box-large box-with-header">
                    <div class="row select-margin">
                      <form class="form-inline col-md-12 col-sm-12 col-xs-12 " action=" <?php echo $_SERVER['PHP_SELF']; ?>">
                        <select class="form-control col-md-5 col-sm-6 col-xs-12" id="filtro" name="opcaoGrInteracao">
                          <option selected>Filtros...</option>
                            <option value="agente">Agente</option>
                            <option value="equipe">Equipe</option>
                            <option value="campanha">Campanha</option>
                        </select>
                        <input type="text" class="form-control  col-md-7 col-sm-6 col-xs-12" name="parametroGrInteracao" id="campoRanking" required>
                        <button type="submit" class="form-control btn-outline-success col-md-12 col-sm-12 col-xs-12">Buscar</button>
                      </form>

                    </div>
                    <br />
                    <canvas id="G-interacao"></canvas>
                    <script>
                      new Chart(document.getElementById("G-interacao"), {
                        type: 'horizontalBar',
                        data: {
                          labels: ["Facebook", "WhatsApp", "Skype", "E-mail", "Telefone", "Chat"],
                          datasets: [{
                            backgroundColor: ["#0000FF", "#5882FA", "#00BFFF", "#01A9DB", "#04B4AE", "#A9D0F5"],
                            data: ["<?php echo $dado_interacao[1] ?>", "<?php echo $dado_interacao[2] ?>", "<?php echo $dado_interacao[3] ?>", "<?php echo $dado_interacao[4] ?>", "<?php echo $dado_interacao[5] ?>", "<?php echo $dado_interacao[6] ?>", ]
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
                    <div class="panel-title">MÉDIA POR PERGUNTA</div>
                  </div>
                  <div class="content-box-large box-with-header">
                    <div class="col-md-12">
                      <div class="row select-margin">

                        <form class="form-inline col-md-12 col-sm-12 col-xs-12 " action=" <?php echo $_SERVER['PHP_SELF']; ?>">
                          <select class="form-control col-md-5 col-sm-6 col-xs-12" id="filtro" name="opcaoGrMedia">
                            <option selected>Filtros...</option>
                            <option value="agente">Agente</option>
                            <option value="equipe">Equipe</option>
                            <option value="campanha">Campanha</option>
                          </select>
                          <input type="text" class="form-control  col-md-7 col-sm-6 col-xs-12" name="parametroGrMedia" id="campoRanking" required>
                          <button type="submit" class="form-control btn-outline-success col-md-12 col-sm-12 col-xs-12">Buscar</button>
                        </form>
                      </div>
                    </div>
                    <br />
                    <canvas id="G-mediaRespondidas" height="200"></canvas>
                    <script>
                      new Chart(document.getElementById("G-mediaRespondidas"), {
                        type: 'doughnut',
                        data: {
                          labels: ["R1", "R2", "R3", "R4", "R5"],
                          datasets: [{
                            backgroundColor: ["#005BE8", "#4197E8", "#54C2FF", "#B0C5E8", "#AEB0E8"],
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
    <div class="col-md-3 " style=" background-color:#0D32FF; padding-top:10px; padding-right:20px; min-height:888px;">
      <!-- Aqui começa o segundo card-->
      <div class="row">
        <div class="col-md-12">
          <div class="content-box-header col-md-12">
            <div class="panel-title col-md-12">PERGUNTAS RESPONDIDAS</div>
          </div>
          <div class="content-box-large box-with-header">
            <div class="col-md-12">
              <div class="row select-margin">

                <form class="form-inline col-md-12 col-sm-12 col-xs-12 " action=" <?php echo $_SERVER['PHP_SELF']; ?>">
                  <select class="form-control col-md-6 col-sm-6 col-xs-12" name="opcaoAv">
                    <option selected>Filtros...</option>
                    <option value="agente">Agente</option>
                    <option value="equipe">Equipe</option>
                    <option value="campanha">Campanha</option>
                  </select>
                  <input type="text" name="parametro" class="form-control col-md-6 col-sm-6 col-xs-12" placeholder="Pesquisar..." required>
                  <button type="submit" class="form-control btn-outline-success col-md-12 col-sm-12 col-xs-12">Buscar</button>
                </form>

              </div>
              <br />
            </div>
            <canvas id="G-Respondidas" height="235px"></canvas>
            <script>
              new Chart(document.getElementById("G-Respondidas"), {
                type: 'doughnut',
                data: {
                  labels: ["R1", "R2", "R3", "R4", "R5"],
                  datasets: [{
                    backgroundColor: ["#01DF74", "#00FF80", "#2EFE9A", "#58FAAC", "#81F7BE"],
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
            <div class="col-md-12">
              <div class="row select-margin">

                <form class="form-inline col-md-12 col-sm-12 col-xs-12 " action=" <?php echo $_SERVER['PHP_SELF']; ?>">
                  <select class="form-control col-md-6 col-sm-6 col-xs-12" name="opcaoGrNa">
                    <option selected>Filtros...</option>
                    <option value="agente">Agente</option>
                    <option value="equipe">Equipe</option>
                    <option value="campanha">Campanha</option>
                  </select>
                  <input type="text" name="parametroGrNa" class="form-control col-md-6 col-sm-6 col-xs-12" placeholder="Pesquisar..." required>
                  <button type="submit" class="form-control btn-outline-success col-md-12 col-sm-12 col-xs-12">Buscar</button>
                </form>

              </div>
              <br />
            </div>
            <canvas id="G-naorespondidas" height="235px"></canvas>
            <script>
              new Chart(document.getElementById("G-naorespondidas"), {
                type: 'doughnut',
                data: {
                  labels: ["R1", "R2", "R3", "R4", "R5"],
                  datasets: [{
                    backgroundColor: ["#D98155", "#E8975F", "#FFB875", "#E8AC5F", "#FFD187"],
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

  <div class="tabelas-fixo ">
    <div class=" zoom  pd">
      <a href="./TabelaGeraldoAdministrador.php">
        <img class="img-responsive" src="./icones/tabela.png" width="35px" height="35px" alt="Tabelas" />
      </a>
    </div>
    <div class="zoom pd">
      <a href="./config.php">
        <img class="img-responsive" src="./icones/config.png" width="35px" height="35px" alt="Tabelas" />
      </a>
    </div>
  </div>
  <footer>
    <div class="container">
      <div class="copy text-center"> Copyright 2019 <a href='#'>Dashboard de Qualidade JCR </a> </div>
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