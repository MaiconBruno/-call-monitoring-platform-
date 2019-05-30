<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>DashBoard JCR</title>

<!-- Custom fonts for this template-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<script language='JavaScript'>
//função para so permitir no campo numeros
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
		
	else   alert("Letras ou símbolos não são aceitos nesse campo!!"); return false;
    }
}
//função que permite letras e simbolos e acentuação
function soLetras(e){
	if (document.all){
		var evt=event.keyCode;
		}
	else{
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
</script>

<body class="bg-gradient-primary">
<div class="container">
  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0"> 
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg-5 d-none d-lg-block bg-register-image"> </div>
        <div class="col-lg-7">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h3 text-gray-900 mb-4">Preencha os campos para Editar</h1>
            </div>
            <form class="user" method="POST" action="./php/salvar_dados.php">
              <div class="form-group row" style="margin-top:30px">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" onkeypress='return soLetras(event)' required id="nome" placeholder="Nome" disabled>
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control form-control-user" onkeypress='return soLetras(event)' required id="sobrenome" placeholder="Sobrenome" disabled>
                </div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control form-control-user" id="email" required placeholder="Email">
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="password" class="form-control form-control-user" id="senha" required placeholder="Senha">
                </div>
                <div class="col-sm-6">
                  <input type="password" class="form-control form-control-user" id="confirmarsenha" required placeholder="Confirmar senha">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" required id="matricula" maxlength="15" placeholder="Matricula" disabled>
                </div>
                <div class="col-sm-6">
                  <select id="nivel" class="custom-select" name="nivel" required>
                    <option id="agente" required value="valor1">Agente</option>
                    <option id="supervisor" required value="valor2">Supervisor</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" required id="ramal" onkeypress='return SomenteNumero(event)' maxlength="12" placeholder="Ramal">
                </div>
                <div class="col-sm-6">
                  <input type="text" required onkeypress='return SomenteNumero(event)' maxlength="14" class="form-control form-control-user" id="cpf" placeholder="CPF" disabled>
                </div> 
              </div>
              <button type="submit" class="btn btn-success btn-sm btn-user btn-block">Editar cadastro</button>
            </form>
            <hr>
            <div class="text-center">
              <h5 class="font-weight-bold"> O que deseja fazer agora...?</h5>
              <a href="./busca.php"><button type="submit" id="cadastranovo"  class="btn btn-success btn-sm btn-user">Editar novo usuário</button></a>
              <button type="submit" id="excluir" onClick="abrir2()" class="btn btn-danger btn-sm btn-user">Excluir usuário</button></a>
              <a href="./config.php"><button type="submit" id="voltar" class="btn btn-secondary btn-sm btn-user">Voltar</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript--> 
<script src="bibliotecas/jquery/jquery.min.js"></script> 
<script src="bibliotecas/bootstrap/js/bootstrap.bundle.min.js"></script> 

<!-- Core plugin JavaScript--> 
<script src="bibliotecas/jquery-easing/jquery.easing.min.js"></script> 

<!-- Custom scripts for all pages--> 
<script src="js/sb-admin-2.min.js"></script>
</body>
</html>
