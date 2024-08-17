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
  <title>Dr. Dolittle</title>
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
    <img src="imagens/Dr.png" alt="Dr. Dolittle">
    <h1>Dr. Dolittle</h1>
  </div>
    <div class = "rating"> 
    <p>1998</p>
    <p>1h, 25m</p>
      <a href="https://www.imdb.com/title/tt0118998/?ref_=fn_al_tt_1">5.4/10</a> 
      </div>
  <div class="elenco">
        <img src="imagens/Eddie Murphy.png" alt="Eddie Murphy">
      <span>Eddie Murphy</span>
        <img src="imagens/Ossie Davis.png" alt="Ossie Davis">
      <span>Ossie Davis</span>
        <img src="imagens/Oliver Platt.png" alt="Oliver Platt">
      <span>Oliver Platt</span>
        <img src="imagens/Peter Boyle.png" alt="Peter Boyle">
      <span>Peter Boyle</span>
  </div>
  <div class="texto1">
    <p>Médico (Eddie Murphy) respeitado tem um casamento feliz e duas filhas, mas uma noite ele quase atropela um cachorro e ouve o animal ofendê-lo. Deste momento em diante o dom de falar com os animais que tinha quando era criança retorna. Após curar a asa de uma coruja, a notícia se espalha rapidamente entre os animais e logo diversos "clientes" querem ser atendidos por ele. Em virtude disto a situação fica bastante complicada e ele é internado, pois suspeitam que está louco. Assim, precisa arrumar um meio de ter alta do sanatório e retomar seu ritmo normal de vida o mais rápido possível, mas diversos contratempos vão atrapalhar o médico.</p>
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
