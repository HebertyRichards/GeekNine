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
  <title>O Grito III: O Ínicio do Fim</title>
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
    <img src="imagens/Grito.png" alt="O Grito">
    <div class="title">
    <h1>O Grito III: <br> O Ínicio do Fim</h1>
    <div class = "mdb"> 
    <p> 2009 </p>
    <p> 1h, 30m </p>
      <a href="https://www.imdb.com/title/tt1053859/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_o%2520grito%25203">4.6/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Nozomi Sasaki.png"  alt="Nozomi Sasaki">
      <span>Nozomi Sasaki</span>
        <img src="imagens/Reina Triendl.png"  alt="Reina Triendl">
      <span>Reina Triendl</span>
        <img src="imagens/Sho Aoyagi.png"  alt="Sho Aoyagi">
      <span>Sho Aoyagi</span>
        <img src="imagens/Miho Kanazawa.png"  alt="Miho Kanazawa">
      <span>Miho Kanazawa</span>
  </div>
  <div class="texto1">
    <p>Em uma casa em Tóquio que esconde uma terrível maldição. Quando alguém morre em um momento de terror na casa, uma maldição é desencadeada, levando à morte de outras pessoas devido a uma poderosa ira. Karen Davis, uma estudante americana em intercâmbio no Japão, se voluntaria para cuidar de uma mulher na casa amaldiçoada, sem saber da maldição. Conforme mais pessoas morrem, Karen descobre o segredo por trás da maldição e tenta detê-la antes que seja tarde demais, mas enfrenta uma força maléfica que ela ainda não compreende totalmente.</p>
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
