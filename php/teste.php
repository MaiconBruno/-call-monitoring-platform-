<?php

include ('conexao.php');
$sql = "SELECT * FROM funcionario"; 
$resulto = mysqli_query($conn, $sql);

while($row_usuario = mysqli_fetch_assoc($resulto)){
 
   
    echo "ID: " . $row_usuario['id_funcionario'] . "<br>";
    echo "Nome: " . $row_usuario['nome'] . "<br>";
    echo "CPF: " . $row_usuario['cpf'] . "<br>";        
    echo "Data de Cadastro: " . $row_usuario['matricula'] . "<br>";
    echo "Ramal: " . $row_usuario['ramal'] . "<br>";
    echo "Função: " . $row_usuario['funcao'] . "<br>";
    
}
?>  

