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
  <title>It: A Coisa</title>
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
    <img src="imagens/ItACoisa.png" alt="It A Coisa">
    <h1>It: A Coisa</h1>
  </div>
    <div class = "rating"> 
    <p> 2017 </p>
    <p> 2h, 15m </p>
      <a href="https://www.imdb.com/title/tt1396484/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_it%2520a%2520coisa">7.3/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Jaeden Martell.png" width="25" height="50" alt="Jaeden Martell" loading="lazy" decoding="async">
      <span>Jaeden Martell</span>
        <img src="imagens/Sophia Lillis.png" width="25" height="50" alt="Sophia Lillis" loading="lazy" decoding="async">
      <span>Sophia Lillis</span>
        <img src="imagens/Finn Wolfhard.png" width="25" height="50" alt="Finn Wolfhard" loading="lazy" decoding="async">
      <span>Finn Wolfhard</span>
        <img src="imagens/Jack Dylan Grazer.png" width="25" height="50" alt="Jack Dylan Grazer" loading="lazy" decoding="async">
      <span>Jack Dylan Grazer</span>
  </div>
  <div class="texto1">
    <p>Em It - A Coisa, um grupo de sete adolescentes de Derry, uma cidade no Maine, formam o auto-intitulado "Losers Club" - o clube dos perdedores. A pacata rotina da cidade é abalada quando crianças começam a desaparecer e tudo o que pode ser encontrado delas são partes de seus corpos. Logo, os integrantes do "Losers Club" acabam ficando face a face com o responsável pelos crimes: o palhaço Pennywise.</p>
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
