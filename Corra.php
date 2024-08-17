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
  <title>Corra</title>
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
    <img src="imagens/Corra.png" alt="Corra">
    <h1>Corra</h1>
  </div>
      <div class = "rating"> 
      <p>2017</p>
      <p>1h, 44m</p>
        <a href="https://www.imdb.com/title/tt5052448/?ref_=nv_sr_srsg_0_tt_5_nm_3_q_corra">7.8/10</a> 
        </div>
  <div class="elenco">
        <img src="imagens/Daniel Kaluuya.png" alt="Daniel Kaluuya">
      <span>Daniel Kaluuya</span>
        <img src="imagens/Allison Williams.png" alt="Allison Williams">
      <span>Allison Williams</span>
        <img src="imagens/Catherine Keener.png" alt="Catherine Keener">
      <span>Catherine Keener</span>
        <img src="imagens/Bradley Whitford.png" alt="Bradley Whitford">
      <span>Bradley Whitford</span>
  </div>
  <div class="texto1">
    <p>Chris (Daniel Kaluuya) é jovem negro que está prestes a conhecer a família de sua namorada branca Rose (Allison Williams). A princípio, ele acredita que o comportamento excessivamente amoroso por parte da família dela é uma tentativa de lidar com o relacionamento de Rose com um rapaz negro, mas, com o tempo, Chris percebe que a família esconde algo muito mais perturbador - e o jeito é tentar escapar.</p>
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
