<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Contato</title>
  <meta name="description" content="Termos e condições.">

  <link rel="stylesheet" href="../css/style.css">
</head>

<body id="contato">
  <header class="header-bg">
    <div class="header container">
    <a href="./inicio.php">
    <img src="../img/icones/bike.svg" alt="Logo" class="logo">
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
        <p class="font-2-l-b cor-5">Respostas em até 24h</p>
        <h1 class="font-1-xxl cor-0">Nosso contato<span class="cor-p1">.</span></h1>
      </div>
    </div>

    <div class="contato container">
      <section class="contato-dados" aria-label="Endereço">
        <h2 class="font-1-m cor-0">Loja Online</h2>
        <div class="contato-endereco font-2-s cor-4">
          <p>Rua adryanjoao, 999 - sumidos</p>
          <p>Presidente Prudente- SP</p>
          <p>Brasil</p>
        </div>
        <address class="contato-meios font-2-s cor-4">
          <a href="mailto:contato@.com">contato@.com</a>
          <a href="mailto:assistencia@.com">assistencia@.com</a>
          <a href="tel:+551899999999">+55 18 9999-9999</a>
        </address>
        <div class="contato-redes">
          <a href="./">
            <img src="../img/redes/instagram-p.svg" alt="Instagram">
          </a>
          <a href="./">
            <img src="../img/redes/facebook-p.svg" alt="Facebook">
          </a>
          <a href="./">
            <img src="../img/redes/youtube-p.svg" alt="Youtube">
          </a>
        </div>
      </section>

      <section class="contato-formulario" aria-label="Formulário">
        <form action="./contato.php" class="form">
          <div>
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Seu nome">
          </div>
          <div>
            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone" placeholder="(00) 00000-0000">
          </div>
          <div class="col-2">
            <label for="email">E-mail</label>
            <input type="text" id="email" name="email" placeholder="nome@email.com">
          </div>
          <div class="col-2">
            <label for="mensagem">E-mail</label>
            <textarea rows="5" id="mensagem" name="mensagem" placeholder="Como podemos ajudar?"></textarea>
          </div>
          <button class="botao col-2">Enviar mensagem</button>
        </form>
      </section>
    </div>
  </main>

  <article class="lojas container">
    <h2 class="font-1-xxl">Lojas Fisicas pelo o Brasil <span class="cor-p1">.</span></h2>
    <div class="lojas-item">
      <img src="../img/lojas/rj.jpg" alt="mapa marcando o endereço">
      <div class="lojas-conteudo">
        <h3 class="font-1-xl">Rio de Janeiro</h3>
        <div class="lojas-dados font-2-s cor-8">
          <p>Rua adryanjoao, 999 - sumidos</p>
          <p>Rio de Janeiro - RJ</p>
        </div>
        <div class="lojas-dados font-2-s cor-8">
          <a href="tel:+551899999999">+55 18 9999-9999</a>
          <a href="mailto:@.com">sp@.com</a>
        </div>
        <p class="lojas-tempo font-1-s"><img src="../img/icones/horario.svg" alt="Logo" class="eletrica">08-18h de segunda a sabado.</p>
      </div>
    </div>
    
    <div class="lojas-item">
      <img src="../img/lojas/sp.jpg" alt="mapa marcando o endereço em rua ali perto 999 São Paulo - SP">
      <div class="lojas-conteudo">
        <h3 class="font-1-xl">São Paulo</h3>
          <div class="lojas-dados font-2-s cor-8">
          <p>Rua adryanjoao, 999 - sumidos</p>
          <p>São Paulo - SP</p>
        </div>
        <div class="lojas-dados font-2-s cor-8">
          <a href="tel:+551899999999">+55 18 9999-9999</a>
          <a href="mailto:sp@.com">sp@.com</a>
        </div>
        <p class="lojas-tempo font-1-s"><img src="../img/icones/horario.svg" alt="Logo" class="eletrica">08-18h de seg à sáb</p>
      </div>
    </div>
  </article>

  <footer class="footer-bg">
    <div class="footer container">
    <img src="../img/icones/bike.svg" alt="Logo" class="logo">
      <div class="footer-contato">
        <h3 class="font-2-l-b cor-0">Contato</h3>
        <ul class="font-2-m cor-5">
          <li><a href="tel:+551899999999">+55 18 9999-9999</a></li>
          <li><a href="mailto:contato@.com">contato@.com</a></li>
          <li>Rua adryanjoao, 999 - sumidos</li>
          <li>São Paulo - SP</li>
        </ul>
        <div class="footer-redes">
          <a href="./">
            <img src="../img/redes/instagram.svg" alt="Instagram">
          </a>
          <a href="./">
            <img src="../img/redes/facebook.svg" alt="Facebook">
          </a>
          <a href="./">
            <img src="../img/redes/youtube.svg" alt="Youtube">
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
          </ul>
        </nav>
      </div>
      <p class="footer-copy font-2-m cor-6">Adryan & Joao © Alguns direitos reservados.</p>
    </div>
  </footer>
 <script src="../js/script.js"></script>
</body>

</html>