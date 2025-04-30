<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pânico VI</title>
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
  <?php
  if (isset($_SESSION['nome'])) {
    $nome_usuario = $_SESSION['nome'];
    echo "<div class='menu2'>";
    echo "<p class='ola'>Olá, $nome_usuario!</p>";
    echo '<a id="chat" href="chat.php">Chat Global</a>';
    echo '<a id="logout" href="logout.php">Logout</a>';
    echo "</div>";
  } else {
    echo "<div class='menu'>";
    echo '<a id="login" href="login.php">Login</a>';
    echo '<a id="cadastro" href="cadastro.php">Cadastre-se</a>';
    echo "</div>";
  }
  ?>
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
      <?php
      if (isset($_SESSION['nome'])) {
        $nome_usuario = $_SESSION['nome'];
        echo "<p class='ola2'>Olá, $nome_usuario!</p>";
        echo '<a id="chat2" href="chat.php">Chat Global</a>';
        echo '<a id="logout2" href="logout.php">Logout</a>';
      } else {
        echo '<a id="login2" href="login.php">Login</a>';
        echo '<a id="cadastro2" href="cadastro.php">Cadastre-se</a>';
      }
      ?>
    </div>
  </div>
  <div class="container-a">
    <img src="imagens/PanicoVI.png" alt="Panico VI">
    <div class="div1">
      <h1 id="h1">Pânico VI</h1>
      <div class="mdb">
        <p> 2023 </p>
        <p> 2h, 2m </p>
        <a href="https://www.imdb.com/title/tt17663992/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_panico%2520vi">6.5/10</a>
      </div>
      <div class="elenco">
        <img src="imagens/Melissa Barrera.png" alt="Melissa Barrera">
        <span>Melissa Barrera</span>
        <img src="imagens/Jenna Ortega.png" alt="Jenna Ortega">
        <span>Jenna Ortega</span>
        <img src="imagens/Jasmin Savoy Brown.png" alt="Jasmin Savoy Brown">
        <span>Jasmin Savoy Brown</span>
        <img src="imagens/Mason Gooding.png" alt="Mason Gooding">
        <span>Mason Gooding</span>
      </div>
      <div class="texto1">
        <p>Sam (Melissa Barrera), Tara (Jenna Ortega), Mindy (Jasmin Savoy Brown) e Chad (Mason Gooding) estão fartos. Depois de sobreviver ao massacre final de Ghostface em Woodsboro, os quatro se mudam sem cerimônia para Nova York. Lá, os dois irmãos querem começar uma nova vida, por assim dizer, e deixar a pequena cidade e suas experiências traumáticas para trás. Mas o maldito assassino com uma máscara de fantasma e uma lâmina afiada não pode ser abalado tão facilmente, porque de repente ele também aparece na Big Apple. Na rua, no metrô, no supermercado – aparentemente em todos os lugares ele aproveita a agitação da cidade grande para desaparecer na multidão com a mesma rapidez com que apareceu antes. E embora Sam, Tara, Mindy e Chad já tenham conhecido o assassino, desta vez eles não podem confiar em sua experiência. Porque quem está por trás da máscara tem novos truques na manga.</p>
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