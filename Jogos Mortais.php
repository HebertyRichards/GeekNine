<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jogos Mortais 10</title>
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
    <img src="imagens/Jogos Mortais X.png" alt="Jogos Mortais 10">
    <div class="div1">
      <h1 id="h1">Jogos Mortais 10</h1>
      <div class="mdb">
        <p> 2023 </p>
        <p> 1h, 58m </p>
        <a href="https://www.imdb.com/title/tt21807222/?ref_=fn_al_tt_2">6.6/10</a>
      </div>
      <div class="elenco">
        <img src="imagens/Tobin Bell.png" width="25" height="50" alt="Tobin Bell" loading="lazy" decoding="async">
        <span>Tobin Bell</span>
        <img src="imagens/Shawnee Smith.png" width="25" height="50" alt="Shawnee Smith" loading="lazy" decoding="async">
        <span>Shawnee Smith</span>
        <img src="imagens/Synnøve Macody Lund.png" width="25" height="50" alt="Synnøve Macody Lund" loading="lazy" decoding="async">
        <span>Synnøve Macody Lund</span>
        <img src="imagens/Renata Vaca.png" width="25" height="50" alt="Renata Vaca" loading="lazy" decoding="async">
        <span>Renata Vaca</span>
      </div>
      <div class="texto1">
        <p>Jogos Mortais X é o décimo capítulo da famosa franquia de terror com gore e tortura Jogos Mortais, iniciada em 2004 sob direção de James Wan (Invocação do Mal, Velozes & Furiosos 7). Nesta nova sequência, John Kramer (Tobin Bell), o impiedoso assassino Jigsaw - criador dos sádicos jogos de sobrevivência - está muito doente e em busca de uma cura milagrosa. Ele decide, então, viajar para o México após ouvir falar de um inovador procedimento médico que, além de experimental, também é muito arriscado. Disposto a tentar a sorte, Kramer parte rumo à cura. Porém, ao chegar a seu destino, se depara com um ambiente macabro, e descobre que toda a operação é uma farsa para enganar pessoas vulneráveis. Agora armado com um novo propósito, o infame serial killer usará armadilhas insanas e engenhosas para virar o jogo contra os vigaristas, relembrando o motivo de ser conhecido como o terrível vilão Jigsaw.</p>
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
  </footer>
</body>

</html>