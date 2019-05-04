<?php
include ('../php/conexao.php');

$tipoBusca = filter_input(INPUT_GET, "tipoBusca");
$parametro = filter_input(INPUT_GET, "parametro");
$campanha = filter_input(INPUT_GET, "campanha");
$equipe = filter_input(INPUT_GET, "equipe");
$dataInicial = filter_input(INPUT_GET, "dataInicial");
$dataFinal = filter_input(INPUT_GET, "dataFinal");

$select_tabela_ligacao = "CALL select_tbl_ligacao();";

$select_matricula = "CALL select_tbl_ligacao_matricula('$parametro');";
$select_nome = "CALL select_tbl_ligacao_nome('$parametro');";
$select_ani = "CALL select_tbl_ligacao_ani('$parametro');";

$select_matricula_campanha = "CALL select_tbl_ligacao_matricula_campanha('$parametro','$campanha');";
$select_nome_campanha = "CALL select_tbl_ligacao_nome_campanha('$parametro','$campanha');";
$select_ani_campanha = "CALL select_tbl_ligacao_ani_campanha('$parametro','$campanha');";

$select_matricula_campanha_equipe = "CALL select_tbl_ligacao_matricula_campanha_equipe('$parametro','$campanha','$equipe');";
$select_nome_campanha_equipe = "CALL select_tbl_ligacao_nome_campanha_equipe('$parametro', '$campanha', '$equipe');";
$select_ani_campanha_equipe = "CALL select_tbl_ligacao_ani_campanha_equipe('$parametro', '$campanha', '$equipe');";

$select_matricula_data = "CALL select_tbl_ligacao_matricula_data('$parametro','$dataInicial','$dataFinal');";
$select_nome_data = "CALL select_tbl_ligacao_nome_data('$parametro','$dataInicial','$dataFinal');";
$select_ani_data = "CALL select_tbl_ligacao_ani_data('$parametro','$dataInicial','$dataFinal');";

$select_matricula_campanha_data = "CALL select_tbl_ligacao_matricula_campanha_data('$parametro','$campanha','$dataInicial','$dataFinal');";
$select_nome_campanha_data = "CALL select_tbl_ligacao_nome_campanha_data('$parametro','$campanha','$dataInicial','$dataFinal');";
$select_ani_campanha_data = "CALL select_tbl_ligacao_ani_campanha_data('$parametro','$campanha','$dataInicial','$dataFinal');";

$select_matricula_campanha_equipe_data = "CALL select_tbl_ligacao_matricula_campanha_equipe_data('$parametro','$campanha','$equipe','$dataInicial','$dataFinal');";
$select_nome_campanha_equipe_data = "CALL select_tbl_ligacao_nome_campanha_equipe_data('$parametro','$campanha','$equipe','$dataInicial','$dataFinal');";
$select_ani_campanha_equipe_data = "CALL select_tbl_ligacao_ani_campanha_equipe_data('$parametro','$campanha','$equipe','$dataInicial','$dataFinal');";

$select_data = "CALL select_tbl_ligacao_data('$dataInicial','$dataFinal');";
$select_campanha_data = "CALL select_tbl_ligacao_campanha_data('$campanha','$dataInicial','$dataFinal');";
$select_campanha_equipe_data = "CALL select_tbl_ligacao_campanha_equipe_data('$campanha','$equipe','$dataInicial','$dataFinal');";

function verificaLinha($comando){
    $total = mysqli_num_rows($comando);
    if($total == 0){
        echo "<script>
        alert('Nenhum dado encontrado!'); location= './tabela_ligacoes.php';
        </script>";
    }
}

if ($tipoBusca == "matricula"){

    if($campanha != "" && $equipe == "" && $dataInicial == "" && $dataFinal == ""){   
        $resultado = mysqli_query($conn, $select_matricula_campanha);
        verificaLinha($resultado);  
    }
    else if($campanha == "" && $equipe == "" && $dataInicial != "" && $dataFinal != ""){
        $resultado = mysqli_query($conn, $select_matricula_data);
        verificaLinha($resultado);
    }
    else if($campanha != "" && $equipe != "" && $dataInicial == "" && $dataFinal == ""){
        $resultado = mysqli_query($conn, $select_matricula_campanha_equipe);
        verificaLinha($resultado);
    }
    else if($campanha != "" && $equipe == "" && $dataInicial != "" && $dataFinal != ""){
        $resultado = mysqli_query($conn, $select_matricula_campanha_data);
        verificaLinha($resultado);
    }
    else if($campanha != "" && $equipe != "" && $dataInicial != "" && $dataFinal != ""){
        $resultado = mysqli_query($conn, $select_matricula_campanha_equipe_data);
        verificaLinha($resultado);
    }
    else{
        $resultado = mysqli_query($conn, $select_matricula);
        verificaLinha($resultado);
    }

}else if ($tipoBusca == "nome"){

    if($campanha != "" && $equipe == "" && $dataInicial == "" && $dataFinal == ""){   
        $resultado = mysqli_query($conn, $select_nome_campanha);
        verificaLinha($resultado);
    }
    else if($campanha == "" && $equipe == "" && $dataInicial != "" && $dataFinal != ""){
        $resultado = mysqli_query($conn, $select_nome_data);
        verificaLinha($resultado);
    }
    else if($campanha != "" && $equipe != "" && $dataInicial == "" && $dataFinal == ""){
        $resultado = mysqli_query($conn, $select_nome_campanha_equipe);
        verificaLinha($resultado);
    }
    else if($campanha != "" && $equipe == "" && $dataInicial != "" && $dataFinal != ""){
        $resultado = mysqli_query($conn, $select_nome_campanha_data);
        verificaLinha($resultado);
    }
    else if($campanha != "" && $equipe != "" && $dataInicial != "" && $dataFinal != ""){
        $resultado = mysqli_query($conn, $select_nome_campanha_equipe_data);
        verificaLinha($resultado);
    }
    else{
        $resultado = mysqli_query($conn, $select_nome);
        verificaLinha($resultado);
    }

}else if ($tipoBusca == "ani"){

    if($campanha != "" && $equipe == "" && $dataInicial == "" && $dataFinal == ""){   
        $resultado = mysqli_query($conn, $select_ani_campanha);
        verificaLinha($resultado);
    }
    else if($campanha != "" && $equipe != "" && $dataInicial == "" && $dataFinal == ""){
        $resultado = mysqli_query($conn, $select_ani_campanha_equipe);
        verificaLinha($resultado);
    }
    else if($campanha == "" && $equipe == "" && $dataInicial != "" && $dataFinal != ""){
        $resultado = mysqli_query($conn, $select_ani_data);
        verificaLinha($resultado);
    }
    else if($campanha != "" && $equipe == "" && $dataInicial != "" && $dataFinal != ""){
        $resultado = mysqli_query($conn, $select_ani_campanha_data);
        verificaLinha($resultado);
    }
    else if($campanha != "" && $equipe != "" && $dataInicial != "" && $dataFinal != ""){
        $resultado = mysqli_query($conn, $select_ani_campanha_equipe_data);
        verificaLinha($resultado);
    }
    else{
        $resultado = mysqli_query($conn, $select_ani);
        verificaLinha($resultado);
    }

}else if ($tipoBusca == "data"){
    if($campanha == "" && $equipe == "" && $dataInicial != "" && $dataFinal != ""){
        $resultado = mysqli_query($conn, $select_data);
        verificaLinha($resultado);
    }
    else if($campanha != "" && $equipe == "" && $dataInicial != "" && $dataFinal != ""){
        $resultado = mysqli_query($conn, $select_campanha_data);
        verificaLinha($resultado);
    }
    else if($campanha != "" && $equipe != "" && $dataInicial != "" && $dataFinal != ""){
        $resultado = mysqli_query($conn, $select_campanha_equipe_data);
        verificaLinha($resultado);
    }
}else{
    $resultado = mysqli_query($conn, $select_tabela_ligacao);
}



?>

<html>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>">                
    <div>
        <label>Pesquisar por:*</label> 
        <input type="radio" onclick="habilitaCampoBusca(),escondeDiv()" name="tipoBusca" id="radioMatricula" value="matricula">
        <label for="radioMatricula">Matricula</label>
            
        <input type="radio" onclick="habilitaCampoBusca(),escondeDiv()" name="tipoBusca" id="radioNome" value="nome">
        <label for="radioNome">Agente</label>

        <input type="radio" onclick="habilitaCampoBusca(),escondeDiv()" name="tipoBusca" id="radioAni" value="ani">
        <label for="radioAni">Contato do Cliente</label>

        <input type="radio" onclick="escondeDiv();" name="tipoBusca" id="radioData" value="data">
        <label for="radioData">Data</label>
    </div>

    <div id="divCampoBusca">
        <label for="campoBusca">Digite a Matricula/Agente/Contato do Cliente:*</label>
        <input type="text" onkeyup="habilitaCampoCampanha()" name="parametro" id="campoBusca" disabled="true">               
    </div>

    <div id="divCampanhaEquipe">
        <label for="campoCampanha">Campanha:</label>
        <input type="text" onkeyup="habilitaCampoEquipe()" name="campanha" id="campoCampanha" disabled="true">

        <label for="campoEquipe">Equipe:</label>
        <input type="text" name="equipe" id="campoEquipe" disabled="true" >
    </div>

    <div id="divData">
        <label for="campoDataInicial" id="labelDataInicial">Data Inical:</label>
        <input type="date" name="dataInicial" id="campoDataInicial" disabled="true">

        <label for="campoDataFinal" id="labelDataFinal">Data Final:</label>
        <input type="date" onmouseleave="habilitaCampoCampanhaData()" name="dataFinal" id="campoDataFinal" disabled="true">
    </div>

            
    <input type="submit" value="Buscar" id="btnBuscar" disabled="true">
    <input type="button" value="Limpar" onclick="limparCampos();"> 
    </form>

    <br>

    <div>
        <table border="1">
            <tr>
                <td>Matricula</td>
                <td>Agente</td>
                <td>Contato do Cliente</td>
                <td>Função</td>
                <td>Data</td>
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
    radioMatricula = document.getElementById('radioMatricula');
    radioNome = document.getElementById('radioNome');
    radioAni = document.getElementById('radioAni');
    radioData = document.getElementById('radioData');
    campoBusca = document.getElementById('campoBusca');
    campoCampanha = document.getElementById('campoCampanha');
    campoEquipe = document.getElementById('campoEquipe');
    campoDataInicial = document.getElementById('campoDataInicial');
    campoDataFinal = document.getElementById('campoDataFinal');
    divCampoBusca = document.getElementById('divCampoBusca');
    divCampanhaEquipe = document.getElementById('divCampanhaEquipe');    
    divData = document.getElementById('divData');    
    labelDataInicial = document.getElementById('labelDataInicial');
    labelDataFinal = document.getElementById('labelDataFinal');
    btnBuscar = document.getElementById('btnBuscar');

    function habilitaCampoBusca(){
        if(radioMatricula.checked == true || radioNome.checked == true || radioAni.checked == true){
            campoBusca.disabled = false;
        }else{
            campoBusca.disabled = true;
        }
    }

    function habilitaCampoCampanha(){
        if(campoBusca.value != ''){
            campoCampanha.disabled = false;
            campoDataInicial.disabled = false;
            campoDataFinal.disabled = false;
            btnBuscar.disabled = false;
        }else{
            campoCampanha.disabled = true;
            campoDataInicial.disabled = true;
            campoDataFinal.disabled = true;
            btnBuscar.disabled = true;
        }
    }

    function habilitaCampoEquipe(){
        if(campoCampanha.value == ''){
            campoEquipe.disabled = true;
        }else{
            campoEquipe.disabled = false;
        }
    }

    function limparCampos(){
        /*radioMatricula.cheked = false;
        radioNome.cheked = false;
        radioAni.cheked = false;
        campoBusca.value = "";
        campoCampanha.value = "";
        campoEquipe.value = "";*/

        location.href="./tabela_ligacoes.php"
    }

    function escondeDiv(){
        if(radioData.checked == true){
            divCampoBusca.style.display = "none";
            divCampanhaEquipe.style.display = "block";
            divData.style.display = "block";
            campoDataInicial.disabled = false;
            campoDataFinal.disabled = false;
            labelDataInicial.innerHTML = "Data Inical:*";
            labelDataFinal.innerHTML = "Data Final:*";
        }else{
            divCampoBusca.style.display = "block";
            divCampanhaEquipe.style.display = "block";
            divData.style.display = "block";
            campoDataInicial.disabled = true;
            campoDataFinal.disabled = true;
            labelDataInicial.innerHTML = "Data Inical:";
            labelDataFinal.innerHTML = "Data Final:";
        }
    }

    function habilitaCampoCampanhaData(){
        if(radioData.checked == true){
            if(campoDataFinal.value == ''){
                campoCampanha.disabled = true;
                btnBuscar.disabled = true;
            }else{
                campoCampanha.disabled = false;
                btnBuscar.disabled = false;
            }
        }   
    }

    /*function habilitaBotaoBuscar(){
        if(radioMatricula.checked == true || radioNome.checked == true || radioAni.checked == true && campoBusca != ''){
            btnBuscar.disabled = false;
        }else{
            btnBuscar.disabled = true;
        }
    }*/
</script>
    

