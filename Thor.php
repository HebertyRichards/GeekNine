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
  <title>Thor: O Mundo Sombrio</title>
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
    <img src="imagens/Thor.png" alt="Thor">
      <div class="title">
    <h1>Thor: O Mundo Sombrio</h1>
      <div class = "mdb"> 
      <p> 2013 </p>
      <p> 1h, 52m </p>
        <a href="https://www.imdb.com/title/tt1981115/?ref_=nv_sr_srsg_0_tt_1_nm_0_q_thor%2520no%2520mundo%2520sombri">6.8/10</a> 
        </div>
  <div class="elenco">
        <img src="imagens/Chris Hemsworth.png" alt="Chris Hemsworth">
      <span>Chris Hemsworth</span>    
        <img src="imagens/Natalie Portman.png" alt="Natalie Portman">
      <span>Natalie Portman</span>
        <img src="imagens/Tom Hiddleston.png" alt="Tom Hiddleston">
      <span>Tom Hiddleston</span>
        <img src="imagens/Anthony Hopkins.png" alt="Anthony Hopkins">
      <span>Anthony Hopkins</span>
  </div>
  <div class="texto1">
    <p>Enquanto Thor (Chris Hemsworth) liderava as últimas batalhas para conquistar a paz entre os Nove Reinos, o maldito elfo negro Malekith (Christopher Eccleston) acordava de um longo sono, sedento de vingança e louco para levar todos para a escuridão eterna. Alertado do perigo por Odin (Anthony Hopkins), o herói precisa contar com a ajuda dos companheiros Volstagg (Ray Stevenson), Sif (Jaimie Alexander), entre outros, e até de seu irmão, o traiçoeiro Loki (Tom Hiddleston), em um plano audacioso para salvar o universo do grande mal. Mas os caminhos de Thor e da amada Jane Foster (Natalie Portman) se cruzam novamente e, dessa vez, a vida dela está realmente em perigo.</p>
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
