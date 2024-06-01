<?php
include_once('conectaBD.php');

$id = $_GET['id'];
$consulta = $conn->prepare("SELECT * FROM cliente WHERE id=:id");
$consulta->execute([':id' => $id]);
if($consulta->rowCount() > 0 ){
    $row = $consulta->fetch(PDO::FETCH_ASSOC);
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
    <link rel="stylesheet" href="../css/cadastro.css">
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
    <form action="update_cliente.php" method="post">
    <h2>Atualizar Cliente</h2><br>
           Nome: <input type="text" value="<?php echo $row['nome'];?>" name="nome"><br>
           Endereço: <input type="text" value="<?php echo $row['endereco'];?>" name="endereco"><br>
            CPF: <input type="text" value="<?php echo $row['cpf'];?>" name="cpf"><br><br>
            Empresa: <input type="text" value="<?php echo $row['empresa'];?>" name="empresa"><br>
            Contato: <input type="text" value="<?php echo $row['contato'];?>" name="contato"><br><br>
            <input type="hidden" value="<?php echo $row['id'];?>" name="id"><br><br>
            <input type="submit" value="Atualizar" id="input">
        </form>
</div>
</body>
</html>