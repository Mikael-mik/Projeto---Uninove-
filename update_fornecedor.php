<?php
// Conexão com o banco de dados
include_once('conectaBD.php');

// Recuperando os dados POST
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$cnpj = $_POST['cnpj'];
$empresa = $_POST['empresa'];
$contato = $_POST['contato'];
$id = $_POST['id']; // Certifique-se de que você está passando o ID corretamente

// Consulta SQL para atualizar a tabela clientes
$sql_update = "UPDATE fornecedor SET nome='$nome', endereco='$endereco', cnpj='$cnpj', empresa='$empresa', contato='$contato' WHERE id='$id'";

// Executando a consulta SQL
$resultado_update = $conn->query($sql_update);

header("Location: lab.php");
?>