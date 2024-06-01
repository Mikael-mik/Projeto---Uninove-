<?php
include_once('conectaBD.php');

$nome = $_POST['nome_fornecedor'];
$endereco = $_POST['endereco_fornecedor'];
$cnpj = $_POST['cnpj_fornecedor'];
$empresa = $_POST['empresa_fornecedor'];
$contato = $_POST['contato_fornecedor'];


$cadastrofuncionario = $conn->prepare("INSERT INTO fornecedor(nome, endereco, cnpj, empresa, contato) VALUES(:nome, :endereco, :cnpj, :empresa_fornecedor, :contato_fornecedor)");
$cadastrofuncionario->bindValue(":nome", "$nome");
$cadastrofuncionario->bindValue(":endereco", "$endereco");
$cadastrofuncionario->bindValue(":cnpj", "$cnpj");
$cadastrofuncionario->bindValue(":empresa_fornecedor", "$empresa");
$cadastrofuncionario->bindValue(":contato_fornecedor", "$contato");
$cadastrofuncionario->execute();


header("Location: lab.php");
?>
