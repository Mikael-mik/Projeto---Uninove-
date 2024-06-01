<?php
include_once('conectaBD.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $opcaoSelecionada = $_POST['grupo'];
    $busca = $_POST['consulta']; 
    
        // Define o campo de busca com base na tabela selecionada
        $campoBusca = $opcaoSelecionada == 'compraequipamentos' ? 'modelo' : 'nome';

    $consulta = $conn->query("SELECT * FROM $opcaoSelecionada WHERE $campoBusca LIKE '%$busca%'");
   
    while($row = $consulta->fetch(PDO::FETCH_ASSOC)) {
        $numerolimpo = preg_replace('/\D/', '', $row['contato']);
        switch ($opcaoSelecionada) {
            
            case 'cliente':
                echo "<table>
                <tr>
                <td>
                {$row['id']}
                </td>
                <td>
                {$row['nome']}
                </td>
                <td>
                CPF:{$row['cpf']}
                </td>
                <td>
                {$row['endereco']}
                </td>
                <td>
                {$row['contato']}
                </td>
                <td>
                <a href='edit.php?id={$row['id']}'>
                    <img src='img/editar.png' style='margin-left:0.5vw; width:16px;'>
                </a>
                <a href='deletar.php?id={$row['id']}'>
                    <img src='img/deletar.png' style='margin-left:0.5vw; width:16px;'>
                </a>
                <a href='https://api.whatsapp.com/send?phone={$numerolimpo}' target='_blank'>
                    <img src='img/whats.png' style='margin-left:0.5vw; width:16px;'>
                </a>
                
                </td>
                </tr>
                </table>";
                break;
            case 'fornecedor':
                echo "<table>
                <tr>
                <td>
                Nome: {$row['nome']}
                </td>
                <td>
                {$row['endereco']}
                </td>
                <td>
                CNPJ:{$row['cnpj']}
                </td>
                <td>
                Empresa: {$row['empresa']}
                </td>
                <td>
                {$row['contato']}
                </td>
                <td>
                <a href='edit_fornecedor.php?id={$row['id']}'>
                    <img src='img/editar.png' style='width:16px;'>
                </a>
                <a href='deletar_fornecedor.php?id={$row['id']}'>
                    <img src='img/deletar.png' style='margin-left:0.5vw; width:16px;'>
                </a>

                <a href='https://api.whatsapp.com/send?phone={$numerolimpo}' target='_blank'>
                    <img src='img/whats.png' style='margin-left:0.5vw; width:16px;'>
                </a>
                </td>
                </tr>
                </table>";
                break;
            case 'compraequipamentos':
                echo "<table>
                <tr>
                <td>
                {$row['id']}
                </td>
                <td>
                Modelo:{$row['modelo']}
                </td>
                <td>
                Nota Fiscal:{$row['notafiscal']}
                </td>
                <td>
                Valor:{$row['valor']}
                </td>
                <td>
                Fornecedor:{$row['fornecedor']}
                </td>
                <td>
                <a href='edit_equipamento.php?id={$row['id']}'>
                    <img src='img/editar.png' style='margin-left:0.5vw; width:16px;'>
                </a>
                <a href='deletar_equipamento.php?id={$row['id']}'>
                    <img src='img/deletar.png' style='margin-left:0.5vw; width:16px;'>
                </a>
                </td>
                </tr>
                </table>";
                break;
        }
    }
}
?>