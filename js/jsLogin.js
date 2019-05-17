window.onload = function () { //executa toda vez que a página é carregada
   
    console.log("Executou o Window load de boas!");
    var entrarJs = document.getElementById("entrar"); // a variavel entrarJS recebe o botão Login. Pega pelo ID

    entrarJs.onclick = function () { //a variavel entrarJs tem um método chamado onclick que é o click do mouse.
        //estou dizendo que quando executar a ação de clicar no botão, ele vai executar a função login();
        login(); //função criada para executar o login no sistema.
    };

};

//essa função foi criada apenas para tratar dos erros de navegador que suporta 
//httprequest, e requisições ajax no navegador.
function CriaRequest() {  
    try {
        request = new XMLHttpRequest();
    } catch (IEAtual) {
        try {
            request = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (IEAntigo) {

            try {
                request = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (falha) {
                request = false;
            }
        }
    }
    if (!request)
        alert("Seu Navegador não suporta Ajax!");
    else
        return request;
}

function login() {
    console.log("chegou na funnção de login");

    var xmlreq = CriaRequest(); //cria um requesta (vai precisar para chamar o arquivo PHP)

    var email = document.getElementById("email"); //variavel usuário vai capturar o elemento de email na tela
    var senha = document.getElementById("senha"); //variavel que vai capturar o elemento onde está a senha na tela

    console.log("Executou o email e senha pegando dos componentes!");
    console.log("email" + email.value +"email" + senha.value);


    //estou fazendo uma requisição para o servior onde está o php, essa requisão vai ser executada no
    //valida.php. Esse arquivo precisa do email e senha passados nas variáveis email e senha do javascript
    //GET: méotodo de email, ".php/valida.php?parametors que serão recebidos + variaval do js.value"
    xmlreq.open("GET", "./php/valida.php/?email=" + email.value + "&senha=" + senha.value, true);
    //exempolo de link de chamada: localhost/php/valida.php?email="maico@email.com"&senha="123456"

    xmlreq.onreadystatechange = function () {

        if (xmlreq.readyState == 4 && xmlreq.status == 200) {
             console.log("consegui me conectar com o arquivo do php para logar!");

            var resposta = xmlreq.responseText;
           
            //alert("Resposta que veio do PHP: " + resposta);

            if (resposta == 1) {
                alert(email.value + " Bem vindo!");
                //após logado, o sistema vai redirecionar o usuário para a página graficos.html
                window.location.href = "graficos.html"; 
            /*} else if (resposta == 2) {
                alert("Bem Vindo " + email.value + "!!");
                window.location.href = "inicio.html";
                //window.location.href = "./ger/gestor.html";
            }else if (resposta == 3) {
                alert("Bem Vindo " + email.value + "!!!");
                window.location.href = "inicio.html";
                //window.location.href = "./usr/inicio.html";
            }else if (resposta == 4) {
                alert("Bem Vindo " + email.value + "!!!!");
                window.location.href = "inicio.html";
                //window.location.href = "./emp/cadastroSolicitacao.html";
            */} else {
                alert("Usuário não cadastrado.");
                window.location.href = "./index.html";
            }
        }
        console.log("erro na conexão com o php");

    };
    xmlreq.send(null);
}
