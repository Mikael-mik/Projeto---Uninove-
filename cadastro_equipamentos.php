<?php
include_once('conectaBD.php');

$modelo = $_POST['modelo'];
$notafiscal = $_POST['numeronotafiscal'];
$fornecedor = $_POST['fornecedor'];
$valor = $_POST['valor'];


$cadastrofuncionario = $conn->prepare("INSERT INTO compraequipamentos(modelo, notafiscal, fornecedor, valor) VALUES(:modelo, :notafiscal, :fornecedor, :valor)");
$cadastrofuncionario->bindValue(":modelo", "$modelo");
$cadastrofuncionario->bindValue(":notafiscal", "$notafiscal");
$cadastrofuncionario->bindValue(":fornecedor", "$fornecedor");
$cadastrofuncionario->bindValue(":valor", "$valor");
$cadastrofuncionario->execute();


header("Location: lab.php");
?>
