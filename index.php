<?php
$db = new SQlite3('messages.sqlite');
$query = "CREATE TABLE IF NOT EXISTS messages (
id INTEGER PRIMARY KEY AUTOINCREMENT,
 username TEXT,
 message TEXT, 
timestamp TEXT)";
$db->exec($query);
?>
<?php
$db = new SQLite3('usuarios.sqlite');

$query = "CREATE TABLE IF NOT EXISTS usuarios (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nome TEXT,
    email TEXT UNIQUE,
    senha TEXT
)";
$db->exec($query);
?>
<?php
session_start();

if (isset($_SESSION['nome'])) {
    $nome_usuario = $_SESSION['nome'];
    echo "<p class=ola>Olá, $nome_usuario!</p>";
  echo '<a href="chat.php"><button title="Usuario"></button>';
  echo '<a href="logout.php"><button title="Logout">Logout</button></a>';
    
} else {
    
    echo '<a href="login.php"><button title="Login">Login</button></a>';
    echo '/<a href="cadastro.php"><button title="Cadastro">Cadastre-se</button></a>';
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GeekNine</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
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
  <br><br><br><br>
  <div class="novi">
    <h1>NOVIDADES</h1>
  </div>
  <div class="novi-container">
  <div class="games-events">
    <p>GAMES</p>
    <a href="games.php">
      <img src="imagens/games1.png" alt="games" title="Games"></a>
  </div>
    <div class="tec-events">
      <p>TECNOLOGIA</p>
    <a href="tecnologia.php">
      <img src="imagens/tecnologia1.png" alt="tecnologia" title="Tecnologia"></a>
    </div>
      <div class="filmes-events">
        <p>FILMES</p>
    <a href="filmes.php">
      <img src="imagens/filmes1.png" alt="músicas" title="Músicas"></a>
      </div>
    <div class="eventos-events">
      <p>EVENTOS</p>
    <a href="eventos.php">
      <img src="imagens/eventos1.png" alt="eventos" title="Eventos"></a>
    </div>
  </div>
  <br></br>
  <br></br>
  <br></br>
  <div class="geeksobre">
    <br></br>
    <h1>GEEKNINE</h1>
    <br></br><br>
    <p>Com informações atualizadas diariamente,</p>
    <p>o GeekNine é uma das melhores fontes </p>
    <p>para conferir seus filmes, games, notícias</p>
    <p>do mundo da tecnologia e eventos Geek!</p>
    <br></br><br></br>
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