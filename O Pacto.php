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
  <title>O Pacto</title>
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
    <img src="imagens/Pacto.png" alt="O Pacto">
    <h1>O Pacto</h1>
  </div>
    <div class = "rating"> 
    <p> 2023 </pv>
    <p> 2h, 3m </p>
      <a href="https://www.imdb.com/title/tt4873118/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_o%2520pacto">7.5/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Jake Gyllenhaal.png" alt="Jake Gyllenhaal">
      <span>Jake Gyllenhaal</span>
        <img src="imagens/Dar Salim.png" alt="Dar Salim">
      <span> Salim</span>
        <img src="imagens/Antony Starr.png" alt="Antony Starr">
      <span>Antony Starr</span>
        <img src="imagens/Alexander Ludwig.png" alt="Alexander Ludwig">
      <span>Alexander Ludwig</span>
    </a>
  </div>
  <div class="texto1">
    <p>Em O Pacto, durante a Guerra do Afeganistão, o Sargento John Kinley (Jake Gylenhaal) recruta o intérprete local Ahmed (Dar Salim) para acompanhar a equipe na missão de neutralizar o maior número possível de instalações do Talibã. Porém, no confronto, Kinley acaba sendo atingido e é gravemente ferido. Para salvar o sargento, Ahmed não pensa duas vezes antes de colocar a própria vida em risco e carregar Kinley através de cenários perigosos para escapar dos inimigos. Porém, Kinley volta para casa e descobre que, no Afeganistão, Ahmed está sendo perseguido pelo Talibã. Com as autoridades se negando a enviar ajuda, John decide retornar para o campo de batalha por conta própria para ajudar o homem.</p>
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
