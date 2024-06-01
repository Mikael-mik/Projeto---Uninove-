<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Cadastro</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<script>
  $("#fecharcadastro").click(function(){
   $("#fechar_form").remove();
   })
</script>


<div class="cadastro_form" id="fechar_form">


    <a href="#" id="fecharcadastro" class="fechar_cadastro">X</a>
        
    
    <form action="cadfuncionario.php" method="post">
    <h3>Cadastro Funcionario</h3>
            <input type="text" placeholder="Nome Completo" name="nome" id="input"><br>
            <input type="text" placeholder="Endereço" name="endereco" id="input"><br>
            <input type="text" placeholder="Telefone:" name="telefone" id="input"><br>
            <input type="text" placeholder="CPF" name="cpf" id="input"><br><br>

            <input type="text" placeholder="E-Mail:" name="email" id="input"><br>
            <input type="text" placeholder="Senha:" name="senha" id="input"><br><br>
            <input type="submit" value="Cadastrar" id="input">
        </form>

</div>

</body>
</html>