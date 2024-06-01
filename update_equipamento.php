<?php
// Conexão com o banco de dados
include_once('conectaBD.php');

// Recuperando os dados POST
$modelo = $_POST['modelo'];
$notafiscal = $_POST['notafiscal'];
$valor = $_POST['valor'];
$fornecedor = $_POST['fornecedor'];
$id = $_POST['id']; // Certifique-se de que você está passando o ID corretamente

// Consulta SQL para atualizar a tabela clientes
$sql_update = "UPDATE compraequipamentos SET modelo='$modelo', notafiscal='$notafiscal', fornecedor='$fornecedor', valor='$valor' WHERE id='$id'";

// Executando a consulta SQL
$resultado_update = $conn->query($sql_update);

header("Location: lab.php");
?>