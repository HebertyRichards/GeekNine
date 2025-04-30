<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>O Telefone Preto</title>
  <link href="games1.css" rel="stylesheet" type="text/css" />
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
  <div class="container-a">
    <img src="imagens/Telefone preto.png" alt="O Telefone Preto">
    <div class="div1">
      <h1 id="h1">O Telefone Preto</h1>
      <div class="mdb">
        <p> 2021 </p>
        <p> 1h, 43m </p>
        <a href="https://www.imdb.com/title/tt7144666/?ref_=fn_al_tt_1">6.9/10</a>
      </div>
      <div class="elenco">
        <img src="imagens/Mason Thames.png" alt="Mason Thames">
        <span>Mason Thames</span>
        <img src="imagens/Madeleine McGraw.png" alt="Madeleine McGraw">
        <span>Madeleine McGraw</span>
        <img src="imagens/Ethan Hawke.png" alt="Ethan Hawke">
        <span>Ethan Hawke</span>
        <img src="imagens/Jeremy Davies.png" alt="Jeremy Davies">
        <span>Jeremy Davies</span>
      </div>
      <div class="texto1">
        <p>Em O Telefone Preto, em 1978, uma série de sequestros estão acontecendo na cidade de Denver. Ethan Hawke interpreta o "Grabbler", um serial killer que tem seu alvo crianças do bairro. Finney Shaw, um garoto de 13 anos, é sequestrado. o garoto acorda em um porão, onde há apenas uma cama e um telefone preto em uma das paredes. Quando o aparelho toca, o garoto consegue ouvir a voz das vítimas anteriores do assassino, e elas tentam evitar que o Finney sofra o mesmo destino. Enquanto isso, sua irmã Gwen tem sonhos que indicam o lugar onde ele pode estar e corre contra o tempo para tentar ajudar os detetives Wright e Miller a ajudar o irmão, apenas para que isso seja em vão. Finney continua a fazer tentativas para escapar que apenas falham, até que uma das vítimas do serial killler fala sobre um plano que finalmente poderia levar Finney à liberdade.</p>
      </div>
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