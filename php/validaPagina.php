<?php
session_start();

//verifica se a sessão existe, se não existir ele redireciona para pagina de login
if (isset($_SESSION['usuarioId']) === true) {
 
 } else {
  header("Location: index.php");
  exit();
}

