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
  <title>Lift: Roubo nas Alturas</title>
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
    <img src="imagens/Lift.png" alt="Lift">
    <div class="title">
    <h1>Lift: Roubo nas Alturas</h1>
    <div class = "mdb"> 
    <p> 2024 </p>
    <p> 1h, 47m </p>
      <a href="https://www.imdb.com/title/tt14371878/?ref_=fn_al_tt_1">5.5/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Kevin Hart.png" alt="Kevin HartDakota Johnson">
      <span>Kevin Hart</span> 
        <img src="imagens/Gugu Mbatha-Raw.png" alt="Gugu Mbatha-Raw">
      <span>Gugu Mbatha-Raw</span>
        <img src="imagens/Vincent D'Onofrio.png" alt="Vincent D'Onofrio">
      <span>Vincent D'Onofrio</span>
        <img src="imagens/Úrsula Corberó.png" alt="Úrsula Corberó">
      <span>Úrsula Corberó</span>
  </div>
  <div class="texto1">
    <p>Lift: Roubo nas Alturas é um filme norte-americano de ação e comédia policial dirigido por F. Gary Gray (A Negociação, Até as Últimas Consequências) para a Netflix. A produção segue um grupo de criminosos internacionais liderado por Cyrus (Kevin Hart) e contratados por sua ex-namorada, Abby (Gugu Mbatha-Raw), uma agente federal, para que cumpram uma missão ambiciosa: roubar meio bilhão de dólares em barras de ouro que estão sendo transportadas para uma célula terrorista. Para deixar tudo ainda mais insano, a carga está sendo transportada em um Boeing 777 que parte de Londres rumo a Zurique, e eles devem roubá-la em pleno vôo.</p>
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
