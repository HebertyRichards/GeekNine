<?php
session_start();


if (isset($_SESSION['nome'])) {
    $nome_usuario = $_SESSION['nome'];
    echo "<p class=ola>Olá, $nome_usuario!</p>";
  echo '<button title="Usuario"></button>';
  echo '<a href="logout.php"><button title="Logout">Logout</button></a>';

} else {

    echo '<a href="login.php"><button title="Login">Login</button></a>';
    echo '/<a href="cadastro.php"><button title="Cadastro">Cadastre-se</button></a>';
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BRasil Game Show 2023</title>
  <link href="bgs.css" rel="stylesheet" type="text/css" />
  <link rel="website icon" type="png" href="imagens/file.png">
</head>

<body>
  <header>
    <img src="imagens/GeekTopo2.png" class="img-fluid">
  </header>

  <div class="menu-container">
    <a href="index.php"><button title="Início">Início</button></a>
    <a href="sobre.php"><button title="Sobre">Sobre</button></a>
    <a href="games.php"><button title="Games">Games</button></a>
    <a href="tecnologia.php"><button title="Tecnologia">Tecnologia</button></a>
    <a href="filmes.php"><button title="Filmes">Filmes</button></a>
    <a href="eventos.php"><button title="Eventos">Eventos</button></a>
  </div>
  <br><br><br><br>
  <nav>
    <section><h1>
      BGS 2023: tudo que você precisa<br> saber sobre atrações, horários e <br>ingressos
    </h1>
     <p class="texto">Brasil Game Show (BGS) 2023 será realizada em São Paulo, no Expo Center Norte,<br> 
      de 11 a 15 de outubro, das 13h às 21h. Este evento é um marco na cidade paulista,<br> trazendo diversas atrações para os entusiastas de games, incluindo a presença<br> de influenciadores digitais, streamers e astros dos esportes eletrônicos. Além disso,<br> haverá estandes de grandes empresas como <b>Nintendo</b>, <b>Ubisoft</b> e <b>Samsung</b>, bem<br> como demonstrações exclusivas de jogos que ainda serão lançados. <br>A seguir, confira os detalhes sobre as atrações, horários e como adquirir ingressos para a BGS 2023.</p></section>
  <br></br>
  <br></br>
  <br></br>
  <br></br>
    <img class="bgs" src="imagens/bgs.png" class="img-fluid">
    <br></br>
    <br></br>
    <br></br>
  <section>
    <h1>O que Fazer na BGS 2023?</h1>

    <p class="texto2">A BGS 2023 promete uma variedade de atividades e atrações interessantes. A BGS Cosplay,<br> por exemplo, incluirá um concurso para todos os cosplayers presentes no evento. O BGS Talks oferecerá palestras<br> nos estandes dos participantes e painéis com influenciadores e convidados, tanto nacionais quanto<br> internacionais. A feira também contará com partidas de esports transmitidas ao vivo, que poderão ser acompanhadas<br> online. O torneio Monster Energy BGS Esports terá a participação de equipes como FURIA, MIBR, B4 Demons, Divina, <br>entre outras, assim como na edição de 2022.</p>
    <br></br>
    <p class="texto2">A Brasil Game Show 2023 também trará diversas atrações internacionais, incluindo personalidades<br> renomadas como Takashi Iizuka (diretor da série Sonic), Jun Senoue (compositor da série Sonic),<br> Naoki Yoshida (produtor de Final Fantasy 16), Koji Fox (diretor de localização de Final Fantasy 16), Alexey Pajitnov (criador de Tetris), <br>Kenny James (voz de Bowser), Shota Nakama (compositor de trilhas de videogames), Nolan Bushnell (criador do Atari), <br>Ned Luke (ator de GTA 5) e Shawn Fonteno (ator de GTA 5). Algumas dessas figuras, junto com influenciadores,<br> participarão de sessões de Meet & Greet, onde terão a oportunidade de conhecer os fãs e tirar fotos.</p>
  </section>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
      <img class="bgs2" src="imagens/bgs2.jpg">
      <br></br>
      <br></br>
      <br></br>
    <section>
      <h1>Marcas confirmadas na BGS 2023:</h1>
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
  <br></br>
  <br></br>
  <br></br>
    <section>
      <h1>Ingressos</h1>
      <br>
      <p class="texto2">Os ingressos estão disponíveis somente no site oficial da BGS 2023. Para comprar,<br> basta acessar o endereço "https://www.brasilgameshow.com.br/ingressos/" (sem aspas),<br> escolher o ingresso mais adequado e preencher seus dados para realizar a compra.<br> Confira as entradas que ainda estão disponíveis e seus valores:</p>
    </section>
<br><br>
    <section><h1>Brasil Game Show 2023 - Ingressos disponíveis</h1>
      <img class="bgs3" src="imagens/tabela.png">
    </section>
  <br></br>
  <br></br>
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