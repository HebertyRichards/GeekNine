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
  <title>O Pequenino</title>
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
    <img src="imagens/OPequenino.png" alt="Pequenino">
    <h1>O Pequenino</h1>
  </div>
    <div class = "rating"> 
    <p> 2006 </p>
    <p> 1h, 38m </p>
      <a href="https://www.imdb.com/title/tt0430304/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_o%2520pequenino">4.5/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Marlon Wayans.png" alt="Marlon Wayans">
      <span>Marlon Wayans</span>    
        <img src="imagens/Shawn Wayans.png" alt="Shawn Wayans">
      <span>Shawn Wayans</span>
        <img src="imagens/Kerry Washington.png" alt="Kerry Washington">
      <span>Kerry Washington</span>
        <img src="imagens/John Witherspoon.png" alt="John Witherspoon">
      <span>John Witherspoon</span>
  </div>
  <div class="texto1">
    <p>Calvin Sims (Marlon Wayans) é um perigoso ladrão de jóias que não tem nem um metro de altura. Recém-saído da prisão, elen decide realizar um último grande roubo antes de se aposentar. O alvo escolhido é o famoso diamante Queen, pelo qual Calvin e seu parceiro Percy (Tracy Morgan) receberão US$ 100 mil. O assalto dá errado e Calvin esconde o diamante na bolsa de Vanessa Edwards (Kerry Washington), que o leva para casa sem notar a bagagem extra. Calvin e Percy a seguem e presenciam uma discussão que Vanessa tem com seu marido, Darryl (Shawn Wayans). Ele deseja ser pai o quanto antes, mas Vanessa acha que ter um filho pode atrapalhar sua carreira de vice-presidente de uma agência de propaganda. Aproveitando a deixa, Calvin e Percy elaboram um plano: fazendo-se passar por bebê, Calvin seria deixado na porta da casa dos Edwards. Eles, encantados, o levariam para dentro de casa, onde o ladrão poderia roubar o diamante. O plano dá certo, mas Calvin não contava que sua nova vida de bebê seria bem mais complicada do que imaginava.</p>
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
