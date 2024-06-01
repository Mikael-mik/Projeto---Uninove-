<?php
include_once('conectaBD.php');

$nome = $_POST['nomecliente'];
$endereco = $_POST['endereco_cliente'];
$cpf = $_POST['cpf_cliente'];
$empresa = $_POST['empresa_cliente'];
$contato = $_POST['contato_cliente'];


$cadastrofuncionario = $conn->prepare("INSERT INTO cliente(nome, endereco, cpf, empresa, contato) VALUES(:nome, :endereco, :cpf, :empresa, :contato)");
$cadastrofuncionario->bindValue(":nome", "$nome");
$cadastrofuncionario->bindValue(":endereco", "$endereco");
$cadastrofuncionario->bindValue(":cpf", "$cpf");
$cadastrofuncionario->bindValue(":empresa", "$empresa");
$cadastrofuncionario->bindValue(":contato", "$contato");
$cadastrofuncionario->execute();


header("Location: lab.php");
?>
