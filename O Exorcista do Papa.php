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
  <title>O Exorcista do Papa</title>
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
    <img src="imagens/O Exorcista do Papa.png" alt="Jogos Mortais 10">
      <div class="title">
    <h1>O Exorcista do Papa</h1>
  </div>
      <div class = "rating"> 
      <p> 2023 </p>
      <p> 1h, 43m </p>
        <a href="https://www.imdb.com/title/tt13375076/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_o%2520exorcista%2520do%2520papa">6.1/10</a> 
        </div>
  <div class="elenco">
        <img src="imagens/Russell Crowe.png" alt="Russell Crowe">
      <span>Russell Crowe</span>
        <img src="imagens/Daniel Zovatto.png" alt="Daniel Zovatto">
      <span>Daniel Zovatto</span>
        <img src="imagens/Alex Essoe.png" alt="Alex Essoe">
      <span>Alex Essoe</span>
        <img src="imagens/Franco Nero.png" alt="Franco Nero">
      <span>Franco Nero</span>
  </div>
  <div class="texto1">
    <p>Inspirado nos arquivos reais do Padre Gabriele Amorth, Chefe Exorcista do Vaticano. O padre realizou mais de 100.000 exorcismos em sua vida e faleceu em 2016 aos 91 anos. Amorth escreveu duas memórias – An Exorcist Tells His Story e An Exorcist: More Stories – e detalhou suas experiências lutando contra Satanás e demônios que agarraram e possuíram as pessoas com seu mal. O filme, sendo o retrato do personagem da vida real, acompanha Amorth (Russell Crowe) enquanto ele investiga a terrível possessão de um menino e acaba descobrindo uma conspiração secular que o Vaticano tentou desesperadamente proteger e manter no esquecimento.</p>
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
