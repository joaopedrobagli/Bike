<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Orçamento</title>
  <meta name="description" content="Orçamento.">

  <link rel="stylesheet" href="../css/style.css">
</head>

<body id="orcamento">
  <header class="header-bg">
    <div class="header container">
    <a href="./inicio.php">
        <img src="../img/icones/bike.svg" width="76" height="12" alt="">
      </a> 

      <nav aria-label="primaria">
        <ul class="header-menu font-1-m cor-0">
        <li><a href="./bicicletas.php">Nossos Produtos</a></li>
            <li><a href="./contato.php">Contato</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <div class="titulo-bg">
      <div class="titulo container">
        <h1 class="font-1-xxl cor-0">Pagamento<span class="cor-p1">.</span></h1>
      </div>
    </div>

    <form action="./" class="orcamento container">
      

          

       
      <div class="orcamento-dados form">
        <h2 class="font-1-xs cor-9 col-2">Dados pessoais</h2>
          <div>
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome">
          </div>
          <div>
            <label for="sobrenome">Sobrenome</label>
            <input type="text" id="sobenome" name="sobrenome">
          </div>
          <div class="col-2">
            <label for="cpf">CPF</label>
            <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00">
          </div>
          <div class="col-2">
            <label for="email">Email </label>
            <input type="email" id="email" name="email">
          </div>

        <h2 class="font-1-xs cor-9 col-2">Entrega</h2>
          <div>
            <label for="cep">CEP</label>
            <input type="text" id="cep" name="cep">
          </div>
          <div>
            <label for="numero">Número</label>
            <input type="text" id="numero" name="numeo">
          </div>
          <div>
            <label for="cpf">Sobrenome</label>
            <input type="text" id="sobenome" name="sobrenome">
          </div>  
          <div>
            <label for="logadouro">Logradouro</label>
            <input type="text" id="logadouro" name="logadouro">
          </div>
          <div>
            <label for="bairro">Bairro</label>
            <input type="text" id="bairro" name="bairro">
          </div>
          <div>
            <label for="cidade">Cidade</label>
            <input type="text" id="cidade" name="cidade">
          </div>
          <div>
            <label for="estado">Estado</label>
            <input type="text" id="estado" name="estado">
          </div>
          <button class="botao col-2">PAGAR</button>
      </div>
    </form>
  </main>

  <footer class="footer-bg">
    <div class="footer container">
      <img src="./img/" alt="">
      <div class="footer-contato">
        <h3 class="font-2-l-b cor-0">Contato</h3>
        <ul class="font-2-m cor-5">
          <li><a href="tel:+551899999999">+55 18 9999-9999</a></li>
          <li><a href="mailto:contato@.com">contato@.com</a></li>
          <li>Rua adryanjoao, 999 - sumidos</li>
          <li>Presidente Prudente - SP</li>
        </ul>
        <div class="footer-redes">
          <a href="./">
            <img src="./img/redes/instagram.svg" alt="Instagram">
          </a>
          <a href="./">
            <img src="./img/redes/facebook.svg" alt="Facebook">
          </a>
          <a href="./">
            <img src="./img/redes/youtube.svg" alt="Youtube">
          </a>
        </div>
      </div>
      <div class="footer-informacoes">
        <h3 class="font-2-l-b cor-0">Informações</h3>
        <nav>
          <ul class="font-1-m cor-5">
            <li><a href="./bicicletas.html">Bicicletas</a></li>
            <li><a href="./seguros.html">Seguros</a></li>
            <li><a href="./contato.html">Contato</a></li>
            <li><a href="./termos.html">Termos e Condições</a></li>
          </ul>
        </nav>
      </div>
      <p class="footer-copy font-2-m cor-6">Adryan & Joao © Alguns direitos reservados.</p>
    </div>
  </footer>
 <script src="../js/script.js"></script>
</body>

</html>