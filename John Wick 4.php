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
          <title>John Wick 4: Baba Yaga</title>
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
    <img src="imagens/John Wick 4.png" alt="John Wick 4">
    <div class="title">
    <h1>John Wick 4: Baba Yaga</h1>
  <div class="mdb">
    <p> 2023 </p>
    <p> 2h, 49m </p>
      <a href="https://www.imdb.com/title/tt10366206/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_john%2520wick%25204">7.7/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Keanu Reeves.png" alt="Keanu Reeves">
      <span>Keanu Reeves</span>    
        <img src="imagens/Donnie Yen.png" alt="Donnie Yen">
      <span>Donnie Yen</span>
        <img src="imagens/Bill Skarsgård.png" alt="Bill Skarsgård">
      <span>Bill Skarsgård</span>
        <img src="imagens/Ian McShane.png" alt="Ian McShane">
      <span>Ian McShane</span>
  </div>
  <div class="texto1">
    <p>O assassino profissional retorna às telas para John Wick 4: Baba Yaga. O assassino profissional John Wick (Keanu Reeves) agora virou metade do submundo contra ele com sua vingança, que agora está entrando em sua quarta rodada em Nova York, Berlim, Paris e Osaka. Sua equipe, composta por Bowery King (Laurence Fishburne), o gerente do hotel Winston (Ian McShane) e o concierge Charon (Lance Reddick) do lendário hotel assassino Continental, novamente fazem parte da festa. No entanto, as chances de escapar desta vez parecem quase impossíveis, pois o maior inimigo está surgindo. O implacável chefe do submundo Marquis de Gramont (Bill Skarsgård), que tem alianças inteiras atrás dele, representa a maior e sanguinária ameaça até hoje. Mas seus capangas também são durões, incluindo Shimazu (Hiroyuki Sanada) e Killa (Scott Adkins) localizados. Felizmente, existem velhos aliados como Caine (Donnie Yen) que correm para ajudar Wick. Não há caminho de volta, só um sobrevive.</p>
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
