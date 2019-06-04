<?php
//Starta a sessão da pagina. 
session_start();

//verifica se a sessão existe, se não existir ele redireciona para pagina de login
if (isset($_SESSION['usuarioId']) === true) { //não faz nada caso a sessão exista
   
 } else { //Caso ela n exista redireciona para pagina de login
  header("Location: index.php");
  exit(); // interrompe o funcionamento da pagina para não prosseguir com a leitura do codigo. 
}

