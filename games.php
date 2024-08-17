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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Games</title>
  <link href="games.css" rel="stylesheet" type="text/css" />
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
   <div class="container-a" align="center">
    <h1>Games</h1>
    <h2>Mundo Game</h2><br>
    <p>O Mundo Game na GEEKNINE é um local onde você encontra uma grende variedade de comundades</p>
      <p>interagindo 
       sobre todos tipos de jogos. Um mundo aberto, com uma abordagem diversificada para você interagir e se 
       divertir. </p>
        <p>Embarque nessa aventura conosco!</p><br><br>
     <h3>Tendências</h3><br>
     <p>Os mais queridos do momento!</p>  
      <a href="games.php"></a>
     <a href="gta6.php"><img src="imagens/gta6.webp" alt="GTA 6.jpg" height="160px" width="230px"></a>
     <a href="reddead2.php"><img src="imagens/reddead2.png" alt="reddead2" height="160px" width="230px"></a>
     <a href="csgo.php"><img src="imagens/csgo.jpg" alt="CSGO" height="160px" width="230px"></a>
     <a href="cyberpunk2077.php"><img src="imagens/cyberpunk2077.png" alt="cyberpunk2077.png" height="160px" width="230px"></a>
     <a href="fc24.php"><img src="imagens/fifa24.jpeg" alt="FIFA24.jpg" height="160px" width="230px"></a><br><br>

     <h4>Vintage</h4><br>
     <p>Relembre os favoritos da galera!</p><br><br>
     <a href="ComunidadeGame.php"><img src="imagens/mario.jpg" alt="Mário.jpg" height="160px" width="230px"></a>
     <a href="ComunidadeGame.php"><img src="imagens/alexkidd.jpg" alt="Alex Kidd.jpg" height="160px" width="230px"></a>
     <a href="ComunidadeGame.php"><img src="imagens/sonic.jpg" alt="Sonic.jpg" height="160px" width="230px"></a>
     <a href="ComunidadeGame.php"><img src="imagens/streetfighter.jpg" alt="Street Fighter.jpg" height="160px" width="230px"> 
     <a href="ComunidadeGame.php"><img src="imagens/pacmam.jpg" alt="Pacmam.jpg" height="160px" width="230px"></a>
     </a><br><br>
     <p>Não fique de fora dessa, compartilhe conosco o que você gostaria de ver 
      aqui em nossa comunidade!</p><br><br>
     </div>
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