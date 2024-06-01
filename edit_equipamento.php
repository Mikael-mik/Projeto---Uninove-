<?php
include_once('conectaBD.php');
$id = $_GET['id'];
$consulta = $conn->prepare("SELECT * FROM compraequipamentos WHERE id=:id");
$consulta->execute([':id' => $id]);
if($consulta->rowCount() > 0 ){
    while($row = $consulta->fetch(PDO::FETCH_ASSOC)){
        $modelo = $row['modelo'];
        $notafiscal = $row['notafiscal'];
        $fornecedor = $row['fornecedor'];
        $valor = $row['valor'];
        $id = $row['id'];
    }
}else{
    echo 'FALHA';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Cadastro</title>
</head>
<body>
<script>
$(document).ready(function(){
  $("#fecharjanela").click(function(){ 
    $("#fechar_form").remove(); 
    window.location.href = 'lab.php'; // Redireciona para a página lab.php
  });
});
</script>
<div class="cadastro_form" id="fechar_form">
    <a href="#" id="fecharjanela" class="fechar_cadastro">X</a>
    <form action="update_equipamento.php" method="post">
    <h2>Atualizar Equipamento</h2><br>
            Modelo: <input type="text" value="<?php echo $modelo;?>" plac name="modelo"><br>
            Nota:<input type="text" value="<?php echo $notafiscal;?>" name="notafiscal"><br>
            Fornecedor: <input type="text" value="<?php echo $valor;?>" name="fornecedor"><br>
            Valor: <input type="text" value="<?php echo $fornecedor;?>" name="valor"><br><br>
            <input type="hidden" value="<?php echo $id;?>" name="id"><br><br>
            <input type="submit" value="Atualizar" id="input">
        </form>
</div>
</body>
</html>