
function fMasc(objeto, mascara) {
    obj = objeto
    masc = mascara
    setTimeout("fMascEx()", 1)
}
function fMascEx() {
    obj.value = masc(obj.value)
}
function mTel(tel) {
    tel = tel.replace(/\D/g, "")
    tel = tel.replace(/^(\d)/, "($1")
    tel = tel.replace(/(.{3})(\d)/, "$1)$2")
    if (tel.length == 9) {
        tel = tel.replace(/(.{1})$/, "-$1")
    } else if (tel.length == 10) {
        tel = tel.replace(/(.{2})$/, "-$1")
    } else if (tel.length == 11) {
        tel = tel.replace(/(.{3})$/, "-$1")
    } else if (tel.length == 12) {
        tel = tel.replace(/(.{4})$/, "-$1")
    } else if (tel.length > 12) {
        tel = tel.replace(/(.{4})$/, "-$1")
    }
    return tel;
}
function mCNPJ(cnpj) {
    cnpj = cnpj.replace(/\D/g, "")
    cnpj = cnpj.replace(/^(\d{2})(\d)/, "$1.$2")
    cnpj = cnpj.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3")
    cnpj = cnpj.replace(/\.(\d{3})(\d)/, ".$1/$2")
    cnpj = cnpj.replace(/(\d{4})(\d)/, "$1-$2")
    return cnpj
}
function mCPF(cpf) {
    cpf = cpf.replace(/\D/g, "")
    cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2")
    cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2")
    cpf = cpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2")
    return cpf
}
function mCEP(cep) {
    cep = cep.replace(/\D/g, "")
    cep = cep.replace(/^(\d{2})(\d)/, "$1.$2")
    cep = cep.replace(/\.(\d{3})(\d)/, ".$1-$2")
    return cep
}
function mNum(num) {
    num = num.replace(/\D/g, "")
    return num
}


//função para so permitir no campo numeros
function SomenteNumero(e) {
    var tecla = (window.event) ? event.keyCode : e.which;
    if ((tecla > 47 && tecla < 58)) return true;
    else {
        if (tecla == 8 || tecla == 0) return true;

        else alert("Letras ou símbolos não são aceitos nesse campo!!");
        return false;
    }
}
//função que permite letras e simbolos e acentuação
function soLetras(e) {
    if (document.all) {
        var evt = event.keyCode;
    } else {
        var evt = e.charCode;
    }
    var chr = String.fromCharCode(evt);
    // var re = /[A-Za-z]/; // se prefere somente letras de A-Z e de a-z 
    var re = /[A-Za-z\s-ÃÕÑÁÉjgxÍÓÚÀÜÇãõñáéíóúàçü]/; // permite de A-Z, a-z, espaços,
    // hífens e caracteres acentuados. Mais caracteres podem ser adicionados a Lista
    return (re.test(chr)); // com evt<20 permitimos <ENTER>,<TAB>,<BACKSPACE>
}

function abrir(URL) {
    window.open('busca.html', 'janela', 'width=1200, height=450, top=100, left=699, scrollbars=no, status=no, toolbar=no, location=no, menubar=no, resizable=no, fullscreen=no')
}

function abrir2(URL) {
    window.open('excluir.html', 'janela', 'width=1200, height=700, top=100, left=699, scrollbars=no, status=no, toolbar=no, location=no, menubar=no, resizable=no, fullscreen=no')
}

function esconderCampoPesquisa() {
    document.getElementById("id").style.display = "none"; // esconte
 }


 function limparsenha(){
        document.getElementById('password').value=''; 
        document.getElementById('confirmarsenha').value='';     
 }

 function limparramal(){
    document.getElementById('ramal').value=''; 
 
}

function limparmatricula(){
    document.getElementById('matricula').value=''; 
  
}

function limparusuario(){
    document.getElementById('usuario').value=''; 
      
}