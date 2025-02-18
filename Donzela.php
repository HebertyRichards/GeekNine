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
  <title>Donzela</title>
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
    <img src="imagens/Donzela.png" alt="Matrix">
    <div class="title">
    <h1>Donzela</h1>
    <div class = "mdb"> 
    <p>2024</p>
    <p>1h, 50m</p>
      <a href="https://www.imdb.com/title/tt13452446/?ref_=fn_al_tt_1">6.1/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Millie Bobby Brown.png" alt="Millie Bobby Brown">
      <span>Millie Bobby Brown</span>
        <img src="imagens/Nick Robinson.png" alt="Nick Robinson">
      <span>Nick Robinson</span>
        <img src="imagens/Robin Wright.png"  alt="Robin Wright">
      <span>Robin Wright</span>
        <img src="imagens/Shohreh Aghdashloo.png" alt="Shohreh Aghdashloo">
      <span>Shohreh Aghdashloo</span>
  </div>
  <div class="texto1">
    <p>Estrelada por Mille Bobby-Brown, o filme Donzela segue a personagem Elodie (Bobby Brown), uma princesa de um reino, que concorda em se casar com um lindo príncipe de outro lugar. Mas o que ela não sabe, é que este conto de fadas é na realidade, um grande engano. A realeza pretende sacrificá-la. Enganada pelo rei, a princesa se torna o sacrifício de uma antiga dívida. Agora, presa em uma caverna de dragão e sabendo que ninguém vem resgatá-la, ela precisará usar sua astúcia, inteligência e perseverança para escapar com vida - tudo isso, sem a ajuda de nenhum príncipe encantado.</p>
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
