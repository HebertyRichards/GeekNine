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
  <title>Emancipation</title>
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
    <img src="imagens/Emancipation.png" alt="Emancipation">
    <div class="title">
    <h1>Emancipation</h1>
    <div class = "mdb"> 
    <p>2022</p>
    <p>2h, 12m</p>
      <a href="https://www.imdb.com/title/tt12530246/?ref_=nv_sr_srsg_1_tt_2_nm_6_q_eman">6.2/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Will Smith.png" alt="Will Smith">
      <span>Will Smith</span>
        <img src="imagens/Ben Foster.png" alt="Ben Foster">
      <span>Ben Foster</span>
    <img src="imagens/Charmaine Bingwa.png" alt="Charmaine Bingwa">
      <span>Charmaine Bingwa</span>
        <img src="imagens/Steven Ogg.png" alt="Steven Ogg">
      <span>Steven Ogg</span>
  </div>
  <div class="texto1">
    <p>Emancipation – Uma História de Liberdade conta a triunfante história de um homem escravizado que foge e atravessa os pântanos da Louisiana, nos Estados Unidos, em uma jornada tortuosa para escapar dos proprietários de plantações que quase o mataram. Peter (Will Smith) é o homem em busca da sua liberdade, que escapa da escravidão confiando em sua inteligência, fé inabalável e profundo amor por sua família, fazendo o impossível para se livrar dos caçadores de sangue frio nos implacáveis pântanos da Louisiana. O filme é inspirado nas fotos reais, de 1863, de “Peter chicoteado" (Whipped Peter), tiradas durante um exame médico do Exército dos EUA, que apareceram, pela primeira vez, na revista Harper’s Weekly. Uma destas fotos, conhecida como “As Costas Açoitadas” (The Scourged Back), mostra as costas nuas de Peter mutiladas pelas chicotadas de seus escravizadores e acabou contribuindo para a crescente oposição pública à escravidão, se tornando um símbolo das atrocidades cometidas em seu tempo.</p>
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
