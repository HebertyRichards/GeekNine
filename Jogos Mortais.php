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
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jogos Mortais 10</title>
   <link href="games1.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/png" href="imagens/file.png">
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
  <div class="container-a">
  <div class="div1">
    <img src="imagens/Jogos Mortais X.png" alt="Jogos Mortais 10">
    <h1>Jogos Mortais 10</h1>
  </div>
    <div class = "rating"> 
    <p> 2023 </p>
    <p> 1h, 58m </p>
      <a href="https://www.imdb.com/title/tt21807222/?ref_=fn_al_tt_2">6.6/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Tobin Bell.png" width="25" height="50" alt="Tobin Bell" loading="lazy" decoding="async">
      <span>Tobin Bell</span>
        <img src="imagens/Shawnee Smith.png" width="25" height="50" alt="Shawnee Smith" loading="lazy" decoding="async">
      <span>Shawnee Smith</span>
        <img src="imagens/Synnøve Macody Lund.png" width="25" height="50" alt="Synnøve Macody Lund" loading="lazy" decoding="async">
      <span>Synnøve Macody Lund</span>
        <img src="imagens/Renata Vaca.png" width="25" height="50" alt="Renata Vaca" loading="lazy" decoding="async">
      <span>Renata Vaca</span>
  </div>
  <div class="texto1">
    <p>Jogos Mortais X é o décimo capítulo da famosa franquia de terror com gore e tortura Jogos Mortais, iniciada em 2004 sob direção de James Wan (Invocação do Mal, Velozes & Furiosos 7). Nesta nova sequência, John Kramer (Tobin Bell), o impiedoso assassino Jigsaw - criador dos sádicos jogos de sobrevivência - está muito doente e em busca de uma cura milagrosa. Ele decide, então, viajar para o México após ouvir falar de um inovador procedimento médico que, além de experimental, também é muito arriscado. Disposto a tentar a sorte, Kramer parte rumo à cura. Porém, ao chegar a seu destino, se depara com um ambiente macabro, e descobre que toda a operação é uma farsa para enganar pessoas vulneráveis. Agora armado com um novo propósito, o infame serial killer usará armadilhas insanas e engenhosas para virar o jogo contra os vigaristas, relembrando o motivo de ser conhecido como o terrível vilão Jigsaw.</p>
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
