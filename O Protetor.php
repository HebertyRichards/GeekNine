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
  <title>O Protetor: Capitulo Final</title>
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
    <img src="imagens/O Protetor.png" alt="Protetor">
    <div class="title">
    <h1>O Protetor: Capitulo Final</h1>
      <div class = "mdb"> 
      <p> 2023 </p>
      <p> 1h, 49m </p>
        <a href="https://www.imdb.com/title/tt17024450/?ref_=nv_sr_srsg_6_tt_8_nm_0_q_o%2520protetor">6.8/10</a> 
        </div>
  <div class="elenco">
        <img src="imagens/Denzel Washington.png" alt="Denzel Washington">
      <span>Denzel Washington</span>    
        <img src="imagens/Dakota Fanning.png" alt="Dakota Fanning">
      <span>Dakota Fanning</span>
        <img src="imagens/Eugenio Mastrandrea.png" alt="Eugenio Mastrandrea">
      <span>Eugenio Mastrandrea</span>
        <img src="imagens/David Denman.png" alt="David Denman">
      <span>David Denman</span>
  </div>
  <div class="texto1">
    <p>O Protetor: Capítulo Final é o terceiro - e último - filme da franquia O Protetor, iniciada em 2014 e inspirada pela série homônima estrelada por Edward Woodward nos anos 80. No terceiro capítulo da saga, desde que desistiu de sua vida como assassino do governo, Robert McCall (Denzel Washington) não consegue descansar o suficiente. Ele quer ajudar as pessoas ao seu redor e tem lutado para reconciliar as coisas horríveis que fez no passado, encontrando um estranho consolo em servir à justiça em nome dos oprimidos. Agora morando no sul da Itália, ele logo descobre que seus novos amigos estão sob o controle dos chefes do crime local. À medida que os eventos se tornam mortais, McCall se torna um protetor ao enfrentar a máfia. Quando alguém é injustiçado, o ex-agente do governo reativa suas habilidades de seu passado brutal e sai como um exército de um homem para realizar a justiça vigilante.</p>
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
