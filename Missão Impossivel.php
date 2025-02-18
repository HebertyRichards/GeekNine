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
  <title>Missão Impossível 7: Acerto de Contas Parte I</title>
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
    <img src="imagens/Missão Impossivel.png" alt="Missão Impossivel">
    <div class="title">
    <h1>Missão Impossível 7: <br> Acerto de Contas Parte I</h1>
    <div class = "mdb"> 
    <p> 2023 </p>
    <p> 2h, 43m </p>
      <a href="https://www.imdb.com/title/tt9603212/?ref_=nv_sr_srsg_6_tt_8_nm_0_q_miss%25C3%25A3o%2520impo">7.7/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Tom Cruise.png" alt="Tom Cruise">
      <span>Tom Cruise</span>    
        <img src="imagens/Hayley Atwell.png" alt="Hayley Atwell">
      <span>Hayley Atwell</span>
        <img src="imagens/Ving Rhames.png" alt="Ving Rhames">
      <span>Ving Rhames</span>
        <img src="imagens/Simon Pegg.png" alt="Simon Pegg">
      <span>Simon Pegg</span>
  </div>
  <div class="texto1">
    <p>Missão Impossível 7: Acerto de Contas Parte 1 é o sétimo capítulo da franquia de ação e espionagem iniciada em 1996, que acompanha o agente norte-americano Ethan Hunt (Tom Cruise) em missões altamente secretas e perigosas. Agora, no novo filme, Ethan e a equipe do IMF formada por Ilsa Faust (Rebecca Ferguson), Benji Dunn (Simon Pegg) e Luther Stickell (Ving Rhames) recebem outra importante missão: eles devem rastrear uma nova e aterrorizante arma que, se cair nas mãos erradas, pode representar uma ameaça para toda a humanidade. Com o controle do futuro e o destino de todo o mundo em jogo, a equipe precisa partir em uma corrida frenética e mortal ao redor do planeta. Além disso, Ethan ainda é confrontado por um novo inimigo misterioso e muito perigoso, e é forçado a aceitar que, para completar o desafio, nada pode importar mais do que a missão - nem mesmo sua própria vida.</p>
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
