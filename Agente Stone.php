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
  <title>Agente Stone</title>
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
    <img src="imagens/Agente Stone.png" alt="Agente Stone">
      <div class="title">
    <h1>Agente Stone</h1>
  <div class="mdb">
    <p>2023</p>
    <p>2h, 2m</p>
      <a href="https://www.imdb.com/title/tt13603966/?ref_=fn_al_tt_1">5.7/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Gal Gadot.png" alt="Gal Gadot">
      <span>Gal Gadot</span>
        <img src="imagens/Jing Lusi.png" alt="Jing Lusi">
      <span>Jing Lusi</span>
        <img src="imagens/Jamie Dornan.png" alt="Jamie Dornan">
      <span>Jamie Dornan</span>
        <img src="imagens/Paul Ready.png" alt="Paul Ready">
      <span>Paul Ready</span>
  </div>
  <div class="texto1">
    <p>Agente Stone é um suspense de espionagem dirigido por Tom Harper (Peaky Blinders) para a Netflix. Na história, acompanhamos a agente de elite Rachel Stone (Gal Gadot), que esconde um grande segredo: ela é a única pessoa que pode se colocar entre uma misteriosa e ultra-poderosa organização que busca manter a paz mundial, e a possível perda do bem mais valioso - e perigoso - da instituição, conhecido como o Coração. Com Jamie Dornan (50 Tons de Cinza), Alia Bhatt (A Espiã), Sophie Okonedo (Morte no Nilo), Matthias Schweighöfer (Exército de Ladrões: Invasão da Europa), Jing Lusi, Paul Ready, Jon Kortajarena e Archie Madekwe.</p>
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
