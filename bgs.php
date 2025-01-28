<?php
session_start();


if (isset($_SESSION['nome'])) {
    $nome_usuario = $_SESSION['nome'];
    echo "<p class=ola>Olá, $nome_usuario!</p>";
  echo '"Usuario"></button>';
  echo '<a href="logout.php">"Logout">Logout</button></a>';

} else {

    echo '<a href="login.php">"Login">Login</button></a>';
    echo '/<a href="cadastro.php">"Cadastro">Cadastre-se</button></a>';
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BRasil Game Show 2023</title>
  <link href="bgs.css" rel="stylesheet" type="text/css" />
  <link rel="icon" href="imagens/favicon.ico" type="image/x-icon">
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
  <section>
    <h1>BGS 2023: tudo que você precisa saber sobre atrações, horários e ingressos</h1>
    <br>
    <p class="texto">Brasil Game Show (BGS) 2023 será realizada em São Paulo, no Expo Center Norte,
      de 11 a 15 de outubro, das 13h às 21h. Este evento é um marco na cidade paulista, trazendo diversas atrações
      para os entusiastas de games, incluindo a presença de influenciadores digitais, streamers e astros dos
      esportes eletrônicos. Além disso, haverá estandes de grandes empresas como <b>Nintendo</b>, <b>Ubisoft</b> e
      <b>Samsung</b>, bem como demonstrações exclusivas de jogos que ainda serão lançados. A seguir, confira
      os detalhes sobre as atrações, horários e como adquirir ingressos para a BGS 2023.
    </p>
  </section>
  <br><br>
  <br><br>
  <br><br>
  <img class="bgs" src="imagens/bgs.png" alt="bgs">
  <br><br>
  <br><br>
  <br><br>
  <section>
    <h2>O que Fazer na BGS 2023?</h2>
    <br>
    <p class="texto2">A BGS 2023 promete uma variedade de atividades e atrações interessantes. A BGS Cosplay,
      por exemplo, incluirá um concurso para todos os cosplayers presentes no evento. O BGS Talks oferecerá
      palestras nos estandes dos participantes e painéis com influenciadores e convidados, tanto nacionais
      quanto internacionais. A feira também contará com partidas de esports transmitidas ao vivo, que poderão
      ser acompanhadas online. O torneio Monster Energy BGS Esports terá a participação de equipes como FURIA,
      MIBR, B4 Demons, Divina, entre outras, assim como na edição de 2022.</p>
    <br><br>
    <p class="texto2">A Brasil Game Show 2023 também trará diversas atrações internacionais, incluindo
      personalida desrenomadas como Takashi Iizuka (diretor da série Sonic), Jun Senoue (compositor da série
      Sonic),Naoki Yoshida (produtor de Final Fantasy 16), Koji Fox (diretor de localização de Final Fantasy
      16), Alexey Pajitnov (criador de Tetris), Kenny James (voz de Bowser), Shota Nakama (compositor de trilhas
      de videogames), Nolan Bushnell (criador do Atari), Ned Luke (ator de GTA 5) e Shawn Fonteno (ator de GTA
      5). Algumas dessas figuras, junto com influenciadores,participarão de sessões de Meet & Greet, onde terão
      a oportunidade de conhecer os fãs e tirar fotos.</p>
  </section>
  <br><br>
  <br><br>
  <br><br>
  <img class="bgs2" src="imagens/bgs2.jpg" alt="bgs">
  <br><br>
  <br><br>
  <br><br>
  <section>
    <h2>Marcas confirmadas na BGS 2023:</h2>
    <br>
    <ul class="lista">
      <li>Pichau</li>
      <li>Norton</li>
      <li>Intel</li>
      <li>RedDragon</li>
      <li>Samsung</li>
      <li>Pcyes</li>
      <li>ELG</li>
      <li>Sbt Games</li>
      <li>HyperX</li>
      <li>Taiwan Excellence</li>
      <li>Cup Noodles</li>
      <li>Rank 1</li>
      <li>Hoyoverse</li>
      <li>AMD</li>
      <li>Ubisoft</li>
      <li>Warner</li>
      <li>Dxracer</li>
      <li>Sega</li>
      <li>Atlus</li>
      <li>Smile One</li>
      <li>Bauducco</li>
      <li>Agon by AOC</li>
      <li>Nintendo</li>
      <li>Force One</li>
      <li>Kings Simuladores</li>
      <li>Logitech</li>
      <li>Evoverse</li>
      <li>Banco do Brasil</li>
    </ul>
  </section>
  <br><br>
  <br><br>
  <br><br>
  <section>
    <h1>Ingressos</h1>
    <br>
    <p class="texto2">Os ingressos estão disponíveis somente no site oficial da BGS 2023. Para comprar, basta
      acessar o endereço "https://www.brasilgameshow.com.br/ingressos/" (sem aspas), escolher o ingresso mais
      adequado e preencher seus dados para realizar a compra. Confira as entradas que ainda estão disponíveis e
      seus valores:</p>
  </section>
  <br><br>
  <section>
    <h2>Brasil Game Show 2023 - Ingressos disponíveis</h2>
    <br>
    <table>
      <thead>
        <tr>
          <th>Ingresso</th>
          <th>Dias</th>
          <th>Preço</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Individual</td>
          <td>14 e 15</td>
          <td>R$ 209(Meia-entrada)</td>
        </tr>
        <tr>
          <td>Ingresso passaporte</td>
          <td>12 e 15</td>
          <td>R$ 537(Meia-entrada)</td>
        </tr>
        <tr>
          <td>Ingresso passaporte premium</td>
          <td>11 e 15</td>
          <td>R$ 919 (Meia-Entrada)</td>
        </tr>
        <tr>
          <td>Ingresso passaporte business</td>
          <td>11 e 15</td>
          <td>R$ 919 (Meia-entrada, com acesso para a área de negócios)</td>
        </tr>
        <tr>
          <td>Ingresso camarote</td>
          <td>opcional</td>
          <td>R$ 659 (Meia-entrada, com acesso antecipado de um hora)</td>
        </tr>
        <tr>
          <td>Ingresso passaporte camarote</td>
          <td>Todos os dias</td>
          <td>R$ 2639 (acesso antecipado de 1 hora e kit exclusivo do evento)</td>
        </tr>
      </tbody>
    </table>
  </section>
  <br><br>
  <br><br>
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
        <a id="facebook" href="https://www.facebook.com/people/GeekNine/61557039160232/" target="_blank">Facebook</a>
        <a id="instagram" href="https://www.instagram.com/geek_nine/?igsh=MXBqemduaHFybDFuZg%3D%3D" target="_blank">Instagram</a>
        <a id="twitter" href="https://twitter.com/GeekNine9" target="_blank">Twitter</a>
      </div>
    </div>
    <div class="logo">
      <p>GeekNine © 2024 Todos os Direitos Reservados</p>
    </div>
  </footer>
</body>

</html>