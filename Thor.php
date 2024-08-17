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
  <title>Thor: O Mundo Sombrio</title>
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
    <img src="imagens/Thor.png" alt="Thor">
    <h1>Thor: O Mundo Sombrio</h1>
  </div>
      <div class = "rating"> 
      <p> 2013 </p>
      <p> 1h, 52m </p>
        <a href="https://www.imdb.com/title/tt1981115/?ref_=nv_sr_srsg_0_tt_1_nm_0_q_thor%2520no%2520mundo%2520sombri">6.8/10</a> 
        </div>
  <div class="elenco">
        <img src="imagens/Chris Hemsworth.png" alt="Chris Hemsworth">
      <span>Chris Hemsworth</span>    
        <img src="imagens/Natalie Portman.png" alt="Natalie Portman">
      <span>Natalie Portman</span>
        <img src="imagens/Tom Hiddleston.png" alt="Tom Hiddleston">
      <span>Tom Hiddleston</span>
        <img src="imagens/Anthony Hopkins.png" alt="Anthony Hopkins">
      <span>Anthony Hopkins</span>
  </div>
  <div class="texto1">
    <p>Enquanto Thor (Chris Hemsworth) liderava as últimas batalhas para conquistar a paz entre os Nove Reinos, o maldito elfo negro Malekith (Christopher Eccleston) acordava de um longo sono, sedento de vingança e louco para levar todos para a escuridão eterna. Alertado do perigo por Odin (Anthony Hopkins), o herói precisa contar com a ajuda dos companheiros Volstagg (Ray Stevenson), Sif (Jaimie Alexander), entre outros, e até de seu irmão, o traiçoeiro Loki (Tom Hiddleston), em um plano audacioso para salvar o universo do grande mal. Mas os caminhos de Thor e da amada Jane Foster (Natalie Portman) se cruzam novamente e, dessa vez, a vida dela está realmente em perigo.</p>
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
