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
  <title>As Férias de Mr. Bean</title>
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
    <img src="imagens/Mr.Bean.png" alt="Mr Bean">
    <div class="title">
    <h1>As Férias de Mr. Bean</h1>
      <div class = "mdb"> 
      <p> 2007 </p>
      <p> 1h, 30m </p>
        <a href="https://www.imdb.com/title/tt0453451/?ref_=fn_al_tt_1">6.4/10</a> 
        </div>
  <div class="elenco">
        <img src="imagens/Rowan Atkinson.png" alt="Rowan Atkinson">
      <span>Rowan Atkinson</span>    
        <img src="imagens/Steve Pemberton.png" alt="Steve Pemberton">
      <span>Steve Pemberton</span>
        <img src="imagens/Maxim Baldry.png" alt="Maxim Baldry">
      <span>Maxim BaldryRobin Driscoll</span>
        <img src="imagens/Emma de Caunes.png" alt="Emma de Caunes">
      <span>Emma de Caunes</span>
  </div>
  <div class="texto1">
    <p>Mr. Bean (Rowan Atkinson) é um atrapalhado funcionário da Royal National Gallery, de Londres. Uma galeria de arte americana decide comprar um valioso quadro exposto no local, "Mãe de Wistler", graças a uma doação feita pelo general Newton (Burt Reynolds). Para apresentar a obra em solo americano, a galeria pede que lhe seja enviado seu mais ilustre conhecedor de arte. Os conselheiros aproveitam a situação para se livrar de Bean, o enviando como representante. Ao chegar ele é instalado na casa do curador David Langley (Peter MacNicol), onde logo se envolve em várias confusões.</p>
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
