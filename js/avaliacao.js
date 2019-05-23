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
labelCampoBusca = document.getElementById('labelCampoBusca');
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

function limpezaCampos(){
    /*radioMatricula.cheked = false;
    radioNome.cheked = false;
    radioAni.cheked = false;
    campoBusca.value = "";
    campoCampanha.value = "";
    campoEquipe.value = "";*/

    location.href="./layout.php"
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

function alteraLabelCampoBusca(){
    if(radioMatricula.checked == true){
        labelCampoBusca.innerHTML = 'Digite a Matricula:*';
        divCampoBusca.style.display = 'block';
    }else if(radioNome.checked == true){
        labelCampoBusca.innerHTML = 'Digite o Agente:*';
        divCampoBusca.style.display = 'block';
    }else if(radioAni.checked == true){
        labelCampoBusca.innerHTML = 'Digite o Contato do Cliente:*';
        divCampoBusca.style.display = 'block';
    }
}

function naoLimpaFormulario(){
    radioMatricula.cheked = true;
}