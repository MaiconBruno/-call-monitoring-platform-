//Valida a senha e confirmar senha.
var password = document.getElementById("password")
  , confirmarsenha = document.getElementById("confirmarsenha");

function validatePassword(){
  if(password.value != confirmarsenha.value) {
    confirmarsenha.setCustomValidity("Senhas diferentes!");
  } else {
    confirmarsenha.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirmarsenha.onkeyup = validatePassword;



