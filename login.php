<?php
include_once('conectaBD.php');
$login = $_POST['email'];
$senha = $_POST['senha'];

//Sistema de login funcionando conferindo user e senha corretamente, LIMIT 1 usado para retornar somente um registro encontrado
$consulta = $conn->query("SELECT email, senha FROM usuario WHERE email = '".$login."' AND senha = '".$senha."' LIMIT 1  ");
$consulta->execute();


//faz a contagem de registro encontrados, e também é usado para satisfazer o controle de acesso a pagina do sistema
$resultado = $consulta->rowCount();

if($resultado === 1){
    header("Location: lab.php");
}else{
    echo '<center><h1>Usuario ou Senha Invalido</h1></center> 
    <form action="index.html "><input type="submit" value="VOLTAR"></form>';
}

?>