<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Monitor ViewSonic</title>
  <link href="tecnologia.css" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" type="image/png" href="imagens/file.png">
  <script defer src="script.js"></script>
</head>

<body>
  <header>
    <img src="imagens/GeekTopo2.png" class="img-fluid" alt="GeekNine">
  </header>
  <div id="menu-container">
    <a id="inicio" href="index.php">Início</a>
    <a id="sobre" href="sobre.php">Sobre</a>
    <a id="games" href="games.php">Games</a>
    <a id="tecnologia" href="tecnologia.php">Tecnologia</a>
    <a id="filmes" href="filmes.php">Filmes</a>
    <a id="eventos" href="eventos.php">Eventos</a>
  </div>
  <?php
  if (isset($_SESSION['nome'])) {
    $nome_usuario = $_SESSION['nome'];
    echo "<div class='menu2'>";
    echo "<p class='ola'>Olá, $nome_usuario!</p>";
    echo '<a id="chat" href="chat.php">Chat Global</a>';
    echo '<a id="logout" href="logout.php">Logout</a>';
    echo "</div>";
  } else {
    echo "<div class='menu'>";
    echo '<a id="login" href="login.php">Login</a>';
    echo '<a id="cadastro" href="cadastro.php">Cadastre-se</a>';
    echo "</div>";
  }
  ?>
  <div id="menu-container2">
    <div class="modo">
      <img src="imagens/GeekTopo2.png" class="img-fluid2" alt="GeekNine">
      <button class="openbtn" onclick="openNav()">☰</button>
    </div>
    <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <a id="inicio2" href="index.php">Início</a>
      <a id="sobre2" href="sobre.php">Sobre</a>
      <a id="games2" href="games.php">Games</a>
      <a id="tecnologia2" href="tecnologia.php">Tecnologia</a>
      <a id="filmes2" href="filmes.php">Filmes</a>
      <a id="eventos2" href="eventos.php">Eventos</a>
      <?php
      if (isset($_SESSION['nome'])) {
        $nome_usuario = $_SESSION['nome'];
        echo "<p class='ola2'>Olá, $nome_usuario!</p>";
        echo '<a id="chat2" href="chat.php">Chat Global</a>';
        echo '<a id="logout2" href="logout.php">Logout</a>';
      } else {
        echo '<a id="login2" href="login.php">Login</a>';
        echo '<a id="cadastro2" href="cadastro.php">Cadastre-se</a>';
      }
      ?>
    </div>
  </div>
  <div class="chip">
    <h1 id="h1"> Novo monitor gamer ViewSonic tem apenas 0,01 ms<br> de tempo de resposta: conheça </h1>
    <div class="chip-b">
      <img src="imagens/monitor-s1.jpeg" alt="imagens/monitor-s1.jpeg" width="400px">
    </div>
    <div class="chip-c">
      <p>A fabricante de monitores ViewSonic, que é especializada em produtos de ponta no segmento, anunciou um novo modelo gamer que tem um grande diferencial em suas especificações: o tempo de resposta de 0,01 ms.</p>
    </div>
    <p>Chamado de XG272-2K-OLED, o modelo foi projetado especialmente para aqueles jogadores assíduos que prezam por uma boa experiência no PC. O produto de ponta, que também inclui outras especificações de alto calibre, é voltado para jogos competitivos, onde cada detalhe pode fazer a diferença para alcançar a vitória.Além do tempo de resposta de 0,01 ms, o produto inclui "cores extraordinárias", segundo a fabricante, e painel de 240Hz. O produto também inclui certificação da Blur Busters e suporta as tecnologias NVIDIA G-SYNC e AMD FreeSync Premium.</p>
    <h2 id="sub">Especificações do XG272-2K-OLED, novo monitor gamer da ViewSonic</h2>
    <p>
      O XG272-2K-OLED terá apenas uma versão de 27 polegadas, tamanho ideal que conta com resolução nativa 2K QHD (2560x1440). Seu painel OLED traz uma precisão excepcional de cores, "contento os melhores níveis de brilho da categoria" — além de uma ótima capacidade de resposta. A tecnologia OLED do monitor gamer oferecerá melhor contraste, ângulos de visão e gamas de cores mais amplas, bem como uma taxa de atualização mais rápida em comparação aos monitores LCD padrões do mercado.
    </p>
    <p> O visual do XG272-2K-OLED também impressiona. Ele estará disponível apenas na cor branca e possui controle remoto capaz de controlar as configurações e a iluminação RGB na parte traseira — é realmente um produto muito bonito para integrar o setup gamer. O novo monitor gamer da ViewSonic possui duas entradas HDMI 2.1, DisplayPort, USB-A/B/C e saída de áudio. O XG272-2K-OLED também é super ergonômico e oferece ajuste de articulação, inclinação, rotação e altura.
    </p>
    <div class="chip-b">
      <img src="imagens/monitor-s2.jpeg" alt="Monitor">
    </div>
    <p>"Projetado especificamente para jogadores, o XG272-2K-OLED oferece desempenho excepcional com imagens de qualidade superior e reprodução suave de jogos com baixa latência", contou Jeff Muto, diretor de negócios da ViewSonic.</p>
    <h2 id="sub">Preço do novo monitor</h2>
    <p>O XG272-2K-OLED está em pré-venda em varejistas internacionais por US$ 899,99 — algo em torno de R$ 4.629,46 em conversão direta e sem impostos. A disponibilidade no Brasil, no entanto, não foi informada, e o preço oficial no país não foi divulgado. Um belo item para integrar o setup gamer, não é mesmo? Comente nas redes sociais do Voxel e TecMundo o que você achou do novo monitor gamer da ViewSonic!
    </p>
  </div>
  <div class="container-a">
    <h2>OUTRAS NOTICÍAS:</h2>
  </div>
  <div class="news-container">
    <div class="news-item">
      <img src="imagens/eletronicos.jpeg" alt="Eletronicos">
      <h2>Eletrônicos mais populares</h2>
      <p> Site AliExpress com até 92% de desconto</p>
      <a href="eletronicos.php">Leia mais</a>
    </div>
    <div class="news-item">
      <img src="imagens/woocommerce.jpeg" alt="WooCommerce">
      <h2> WooCommerce</h2>
      <p>Descubra o que é o WooCommerce e as vantagens de hospedar a sua loja online com essa plataforma na Hostinger</p>
      <a href="woocommerce.php">Leia mais</a>
    </div>
    <div class="news-item">
      <img src="imagens/moto g24.jpeg" alt="Moto G24">
      <h2>Moto G24 Power chega ao Brasil custando R$ 999</h2>
      <p>Novo smartphone baratinho da Motorola já pode ser comprado no Brasil. Aparelho traz bateria de 6.000 mAh e carregamento rápido de até 30 W</p>
      <a href="moto g24.php">Leia mais</a>
    </div>
  </div>
  <footer>
    <div class="contato">
      <div class="contato-1">
        <ul>
          <li id="h2">Contato</li>
          <li><img src="imagens/gmail.png" alt="Gmail">Geeknine@gmail.com</li>
          <li><img src="imagens/telefone.png" alt="Telefone">Telefone:(11) 0000-0000</li>
          <li><img src="imagens/whatsapp.png" alt="WhatsApp">Whatsapp: (11) 00000-0000</li>
        </ul>
      </div>
      <div class="redes-sociais">
        <a id="facebook" href="https://www.facebook.com/people/GeekNine/61557039160232/" target="_blank"></a>
        <a id="instagram" href="https://www.instagram.com/geek_nine/?igsh=MXBqemduaHFybDFuZg%3D%3D" target="_blank"></a>
        <a id="twitter" href="https://twitter.com/GeekNine9" target="_blank"></a>
      </div>
    </div>
    <div class="logo">
      <p>GeekNine © 2024 Todos os Direitos Reservados</p>
    </div>
  </footer>
</body>

</html>