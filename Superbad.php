<?php
session_start();

    if (isset($_SESSION['nome'])) {
        $nome_usuario = $_SESSION['nome'];
        echo "<p class=ola>Olá, $nome_usuario!</p>";
      echo '<a href="chat.php"><button title="Chat Global">Chat Global</button>';
      echo '<a href="logout.php"><button title="Logout">Logout</button></a>';

    } else {

        echo '<a href="login.php"><button title="Login">Login</button></a>';
        echo '/<a href="cadastro.php"><button title="Cadastro">Cadastre-se</button></a>';
    }
    ?>

    <!DOCTYPE html>
    <html lang="pt-BR">

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Superbad: É Hoje</title>
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
        </div>
      </div>
  <div class="container-a">
  <div class="div1">
    <img src="imagens/Superbad.png" alt="Superbad">
    <div class="title">
    <h1>Superbad: É Hoje</h1>
    <div class = "mdb"> 
    <p> 2007 </p>
    <p> 1h, 53m </p>
      <a href="https://www.imdb.com/title/tt0829482/?ref_=nv_sr_srsg_0_tt_6_nm_2_q_superbad">7.6/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Jonah Hill.png" alt="Jonah Hill">
      <span>Jonah Hill</span>
        <img src="imagens/Michael Cera.png" alt="Michael Cera">
      <span>Michael Cera</span>
        <img src="imagens/Christopher Mintz-Plasse.png" alt="Christopher Mintz-Plasse">
      <span>Christopher Mintz-Plasse</span>
        <img src="imagens/Bill Hader.png" alt="Bill Hader">
      <span>Bill Hader</span>
  </div>
  <div class="texto1">
    <p>Evan (Michael Cera) e Seth (Jonah Hill) são amigos inseparáveis, que estão terminando o colegial. Eles vão para faculdades diferentes e, desta forma, são obrigados a se separar. Evan é amável, esperto e normalmente aterrorizado com o que acontece à sua volta, enquanto que Seth é desbocado, frívolo e obcecado pela sexualidade. Cada um de sua forma, eles precisarão superar suas frustrações com as mulheres no fim desta fase de suas vidas.</p>
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
