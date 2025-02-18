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
          <title>Inatividade Paranormal</title>
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
    <img src="imagens/Inatividade.png" alt="Inatividade Paranormal">
    <div class="title">
    <h1>Inatividade Paranormal</h1>
    <div class = "mdb"> 
    <p> 2013 </p>
    <p> 1h, 26m </p>
      <a href="https://www.imdb.com/title/tt2243537/?ref_=fn_al_tt_1">5.0/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Marlon Wayans.png" alt="Marlon Wayans">
      <span>Marlon Wayans</span>
        <img src="imagens/Essence Atkins.png" alt="Essence Atkins">
      <span>Essence Atkins</span>
        <img src="imagens/Nick Swardson.png" alt="Nick Swardson">
      <span>Nick Swardson</span>
        <img src="imagens/Cedric the Entertainer.png" alt="Cedric the Entertainer">
      <span>Cedric the Entertainer</span>  
  </div>
  <div class="texto1">
    <p>Malcolm (Marlon Wayans) é um cara descolado, que mora sozinho, mas resolve chamar sua namorada Kisha (Essence Atkins) para dividir o lar de seus sonhos. Animado com a novidade, ele resolve registrar tudo com câmeras espalhadas pela casa, mas não imaginava que um hóspede fantasma começaria a aprontar, transformando a vida deles no mais louco dos pesadelos. Para se livrar do mal, eles recorrem a diversas saídas, entre elas chamar um médium (Nick Swardson), um padre exorcista (Cedric The Entertainer), uma dupla de caça-fantasmas e até uma gangue da pesada. Tudo o que eles querem é se livrar do espiríto maligno e voltar a transar em paz. Só que essa missão não será nada fácil.</p>
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
