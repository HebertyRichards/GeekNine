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
  <title>Superbad: É Hoje</title>
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
    <img src="imagens/Superbad.png" alt="Superbad">
    <h1>Superbad: É Hoje</h1>
  </div>
    <div class = "rating"> 
    <p> 2007 </p>
    <p> 1h, 53m </p>
      <a href="https://www.imdb.com/title/tt0829482/?ref_=nv_sr_srsg_0_tt_6_nm_2_q_superbad">7.6/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Jonah Hill.png" alt="Jonah Hill">
      <span>Jonah Hill</span>
        <img src="imagens/Michael Cera.png" alt="Michael Cera">
      <span>Michael Cera</span>
        <img src="imagens/Christopher Mintz-Plasse.png" alt="Christopher Mintz-Plasse">
      <span>Christopher Mintz-Plasse</span>
        <img src="imagens/Bill Hader.png" alt="Bill Hader">
      <span>Bill Hader</span>
  </div>
  <div class="texto1">
    <p>Evan (Michael Cera) e Seth (Jonah Hill) são amigos inseparáveis, que estão terminando o colegial. Eles vão para faculdades diferentes e, desta forma, são obrigados a se separar. Evan é amável, esperto e normalmente aterrorizado com o que acontece à sua volta, enquanto que Seth é desbocado, frívolo e obcecado pela sexualidade. Cada um de sua forma, eles precisarão superar suas frustrações com as mulheres no fim desta fase de suas vidas.</p>
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
