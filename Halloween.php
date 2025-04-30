<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halloween Ends: O Acerto de Contas Final</title>
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
    <img src="imagens/Halloween.png" alt="Halloween Ends: O Acerto de Contas Final">
    <div class="div1">
      <h1 id="h1">Halloween Ends: O Acerto de Contas Final</h1>
      <p>2022</p>
      <p>1h, 51m</p>
      <div class="mdb">
        <a href="https://www.imdb.com/title/tt10665342/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_halloween%2520ends">5.0/10</a>
      </div>
      <div class="elenco">
        <img src="imagens/Jamie Lee Curtis.png" alt="Jamie Lee Curtis">
        <span>Jamie Lee Curtis</span>
        <img src="imagens/Andi Matichak.png" alt="Andi Matichak">
        <span>Andi Matichak</span>
        <img src="imagens/Will Patton.png" alt="Will Patton">
        <span>Will Patton</span>
        <img src="imagens/Kyle Richards.png" alt="Kyle Richards">
        <span>Kyle Richards</span>
      </div>
      <div class="texto1">
        <p>Em Halloween Ends, quatro anos após os eventos de Halloween Kills: O Terror Continua (2021), Laurie (Jamie Lee Curtis) agora vive com sua neta Allyson e está terminando seu livro de memórias. Michael Myers nunca mais foi visto. Depois de permitir que a sombra de Michael pairasse ao longo de sua existência por décadas, ela finalmente decidiu se libertar do medo e da raiva e se voltar para a vida. Mas quando um jovem, Corey Cunningham, é acusado de ter assassinado um menino de quem cuidava, uma onda de terror e violência pairam sobre a cidade, forçando Laurie a se juntar com outras pessoas para combater o mal. Mas dessa vez, Laurie terá de lidar com Myers e acabar com ele, de uma vez por todas, para que o mal nunca mais volte para a cidade e ela possa, enfim, ter uma vida normal e sem medo, promovendo a paz para sempre.</p>
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