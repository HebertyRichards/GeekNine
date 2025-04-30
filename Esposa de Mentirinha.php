<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Esposa de Mentirinha</title>
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
    <img src="imagens/Esposa.png" alt="Esposa de Mentirinha">
    <div class="div1">
      <h1 id='h1'>Esposa de Mentirinha</h1>
      <div class="mdb">
        <p>2011</p>
        <p>1h, 57m</p>
        <a href="https://www.imdb.com/title/tt1564367/?ref_=fn_al_tt_1">6.4/10</a>
      </div>
      <div class="elenco">
        <img src="imagens/Adam Sandler.png" alt="Adam Sandler">
        <span>Adam Sandler</span>
        <img src="imagens/Jennifer Aniston.png" alt="Jennifer Aniston">
        <span>Jennifer Aniston</span>
        <img src="imagens/Nicole Kidman.png" alt="Nicole Kidman">
        <span>Nicole Kidman</span>
        <img src="imagens/Nick Swardson.png" alt="Nick Swardson">
        <span>Nick Swardson</span>
      </div>
      <div class="texto1">
        <p>Danny Maccabee (Adam Sandler) queria um relacionamento sério, mas foi infeliz em sua tentativa de casamento. Para driblar a carência, passa a vivenciar somente namoricos e transas sem o menor compromisso. Assim, ele toca sua vida como cirurgião plástico bem sucedido, tendo sua melhor amiga Katherine (Jennifer Aniston), mãe solteira de um casal de pirralhos, como fiel escudeira. Mas um dia ele conhece a jovem Palmer (Brooklyn Decker) e a paixão toma conta de ambos. Disposto a se casar com ela, Danny pisa na bola quando, para conquistá-la, inventa que é marido da amiga, pai das crianças e que vai se separar. Começa então uma verdadeira aventura amorosa recheada de confusões de todos os tipos.</p>
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