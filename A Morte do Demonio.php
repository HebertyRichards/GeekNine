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
  <title>A Morte do Demônio: A Ascensão</title>
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
    <img src="imagens/Demonio.png" alt="A Morte do Demonio">
    <h1>A Morte do Demônio: A Ascensão</h1>
  </div>
  <div class="rating">
    <p>2023</p>
    <p>1h, 36m</p>
      <a href="https://www.imdb.com/title/tt13345606/?ref_=fn_al_tt_1">6.5/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Lily Sullivan.png" width="25" height="50" alt="Lily Sullivan">
      <span>Lily Sullivan</span>
        <img src="imagens/Alyssa Sutherland.png" width="25" height="50" alt="Alyssa Sutherland">
      <span>Alyssa Sutherland</span>
        <img src="imagens/Morgana Davies.png" width="25" height="50" alt="Morgana Davies">
      <span>Morgana Davies</span>
        <img src="imagens/Nell Fisher.png" alt="Nell Fisher">
      <span>Nell Fisher</span>
  </div>
  <div class="texto1">
    <p>A Morte do Demônio: A Ascensão é um filme de terror slasher que faz parte da clássica franquia A Morte do Demônio, que teve o primeiro título lançado em 1981. No filme, Beth (Lily Sullivan) vai até Los Angeles para visitar sua irmã mais velha, Ellie (Alyssa Sutherland), que mora com os três filhos em um pequeno apartamento. Com uma relação distante, essa seria a oportunidade para uma reaproximação entre as irmãs. Porém, o reencontro toma um rumo macabro quando elas encontram um livro antigo que dá vida a demônios possuidores de carne. Agora, para sobreviverem, serão forçadas a enfrentar uma versão aterrorizante da família.</p>
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
