<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <title>Nossos Produtos </title>
  <meta name="description" content="Bicicletas elétricas de alta precisão e qualidade, feitas sob medida para o cliente.">
 
  <link rel="stylesheet" href="../css/style.css"> 
  <link rel="stylesheet" href="../css/produto/produtos.css">  
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body id="bicicletas">
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
    <div class="titulo-bg">
      <div class="titulo container">
        <p class="font-2-l-b cor-5">Escolha o melhor para você</p>
        <h1 class="font-1-xxl co-0" style="color: #fff;">Nossos Produtos<span class="cor-p1"> ⭣</span></h1>
      </div>
    </div>
   
    <section class="conteudo-visualizar" id="produtos">
      <section class="conteudo-visualizar-box">
        <?php
          require_once "../controller/Controlador.php";
          $control = new Controlador();
          echo $control->visualizarProduto();
        ?>
      </section>
    </section>
    <div class="cart-icon" id="cart-icon">
      <i class="fas fa-shopping-cart"></i>
      <span class="cart-item-count" id="cart-item-count">0</span>
    </div>

    <div id="cart" class="hidden">
      <h2>Itens no Carrinho:</h2>
      <ul id="cart-items">
        <!-- Os itens selecionados serão adicionados aqui dinamicamente -->
      </ul>
      <p>Total: R$ <span id="cart-total">0.00</span></p>
      <button id="checkout-btn"><a href="orcamento.php">Finalizar Compra</a></button>
    </div>
 
    <footer class="footer-bg">
      <div class="footer container">
        <img src="./img/" alt="">
   
        <div class="footer-contato">
          <h3 class="font-2-l-b cir-0">Contato</h3>
          <ul class="font-2-m cor-5">
            <li><a href="tel:+5518999999999">18 99999-9999 </a></li>
            <li><a href="mailto:contato@.com">contato@.com</a></li>
            <li>Rua adryanjoao, 999 - sumidos</li>
            <li>São Paulo - RJ</li>
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
          <h3 class="font-2-l-b cir-0">Informações</h3>
          <nav>
            <ul class="font-1-m cor-5">
              <li><a href="./bicicletas.html">Bicicletas</a></li>
              <li><a href="./seguros.html">Seguros</a></li>
              <li><a href="./contato.html">Contato</a></li>
              <li><a href="./termos.html">Termos e Condições</a></li>
            </ul>
          </nav>
        </div>
        <p class="footer-copy font-2-m cor-6">Adryan & Joao - Alguns direitos reservados.</p>
      </div>
    </footer>

   <script src="../js/script.js"></script>
   <script src="../js/compra.js"></script>

    <script>
    // Função para filtrar produtos por categoria
    var filterButtons = document.querySelectorAll(".filter-btn");
    filterButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            var category = this.getAttribute("data-category");
            var products = document.querySelectorAll("#produtos .conteudo-bloco");

            products.forEach(function(product) {
                if (category === "all") {
                    product.style.display = "block";
                } else if (product.classList.contains(category)) {
                    product.style.display = "block";
                } else {
                    product.style.display = "none";
                }
            });
        });
    });


   </script>
</body>
</html>
