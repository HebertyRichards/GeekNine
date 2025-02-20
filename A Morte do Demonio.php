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
  <title>A Morte do Demonio</title>
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
    <img src="imagens/Demonio.png" alt="A Morte do Demonio">
      <div class="title">
    <h1>A Morte do Demônio: A Ascensão</h1>
  </div>
  <div class="mdb">
    <p>2023</p>
    <p>1h, 36m</p>
      <a href="https://www.imdb.com/title/tt13345606/?ref_=fn_al_tt_1">6.5/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Lily Sullivan.png" width="25" height="50" alt="Lily Sullivan">
      <span>Lily Sullivan</span>
        <img src="imagens/Alyssa Sutherland.png" width="25" height="50" alt="Alyssa Sutherland">
      <span>Alyssa Sutherland</span>
        <img src="imagens/Morgana Davies.png" width="25" height="50" alt="Morgana Davies">
      <span>Morgana Davies</span>
        <img src="imagens/Nell Fisher.png" alt="Nell Fisher">
      <span>Nell Fisher</span>
  </div>
  <div class="texto1">
    <p>A Morte do Demônio: A Ascensão é um filme de terror slasher que faz parte da clássica franquia A Morte do Demônio, que teve o primeiro título lançado em 1981. No filme, Beth (Lily Sullivan) vai até Los Angeles para visitar sua irmã mais velha, Ellie (Alyssa Sutherland), que mora com os três filhos em um pequeno apartamento. Com uma relação distante, essa seria a oportunidade para uma reaproximação entre as irmãs. Porém, o reencontro toma um rumo macabro quando elas encontram um livro antigo que dá vida a demônios possuidores de carne. Agora, para sobreviverem, serão forçadas a enfrentar uma versão aterrorizante da família.</p>
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
