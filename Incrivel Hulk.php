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
          <title>Incrivel Hulk</title>
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
    <img src="imagens/Hulk.png" alt="Incrivel Hulk">
    <div class="title">
    <h1>Incrivel Hulk</h1>
    <div class = "mdb"> 
    <p> 2008 </p>
    <p> 1h, 52m </p>
      <a href="https://www.imdb.com/title/tt0800080/?ref_=fn_al_tt_1">6.6/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Edward Norton.png" alt="Edward Norton">
      <span>Edward Norton</span>
        <img src="imagens/Liv Tyler.png" alt="Liv Tyler">
      <span>Liv Tyler</span>
        <img src="imagens/Tim Roth.png" alt="Tim Roth">
      <span>Tim Roth</span>
        <img src="imagens/William Hurt.png" alt="William Hurt">
      <span>William Hurt</span>  </div>
  <div class="texto1">
    <p>Vivendo escondido e longe de Betty Ross (Liv Tyler), a mulher que ama, o cientista Bruce Banner (Edward Norton) busca um meio de retirar a radiação gama que está em seu sangue. Ao mesmo tempo ele precisa fugir da perseguição do general Ross (William Hurt), seu grande inimigo, e da máquina militar que tenta capturá-lo, na intenção de explorar o poder que faz com que Banner se transforme no Hulk.</p>
  </div>
  </div>
  </div>
    <footer>
      <div class="contato">
        <div class="contato-1">
          <ul><h1>Contato</h1>
        <li><img src="imagens/gmail.png">Geeknine@gmail.com</li>
        <li><img src="imagens/telefone.png">Telefone:(11) 0000-0000</li>
        <li><img src="imagens/whatsapp.png">Whatsapp: (11) 00000-0000</li>
      </ul>
      </div>
    <div class="redes-sociais"> 
      <a href="https://www.facebook.com/people/GeekNine/61557039160232/" target="_blank"><button
          title="Facebook">Facebook</button></a>
      <a href="https://www.instagram.com/geek_nine/?igsh=MXBqemduaHFybDFuZg%3D%3D" target="_blank"><button
          title="Instagram">Instagram</button></a>
      <a href="https://twitter.com/GeekNine9" target="_blank"><button title="Twitter">Twitter</button></a>
    </div>
    </div>
    <div class="logo">
    <p>GeekNine © 2024 Todos os Direitos Reservados</p>
    </div>
    </footer>
</body>

</html>
