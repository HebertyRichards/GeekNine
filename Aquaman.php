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
  <title>Aquaman II: O Reino Perdido </title>
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
      <img src="imagens/Aquaman.png" alt="Vingadores">
      <div class="title">
    <h1>Aqumaman II: O Reino Perdido</h1>
    <div class="mdb">
      <p>2023</p>
      <p> 2h, 4m </p>
        <a href="https://www.imdb.com/title/tt9663764/?ref_=nv_sr_srsg_0_tt_7_nm_1_q_aquaman%25202">5.6/10</a> 
    </div>
  <div class="elenco">
        <img src="imagens/Jason Momoa.png">
      <span>Jason Momoa</span>
        <img src="imagens/Patrick Wilson.png">
      <span>Patrick Wilson</span>
        <img src="imagens/Amber Heard.png">
      <span>Amber Heard</span>
        <img src="imagens/Yahya Abdul-Mateen II.png">
      <span>Yahya Abdul-Mateen II</span>
  </div>
  <div class="texto1">
    <p> Aquaman 2 é a sequência do filme Aquaman de 2018, que acompanha Arthur Curry (Jason Momoa), o filho do humano Tom Curry (Temuera Morrison) com a atlante Atlanna (Nicole Kidman). Ele cresce com a vivência de um humano e as capacidades metahumanas de um atlante. Nesta sequência, depois de não conseguir derrotar o rei dos mares pela primeira vez, Arraia Negra (Yahya Abdul-Mateen II) utiliza o poder do mítico Tridente Negro  para liberar uma força antiga e maligna.Na tentativa de proteger Atlântida e o resto do mundo, Aquaman deve forjar uma aliança incômoda com um aliado improvável e deixar as diferenças de lado para evitar uma devastação irreversível.</p>
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
