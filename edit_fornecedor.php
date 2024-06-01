<?php
include_once('conectaBD.php');

$id = $_GET['id'];

$consulta = $conn->prepare("SELECT * FROM fornecedor WHERE id=:id");
$consulta->execute([':id' => $id]);

if($consulta->rowCount() > 0 ){
    while($row = $consulta->fetch(PDO::FETCH_ASSOC)){
        $nome = $row['nome'];
        $endereco = $row['endereco'];
        $cnpj = $row['cnpj'];
        $empresa = $row['empresa'];
        $contato = $row['contato'];
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
    <form action="update_fornecedor.php" method="post">
    <h2>Atualizar Fornecedor</h2><br>
          Nome: <input type="text" value="<?php echo $nome;?>" name="nome"><br>
            Endereço: <input type="text" value="<?php echo $endereco;?>" name="endereco"><br>
            CNPJ: <input type="text" value="<?php echo $cnpj;?>" name="cnpj"><br><br>

            Empresa: <input type="text" value="<?php echo $empresa;?>" name="empresa"><br>
            Contato: <input type="text" value="<?php echo $contato;?>" name="contato"><br><br>
            <input type="hidden" value="<?php echo $id;?>" name="id"><br><br>
            <input type="submit" value="Atualizar" id="input">
        </form>
</div>
</body>
</html>