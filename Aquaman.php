<?php
session_start();


if (isset($_SESSION['nome'])) {
    $nome_usuario = $_SESSION['nome'];
    echo "<p class=ola>Olá, $nome_usuario!</p>";
  echo '<button title="Usuario"></button>';
  echo '<a href="logout.php"><button title="Logout">Logout</button></a>';

} else {

    echo '<a href="login.php"><button title="Login">Login</button></a>';
    echo '/<a href="cadastro.php"><button title="Cadastro">Cadastre-se</button></a>';
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aquaman II: O Reino Perdido </title>
  <link href="games1.css" rel="stylesheet" type="text/css" />
    <script defer src="script.js"></script>
    <link rel="website icon" type="png" href="imagens/file.png">
  </head>
  <body>
      <header>
          <img src="imagens/GeekTopo2.png" class="img-fluid">
        </header>
      <div id="menu-container">
      <a href="index.php"><button title="Início">Início</button></a>
      <a href="sobre.php"><button title="Sobre">Sobre</button></a>
      <a href="games.php"><button title="Games">Games</button></a>
      <a href="tecnologia.php"><button title="Tecnologia">Tecnologia</button></a>
      <a href="filmes.php"><button title="Filmes">Filmes</button></a>
      <a href="eventos.php"><button title="Eventos">Eventos</button></a>
    </div>
    <div id="menu-container2">
        <div class="modo">
            <img src="imagens/GeekTopo2.png" class="img-fluid">
            <button class="openbtn" onclick="openNav()">☰</button>
        </div>
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
          <a href="index.php"><button title="Início">Início</button></a>
          <a href="sobre.php"><button title="Sobre">Sobre</button></a>
          <a href="games.php"><button title="Games">Games</button></a>
          <a href="tecnologia.php"><button title="Tecnologia">Tecnologia</button></a>
          <a href="filmes.php"><button title="Filmes">Filmes</button></a>
          <a href="eventos.php"><button title="Eventos">Eventos</button></a>
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
