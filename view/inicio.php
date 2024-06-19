<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> Home</title>
  <meta name="description" content="Bicicletas elétricas de alta precisão e qualidade,  feitas sob medida para o cliente. Explore o mundo na sua velocidade com a Bikcraft.">

  <link rel="preloud" href="../css/style.css" as="style">
 <link rel="preloud" href="../css/style.css" as="style">
  <link rel="stylesheet" href="../css/style.css">  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
  <header class="header-bg">
    <div class="header container">
      <a href="./">
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

   <main class="introducao-bg">
    <div class="introducao container">
      <div class="introducao-conteudo">
        <h1 class="font-1-xxl cor-0 fadeInDown" data-anime="200">Feitos sob medida<span class="cor-p1">.</span></h1>
        <p class="font-2-l cor-5 fadeInDown" data-anime="400">Alta precisão e qualidade, feitas sob medida para você. Explore o mundo na sua velocidade. Esses são alguns dos itens que fornecemos. </p>
        <a class="botao fadeInDown" data-anime="600" href="#">Bike</a>
        <a class="botao fadeInDown" data-anime="600" href="#">Skate</a>
        <br>
        <br>
        <a class="botao fadeInDown" data-anime="600" href="#">Capacete</a>
        <a class="botao fadeInDown" data-anime="600" href="#">Acessorios</a>
      </div>
      <picture data-anime="800" class="fadeInDown">
        <source media="(max-width: 800px)" srcset="../img/bicicletas/nimbus.jpg">
        <img src="../img/fotos/introducao.jpg" width="1280" height="1600" alt="Bicicleta elétrica preta.">
      </picture>
    </div>
  </main>

  <article class="bicicletas-lista">
    <h2 class="container font-1-xxl">Mais adquiridos por clientes <span class="cor-p1">✔</span></h2>

    <ul>
      <li>
        <a href="#">
          <img src="../img/bicicletas/magic-home.jpg" width="920" height="1040" alt="Bicicleta preta">
          <h3 class="font-1-xl">Magic Might</h3>
          <!-- <span class="font-2-m cor-8">R$ 2449</span> -->
        </a>
      </li>
      <li>
        <a href="#">
          <img src="../img/bicicletas/nimbus-home.jpg" width="920" height="1040" alt="Bicicleta preta">
          <h3 class="font-1-xl">Nimbus Stark</h3>
          <!-- <span class="font-2-m cor-8">R$ 4449</span> -->
        </a>
      </li>
      <li>
        <a href="#">
          <img src="../img/bicicletas/nebula-home.jpg" width="920" height="1040" alt="Bicicleta preta">
          <h3 class="font-1-xl">Nebula Cosmic</h3>
          <!-- <span class="font-2-m cor-8">R$ 3999</span> -->
        </a>
      </li>
    </ul>
    <br>
    <br>
    <ul>
      <li>
        <a href="#">
          <img src="../img/skate/skate1.jpg" width="920" height="1040" alt="skt">
          <h3 class="font-1-xl">Skate Street</h3>
          <!-- <span class="font-2-m cor-8">R$ 99</span> -->
        </a>
      </li>
      <li>
        <a href="#">
          <img src="../img/skate/skate2.jpg" width="920" height="1040" alt="skt">
          <h3 class="font-1-xl">Skate AJB</h3>
          <!-- <span class="font-2-m cor-8">R$ 49</span> -->
        </a>
      </li>
      <li>
        <a href="#">
          <img src="../img/skate/skate3.jpg" width="920" height="1040" alt="skt">
          <h3 class="font-1-xl">Skate WaveBoard</h3>
          <!-- <span class="font-2-m cor-8">R$ 39</span> -->
        </a>
      </li>
    </ul>
  </article>


  <article class="tecnologia-bg">
    <div class="tecnologia container">
      <div class="tecnologia-conteudo">
        <span class="font-2-l-b cor-5">Tecnologia Avançada</span>
        <h2 class="font-1-xxl cor-0">Você escolhe as suas cores e componentes <span class="cor-p1">.</span></h2>
        <p class="font-2-l cor-5">Cada modelo é único e possui a sua identidade. As medidas serão exatas para o seu corpo e altura, garantindo maior conforto e ergonomia na sua pedalada. Você pode também personalizar completamente as suas cores.</p>
        <!-- <a class="link" href="./bibicletas.php">Escolha um modelo</a> -->

        <div class="tecnologia-vantagens">
          <div>
           <img src="../img/icones/eletrica.svg" alt="Logo" class="eletrica">
            <!-- <img src="../img/icones/eletrica.svg" width="24" height="24" alt=""> -->
            <h3 class="font-1-m cor-0">Motor elétrico</h3>
            <p class="font-2-s cor-5">Toda equipada com um motor elétrico que possui duração de até 120h. A bateria é recarregada com a sua energia gasta ao pedalar.</p>
          </div>
          <div>
             <img src="../img/icones/rastreador.svg" alt="Logo" class="eletrica">
            <!-- <img src="../img/icones/rastreador.svg" width="24" height="24" alt=""> -->
            <h3 class="font-1-m cor-0">Rastreador</h3>
            <p class="font-2-s cor-5">Sabemos o quão preciosa a sua bike é, por isso adicionamos rastreadores e sistemas anti-furto para garantir o seu sossego.</p>
          </div>
        </div>
      </div>
      <div class="tecnologia-imagem">
        <img src="../img/fotos/tecnologia.jpg" width="1200" height="1920" alt="">
      </div>
    </div>
  </article>

  <!-- <section class="parceiros" aria-label="Nossos Parceiros">
    <h2 class="container font-1-xxl">Nossos parceiros<span class="cor-p1">.</span></h2>

    <ul>
      <li><img src="../img/parceiros/caravan.svg" width="140" height="38" alt="Caravan"></li>
      <li><img src="../img/parceiros/ranek.svg" width="149" height="36" alt="ranek"></li>
      <li><img src="../img/parceiros/handel.svg" width="139" height="50" alt="handel"></li>
      <li><img src="../img/parceiros/dogs.svg" width="152" height="39" alt="dogs"></li>
      <li><img src="../img/parceiros/lescone.svg" width="208" height="41" alt="lescone"></li>
      <li><img src="../img/parceiros/flexblog.svg" width="165" height="38" alt="flexblog"></li>
      <li><img src="../img/parceiros/wildbeast.svg" width="196" height="34" alt="wildbeast"></li>
      <li><img src="../img/parceiros/surfbot.svg" width="200" height="49" alt="surfbot"></li>
    </ul>
  </section> -->

 <section class="depoimento" aria-label="Depoimento">
    <div>
      <img src="../img/fotos/depoimento.jpg" width="1560" height="1360" alt="Pessoa pedalando uma bicicleta Bikcraft">
    </div>
    <div class="depoimento-conteudo">
      <blockquote class="font-1-xl cor-p5">
        <p>Pedalar sempre foi a minha paixão, o que o pessoal fez foi intensificar o meu amor por esta atividade. Recomendo à todos que amo.</p>
      </blockquote>
      <span class="font-1-m-b cor-p4">Mariana</span>
    </div>
  </section>

   

  <footer class="footer-bg">
    <div class="footer container">
    <img src="../img/icones/bike.svg" alt="Logo" class="logo">
  
      <div class="footer-contato">
        <h3 class="font-2-l-b cir-0">Contato</h3>
        <ul class="font-2-m cor-5">
          <li><a href="tel:+5518999999999">18 99999-9999</a></li>
          <li><a href="mailto:contato@bikcaft.com">contato@.com</a></li>
          <li>Rua adryanjoao, 999 - sumidos</li>
          <li>São Paulo - RJ</li>
        </ul>
        <div class="footer-redes">
          <a href="./"><img src="../img/redes/instagram.svg" width="32" height="32" alt="Instagram"></a>
          <a href="./"><img src="../img/redes/facebook.svg" width="32" height="32" alt="Facebook"></a>
          <a href="./"><img src="../img/redes/youtube.svg" width="32" height="32" alt="Youtube"></a>
        </div>
      </div>
      <div class="footer-informacoes">
        <h3 class="font-2-l-b cir-0">Informações</h3>
        <nav>
          <ul class="font-1-m cor-5">
            <li><a href="./bicicletas.html">Bicicletas</a></li>
            <li><a href="./seguros.html">Seguros</a></li>
            <li><a href="./contato.html">Contato</a></li>
          </ul>
        </nav>
      </div>
      <p class="footer-copy font-2-m cor-6">Adryan & Joao © Alguns direitos reservados.</a>.</p>
    </div>
  </footer>

  <script src="../js/plugins/simple-anime.js"></script>
  <script src="../js/script.js"></script>
</body>
</html>