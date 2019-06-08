
<?php
//Importa a validação da sessão para evitar acesso via URL
include('./php/validaPagina.php');
//verifica se a pagina pertence ao nivel do usuario logado 
if ($_SESSION['Logado'] = true && $_SESSION['usuarioNiveisAcessoId'] != "1") { // comparação para verificar o nivel do acesso
  session_start();
  unset($_SESSION['usuarioId'],
  $_SESSION['usuarioNome'],
  $_SESSION['usuarioNiveisAcessoId'],
  $_SESSION['usuarioLogin'],
  $_SESSION['usuarioSenha']);
  header("Location: index.php");
  $_SESSION['loginAcesso'] = "Acesso Negado!"; //mensagem exibida quando o acesso não e permitido 
  exit();
} else { }
?>

<?php
if ($_SESSION['buscaRealiza'] == true) {
  $id_user =  $_SESSION['id_usuario'];
  $nome_user = $_SESSION['nome'];
  $sobrenome_user = $_SESSION['sobrenome'];
  $usuario_user = $_SESSION['usuario'];
  $senha_user = $_SESSION['senha'];
  $matricula_user = $_SESSION['matricula'];
  $ramal_user = $_SESSION['ramal'];
  $cpf_user = $_SESSION['cpf'];
  $funcao_user = $_SESSION['funcao'];

    unset(
      $_SESSION['id_usuario'] ,
      $_SESSION['nome'] ,
      $_SESSION['sobrenome'] ,
      $_SESSION['usuario'] ,
      $_SESSION['senha']  ,
      $_SESSION['matricula'] ,
      $_SESSION['ramal']  ,
      $_SESSION['cpf']  ,
      $_SESSION['funcao'],
      $_SESSION['buscaRealiza'] 
  
    );
 

}else{
  unset(
    $_SESSION['id_usuario'] ,
    $_SESSION['nome'] ,
    $_SESSION['sobrenome'] ,
    $_SESSION['usuario'] ,
    $_SESSION['senha']  ,
    $_SESSION['matricula'] ,
    $_SESSION['ramal']  ,
    $_SESSION['cpf']  ,
    $_SESSION['funcao'],
    $_SESSION['buscaRealiza'] 
  );
  header("Location:./busca.php");
  $_SESSION['AlertaBusca'] = 'Usuario não encontrado!';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="./php/editar_dados.php">

        <input type="text" id="id" name="id" value="<?php echo $id_user; ?>">
        <input type="text" id="nome" name="nome"  value="<?php echo $nome_user; ?>">
        <input type="text" id="sobrenome" name="sobrenome"  value="<?php echo $sobrenome_user; ?>">
        <input type="text" id="usuario" name="usuario"  value="<?php echo $usuario_user; ?>">
        <input type="text" id="cpf" name="cpf"  value="<?php echo $cpf_user; ?>">
        <input type="text" id="senha" name="senha"  value="<?php echo $senha_user; ?>">
        <input type="text" id="ramal" name="ramal"  value="<?php echo $ramal_user; ?>">
        <input type="text" id="matricula" name="matricula"  value="<?php echo $matricula_user; ?>">
        <input type="submit">
    </form>
</body>

</html>