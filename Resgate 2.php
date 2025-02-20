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
  <title>Resgate 2</title>
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
    <img src="imagens/Resgate 2.png" alt="Resgate 2">
    <div class="title">
    <h1>Resgate 2</h1>
    <div class = "mdb"> 
    <p> 2023 </p>
    <p> 2h, 2m </p>
      <a href="https://www.imdb.com/title/tt12263384/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_resgate%25202">7.0/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Chris Hemsworth.png" alt="Chris Hemsworth">
      <span>Chris Hemsworth</span>    
        <img src="imagens/Golshifteh Farahani.png" alt="Golshifteh Farahani">
      <span>Golshifteh Farahani</span>
        <img src="imagens/Adam Bessa.png" alt="Adam Bessa">
      <span>Adam Bessa</span>
        <img src="imagens/Justin Howell.png" alt="Justin Howell">
      <span>Justin Howell</span>
  </div>
  <div class="texto1">
    <p>Em Resgate 2, acompanhamos o retorno do mercenário australiano Tyler Rake (Chris Hemsworth), que sobreviveu por um triz aos eventos do primeiro filme, onde precisou viajar até Bangladesh, na índia, em uma difícil missão para salvar o filho de um poderoso chefão do narcotráfico. Agora, Rake deve encarar um desafio ainda mais perigoso e insano do que o anterior: resgatar a família de Zurab (Tornike Gogrichiani), um gângster impiedoso da Geórgia, e libertar a todos de uma prisão de segurança máxima na qual que estão sendo mantidos, contando com a ajuda dos irmãos mercenários Nik Khan (Golshifteh Farahani) e Yaz Khan (Adam Bessa). Além de acompanhar a mais nova missão de Tyler, a trama também mostra como o homem, que um dia já foi um honrado herói militar, se transformou em um mercenário do crime organizado. Com Idris Elba, Tornike Gogrichiani, Tinatin Dalakishvili, Daniel Bernhardt, Tako Tabatadze e Olga Kurylenko</p>
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
