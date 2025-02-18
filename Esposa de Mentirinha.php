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
  <title>Esposa de Mentirinha</title>
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
    <img src="imagens/Esposa.png" alt="Esposa de Mentirinha">
    <div class="title">
    <h1>Esposa de Mentirinha</h1>
    <div class = "mdb"> 
    <p>2011</p>
    <p>1h, 57m</p>
      <a href="https://www.imdb.com/title/tt1564367/?ref_=fn_al_tt_1">6.4/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Adam Sandler.png" alt="Adam Sandler">
      <span>Adam Sandler</span>
        <img src="imagens/Jennifer Aniston.png" alt="Jennifer Aniston">
      <span>Jennifer Aniston</span>
        <img src="imagens/Nicole Kidman.png" alt="Nicole Kidman">
      <span>Nicole Kidman</span>
        <img src="imagens/Nick Swardson.png" alt="Nick Swardson">
      <span>Nick Swardson</span>
  </div>
  <div class="texto1">
    <p>Danny Maccabee (Adam Sandler) queria um relacionamento sério, mas foi infeliz em sua tentativa de casamento. Para driblar a carência, passa a vivenciar somente namoricos e transas sem o menor compromisso. Assim, ele toca sua vida como cirurgião plástico bem sucedido, tendo sua melhor amiga Katherine (Jennifer Aniston), mãe solteira de um casal de pirralhos, como fiel escudeira. Mas um dia ele conhece a jovem Palmer (Brooklyn Decker) e a paixão toma conta de ambos. Disposto a se casar com ela, Danny pisa na bola quando, para conquistá-la, inventa que é marido da amiga, pai das crianças e que vai se separar. Começa então uma verdadeira aventura amorosa recheada de confusões de todos os tipos.</p>
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
