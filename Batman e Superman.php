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
  <title>Batman vs Superman: A Origem da Justiça</title>
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
    <img src="imagens/Batman.png" alt="Batman vs Superman">
      <div class="title">
    <h1>Batman vs Superman: <br> A Origem da Justiça</h1>
  <div class="mdb">
    <p>2016</p>
    <p>2h, 31m</p>
      <a href="https://www.imdb.com/title/tt2975590/?ref_=fn_al_tt_1">6.5/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Ben Affleck.png" alt="Ben Affleck">
      <span>Ben Affleck</span>
        <img src="imagens/Henry Cavill.png" alt="Henry Cavill" >
      <span>Henry Cavill</span>
        <img src="imagens/Gal Gadot.png" alt="Gal Gadot">
      <span>Gal Gadot</span>
        <img src="imagens/Amy Adams.png" alt="Amy Adams">
      <span>Amy Adams</span>
  </div>
  <div class="texto1">
    <p>Em Batman Vs Superman - A Origem Da Justiça, o confronto entre Superman (Henry Cavill) e Zod (Michael Shannon) em Metrópolis fez com que a população mundial se dividisse acerca da existência de extra-terrestres na Terra. Enquanto muitos consideram o Superman como um novo deus, há aqueles que consideram extremamente perigoso que haja um ser tão poderoso sem qualquer tipo de controle. Bruce Wayne (Ben Affleck) é um dos que acreditam nesta segunda hipótese. Sob o manto de um Batman violento e obcecado, ele investiga o laboratório de Lex Luthor (Jesse Eisenberg), que descobriu uma pedra verde que consegue eliminar e enfraquecer os filhos de Krypton.</p>
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
