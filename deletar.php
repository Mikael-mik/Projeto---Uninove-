<?php
include_once('conectaBD.php');
$id = $_GET['id'];
 
if(empty($id)){
    echo 'Falha variavel não existe';
}else{
    $sql_deleta = $conn->prepare("DELETE FROM cliente WHERE id=$id");
    $sql_deleta->execute();
    header("Location: lab.php");   
}


 
?>
