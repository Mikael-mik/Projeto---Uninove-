<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="sisdata.css">

<!-- Início do script -->
<script>// Aguarda o documento HTML ser completamente carregado

$(document).ready(function(){
    // Adiciona um ouvinte de evento de clique ao botão com a classe 'btn_busca'
    $('.btn_busca').click(function(e){
        // Previne o comportamento padrão do botão (por exemplo, enviar um formulário)
        e.preventDefault();
        
        // Faz uma requisição AJAX para o arquivo 'consulta.php'
        $.ajax({
            url: 'consulta.php', // URL para a qual a requisição é enviada
            type: 'post', // Método de envio da requisição
            data: $('form').serialize(), // Serializa os dados do formulário para envio
            success: function(result){ // Função a ser chamada se a requisição for bem-sucedida
                // Insere o resultado da requisição na div com id 'resultado'
                $('#resultado').html(result);
            }
        });
    });
});


// Função para abrir o popup
function openPopupE() {
  // Altera o estilo de exibição do elemento com id 'popupE' para 'block', tornando-o visível
  document.getElementById('popupE').style.display = 'block';
  // Altera o estilo de exibição do elemento com id 'overlayE' para 'block', tornando-o visível
  document.getElementById('overlayE').style.display = 'block';
}


// Função para fechar o popup
function closePopupE() {
  // Altera o estilo de exibição do elemento com id 'popupE' para 'none', tornando-o invisível
  document.getElementById('popupE').style.display = 'none';
  // Altera o estilo de exibição do elemento com id 'overlayE' para 'none', tornando-o invisível
  document.getElementById('overlayE').style.display = 'none';
}


// Função para formatar o telefone
function formatartelefone(input){
  // Remove caracteres que não sejam números
  var telefone =  input.value.replace(/|D/g, '');
  // Insere espaço e traço nos lugares corretos
  telefone =     telefone.replace(/(\d{2})(\d{5})(\d{4})/, '($1)$2-$3');
  // Atualiza o valor do campo de entrada com o telefone formatado
  input.value = telefone;
}


// Função para formatar o CPF
function mascaraCpf() {
  var cpf = document.getElementById('cpf');
  cpf.value = cpf.value.replace(/\D/g, '')                   // Remove qualquer coisa que não seja dígito
                       .replace(/(\d{3})(\d)/, '$1.$2')      // Coloca um ponto entre o terceiro e o quarto dígitos
                       .replace(/(\d{3})(\d)/, '$1.$2')      // Coloca um ponto entre o terceiro e o quarto dígitos de novo (para o segundo bloco de números)
                       .replace(/(\d{3})(\d{1,2})$/, '$1-$2') // Coloca um hífen entre o terceiro e o quarto dígitos
}


// Função para formatar o CNPJ
function mascaraCnpj() {
  var cnpj = document.getElementById('cnpj');
  cnpj.value = cnpj.value.replace(/\D/g, '')                   // Remove qualquer coisa que não seja dígito
                       .replace(/(\d{2})(\d)/, '$1.$2')        // Coloca um ponto entre o segundo e o terceiro dígitos
                       .replace(/(\d{3})(\d)/, '$1.$2')        // Coloca um ponto entre o terceiro e o quarto dígitos
                       .replace(/(\d{3})(\d)/, '$1/$2')        // Coloca uma barra entre o terceiro e o quarto dígitos
                       .replace(/(\d{4})(\d)/, '$1-$2')        // Coloca um hífen depois do segundo bloco de quatro dígitos
                       .replace(/(\d{2})\d+?$/, '$1');         // Captura os dois últimos dígitos e descarta o restante
}


// Função para formatar o valor
function mascaraValor() {
  var valor = document.getElementById('valor');
  valor.value = valor.value.replace(/\D/g, "") // Remove tudo o que não é dígito
                           .replace(/(\d{1})(\d{15})$/, "$1.$2") // Coloca ponto para separar os milhões
                           .replace(/(\d{1})(\d{11})$/, "$1.$2") // Coloca ponto para separar os milhares
                           .replace(/(\d{1})(\d{8})$/, "$1.$2")  // Coloca ponto para separar os milhares
                           .replace(/(\d{1})(\d{5})$/, "$1.$2")  // Coloca ponto para separar os milhares
                           .replace(/(\d{1})(\d{1,2})$/, "$1,$2") // Coloca virgula antes dos centavos
                           .replace(/^(\d)/, "R$ $1"); // Coloca o símbolo de Real
}



$(document).ready(function(){ // Aguarda o documento estar pronto
  $("#cepForm").on('submit', function(event) { // Ouve o evento 'submit' do formulário
    event.preventDefault(); // Previne recarregamento da página
    var cep = $(this).find('input[name="cep"]').val(); // Pega o valor do CEP
    $.ajax({ // Faz requisição AJAX
      url: 'http://viacep.com.br/ws/'+ cep +'/json/', // URL do serviço de CEP
      dataType: 'json', // Espera resposta em JSON
      success: function(data){ // Função se a requisição for bem-sucedida
        var endereco = "Rua: " + data.logradouro + "<br>" + // Formata o endereço
                       "Bairro: " + data.bairro + "<br>" +
                       "Cidade: " + data.localidade + "<br>" +
                       "Estado: " + data.uf + "<br>";
        $("#endereco").html(endereco); // Insere o endereço no elemento
      }
    });
  });
}); // Fim da função



       // Função para abrir o popup
       function openPopupFornecedor() {
            document.getElementById('popupF').style.display = 'block';
            document.getElementById('overlayF').style.display = 'block';
          }


          // Função para fechar o popup
          function closePopupF() {
            document.getElementById('popupF').style.display = 'none';
            document.getElementById('overlayF').style.display = 'none';
          }


          // Função para abrir o popup
          function openPopup() {
            document.getElementById('popup').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
          }

          
          // Função para fechar o popup
          function closePopup() {
            document.getElementById('popup').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
          }
</script>
<!-- Fim do script -->
</head>
<body>




      <div class='sair'>
              <!-- Link para a página inicial. O atributo 'target' com valor '_self' abre o link na mesma janela -->
              <a class='link' href="index.html" target='_self'>Sair</a>
      </div>





<!-- Início do container -->
<div class='container'> 
    
    <form action="consulta.php" method='post'>
        <input class='btn_consulta' type="text" name='consulta'><!-- Campo de entrada para a consulta -->
        <input class='btn_busca' type="submit" value="Busca"><br><!-- Botão de envio do formulário -->
        <input type="checkbox" class='checkbox' id="cliente" name="grupo" value='cliente'> Cliente<!-- Checkbox para selecionar o grupo 'cliente' -->
        <input type="checkbox" class='checkbox' id="fornecedor" name="grupo" value='fornecedor'> Fornecedor<!-- Checkbox para selecionar o grupo 'fornecedor' -->
        <input type="checkbox" class='checkbox' id="compraequipamentos" name="grupo" value='compraequipamentos'> Equipamentos<!-- Checkbox para selecionar o grupo 'compraequipamentos' -->
    </form>
    <!-- Fim do formulário de consulta -->
   
</div><!-- Fim do container -->


<!-- Div onde o resultado da consulta será inserido -->
<div id='resultado'></div>







<!-- =============================================================== -->
<!-- Botão para abrir o popup de cadastro de cliente -->
<button class='botaocliente' onclick="openPopup()">CADASTRO DE CLIENTE</button>
<!-- O overlay escuro -->
<div class="overlay" id="overlayF" onclick="closePopupF()"></div>

    <!-- Popup de cadastro de cliente -->
    <div class="popup" id="popup">
            <h2>Cadastro de Cliente</h2>
            
            <!-- Botão para fechar o popup -->
            <button class='fecharcliente' onclick="closePopup()">Fechar</button>
              <!-- Seção de busca de CEP -->
              <div class='api'>
              <form id="cepForm" method="post">
                CEP: <input class='btn_cep' type="text" name="cep">
                <input class='btn_buscacep' type="submit" value='Buscar'>
              </form>
                <!-- Seção para exibir o endereço -->
              <div id="endereco"></div>
            </div>
            <!-- Formulário de cadastro de cliente -->
            <form action="cadastro_cliente.php" method='post'>
              <input class='btn_cliente' type="text" name='nomecliente' placeholder="Nome do Cliente:"><br>
              <input class='btn_cliente' type="text" name='endereco_cliente' placeholder="Endereço:"><br>
              <input class='btn_cliente' type="text" name='cpf_cliente' onkeyup="mascaraCpf(this)" id='cpf' maxlength='14' placeholder='000.000.000.00'><br>
              <input class='btn_cliente' type="text" name='empresa_cliente' placeholder="Empresa do Cliente"><br>
              <input class='btn_cliente' type="tel" name='contato_cliente' onkeyup='formatartelefone(this)' maxlength='11' placeholder="( )_____-____"><br>
              <input class='btn_cliente' type='submit' name='botao_cliente' value='Cadastrar'><br>
            </form>
    </div>






    
<!-- =============================================================== -->

<!-- O botão FORNECEDOR que abre o popup -->
<div class='fornecedor'>
<!-- O botão que abre o popup -->
<button class='botaofornecedor' onclick="openPopupFornecedor()">CADASTRO FORNECEDOR</button>
</div>

<!-- O overlay escuro -->
<div class="overlayF" id="overlay" onclick="closePopupF()"></div>

<!-- O conteúdo do popup -->
<div class="popupF" id="popupF">
  <h2>Cadastro de Fornecedor</h2>
  <button class='fecharF' onclick="closePopupF()">Fechar</button>
  <p>
    <form action="cadastro_fornecedor.php" method='post'>
    <input class='btn_F' type="text" name='nome_fornecedor' placeholder="FORNECEDOR:"><br>
    <input class='btn_F' type="text" name='endereco_fornecedor' placeholder="ENDEREÇO:"><br>
    <input class='btn_F' type="text" name='cnpj_fornecedor' maxlength='18' id='cnpj' onkeyup='mascaraCnpj(this)' placeholder="CNPJ:"><br>
    <input class='btn_F' type="text" name='empresa_fornecedor' placeholder="EMPRESA"><br>
    <input class='btn_F' type="text" name='contato_fornecedor'  onkeyup='formatartelefone(this)' maxlength='11' placeholder="( )_____-____"><br>
    <input class='btn_F' type='submit' name='botao_fornecedor' value='Cadastrar'><br>
    </form>
</div></div>






<!-- =============================================================== -->

<!-- O botão EQUIPAMENTO que abre o popup -->
<div class='compraequipamentos'>
<!-- O botão que abre o popup -->
<button class='botaoE' onclick="openPopupE()">COMPRA EQUIPAMENTOS </button>

<!-- O overlay escuro -->
<div class="overlayE" id="overlayE" onclick="closePopupF()"></div>

<!-- O conteúdo do popup -->
<div class="popupE" id="popupE">
  <h2>Compra de Equipamentos</h2>
  <button class='fecharE' onclick="closePopupE()">Fechar</button>
  <p>
    <form action="cadastro_equipamentos.php" method='post'>
    <input class='btn_E' type="text" name='modelo' placeholder="Modelo:"><br>
 
    <input class='btn_E' type="text" name='numeronotafiscal' placeholder="Nº Nota Fiscal:"><br>
 
    <input class='btn_E' type="text" name='fornecedor' placeholder="Fornecedor:"><br>
    <input class='btn_E' type="text" onkeyup='mascaraValor(this)' id='valor' name='valor' placeholder="R$: "><br>
    <input class='btn_E' type='submit' name='botao_fornecedor' value='Cadastrar'><br>
    </form></p>
</div></div>


</body>
</html>
