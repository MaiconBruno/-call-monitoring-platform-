<?php
include ('../php/conexao.php');

$tipoBusca = filter_input(INPUT_GET, "tipoBusca");
$parametro = filter_input(INPUT_GET, "parametro");
$campanha = filter_input(INPUT_GET, "campanha");
$equipe = filter_input(INPUT_GET, "equipe");

$select_tabela_ligacao = "CALL select_tbl_ligacao();";

$select_matricula = "CALL select_tbl_ligacao_matricula('$parametro');";
$select_nome = "CALL select_tbl_ligacao_nome('$parametro');";
$select_ani = "CALL select_tbl_ligacao_ani('$parametro');";

$select_matricula_campanha = "CALL select_tbl_ligacao_matricula_campanha('$parametro','$campanha');";
$select_nome_campanha = "CALL select_tbl_ligacao_nome_campanha('$parametro','$campanha');";

$select_matricula_campanha_equipe = "CALL select_tbl_ligacao_matricula_campanha_equipe('$parametro','$campanha','$equipe');";

function verificaLinha($comando){
    $total = mysqli_num_rows($comando);
    if($total == 0){
        echo "<script>
        alert('Nenhum dado encontrado!'); location= './tabela_ligacoes.php';
        </script>";
    }
}

if ($tipoBusca == "matricula"){

    if($campanha != ""){   
        $resultado = mysqli_query($conn, $select_matricula_campanha);
        verificaLinha($resultado);

        /*if($equipe != ""){
            $resultado = mysqli_query($conn, $select_matricula_campanha_equipe);
            verificaLinha($resultado);
        }*/
    }else{
        $resultado = mysqli_query($conn, $select_matricula);
        verificaLinha($resultado);
    }

}else if ($tipoBusca == "nome"){

    if($campanha != ""){   
        $resultado = mysqli_query($conn, $select_nome_campanha);
        verificaLinha($resultado);
    }else{
        $resultado = mysqli_query($conn, $select_nome);
        verificaLinha($resultado);
    }

}else if ($tipoBusca == "ani"){
    $resultado = mysqli_query($conn, $select_ani);
    verificaLinha($resultado);
}else{
    $resultado = mysqli_query($conn, $select_tabela_ligacao);
}



?>

<html>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>">                
    <div>
        <label>Pesquisar por:*</label> 
        <input type="radio" onClick="habilitaCampoBusca();" name="tipoBusca" id="radioMatricula" value="matricula">
        <label for="radioMatricula">Matricula</label>
            
        <input type="radio" onClick="habilitaCampoBusca();" name="tipoBusca" id="radioNome" value="nome">
        <label for="radioNome">Nome</label>

        <input type="radio" onClick="habilitaCampoBusca();" name="tipoBusca" id="radioAni" value="ani">
        <label for="radioAni">ANI</label>
    </div>

    <div>
        <label for="campoBusca">Digite a Matricula/Nome/ANI:*</label>
        <input type="text" onkeyup="habilitaCampoCampanha();" name="parametro" id="campoBusca" disabled="true">               
    </div>

    <div>
        <label for="campoCampanha">Campanha:</label>
        <input type="text" name="campanha" id="campoCampanha" disabled="true">

        <label for="campoEquipe">Equipe:</label>
        <input type="text" name="equipe" id="campoEquipe">
    </div>

            
    <input type="submit" value="Buscar">
    <input type="button" value="Limpar" onClick="limparCampos();"> 
    </form>

    <br>

    <div>
        <table border="1">
            <tr>
                <td>Matricula</td>
                <td>Nome</td>
                <td>ANI</td>
                <td>Função</td>
                <td>Data e Hora</td>
                <td>Campanha</td>
                <td>Equipe</td>
                <td>Resposta 1</td>
                <td>Resposta 2</td>
                <td>Resposta 3</td>
                <td>Resposta 4</td>
                <td>Resposta 5</td>
            </tr>

            <?php  while($dado = $resultado -> fetch_array()){ 
                if($dado['resposta_1'] == null){
                    $dado['resposta_1'] = "N/A";
                }
                if($dado['resposta_2'] == null){
                    $dado['resposta_2'] = "N/A";
                }
                if($dado['resposta_3'] == null){
                    $dado['resposta_3'] = "N/A";
                }
                if($dado['resposta_4'] == null){
                    $dado['resposta_4'] = "N/A";
                }
                if($dado['resposta_5'] == null){
                    $dado['resposta_5'] = "N/A";
                }
            ?>
            <tr>
                <td><?php echo $dado['matricula']; ?></td>
                <td><?php echo $dado['nome']; ?></td>
                <td><?php echo $dado['ani']; ?></td>
                <td><?php echo $dado['descricao'];?></td>               
                <td><?php echo $dado['data_hora']; ?></td>
                <td><?php echo $dado['campanha']; ?></td>
                <td><?php echo $dado['equipe']; ?></td>
                <td><?php echo $dado['resposta_1']; ?></td>
                <td><?php echo $dado['resposta_2']; ?></td>
                <td><?php echo $dado['resposta_3']; ?></td>
                <td><?php echo $dado['resposta_4']; ?></td>
                <td><?php echo $dado['resposta_5']; ?></td>
            </tr>
            <?php }?>
        </table>
    </div>
</html>

<script language="javascript">
    function habilitaCampoBusca(){
        if(document.getElementById('radioMatricula').checked == true || document.getElementById('radioNome').checked == true || document.getElementById('radioAni').checked == true){
            document.getElementById('campoBusca').disabled = false;
        }else{
            document.getElementById('campoBusca').disabled = true;
        }
    }

    function habilitaCampoCampanha(){
        if(document.getElementById('radioAni').checked == true){
            document.getElementById('campoCampanha').disabled = true;
        }else{
            if(document.getElementById('campoBusca').value != ''){
            document.getElementById('campoCampanha').disabled = false;
            }else{
            document.getElementById('campoCampanha').disabled = true;
            }
        } 
    }

    function limparCampos(){
        location.href="./tabela_ligacoes.php"
    }
</script>
    

