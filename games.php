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
  <title>Games</title>
  <link href="games.css" rel="stylesheet" type="text/css" />
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
   <div class="container-a" align="center">
    <h1>Games</h1>
    <h2>Mundo Game</h2><br>
    <p>O Mundo Game na GEEKNINE é um local onde você encontra uma grende variedade de comundades</p>
      <p>interagindo 
       sobre todos tipos de jogos. Um mundo aberto, com uma abordagem diversificada para você interagir e se 
       divertir. </p>
        <p>Embarque nessa aventura conosco!</p><br><br>
     <h3>Tendências</h3><br>
     <p>Os mais queridos do momento!</p>  
      <a href="games.php"></a>
     <a href="gta6.php"><img src="imagens/gta6.webp" alt="GTA 6.jpg" height="160px" width="230px"></a>
     <a href="reddead2.php"><img src="imagens/reddead2.png" alt="reddead2" height="160px" width="230px"></a>
     <a href="csgo.php"><img src="imagens/csgo.jpg" alt="CSGO" height="160px" width="230px"></a>
     <a href="cyberpunk2077.php"><img src="imagens/cyberpunk2077.png" alt="cyberpunk2077.png" height="160px" width="230px"></a>
     <a href="fc24.php"><img src="imagens/fifa24.jpeg" alt="FIFA24.jpg" height="160px" width="230px"></a><br><br>

     <h4>Vintage</h4><br>
     <p>Relembre os favoritos da galera!</p><br><br>
     <a href="ComunidadeGame.php"><img src="imagens/mario.jpg" alt="Mário.jpg" height="160px" width="230px"></a>
     <a href="ComunidadeGame.php"><img src="imagens/alexkidd.jpg" alt="Alex Kidd.jpg" height="160px" width="230px"></a>
     <a href="ComunidadeGame.php"><img src="imagens/sonic.jpg" alt="Sonic.jpg" height="160px" width="230px"></a>
     <a href="ComunidadeGame.php"><img src="imagens/streetfighter.jpg" alt="Street Fighter.jpg" height="160px" width="230px"> 
     <a href="ComunidadeGame.php"><img src="imagens/pacmam.jpg" alt="Pacmam.jpg" height="160px" width="230px"></a>
     </a><br><br>
     <p>Não fique de fora dessa, compartilhe conosco o que você gostaria de ver 
      aqui em nossa comunidade!</p><br><br>
     </div>
  <br></br>
  <br></br>
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