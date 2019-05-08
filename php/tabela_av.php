<?php
include ('./php/conexao.php');

$itens_por_pagina = 5;
$pagina = 0;
// pegar a pagina atual
if (intval(@$_GET['pagina']) <= 0) {
    intval(@$_GET['pagina']);
}
if (intval(@$_GET['pagina']) >= 1) {
    intval($_GET['pagina']); // pegar a pagina atual
    $pagina = ((intval($_GET['pagina']) == 0) ? 1 : intval($_GET['pagina'])) * 5;
}
//verifica a conexão com o banco
//$mysqli_connection = new MySQLi('localhost', 'root', '', 'pfc_db');

$select_tabela_ligacao = "CALL select_tbl_ligacao();";

    //puxa os dados do banco
    $sql = "select b.matricula, b.nome, a.ani, d.descricao, DATE_FORMAT( data_hora, '%d/%m/%Y' ) as 'data_hora', a.campanha, a.equipe, c.resposta_1, c.resposta_2, c.resposta_3, c.resposta_4, c.resposta_5 from ligacao a
inner join funcionario b on b.id_funcionario = a.funcionario
inner join resposta c on c.ligacao = a.id_ligacao
inner join funcao d  on d.id_funcao = b.funcao LIMIT $pagina, $itens_por_pagina";
    $execute = $conn->query($sql) or die($conn->error);
    $produto = $execute->fetch_assoc();
    $num = $execute->num_rows;

    //pega a quantidade de objetos no banco
    $num_total = $conn->query($select_tabela_ligacao)->num_rows;

    // definir numero de páginas
    $num_paginas = ceil($num_total / $itens_por_pagina);

?>