<?php
session_start();
$dados = json_decode(file_get_contents('data/dados.json'), true);
$slides = json_decode(file_get_contents('data/slides.json'), true);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tecnologia</title>
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
  <div class="slideshow-container" align="center">
    <?php foreach ($slides as $slide): ?>
      <div class="slide fade">
        <a href="<?= htmlspecialchars($slide['link']) ?>">
          <img src="<?= htmlspecialchars($slide['imagem']) ?>" alt="<?= htmlspecialchars($slide['alt']) ?>">
        </a>
        <div class="text"><?= htmlspecialchars($slide['texto']) ?></div>
      </div>
    <?php endforeach; ?>
  <div class="dots-container">
    <?php for ($i = 0; $i < count($slides); $i++): ?>
      <span class="dot"></span>
    <?php endfor; ?>
  </div>
  </div>
  <?php foreach ($dados as $secao): ?>
    <div class="tec">
      <div class="Tec-a">
        <h2><?= htmlspecialchars($secao['categoria']) ?></h2>
      </div>
      <?php foreach ($secao['itens'] as $item): ?>
        <div class="teste">
          <a href="<?= htmlspecialchars($item['link']) ?>">
            <img src="<?= htmlspecialchars($item['imagem']) ?>" alt="<?= htmlspecialchars($item['titulo']) ?>">
          </a>
          <div class="text1"><?= htmlspecialchars($item['titulo']) ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  <?php endforeach; ?>
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
  <script src="script.js"></script>
</body>

</html>