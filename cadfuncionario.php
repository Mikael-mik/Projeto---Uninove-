<?php
include_once('conectaBD.php');


$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$cadastrofuncionario = $conn->prepare("INSERT INTO usuario(nome, endereco, telefone, cpf, email, senha) VALUES(:nome, :endereco, :telefone, :cpf, :email, :senha)");
$cadastrofuncionario->bindValue(":nome", "$nome");
$cadastrofuncionario->bindValue(":endereco", "$endereco");
$cadastrofuncionario->bindValue(":telefone", "$telefone");
$cadastrofuncionario->bindValue(":cpf", "$cpf");
$cadastrofuncionario->bindValue(":email", "$email");
$cadastrofuncionario->bindValue(":senha", "$senha");
$cadastrofuncionario->execute();


header("Location: index.html");
?>
